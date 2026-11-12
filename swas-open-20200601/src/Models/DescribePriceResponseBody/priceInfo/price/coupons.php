<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribePriceResponseBody\priceInfo\price;

use AlibabaCloud\Dara\Model;

class coupons extends Model
{
    /**
     * @var string
     */
    public $couponNo;

    /**
     * @var string
     */
    public $description;

    /**
     * @var float
     */
    public $discountOff;

    /**
     * @var bool
     */
    public $isSelected;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $optionCode;
    protected $_name = [
        'couponNo' => 'CouponNo',
        'description' => 'Description',
        'discountOff' => 'DiscountOff',
        'isSelected' => 'IsSelected',
        'name' => 'Name',
        'optionCode' => 'OptionCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->discountOff) {
            $res['DiscountOff'] = $this->discountOff;
        }

        if (null !== $this->isSelected) {
            $res['IsSelected'] = $this->isSelected;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->optionCode) {
            $res['OptionCode'] = $this->optionCode;
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
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DiscountOff'])) {
            $model->discountOff = $map['DiscountOff'];
        }

        if (isset($map['IsSelected'])) {
            $model->isSelected = $map['IsSelected'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OptionCode'])) {
            $model->optionCode = $map['OptionCode'];
        }

        return $model;
    }
}
