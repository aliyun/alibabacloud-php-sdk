<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Dara\Model;

class SubscribeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dlqPolicyShrink;

    /**
     * @var string
     */
    public $dmAttributesShrink;

    /**
     * @var string
     */
    public $dysmsAttributesShrink;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $kafkaAttributesShrink;

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
     * @var string
     */
    public $tenantRateLimitPolicyShrink;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'dlqPolicyShrink' => 'DlqPolicy',
        'dmAttributesShrink' => 'DmAttributes',
        'dysmsAttributesShrink' => 'DysmsAttributes',
        'endpoint' => 'Endpoint',
        'kafkaAttributesShrink' => 'KafkaAttributes',
        'messageTag' => 'MessageTag',
        'notifyContentFormat' => 'NotifyContentFormat',
        'notifyStrategy' => 'NotifyStrategy',
        'pushType' => 'PushType',
        'stsRoleArn' => 'StsRoleArn',
        'subscriptionName' => 'SubscriptionName',
        'tenantRateLimitPolicyShrink' => 'TenantRateLimitPolicy',
        'topicName' => 'TopicName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dlqPolicyShrink) {
            $res['DlqPolicy'] = $this->dlqPolicyShrink;
        }

        if (null !== $this->dmAttributesShrink) {
            $res['DmAttributes'] = $this->dmAttributesShrink;
        }

        if (null !== $this->dysmsAttributesShrink) {
            $res['DysmsAttributes'] = $this->dysmsAttributesShrink;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->kafkaAttributesShrink) {
            $res['KafkaAttributes'] = $this->kafkaAttributesShrink;
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

        if (null !== $this->tenantRateLimitPolicyShrink) {
            $res['TenantRateLimitPolicy'] = $this->tenantRateLimitPolicyShrink;
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
            $model->dlqPolicyShrink = $map['DlqPolicy'];
        }

        if (isset($map['DmAttributes'])) {
            $model->dmAttributesShrink = $map['DmAttributes'];
        }

        if (isset($map['DysmsAttributes'])) {
            $model->dysmsAttributesShrink = $map['DysmsAttributes'];
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['KafkaAttributes'])) {
            $model->kafkaAttributesShrink = $map['KafkaAttributes'];
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
            $model->tenantRateLimitPolicyShrink = $map['TenantRateLimitPolicy'];
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}
