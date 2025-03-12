<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ShopStatusChangeRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 123
     *
     * @var string
     */
    public $shopId;

    /**
     * @description This parameter is required.
     *
     * @example WORKING
     *
     * @var string
     */
    public $shopStatus;
    protected $_name = [
        'shopId'     => 'shopId',
        'shopStatus' => 'shopStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->shopId) {
            $res['shopId'] = $this->shopId;
        }
        if (null !== $this->shopStatus) {
            $res['shopStatus'] = $this->shopStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ShopStatusChangeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['shopId'])) {
            $model->shopId = $map['shopId'];
        }
        if (isset($map['shopStatus'])) {
            $model->shopStatus = $map['shopStatus'];
        }

        return $model;
    }
}
