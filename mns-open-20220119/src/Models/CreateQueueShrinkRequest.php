<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateQueueShrinkRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateQueueShrinkRequest extends Model
{
    /**
     * @description The period after which all messages sent to the queue are consumed. Valid values: 0 to 604800. Unit: seconds. Default value: 0
     *
     * @example 0
     *
     * @var int
     */
    public $delaySeconds;

    /**
     * @description The dead-letter queue policy.
     *
     * @var string
     */
    public $dlqPolicyShrink;

    /**
     * @description Specifies whether to enable the log management feature. Valid values:
     *
     *   true: enabled.
     *   false: disabled.
     *
     * Default value: false.
     *
     * @example true
     *
     * @var bool
     */
    public $enableLogging;

    /**
     * @description The maximum length of the message that is sent to the queue. Valid values: 1024 to 65536. Unit: bytes. Default value: 65536.
     *
     * @example 65536
     *
     * @var int
     */
    public $maximumMessageSize;

    /**
     * @description The maximum duration for which a message is retained in the queue. After the specified retention period ends, the message is deleted regardless of whether the message is consumed. Valid values: 60 to 604800. Unit: seconds. Default value: 345600.
     *
     * @example 345600
     *
     * @var int
     */
    public $messageRetentionPeriod;

    /**
     * @description The maximum duration for which long polling requests are held after the ReceiveMessage operation is called. Valid values: 0 to 30. Unit: seconds. Default value: 0
     *
     * @example 0
     *
     * @var int
     */
    public $pollingWaitSeconds;

    /**
     * @description The name of the queue.
     *
     * This parameter is required.
     *
     * @example 06273500-249F-5863-121D-74D51123****
     *
     * @var string
     */
    public $queueName;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $tenantRateLimitPolicyShrink;

    /**
     * @description The duration for which a message stays in the Inactive state after the message is received from the queue. Valid values: 1 to 43200. Unit: seconds. Default value: 30.
     *
     * @example 60
     *
     * @var int
     */
    public $visibilityTimeout;
    protected $_name = [
        'delaySeconds' => 'DelaySeconds',
        'dlqPolicyShrink' => 'DlqPolicy',
        'enableLogging' => 'EnableLogging',
        'maximumMessageSize' => 'MaximumMessageSize',
        'messageRetentionPeriod' => 'MessageRetentionPeriod',
        'pollingWaitSeconds' => 'PollingWaitSeconds',
        'queueName' => 'QueueName',
        'tag' => 'Tag',
        'tenantRateLimitPolicyShrink' => 'TenantRateLimitPolicy',
        'visibilityTimeout' => 'VisibilityTimeout',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->delaySeconds) {
            $res['DelaySeconds'] = $this->delaySeconds;
        }
        if (null !== $this->dlqPolicyShrink) {
            $res['DlqPolicy'] = $this->dlqPolicyShrink;
        }
        if (null !== $this->enableLogging) {
            $res['EnableLogging'] = $this->enableLogging;
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tenantRateLimitPolicyShrink) {
            $res['TenantRateLimitPolicy'] = $this->tenantRateLimitPolicyShrink;
        }
        if (null !== $this->visibilityTimeout) {
            $res['VisibilityTimeout'] = $this->visibilityTimeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateQueueShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DelaySeconds'])) {
            $model->delaySeconds = $map['DelaySeconds'];
        }
        if (isset($map['DlqPolicy'])) {
            $model->dlqPolicyShrink = $map['DlqPolicy'];
        }
        if (isset($map['EnableLogging'])) {
            $model->enableLogging = $map['EnableLogging'];
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TenantRateLimitPolicy'])) {
            $model->tenantRateLimitPolicyShrink = $map['TenantRateLimitPolicy'];
        }
        if (isset($map['VisibilityTimeout'])) {
            $model->visibilityTimeout = $map['VisibilityTimeout'];
        }

        return $model;
    }
}
