<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Tea\Model;

class SetSubscriptionAttributesShrinkRequest extends Model
{
    /**
     * @description The dead-letter queue policy.
     *
     * @var string
     */
    public $dlqPolicyShrink;

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
     * This parameter is required.
     *
     * @example MySubscription
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
        'notifyStrategy' => 'NotifyStrategy',
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
        if (null !== $this->notifyStrategy) {
            $res['NotifyStrategy'] = $this->notifyStrategy;
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
     * @return SetSubscriptionAttributesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DlqPolicy'])) {
            $model->dlqPolicyShrink = $map['DlqPolicy'];
        }
        if (isset($map['NotifyStrategy'])) {
            $model->notifyStrategy = $map['NotifyStrategy'];
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
