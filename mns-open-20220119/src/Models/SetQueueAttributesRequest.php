<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SetQueueAttributesRequest\dlqPolicy;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SetQueueAttributesRequest\tenantRateLimitPolicy;

class SetQueueAttributesRequest extends Model
{
    /**
     * @var int
     */
    public $delaySeconds;

    /**
     * @var dlqPolicy
     */
    public $dlqPolicy;

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
    public $sseAlgorithm;

    /**
     * @var string
     */
    public $sseType;

    /**
     * @var tenantRateLimitPolicy
     */
    public $tenantRateLimitPolicy;

    /**
     * @var int
     */
    public $visibilityTimeout;
    protected $_name = [
        'delaySeconds' => 'DelaySeconds',
        'dlqPolicy' => 'DlqPolicy',
        'enableLogging' => 'EnableLogging',
        'enableSSE' => 'EnableSSE',
        'kmsKeyId' => 'KmsKeyId',
        'maximumMessageSize' => 'MaximumMessageSize',
        'messageRetentionPeriod' => 'MessageRetentionPeriod',
        'pollingWaitSeconds' => 'PollingWaitSeconds',
        'queueName' => 'QueueName',
        'sseAlgorithm' => 'SseAlgorithm',
        'sseType' => 'SseType',
        'tenantRateLimitPolicy' => 'TenantRateLimitPolicy',
        'visibilityTimeout' => 'VisibilityTimeout',
    ];

    public function validate()
    {
        if (null !== $this->dlqPolicy) {
            $this->dlqPolicy->validate();
        }
        if (null !== $this->tenantRateLimitPolicy) {
            $this->tenantRateLimitPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->delaySeconds) {
            $res['DelaySeconds'] = $this->delaySeconds;
        }

        if (null !== $this->dlqPolicy) {
            $res['DlqPolicy'] = null !== $this->dlqPolicy ? $this->dlqPolicy->toArray($noStream) : $this->dlqPolicy;
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

        if (null !== $this->sseAlgorithm) {
            $res['SseAlgorithm'] = $this->sseAlgorithm;
        }

        if (null !== $this->sseType) {
            $res['SseType'] = $this->sseType;
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
        if (isset($map['DelaySeconds'])) {
            $model->delaySeconds = $map['DelaySeconds'];
        }

        if (isset($map['DlqPolicy'])) {
            $model->dlqPolicy = dlqPolicy::fromMap($map['DlqPolicy']);
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

        if (isset($map['SseAlgorithm'])) {
            $model->sseAlgorithm = $map['SseAlgorithm'];
        }

        if (isset($map['SseType'])) {
            $model->sseType = $map['SseType'];
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
