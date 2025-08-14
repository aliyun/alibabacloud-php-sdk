<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntlMarket\V20250812\Models\DescribePriceResponseBody;

use AlibabaCloud\Dara\Model;

class coupons extends Model
{
    /**
     * @var int
     */
    public $canPromFee;

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

    /**
     * @var string
     */
    public $promotionDesc;
    protected $_name = [
        'canPromFee' => 'CanPromFee',
        'couponName' => 'CouponName',
        'couponOptionCode' => 'CouponOptionCode',
        'couponOptionNo' => 'CouponOptionNo',
        'isSelected' => 'IsSelected',
        'promotionDesc' => 'PromotionDesc',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canPromFee) {
            $res['CanPromFee'] = $this->canPromFee;
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

        if (null !== $this->promotionDesc) {
            $res['PromotionDesc'] = $this->promotionDesc;
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
        if (isset($map['CanPromFee'])) {
            $model->canPromFee = $map['CanPromFee'];
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

        if (isset($map['PromotionDesc'])) {
            $model->promotionDesc = $map['PromotionDesc'];
        }

        return $model;
    }
}
