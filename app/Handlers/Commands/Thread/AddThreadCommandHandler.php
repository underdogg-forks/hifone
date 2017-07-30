<?php

/*
 * This file is part of Hifone.
 *
 * (c) Hifone.com <hifone@hifone.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hifone\Handlers\Commands\Thread;

use Auth;
use Carbon\Carbon;
use Hifone\Commands\Thread\AddThreadCommand;
use Hifone\Events\Thread\ThreadWasAddedEvent;
use Hifone\Models\Thread;
use Hifone\Dates\DateFactory;
use Hifone\Parsers\Markdown;
use Hifone\Parsers\ParseAt;
use Hifone\Services\Tag\AddTag;

class AddThreadCommandHandler
{
    /**
     * The date factory instance.
     *
     * @var \Gitamin\Dates\DateFactory
     */
    protected $dates;

    protected $markdown;

    protected $parseAt;

    /**
     * Create a new report issue command handler instance.
     *
     * @param \Gitamin\Dates\DateFactory $dates
     */
    public function __construct(DateFactory $dates, Markdown $markdown, ParseAt $parseAt)
    {
        $this->dates = $dates;
        $this->markdown = $markdown;
        $this->parseAt = $parseAt;
    }

    /**
     * Handle the report thread command.
     *
     * @param \Gitamin\Commands\Thread\AddThreadCommand $command
     *
     * @return \Gitamin\Models\Thread
     */
    public function handle(AddThreadCommand $command)
    {
        $data = [
            'user_id'       => $command->user_id,
            'title'         => $command->title,
            'excerpt'       => Thread::makeExcerpt($command->body),
            'node_id'       => $command->node_id,
            'body'          => app('parser.markdown')->convertMarkdownToHtml(app('parser.at')->parse($command->body)),
            'body_original' => $command->body,
            'created_at'    => Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon::now()->toDateTimeString(),
        ];
        // Create the thread
        $thread = Thread::create($data);

        // Update the node.
        if ($thread->node) {
            $thread->node->increment('thread_count', 1);
        }

        Auth::user()->increment('thread_count', 1);

        // The thread was added successfully, so now let's deal with the tags.
        app(AddTag::class)->attach($thread, $command->tags);

        event(new ThreadWasAddedEvent($thread));

        return $thread;
    }
}
