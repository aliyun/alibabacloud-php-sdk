<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRenewalPriceResponseBody\order\coupons;

use AlibabaCloud\Dara\Model;

class coupon extends Model
{
    /**
     * @var mixed[]
     */
    public $activityExtInfo;

    /**
     * @var string
     */
    public $couponNo;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $effective;

    /**
     * @var string
     */
    public $isSelected;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'activityExtInfo' => 'ActivityExtInfo',
        'couponNo' => 'CouponNo',
        'description' => 'Description',
        'effective' => 'Effective',
        'isSelected' => 'IsSelected',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->activityExtInfo)) {
            Model::validateArray($this->activityExtInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityExtInfo) {
            if (\is_array($this->activityExtInfo)) {
                $res['ActivityExtInfo'] = [];
                foreach ($this->activityExtInfo as $key1 => $value1) {
                    $res['ActivityExtInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->effective) {
            $res['Effective'] = $this->effective;
        }

        if (null !== $this->isSelected) {
            $res['IsSelected'] = $this->isSelected;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['ActivityExtInfo'])) {
            if (!empty($map['ActivityExtInfo'])) {
                $model->activityExtInfo = [];
                foreach ($map['ActivityExtInfo'] as $key1 => $value1) {
                    $model->activityExtInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Effective'])) {
            $model->effective = $map['Effective'];
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
