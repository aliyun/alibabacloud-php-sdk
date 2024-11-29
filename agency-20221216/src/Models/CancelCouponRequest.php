<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Tea\Model;

class CancelCouponRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 501001340370350
     *
     * @var int
     */
    public $couponId;
    protected $_name = [
        'couponId' => 'CouponId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->couponId) {
            $res['CouponId'] = $this->couponId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelCouponRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CouponId'])) {
            $model->couponId = $map['CouponId'];
        }

        return $model;
    }
}
