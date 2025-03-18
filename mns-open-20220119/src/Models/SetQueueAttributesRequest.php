<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SetQueueAttributesRequest\dlqPolicy;
use AlibabaCloud\Tea\Model;

class SetQueueAttributesRequest extends Model
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
     * @var dlqPolicy
     */
    public $dlqPolicy;

    /**
     * @description Specifies whether to enable the log management feature. Valid values:
     *
     *   true: enabled.
     *   false: disabled. Default value: false.
     *
     * @example True
     *
     * @var bool
     */
    public $enableLogging;

    /**
     * @description The maximum length of the message that is sent to the queue. Valid values: 1024 to 65536. Unit: bytes. Default value: 65536.
     *
     * @example 1024
     *
     * @var int
     */
    public $maximumMessageSize;

    /**
     * @description The maximum duration for which a message is retained in the queue. After the specified retention period ends, the message is deleted regardless of whether the message is received. Valid values: 60 to 604800. Unit: seconds. Default value: 345600.
     *
     * @example 120
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
     * @example testqueue
     *
     * @var string
     */
    public $queueName;

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
        'dlqPolicy' => 'DlqPolicy',
        'enableLogging' => 'EnableLogging',
        'maximumMessageSize' => 'MaximumMessageSize',
        'messageRetentionPeriod' => 'MessageRetentionPeriod',
        'pollingWaitSeconds' => 'PollingWaitSeconds',
        'queueName' => 'QueueName',
        'visibilityTimeout' => 'VisibilityTimeout',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->delaySeconds) {
            $res['DelaySeconds'] = $this->delaySeconds;
        }
        if (null !== $this->dlqPolicy) {
            $res['DlqPolicy'] = null !== $this->dlqPolicy ? $this->dlqPolicy->toMap() : null;
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
        if (null !== $this->visibilityTimeout) {
            $res['VisibilityTimeout'] = $this->visibilityTimeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetQueueAttributesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DelaySeconds'])) {
            $model->delaySeconds = $map['DelaySeconds'];
        }
        if (isset($map['DlqPolicy'])) {
            $model->dlqPolicy = dlqPolicy::fromMap($map['DlqPolicy']);
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
        if (isset($map['VisibilityTimeout'])) {
            $model->visibilityTimeout = $map['VisibilityTimeout'];
        }

        return $model;
    }
}
