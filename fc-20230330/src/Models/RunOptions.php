<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $errorsTolerance;
    /**
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
        if (null !== $this->batchWindow) {
            $this->batchWindow->validate();
        }
        if (null !== $this->deadLetterQueue) {
            $this->deadLetterQueue->validate();
        }
        if (null !== $this->retryStrategy) {
            $this->retryStrategy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchWindow) {
            $res['batchWindow'] = null !== $this->batchWindow ? $this->batchWindow->toArray($noStream) : $this->batchWindow;
        }

        if (null !== $this->deadLetterQueue) {
            $res['deadLetterQueue'] = null !== $this->deadLetterQueue ? $this->deadLetterQueue->toArray($noStream) : $this->deadLetterQueue;
        }

        if (null !== $this->errorsTolerance) {
            $res['errorsTolerance'] = $this->errorsTolerance;
        }

        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->retryStrategy) {
            $res['retryStrategy'] = null !== $this->retryStrategy ? $this->retryStrategy->toArray($noStream) : $this->retryStrategy;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
