<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class RunOptions extends Model
{
    /**
     * @var BatchWindow
     */
    public $batchWindow;

    /**
     * @var DeadLetterQueue
     */
    public $deadLetterQueue;

    /**
     * @example ALL
     *
     * @var string
     */
    public $errorsTolerance;

    /**
     * @example event-streaming
     *
     * @var string
     */
    public $mode;

    /**
     * @var RetryStrategy
     */
    public $retryStrategy;
    protected $_name = [
        'batchWindow'     => 'batchWindow',
        'deadLetterQueue' => 'deadLetterQueue',
        'errorsTolerance' => 'errorsTolerance',
        'mode'            => 'mode',
        'retryStrategy'   => 'retryStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchWindow) {
            $res['batchWindow'] = null !== $this->batchWindow ? $this->batchWindow->toMap() : null;
        }
        if (null !== $this->deadLetterQueue) {
            $res['deadLetterQueue'] = null !== $this->deadLetterQueue ? $this->deadLetterQueue->toMap() : null;
        }
        if (null !== $this->errorsTolerance) {
            $res['errorsTolerance'] = $this->errorsTolerance;
        }
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }
        if (null !== $this->retryStrategy) {
            $res['retryStrategy'] = null !== $this->retryStrategy ? $this->retryStrategy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['batchWindow'])) {
            $model->batchWindow = BatchWindow::fromMap($map['batchWindow']);
        }
        if (isset($map['deadLetterQueue'])) {
            $model->deadLetterQueue = DeadLetterQueue::fromMap($map['deadLetterQueue']);
        }
        if (isset($map['errorsTolerance'])) {
            $model->errorsTolerance = $map['errorsTolerance'];
        }
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }
        if (isset($map['retryStrategy'])) {
            $model->retryStrategy = RetryStrategy::fromMap($map['retryStrategy']);
        }

        return $model;
    }
}
