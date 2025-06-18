<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\runOptions\batchWindow;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\runOptions\businessOption;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\runOptions\deadLetterQueue;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\runOptions\retryStrategy;

class runOptions extends Model
{
    /**
     * @var batchWindow
     */
    public $batchWindow;

    /**
     * @var businessOption
     */
    public $businessOption;

    /**
     * @var deadLetterQueue
     */
    public $deadLetterQueue;

    /**
     * @var string
     */
    public $errorsTolerance;

    /**
     * @var int
     */
    public $maximumTasks;

    /**
     * @var retryStrategy
     */
    public $retryStrategy;

    /**
     * @var int
     */
    public $throttling;
    protected $_name = [
        'batchWindow' => 'BatchWindow',
        'businessOption' => 'BusinessOption',
        'deadLetterQueue' => 'DeadLetterQueue',
        'errorsTolerance' => 'ErrorsTolerance',
        'maximumTasks' => 'MaximumTasks',
        'retryStrategy' => 'RetryStrategy',
        'throttling' => 'Throttling',
    ];

    public function validate()
    {
        if (null !== $this->batchWindow) {
            $this->batchWindow->validate();
        }
        if (null !== $this->businessOption) {
            $this->businessOption->validate();
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
            $res['BatchWindow'] = null !== $this->batchWindow ? $this->batchWindow->toArray($noStream) : $this->batchWindow;
        }

        if (null !== $this->businessOption) {
            $res['BusinessOption'] = null !== $this->businessOption ? $this->businessOption->toArray($noStream) : $this->businessOption;
        }

        if (null !== $this->deadLetterQueue) {
            $res['DeadLetterQueue'] = null !== $this->deadLetterQueue ? $this->deadLetterQueue->toArray($noStream) : $this->deadLetterQueue;
        }

        if (null !== $this->errorsTolerance) {
            $res['ErrorsTolerance'] = $this->errorsTolerance;
        }

        if (null !== $this->maximumTasks) {
            $res['MaximumTasks'] = $this->maximumTasks;
        }

        if (null !== $this->retryStrategy) {
            $res['RetryStrategy'] = null !== $this->retryStrategy ? $this->retryStrategy->toArray($noStream) : $this->retryStrategy;
        }

        if (null !== $this->throttling) {
            $res['Throttling'] = $this->throttling;
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
        if (isset($map['BatchWindow'])) {
            $model->batchWindow = batchWindow::fromMap($map['BatchWindow']);
        }

        if (isset($map['BusinessOption'])) {
            $model->businessOption = businessOption::fromMap($map['BusinessOption']);
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

        if (isset($map['Throttling'])) {
            $model->throttling = $map['Throttling'];
        }

        return $model;
    }
}
