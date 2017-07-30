@extends('layouts.default')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">registered</div>
                    <div class="panel-body">
                        @if($connect_data)
                            <div class="alert alert-info">
                                {{  $connect_data['nickname'] }} 您好, 请先完成registered。如果你已经registered，请直接 <a href="/auth/login"
                                                                                           class="btn btn-success">登录</a>。系统会自动进行账号关联。
                            </div>
                        @endif
                        <form role="form" method="POST" action="/auth/register">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username"
                                       value="{{ Input::old('username') }}"
                                       placeholder="{{ trans('hifone.users.username') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" value="{{ Input::old('email') }}"
                                       placeholder="{{ trans('hifone.users.email') }}">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password"
                                       placeholder="{{ trans('hifone.users.password') }}">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password_confirmation"
                                       placeholder="{{ trans('hifone.users.password_confirmation') }}">
                            </div>
                            @include('partials.captcha')
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ trans('forms.register') }}
                                </button>
                                <a href="/" class="btn btn-default">{{ trans('forms.cancel') }}</a>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                        已registered或使用社交账号登录，请点击 <a href="/auth/login">这里</a> 进行登录。
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
