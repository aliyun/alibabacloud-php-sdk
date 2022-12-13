<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\VerifyRouteRuleResponseBody\data;

use AlibabaCloud\Tea\Model;

class notifySubscriptionNames extends Model
{
    /**
     * @example 111111
     *
     * @var int
     */
    public $subscriptionId;

    /**
     * @example 订阅名称
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'subscriptionId' => 'subscriptionId',
        'title'          => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subscriptionId) {
            $res['subscriptionId'] = $this->subscriptionId;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notifySubscriptionNames
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['subscriptionId'])) {
            $model->subscriptionId = $map['subscriptionId'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
