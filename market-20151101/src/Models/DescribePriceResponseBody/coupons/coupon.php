<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribePriceResponseBody\coupons;

use AlibabaCloud\Tea\Model;

class coupon extends Model
{
    /**
     * @var float
     */
    public $canPromFee;

    /**
     * @var string
     */
    public $couponDesc;

    /**
     * @var string
     */
    public $couponName;

    /**
     * @var string
     */
    public $couponOptionCode;

    /**
     * @var string
     */
    public $couponOptionNo;

    /**
     * @var bool
     */
    public $isSelected;
    protected $_name = [
        'canPromFee'       => 'CanPromFee',
        'couponDesc'       => 'CouponDesc',
        'couponName'       => 'CouponName',
        'couponOptionCode' => 'CouponOptionCode',
        'couponOptionNo'   => 'CouponOptionNo',
        'isSelected'       => 'IsSelected',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canPromFee) {
            $res['CanPromFee'] = $this->canPromFee;
        }
        if (null !== $this->couponDesc) {
            $res['CouponDesc'] = $this->couponDesc;
        }
        if (null !== $this->couponName) {
            $res['CouponName'] = $this->couponName;
        }
        if (null !== $this->couponOptionCode) {
            $res['CouponOptionCode'] = $this->couponOptionCode;
        }
        if (null !== $this->couponOptionNo) {
            $res['CouponOptionNo'] = $this->couponOptionNo;
        }
        if (null !== $this->isSelected) {
            $res['IsSelected'] = $this->isSelected;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return coupon
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanPromFee'])) {
            $model->canPromFee = $map['CanPromFee'];
        }
        if (isset($map['CouponDesc'])) {
            $model->couponDesc = $map['CouponDesc'];
        }
        if (isset($map['CouponName'])) {
            $model->couponName = $map['CouponName'];
        }
        if (isset($map['CouponOptionCode'])) {
            $model->couponOptionCode = $map['CouponOptionCode'];
        }
        if (isset($map['CouponOptionNo'])) {
            $model->couponOptionNo = $map['CouponOptionNo'];
        }
        if (isset($map['IsSelected'])) {
            $model->isSelected = $map['IsSelected'];
        }

        return $model;
    }
}
