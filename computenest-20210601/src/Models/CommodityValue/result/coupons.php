<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\CommodityValue\result;

use AlibabaCloud\Tea\Model;

class coupons extends Model
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
    public $couponOptionNo;

    /**
     * @var bool
     */
    public $selected;
    protected $_name = [
        'canPromFee'     => 'CanPromFee',
        'couponDesc'     => 'CouponDesc',
        'couponName'     => 'CouponName',
        'couponOptionNo' => 'CouponOptionNo',
        'selected'       => 'Selected',
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
        if (null !== $this->couponOptionNo) {
            $res['CouponOptionNo'] = $this->couponOptionNo;
        }
        if (null !== $this->selected) {
            $res['Selected'] = $this->selected;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return coupons
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
        if (isset($map['CouponOptionNo'])) {
            $model->couponOptionNo = $map['CouponOptionNo'];
        }
        if (isset($map['Selected'])) {
            $model->selected = $map['Selected'];
        }

        return $model;
    }
}
