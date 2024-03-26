<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResellerTrade\V20191227\Models;

use AlibabaCloud\Tea\Model;

class DiscardCouponListRequest extends Model
{
    /**
     * @var int[]
     */
    public $couponList;
    protected $_name = [
        'couponList' => 'CouponList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->couponList) {
            $res['CouponList'] = $this->couponList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DiscardCouponListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CouponList'])) {
            if (!empty($map['CouponList'])) {
                $model->couponList = $map['CouponList'];
            }
        }

        return $model;
    }
}
