<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetSubscriptionAttributesResponseBody;

use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetSubscriptionAttributesResponseBody\data\dlqPolicy;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetSubscriptionAttributesResponseBody\data\tenantRateLimitPolicy;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The time when the subscription was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1449554806
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The dead-letter queue policy.
     *
     * @var dlqPolicy
     */
    public $dlqPolicy;

    /**
     * @description The endpoint to which the messages are pushed.
     *
     * @example http://example.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The tag that is used to filter messages. Only the messages that are attached with the specified tag can be pushed.
     *
     * @example important
     *
     * @var string
     */
    public $filterTag;

    /**
     * @description The time when the subscription was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1449554962
     *
     * @var int
     */
    public $lastModifyTime;

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
     * @description The name of the subscription.
     *
     * @example MySubscription
     *
     * @var string
     */
    public $subscriptionName;

    /**
     * @var tenantRateLimitPolicy
     */
    public $tenantRateLimitPolicy;

    /**
     * @description The name of the topic.
     *
     * @example MyTopic
     *
     * @var string
     */
    public $topicName;

    /**
     * @description The Alibaba Cloud account ID of the topic owner.
     *
     * @example 123456789098****
     *
     * @var string
     */
    public $topicOwner;
    protected $_name = [
        'createTime' => 'CreateTime',
        'dlqPolicy' => 'DlqPolicy',
        'endpoint' => 'Endpoint',
        'filterTag' => 'FilterTag',
        'lastModifyTime' => 'LastModifyTime',
        'notifyContentFormat' => 'NotifyContentFormat',
        'notifyStrategy' => 'NotifyStrategy',
        'subscriptionName' => 'SubscriptionName',
        'tenantRateLimitPolicy' => 'TenantRateLimitPolicy',
        'topicName' => 'TopicName',
        'topicOwner' => 'TopicOwner',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dlqPolicy) {
            $res['DlqPolicy'] = null !== $this->dlqPolicy ? $this->dlqPolicy->toMap() : null;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->filterTag) {
            $res['FilterTag'] = $this->filterTag;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->notifyContentFormat) {
            $res['NotifyContentFormat'] = $this->notifyContentFormat;
        }
        if (null !== $this->notifyStrategy) {
            $res['NotifyStrategy'] = $this->notifyStrategy;
        }
        if (null !== $this->subscriptionName) {
            $res['SubscriptionName'] = $this->subscriptionName;
        }
        if (null !== $this->tenantRateLimitPolicy) {
            $res['TenantRateLimitPolicy'] = null !== $this->tenantRateLimitPolicy ? $this->tenantRateLimitPolicy->toMap() : null;
        }
        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }
        if (null !== $this->topicOwner) {
            $res['TopicOwner'] = $this->topicOwner;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DlqPolicy'])) {
            $model->dlqPolicy = dlqPolicy::fromMap($map['DlqPolicy']);
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['FilterTag'])) {
            $model->filterTag = $map['FilterTag'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['NotifyContentFormat'])) {
            $model->notifyContentFormat = $map['NotifyContentFormat'];
        }
        if (isset($map['NotifyStrategy'])) {
            $model->notifyStrategy = $map['NotifyStrategy'];
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
        if (isset($map['TopicOwner'])) {
            $model->topicOwner = $map['TopicOwner'];
        }

        return $model;
    }
}
