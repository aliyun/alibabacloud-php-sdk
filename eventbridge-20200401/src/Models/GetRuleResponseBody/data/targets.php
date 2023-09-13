<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetRuleResponseBody\data;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetRuleResponseBody\data\targets\deadLetterQueue;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetRuleResponseBody\data\targets\paramList;
use AlibabaCloud\Tea\Model;

class targets extends Model
{
    /**
     * @description The ID of the custom event target.
     *
     * @var deadLetterQueue
     */
    public $deadLetterQueue;

    /**
     * @description The information about the event target.
     *
     * @var mixed[]
     */
    public $detailMap;

    /**
     * @description The endpoint of the event target.
     *
     * @example acs:mns:cn-hangzhou:123456789098****:queues/myqueue
     *
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $errorsTolerance;

    /**
     * @description The ID of the custom event target.
     *
     * @example 1
     *
     * @var string
     */
    public $id;

    /**
     * @description The parameters that are configured for the event target.
     *
     * @var paramList[]
     */
    public $paramList;

    /**
     * @description The retry policy that is used to push events. Valid values: BACKOFF_RETRY: backoff retry. If an event failed to be pushed, it can be retried up to three times. The interval between two consecutive retries is a random value from 10 to 20. Unit: seconds. EXPONENTIAL_DECAY_RETRY: exponential decay retry. If an event failed to be pushed, it can be retried up to 176 times. The interval between two consecutive retries exponentially increases to 512 seconds, and the total retry time is one day. The specific retry intervals are 1, 2, 4, 8, 16, 32, 64, 128, 256, 512, 512, ..., and 512 seconds. The interval of 512 seconds is used for 167 retries.
     *
     * @example BACKOFF_RETRY
     *
     * @var string
     */
    public $pushRetryStrategy;

    /**
     * @description The transformer that is used to push events.
     *
     * @example MATCHED_EVENT
     *
     * @var string
     */
    public $pushSelector;

    /**
     * @description The type of the event target. For more information, see [Event target parameters.](https://www.alibabacloud.com/help/en/eventbridge/latest/event-target-parameters)
     *
     * @example acs.mns.queue
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'deadLetterQueue'   => 'DeadLetterQueue',
        'detailMap'         => 'DetailMap',
        'endpoint'          => 'Endpoint',
        'errorsTolerance'   => 'ErrorsTolerance',
        'id'                => 'Id',
        'paramList'         => 'ParamList',
        'pushRetryStrategy' => 'PushRetryStrategy',
        'pushSelector'      => 'PushSelector',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deadLetterQueue) {
            $res['DeadLetterQueue'] = null !== $this->deadLetterQueue ? $this->deadLetterQueue->toMap() : null;
        }
        if (null !== $this->detailMap) {
            $res['DetailMap'] = $this->detailMap;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->errorsTolerance) {
            $res['ErrorsTolerance'] = $this->errorsTolerance;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->paramList) {
            $res['ParamList'] = [];
            if (null !== $this->paramList && \is_array($this->paramList)) {
                $n = 0;
                foreach ($this->paramList as $item) {
                    $res['ParamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pushRetryStrategy) {
            $res['PushRetryStrategy'] = $this->pushRetryStrategy;
        }
        if (null !== $this->pushSelector) {
            $res['PushSelector'] = $this->pushSelector;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeadLetterQueue'])) {
            $model->deadLetterQueue = deadLetterQueue::fromMap($map['DeadLetterQueue']);
        }
        if (isset($map['DetailMap'])) {
            $model->detailMap = $map['DetailMap'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['ErrorsTolerance'])) {
            $model->errorsTolerance = $map['ErrorsTolerance'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ParamList'])) {
            if (!empty($map['ParamList'])) {
                $model->paramList = [];
                $n                = 0;
                foreach ($map['ParamList'] as $item) {
                    $model->paramList[$n++] = null !== $item ? paramList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PushRetryStrategy'])) {
            $model->pushRetryStrategy = $map['PushRetryStrategy'];
        }
        if (isset($map['PushSelector'])) {
            $model->pushSelector = $map['PushSelector'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
