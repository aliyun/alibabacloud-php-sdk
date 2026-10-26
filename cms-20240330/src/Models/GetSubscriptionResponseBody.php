<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class GetSubscriptionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var SubscriptionForView
     */
    public $subscription;
    protected $_name = [
        'requestId' => 'requestId',
        'subscription' => 'subscription',
    ];

    public function validate()
    {
        if (null !== $this->subscription) {
            $this->subscription->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->subscription) {
            $res['subscription'] = null !== $this->subscription ? $this->subscription->toArray($noStream) : $this->subscription;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['subscription'])) {
            $model->subscription = SubscriptionForView::fromMap($map['subscription']);
        }

        return $model;
    }
}
