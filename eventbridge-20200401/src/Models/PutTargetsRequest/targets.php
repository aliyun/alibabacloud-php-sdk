<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\PutTargetsRequest;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\PutTargetsRequest\targets\concurrentConfig;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\PutTargetsRequest\targets\deadLetterQueue;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\PutTargetsRequest\targets\paramList;
use AlibabaCloud\Tea\Model;

class targets extends Model
{
    /**
     * @description The concurrency configuration.
     *
     * @var concurrentConfig
     */
    public $concurrentConfig;

    /**
     * @description The dead-letter queue. Events that are not processed or whose maximum retries are exceeded are written to the dead-letter queue. You can use queues in ApsaraMQ for RocketMQ, Simple Message Queue (SMQ, formerly MNS), and ApsaraMQ for Kafka as dead-letter queues. You can also use event buses in EventBridge as dead-letter queues.
     *
     * @var deadLetterQueue
     */
    public $deadLetterQueue;

    /**
     * @description The endpoint of the event target.
     *
     * @example acs:fc:cn-hangzhou:123456789098****:services/guide.LATEST/functions/HelloFC
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The fault tolerance policy. Valid values:
     *
     *   **ALL**: allows fault tolerance. If an error occurs, event processing is not blocked. If the message exceeds the number of retries specified by the retry policy, the message is delivered to a dead-letter queue or discarded based on your configurations.
     *   **NONE**: prohibits fault tolerance. If an error occurs and the message exceeds the number of retries specified by the retry policy, event processing is blocked.
     *
     * @example ALL
     *
     * @var string
     */
    public $errorsTolerance;

    /**
     * @description The ID of the event target.
     *
     * This parameter is required.
     *
     * @example Mlm123456JHd2RsRoKw
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
     * @description The retry policy to be used to push events. Valid values:
     *
     *   **BACKOFF_RETRY**: backoff retry. A failed event can be retried up to three times. The interval between two consecutive retries is a random value from 10 seconds to 20 seconds.
     *   **EXPONENTIAL_DECAY_RETRY**: exponential decay retry. A failed event can be retried up to 176 times. The interval between two consecutive retries exponentially increases to a maximum of 512 seconds. The total retry time is 1 day. The specific retry intervals are 1, 2, 4, 8, 16, 32, 64, 128, 256, and 512 seconds. The interval of 512 seconds is used for 167 retries.
     *
     * @example BACKOFFRETRY
     *
     * @var string
     */
    public $pushRetryStrategy;

    /**
     * @description The type of the event target. For more information, see [Event target parameters](https://help.aliyun.com/document_detail/185887.html).
     *
     * This parameter is required.
     *
     * @example acs.fc.function
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'concurrentConfig' => 'ConcurrentConfig',
        'deadLetterQueue' => 'DeadLetterQueue',
        'endpoint' => 'Endpoint',
        'errorsTolerance' => 'ErrorsTolerance',
        'id' => 'Id',
        'paramList' => 'ParamList',
        'pushRetryStrategy' => 'PushRetryStrategy',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->concurrentConfig) {
            $res['ConcurrentConfig'] = null !== $this->concurrentConfig ? $this->concurrentConfig->toMap() : null;
        }
        if (null !== $this->deadLetterQueue) {
            $res['DeadLetterQueue'] = null !== $this->deadLetterQueue ? $this->deadLetterQueue->toMap() : null;
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
        if (isset($map['ConcurrentConfig'])) {
            $model->concurrentConfig = concurrentConfig::fromMap($map['ConcurrentConfig']);
        }
        if (isset($map['DeadLetterQueue'])) {
            $model->deadLetterQueue = deadLetterQueue::fromMap($map['DeadLetterQueue']);
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
                $n = 0;
                foreach ($map['ParamList'] as $item) {
                    $model->paramList[$n++] = null !== $item ? paramList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PushRetryStrategy'])) {
            $model->pushRetryStrategy = $map['PushRetryStrategy'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
