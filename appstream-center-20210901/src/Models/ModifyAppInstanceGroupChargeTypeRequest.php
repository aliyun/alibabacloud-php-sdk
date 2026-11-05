<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ModifyAppInstanceGroupChargeTypeRequest extends Model
{
    /**
     * @var string[]
     */
    public $appInstanceGroupIds;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @var string
     */
    public $chargeType;

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
    protected $_name = [
        'appInstanceGroupIds' => 'AppInstanceGroupIds',
        'autoPay' => 'AutoPay',
        'autoRenew' => 'AutoRenew',
        'bizRegionId' => 'BizRegionId',
        'chargeType' => 'ChargeType',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'productType' => 'ProductType',
        'promotionId' => 'PromotionId',
    ];

    public function validate()
    {
        if (\is_array($this->appInstanceGroupIds)) {
            Model::validateArray($this->appInstanceGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceGroupIds) {
            if (\is_array($this->appInstanceGroupIds)) {
                $res['AppInstanceGroupIds'] = [];
                $n1 = 0;
                foreach ($this->appInstanceGroupIds as $item1) {
                    $res['AppInstanceGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceGroupIds'])) {
            if (!empty($map['AppInstanceGroupIds'])) {
                $model->appInstanceGroupIds = [];
                $n1 = 0;
                foreach ($map['AppInstanceGroupIds'] as $item1) {
                    $model->appInstanceGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
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

        return $model;
    }
}
