<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Tea\Model;

class SubscribeShrinkRequest extends Model
{
    /**
     * @description The dead-letter queue policy.
     *
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
     * @description The receiver endpoint. The format of the endpoint varies based on the terminal type.
     *
     *   If you set PushType to http, set Endpoint to an `HTTP URL that starts with http:// or https://`.
     *   If you set PushType to queue, set Endpoint to a `queue name`.
     *   If you set PushType to mpush, set Endpoint to an `AppKey`.
     *   If you set PushType to alisms, set Endpoint to a `mobile number`.
     *   If you set PushType to email, set Endpoint to an `email address`.
     *
     * This parameter is required.
     *
     * @example http://example.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $kafkaAttributesShrink;

    /**
     * @description The tag that is used to filter messages. Only messages that have the same tag can be pushed. Set the value to a string of no more than 16 characters.
     *
     * By default, no tag is specified to filter messages.
     *
     * @example important
     *
     * @var string
     */
    public $messageTag;

    /**
     * @description The content format of the messages that are pushed to the endpoint. Valid values:
     *
     *   XML
     *   JSON
     *   SIMPLIFIED
     *
     * @example XML
     *
     * @var string
     */
    public $notifyContentFormat;

    /**
     * @description The retry policy that is applied if an error occurs when Message Service (MNS) pushes messages to the endpoint. Valid values:
     *
     *   BACKOFF_RETRY
     *   EXPONENTIAL_DECAY_RETRY
     *
     * @example BACKOFF_RETRY
     *
     * @var string
     */
    public $notifyStrategy;

    /**
     * @description The terminal type. Valid values:
     *
     *   http: HTTP services
     *   queue: queues
     *   mpush: mobile devices
     *   alisms: Alibaba Cloud Short Message Service (SMS)
     *   email: emails
     *
     * This parameter is required.
     *
     * @example queue
     *
     * @var string
     */
    public $pushType;

    /**
     * @var string
     */
    public $stsRoleArn;

    /**
     * @description The name of the subscription.
     *
     * This parameter is required.
     *
     * @example testSubscription
     *
     * @var string
     */
    public $subscriptionName;

    /**
     * @var string
     */
    public $tenantRateLimitPolicyShrink;

    /**
     * @description The name of the topic.
     *
     * This parameter is required.
     *
     * @example test
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SubscribeShrinkRequest
     */
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
