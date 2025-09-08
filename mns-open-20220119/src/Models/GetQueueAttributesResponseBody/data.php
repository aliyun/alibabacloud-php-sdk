<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetQueueAttributesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetQueueAttributesResponseBody\data\dlqPolicy;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetQueueAttributesResponseBody\data\tags;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetQueueAttributesResponseBody\data\tenantRateLimitPolicy;

class data extends Model
{
    /**
     * @var int
     */
    public $activeMessages;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $delayMessages;

    /**
     * @var int
     */
    public $delaySeconds;

    /**
     * @var dlqPolicy
     */
    public $dlqPolicy;

    /**
     * @var int
     */
    public $inactiveMessages;

    /**
     * @var int
     */
    public $lastModifyTime;

    /**
     * @var bool
     */
    public $loggingEnabled;

    /**
     * @var int
     */
    public $maximumMessageSize;

    /**
     * @var int
     */
    public $messageRetentionPeriod;

    /**
     * @var int
     */
    public $pollingWaitSeconds;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $queueType;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var tenantRateLimitPolicy
     */
    public $tenantRateLimitPolicy;

    /**
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
        'queueType' => 'QueueType',
        'tags' => 'Tags',
        'tenantRateLimitPolicy' => 'TenantRateLimitPolicy',
        'visibilityTimeout' => 'VisibilityTimeout',
    ];

    public function validate()
    {
        if (null !== $this->dlqPolicy) {
            $this->dlqPolicy->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (null !== $this->tenantRateLimitPolicy) {
            $this->tenantRateLimitPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['DlqPolicy'] = null !== $this->dlqPolicy ? $this->dlqPolicy->toArray($noStream) : $this->dlqPolicy;
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

        if (null !== $this->queueType) {
            $res['QueueType'] = $this->queueType;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tenantRateLimitPolicy) {
            $res['TenantRateLimitPolicy'] = null !== $this->tenantRateLimitPolicy ? $this->tenantRateLimitPolicy->toArray($noStream) : $this->tenantRateLimitPolicy;
        }

        if (null !== $this->visibilityTimeout) {
            $res['VisibilityTimeout'] = $this->visibilityTimeout;
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

        if (isset($map['QueueType'])) {
            $model->queueType = $map['QueueType'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
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
