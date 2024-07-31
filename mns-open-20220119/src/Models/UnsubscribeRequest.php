<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Tea\Model;

class UnsubscribeRequest extends Model
{
    /**
     * @description The name of the subscription.
     *
     * This parameter is required.
     * @example MySubscription
     *
     * @var string
     */
    public $subscriptionName;

    /**
     * @description The name of the topic.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $topicName;
    protected $_name = [
        'subscriptionName' => 'SubscriptionName',
        'topicName'        => 'TopicName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return UnsubscribeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubscriptionName'])) {
            $model->subscriptionName = $map['SubscriptionName'];
        }
        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}
