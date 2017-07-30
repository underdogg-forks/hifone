<?php

/*
 * This file is part of Hifone.
 *
 * (c) Hifone.com <hifone@hifone.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hifone\Models;

use AltThree\Validator\ValidatingTrait;
use Hifone\Models\Scopes\ForUser;
use Hifone\Models\Scopes\Recent;
use Hifone\Presenters\NotificationPresenter;
use Illuminate\Database\Eloquent\Model;
use McCool\LaravelAutoPresenter\HasPresenter;

class Notification extends Model implements HasPresenter
{
    use ValidatingTrait, ForUser, Recent;

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = [
        'from_user_id',
        'user_id',
        'thread_id',
        'reply_id',
        'body',
        'type',
    ];


    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'author_id' => 'required|int',
        'user_id'   => 'required|int',
        'object_id' => 'required|int',
    ];


    /**
     * Notications can belong to a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function thread()
    {
        return $this->belongsTo(Thread::class, 'thread_id');
    }


    public function object()
    {
        return $this->morphTo();
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }


    public function fromUser()
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }


    public function scopeForAuthor($query, $author_id)
    {
        return $query->where('author_id', $author_id);
    }


    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    public function scopeFromWhom($query, $from_user_id)
    {
        return $query->where('from_user_id', '=', $from_user_id);
    }

    public function scopeToWhom($query, $user_id)
    {
        return $query->where('user_id', '=', $user_id);
    }

    public function scopeWithType($query, $type)
    {
        return $query->where('type', '=', $type);
    }

    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }


    public function scopeAtThread($query, $thread_id)
    {
        return $query->where('type', '<>', 'user_follow')->where('thread_id', $thread_id);
    }

    /**
     * Get the presenter class.
     *
     * @return string
     */
    public function getPresenterClass()
    {
        return NotificationPresenter::class;
    }
}
