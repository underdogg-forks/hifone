<footer class="footer">
    <div class="container">
        <div class="copyright">
            <blockquote class="pull-left">
                <p>{!! Config::get('setting.site_about') !!}</p>
                <p>{!! trans('hifone.powered_by') !!} {{ HIFONE_VERSION }} <span class="pipe">|</span>Inspired by
                    ruby-china & phphub.</p>
            </blockquote>
        </div>
        <div class="pull-right hidden-sm hidden-xs">
            <p>footer text</p>
        </div>
    </div>
</footer>