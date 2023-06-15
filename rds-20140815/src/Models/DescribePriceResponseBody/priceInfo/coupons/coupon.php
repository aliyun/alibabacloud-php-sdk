<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponseBody\priceInfo\coupons;

use AlibabaCloud\Tea\Model;

class coupon extends Model
{
    /**
     * @description The ID of the coupon.
     *
     * @example 123456
     *
     * @var string
     */
    public $couponNo;

    /**
     * @description The description of the coupon.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the coupon is selected.
     *
     * @example true
     *
     * @var string
     */
    public $isSelected;

    /**
     * @description The name of the coupon.
     *
     * @example test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'couponNo'    => 'CouponNo',
        'description' => 'Description',
        'isSelected'  => 'IsSelected',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->isSelected) {
            $res['IsSelected'] = $this->isSelected;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IsSelected'])) {
            $model->isSelected = $map['IsSelected'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
