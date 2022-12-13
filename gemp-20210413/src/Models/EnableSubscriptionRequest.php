<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class EnableSubscriptionRequest extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $subscriptionId;
    protected $_name = [
        'subscriptionId' => 'subscriptionId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableSubscriptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['subscriptionId'])) {
            $model->subscriptionId = $map['subscriptionId'];
        }

        return $model;
    }
}
