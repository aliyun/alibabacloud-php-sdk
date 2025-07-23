<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetQueueAttributesResponseBody;

use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetQueueAttributesResponseBody\data\dlqPolicy;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetQueueAttributesResponseBody\data\tags;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetQueueAttributesResponseBody\data\tenantRateLimitPolicy;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The total number of messages that are in the Active state in the queue. The value is an approximate value. Default value: 0. We recommend that you do not use the return value and that you call CloudMonitor API operations to query the metric value.
     *
     * @example 20
     *
     * @var int
     */
    public $activeMessages;

    /**
     * @description The time when the queue was created.
     *
     * @example 1250700999
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The total number of messages that are in the Delayed state in the queue. The value is an approximate value. Default value: 0. We recommend that you do not use the return value and that you call CloudMonitor API operations to query the metric value.
     *
     * @example 0
     *
     * @var int
     */
    public $delayMessages;

    /**
     * @description The period after which all messages sent to the queue are consumed. Unit: seconds.
     *
     * @example 30
     *
     * @var int
     */
    public $delaySeconds;

    /**
     * @description The dead-letter queue policy.
     *
     * @var dlqPolicy
     */
    public $dlqPolicy;

    /**
     * @description The total number of messages that are in the Inactive state in the queue. The value is an approximate value. Default value: 0. We recommend that you do not use the return value and that you call CloudMonitor API operations to query the metric value.
     *
     * @example 0
     *
     * @var int
     */
    public $inactiveMessages;

    /**
     * @description The time when the queue was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1250700999
     *
     * @var int
     */
    public $lastModifyTime;

    /**
     * @description Indicates whether the logging feature is enabled. Valid values:
     *
     *   True
     *   False
     *
     * @example True
     *
     * @var bool
     */
    public $loggingEnabled;

    /**
     * @description The maximum length of the message that is sent to the queue. Unit: bytes.
     *
     * @example 65536
     *
     * @var int
     */
    public $maximumMessageSize;

    /**
     * @description The maximum duration for which a message is retained in the queue. After the specified retention period ends, the message is deleted regardless of whether the message is received. Unit: seconds.
     *
     * @example 65536
     *
     * @var int
     */
    public $messageRetentionPeriod;

    /**
     * @description The maximum duration for which long polling requests are held after the ReceiveMessage operation is called. Unit: seconds.
     *
     * @example 0
     *
     * @var int
     */
    public $pollingWaitSeconds;

    /**
     * @description The name of the queue.
     *
     * @example demo-queue
     *
     * @var string
     */
    public $queueName;

    /**
     * @description The tag.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @var tenantRateLimitPolicy
     */
    public $tenantRateLimitPolicy;

    /**
     * @description The duration for which a message stays in the Inactive state after the message is received from the queue. Valid values: 1 to 43200. Unit: seconds. Default value: 30.
     *
     * @example 60
     *
     * @var int
     */
    public $visibilityTimeout;
    protected $_name = [
        'activeMessages' => 'ActiveMessages',
        'createTime' => 'CreateTime',
        'delayMessages' => 'DelayMessages',
        'delaySeconds' => 'DelaySeconds',
        'dlqPolicy' => 'DlqPolicy',
        'inactiveMessages' => 'InactiveMessages',
        'lastModifyTime' => 'LastModifyTime',
        'loggingEnabled' => 'LoggingEnabled',
        'maximumMessageSize' => 'MaximumMessageSize',
        'messageRetentionPeriod' => 'MessageRetentionPeriod',
        'pollingWaitSeconds' => 'PollingWaitSeconds',
        'queueName' => 'QueueName',
        'tags' => 'Tags',
        'tenantRateLimitPolicy' => 'TenantRateLimitPolicy',
        'visibilityTimeout' => 'VisibilityTimeout',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeMessages) {
            $res['ActiveMessages'] = $this->activeMessages;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->delayMessages) {
            $res['DelayMessages'] = $this->delayMessages;
        }
        if (null !== $this->delaySeconds) {
            $res['DelaySeconds'] = $this->delaySeconds;
        }
        if (null !== $this->dlqPolicy) {
            $res['DlqPolicy'] = null !== $this->dlqPolicy ? $this->dlqPolicy->toMap() : null;
        }
        if (null !== $this->inactiveMessages) {
            $res['InactiveMessages'] = $this->inactiveMessages;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->loggingEnabled) {
            $res['LoggingEnabled'] = $this->loggingEnabled;
        }
        if (null !== $this->maximumMessageSize) {
            $res['MaximumMessageSize'] = $this->maximumMessageSize;
        }
        if (null !== $this->messageRetentionPeriod) {
            $res['MessageRetentionPeriod'] = $this->messageRetentionPeriod;
        }
        if (null !== $this->pollingWaitSeconds) {
            $res['PollingWaitSeconds'] = $this->pollingWaitSeconds;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tenantRateLimitPolicy) {
            $res['TenantRateLimitPolicy'] = null !== $this->tenantRateLimitPolicy ? $this->tenantRateLimitPolicy->toMap() : null;
        }
        if (null !== $this->visibilityTimeout) {
            $res['VisibilityTimeout'] = $this->visibilityTimeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveMessages'])) {
            $model->activeMessages = $map['ActiveMessages'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DelayMessages'])) {
            $model->delayMessages = $map['DelayMessages'];
        }
        if (isset($map['DelaySeconds'])) {
            $model->delaySeconds = $map['DelaySeconds'];
        }
        if (isset($map['DlqPolicy'])) {
            $model->dlqPolicy = dlqPolicy::fromMap($map['DlqPolicy']);
        }
        if (isset($map['InactiveMessages'])) {
            $model->inactiveMessages = $map['InactiveMessages'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['LoggingEnabled'])) {
            $model->loggingEnabled = $map['LoggingEnabled'];
        }
        if (isset($map['MaximumMessageSize'])) {
            $model->maximumMessageSize = $map['MaximumMessageSize'];
        }
        if (isset($map['MessageRetentionPeriod'])) {
            $model->messageRetentionPeriod = $map['MessageRetentionPeriod'];
        }
        if (isset($map['PollingWaitSeconds'])) {
            $model->pollingWaitSeconds = $map['PollingWaitSeconds'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TenantRateLimitPolicy'])) {
            $model->tenantRateLimitPolicy = tenantRateLimitPolicy::fromMap($map['TenantRateLimitPolicy']);
        }
        if (isset($map['VisibilityTimeout'])) {
            $model->visibilityTimeout = $map['VisibilityTimeout'];
        }

        return $model;
    }
}
