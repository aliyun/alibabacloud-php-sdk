<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeMqttTopicSubscriptionResponseBody\subscription;
use AlibabaCloud\Tea\Model;

class DescribeMqttTopicSubscriptionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var subscription
     */
    public $subscription;
    protected $_name = [
        'requestId'    => 'RequestId',
        'subscription' => 'Subscription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subscription) {
            $res['Subscription'] = null !== $this->subscription ? $this->subscription->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMqttTopicSubscriptionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Subscription'])) {
            $model->subscription = subscription::fromMap($map['Subscription']);
        }

        return $model;
    }
}
