<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateQueueShrinkRequest\tag;

class CreateQueueShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $delaySeconds;

    /**
     * @var string
     */
    public $dlqPolicyShrink;

    /**
     * @var bool
     */
    public $enableLogging;

    /**
     * @var bool
     */
    public $enableSSE;

    /**
     * @var string
     */
    public $kmsKeyId;

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
     * @var string
     */
    public $sseAlgorithm;

    /**
     * @var string
     */
    public $sseType;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $tenantRateLimitPolicyShrink;

    /**
     * @var int
     */
    public $visibilityTimeout;
    protected $_name = [
        'delaySeconds' => 'DelaySeconds',
        'dlqPolicyShrink' => 'DlqPolicy',
        'enableLogging' => 'EnableLogging',
        'enableSSE' => 'EnableSSE',
        'kmsKeyId' => 'KmsKeyId',
        'maximumMessageSize' => 'MaximumMessageSize',
        'messageRetentionPeriod' => 'MessageRetentionPeriod',
        'pollingWaitSeconds' => 'PollingWaitSeconds',
        'queueName' => 'QueueName',
        'queueType' => 'QueueType',
        'sseAlgorithm' => 'SseAlgorithm',
        'sseType' => 'SseType',
        'tag' => 'Tag',
        'tenantRateLimitPolicyShrink' => 'TenantRateLimitPolicy',
        'visibilityTimeout' => 'VisibilityTimeout',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->enableSSE) {
            $res['EnableSSE'] = $this->enableSSE;
        }

        if (null !== $this->kmsKeyId) {
            $res['KmsKeyId'] = $this->kmsKeyId;
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

        if (null !== $this->sseAlgorithm) {
            $res['SseAlgorithm'] = $this->sseAlgorithm;
        }

        if (null !== $this->sseType) {
            $res['SseType'] = $this->sseType;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['EnableSSE'])) {
            $model->enableSSE = $map['EnableSSE'];
        }

        if (isset($map['KmsKeyId'])) {
            $model->kmsKeyId = $map['KmsKeyId'];
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

        if (isset($map['SseAlgorithm'])) {
            $model->sseAlgorithm = $map['SseAlgorithm'];
        }

        if (isset($map['SseType'])) {
            $model->sseType = $map['SseType'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
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
