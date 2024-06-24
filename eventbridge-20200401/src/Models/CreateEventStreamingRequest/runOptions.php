<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\runOptions\batchWindow;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\runOptions\deadLetterQueue;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\runOptions\logDelivery;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\runOptions\network;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\runOptions\resourceSpec;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\runOptions\retryStrategy;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\runOptions\scaledObject;
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
     * @description Specifies whether to enable dead-letter queues. By default, dead-letter queues are disabled. Messages that fail to be pushed are discarded after the maximum number of retries that is specified by the retry policy is reached.
     *
     * @var deadLetterQueue
     */
    public $deadLetterQueue;

    /**
     * @description The exception tolerance policy. Valid values:
     *
     *   NONE: does not tolerate exceptions.
     *   ALL: tolerates all exceptions.
     *
     * @example ALL
     *
     * @var string
     */
    public $errorsTolerance;

    /**
     * @var logDelivery
     */
    public $logDelivery;

    /**
     * @description The maximum number of concurrent threads.
     *
     * @example 2
     *
     * @var int
     */
    public $maximumTasks;

    /**
     * @var network
     */
    public $network;

    /**
     * @var resourceSpec
     */
    public $resourceSpec;

    /**
     * @description The retry policy that you want to use if events fail to be pushed.
     *
     * @var retryStrategy
     */
    public $retryStrategy;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var scaledObject
     */
    public $scaledObject;
    protected $_name = [
        'batchWindow'     => 'BatchWindow',
        'deadLetterQueue' => 'DeadLetterQueue',
        'errorsTolerance' => 'ErrorsTolerance',
        'logDelivery'     => 'LogDelivery',
        'maximumTasks'    => 'MaximumTasks',
        'network'         => 'Network',
        'resourceSpec'    => 'ResourceSpec',
        'retryStrategy'   => 'RetryStrategy',
        'roleName'        => 'RoleName',
        'scaledObject'    => 'ScaledObject',
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
        if (null !== $this->logDelivery) {
            $res['LogDelivery'] = null !== $this->logDelivery ? $this->logDelivery->toMap() : null;
        }
        if (null !== $this->maximumTasks) {
            $res['MaximumTasks'] = $this->maximumTasks;
        }
        if (null !== $this->network) {
            $res['Network'] = null !== $this->network ? $this->network->toMap() : null;
        }
        if (null !== $this->resourceSpec) {
            $res['ResourceSpec'] = null !== $this->resourceSpec ? $this->resourceSpec->toMap() : null;
        }
        if (null !== $this->retryStrategy) {
            $res['RetryStrategy'] = null !== $this->retryStrategy ? $this->retryStrategy->toMap() : null;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->scaledObject) {
            $res['ScaledObject'] = null !== $this->scaledObject ? $this->scaledObject->toMap() : null;
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
        if (isset($map['LogDelivery'])) {
            $model->logDelivery = logDelivery::fromMap($map['LogDelivery']);
        }
        if (isset($map['MaximumTasks'])) {
            $model->maximumTasks = $map['MaximumTasks'];
        }
        if (isset($map['Network'])) {
            $model->network = network::fromMap($map['Network']);
        }
        if (isset($map['ResourceSpec'])) {
            $model->resourceSpec = resourceSpec::fromMap($map['ResourceSpec']);
        }
        if (isset($map['RetryStrategy'])) {
            $model->retryStrategy = retryStrategy::fromMap($map['RetryStrategy']);
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['ScaledObject'])) {
            $model->scaledObject = scaledObject::fromMap($map['ScaledObject']);
        }

        return $model;
    }
}
