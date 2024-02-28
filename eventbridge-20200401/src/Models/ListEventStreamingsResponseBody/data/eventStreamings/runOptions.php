<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\runOptions\batchWindow;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\runOptions\deadLetterQueue;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\runOptions\retryStrategy;
use AlibabaCloud\Tea\Model;

class runOptions extends Model
{
    /**
     * @description The batch window.
     *
     * @var batchWindow
     */
    public $batchWindow;

    /**
     * @description Indicates whether dead-letter queues are enabled. By default, dead-letter queues are disabled. Messages that fail to be pushed are discarded after the maximum number of retries that is specified by the retry policy is reached.
     *
     * @var deadLetterQueue
     */
    public $deadLetterQueue;

    /**
     * @description The exception tolerance policy. Valid values: NONE and ALL.
     *
     * @example ALL
     *
     * @var string
     */
    public $errorsTolerance;

    /**
     * @description The number of concurrent threads.
     *
     * @example 2
     *
     * @var int
     */
    public $maximumTasks;

    /**
     * @description The retry policy that is used if events fail to be pushed.
     *
     * @var retryStrategy
     */
    public $retryStrategy;
    protected $_name = [
        'batchWindow'     => 'BatchWindow',
        'deadLetterQueue' => 'DeadLetterQueue',
        'errorsTolerance' => 'ErrorsTolerance',
        'maximumTasks'    => 'MaximumTasks',
        'retryStrategy'   => 'RetryStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchWindow) {
            $res['BatchWindow'] = null !== $this->batchWindow ? $this->batchWindow->toMap() : null;
        }
        if (null !== $this->deadLetterQueue) {
            $res['DeadLetterQueue'] = null !== $this->deadLetterQueue ? $this->deadLetterQueue->toMap() : null;
        }
        if (null !== $this->errorsTolerance) {
            $res['ErrorsTolerance'] = $this->errorsTolerance;
        }
        if (null !== $this->maximumTasks) {
            $res['MaximumTasks'] = $this->maximumTasks;
        }
        if (null !== $this->retryStrategy) {
            $res['RetryStrategy'] = null !== $this->retryStrategy ? $this->retryStrategy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchWindow'])) {
            $model->batchWindow = batchWindow::fromMap($map['BatchWindow']);
        }
        if (isset($map['DeadLetterQueue'])) {
            $model->deadLetterQueue = deadLetterQueue::fromMap($map['DeadLetterQueue']);
        }
        if (isset($map['ErrorsTolerance'])) {
            $model->errorsTolerance = $map['ErrorsTolerance'];
        }
        if (isset($map['MaximumTasks'])) {
            $model->maximumTasks = $map['MaximumTasks'];
        }
        if (isset($map['RetryStrategy'])) {
            $model->retryStrategy = retryStrategy::fromMap($map['RetryStrategy']);
        }

        return $model;
    }
}
