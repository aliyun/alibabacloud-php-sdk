<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SetSubscriptionAttributesRequest\dlqPolicy;
use AlibabaCloud\Tea\Model;

class SetSubscriptionAttributesRequest extends Model
{
    /**
     * @description The dead-letter queue policy.
     *
     * @var dlqPolicy
     */
    public $dlqPolicy;

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
        'dlqPolicy' => 'DlqPolicy',
        'notifyStrategy' => 'NotifyStrategy',
        'subscriptionName' => 'SubscriptionName',
        'topicName' => 'TopicName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dlqPolicy) {
            $res['DlqPolicy'] = null !== $this->dlqPolicy ? $this->dlqPolicy->toMap() : null;
        }
        if (null !== $this->notifyStrategy) {
            $res['NotifyStrategy'] = $this->notifyStrategy;
        }
        if (null !== $this->subscriptionName) {
            $res['SubscriptionName'] = $this->subscriptionName;
        }
        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetSubscriptionAttributesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DlqPolicy'])) {
            $model->dlqPolicy = dlqPolicy::fromMap($map['DlqPolicy']);
        }
        if (isset($map['NotifyStrategy'])) {
            $model->notifyStrategy = $map['NotifyStrategy'];
        }
        if (isset($map['SubscriptionName'])) {
            $model->subscriptionName = $map['SubscriptionName'];
        }
        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}
