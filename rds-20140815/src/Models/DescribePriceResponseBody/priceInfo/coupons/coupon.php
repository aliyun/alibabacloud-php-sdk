<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponseBody\priceInfo\coupons;

use AlibabaCloud\Tea\Model;

class coupon extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $isSelected;

    /**
     * @var string
     */
    public $couponNo;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'Description',
        'isSelected'  => 'IsSelected',
        'couponNo'    => 'CouponNo',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->isSelected) {
            $res['IsSelected'] = $this->isSelected;
        }
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IsSelected'])) {
            $model->isSelected = $map['IsSelected'];
        }
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
