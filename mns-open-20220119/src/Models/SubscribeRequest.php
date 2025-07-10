<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SubscribeRequest\dlqPolicy;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SubscribeRequest\dmAttributes;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SubscribeRequest\dysmsAttributes;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SubscribeRequest\kafkaAttributes;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SubscribeRequest\tenantRateLimitPolicy;

class SubscribeRequest extends Model
{
    /**
     * @var dlqPolicy
     */
    public $dlqPolicy;

    /**
     * @var dmAttributes
     */
    public $dmAttributes;

    /**
     * @var dysmsAttributes
     */
    public $dysmsAttributes;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var kafkaAttributes
     */
    public $kafkaAttributes;

    /**
     * @var string
     */
    public $messageTag;

    /**
     * @var string
     */
    public $notifyContentFormat;

    /**
     * @var string
     */
    public $notifyStrategy;

    /**
     * @var string
     */
    public $pushType;

    /**
     * @var string
     */
    public $stsRoleArn;

    /**
     * @var string
     */
    public $subscriptionName;

    /**
     * @var tenantRateLimitPolicy
     */
    public $tenantRateLimitPolicy;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'dlqPolicy' => 'DlqPolicy',
        'dmAttributes' => 'DmAttributes',
        'dysmsAttributes' => 'DysmsAttributes',
        'endpoint' => 'Endpoint',
        'kafkaAttributes' => 'KafkaAttributes',
        'messageTag' => 'MessageTag',
        'notifyContentFormat' => 'NotifyContentFormat',
        'notifyStrategy' => 'NotifyStrategy',
        'pushType' => 'PushType',
        'stsRoleArn' => 'StsRoleArn',
        'subscriptionName' => 'SubscriptionName',
        'tenantRateLimitPolicy' => 'TenantRateLimitPolicy',
        'topicName' => 'TopicName',
    ];

    public function validate()
    {
        if (null !== $this->dlqPolicy) {
            $this->dlqPolicy->validate();
        }
        if (null !== $this->dmAttributes) {
            $this->dmAttributes->validate();
        }
        if (null !== $this->dysmsAttributes) {
            $this->dysmsAttributes->validate();
        }
        if (null !== $this->kafkaAttributes) {
            $this->kafkaAttributes->validate();
        }
        if (null !== $this->tenantRateLimitPolicy) {
            $this->tenantRateLimitPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dlqPolicy) {
            $res['DlqPolicy'] = null !== $this->dlqPolicy ? $this->dlqPolicy->toArray($noStream) : $this->dlqPolicy;
        }

        if (null !== $this->dmAttributes) {
            $res['DmAttributes'] = null !== $this->dmAttributes ? $this->dmAttributes->toArray($noStream) : $this->dmAttributes;
        }

        if (null !== $this->dysmsAttributes) {
            $res['DysmsAttributes'] = null !== $this->dysmsAttributes ? $this->dysmsAttributes->toArray($noStream) : $this->dysmsAttributes;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->kafkaAttributes) {
            $res['KafkaAttributes'] = null !== $this->kafkaAttributes ? $this->kafkaAttributes->toArray($noStream) : $this->kafkaAttributes;
        }

        if (null !== $this->messageTag) {
            $res['MessageTag'] = $this->messageTag;
        }

        if (null !== $this->notifyContentFormat) {
            $res['NotifyContentFormat'] = $this->notifyContentFormat;
        }

        if (null !== $this->notifyStrategy) {
            $res['NotifyStrategy'] = $this->notifyStrategy;
        }

        if (null !== $this->pushType) {
            $res['PushType'] = $this->pushType;
        }

        if (null !== $this->stsRoleArn) {
            $res['StsRoleArn'] = $this->stsRoleArn;
        }

        if (null !== $this->subscriptionName) {
            $res['SubscriptionName'] = $this->subscriptionName;
        }

        if (null !== $this->tenantRateLimitPolicy) {
            $res['TenantRateLimitPolicy'] = null !== $this->tenantRateLimitPolicy ? $this->tenantRateLimitPolicy->toArray($noStream) : $this->tenantRateLimitPolicy;
        }

        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
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
        if (isset($map['DlqPolicy'])) {
            $model->dlqPolicy = dlqPolicy::fromMap($map['DlqPolicy']);
        }

        if (isset($map['DmAttributes'])) {
            $model->dmAttributes = dmAttributes::fromMap($map['DmAttributes']);
        }

        if (isset($map['DysmsAttributes'])) {
            $model->dysmsAttributes = dysmsAttributes::fromMap($map['DysmsAttributes']);
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['KafkaAttributes'])) {
            $model->kafkaAttributes = kafkaAttributes::fromMap($map['KafkaAttributes']);
        }

        if (isset($map['MessageTag'])) {
            $model->messageTag = $map['MessageTag'];
        }

        if (isset($map['NotifyContentFormat'])) {
            $model->notifyContentFormat = $map['NotifyContentFormat'];
        }

        if (isset($map['NotifyStrategy'])) {
            $model->notifyStrategy = $map['NotifyStrategy'];
        }

        if (isset($map['PushType'])) {
            $model->pushType = $map['PushType'];
        }

        if (isset($map['StsRoleArn'])) {
            $model->stsRoleArn = $map['StsRoleArn'];
        }

        if (isset($map['SubscriptionName'])) {
            $model->subscriptionName = $map['SubscriptionName'];
        }

        if (isset($map['TenantRateLimitPolicy'])) {
            $model->tenantRateLimitPolicy = tenantRateLimitPolicy::fromMap($map['TenantRateLimitPolicy']);
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}
