<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class RenewAppInstanceGroupShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $promotionId;

    /**
     * @var int
     */
    public $renewAmount;

    /**
     * @var string
     */
    public $renewMode;

    /**
     * @var string
     */
    public $renewNodesShrink;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'autoPay' => 'AutoPay',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'productType' => 'ProductType',
        'promotionId' => 'PromotionId',
        'renewAmount' => 'RenewAmount',
        'renewMode' => 'RenewMode',
        'renewNodesShrink' => 'RenewNodes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }

        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }

        if (null !== $this->renewAmount) {
            $res['RenewAmount'] = $this->renewAmount;
        }

        if (null !== $this->renewMode) {
            $res['RenewMode'] = $this->renewMode;
        }

        if (null !== $this->renewNodesShrink) {
            $res['RenewNodes'] = $this->renewNodesShrink;
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
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }

        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }

        if (isset($map['RenewAmount'])) {
            $model->renewAmount = $map['RenewAmount'];
        }

        if (isset($map['RenewMode'])) {
            $model->renewMode = $map['RenewMode'];
        }

        if (isset($map['RenewNodes'])) {
            $model->renewNodesShrink = $map['RenewNodes'];
        }

        return $model;
    }
}
