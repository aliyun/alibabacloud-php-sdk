<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class CssInstanceCommodity extends Model
{
    /**
     * @var int
     */
    public $activityId;

    /**
     * @var string
     */
    public $aliyunProduceCode;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var CssInstanceComponent[]
     */
    public $components;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isFree;

    /**
     * @var bool
     */
    public $isPrePayPostCharge;

    /**
     * @var bool
     */
    public $isRenewChange;

    /**
     * @var bool
     */
    public $isSyncToSubscription;

    /**
     * @var string[]
     */
    public $orderParams;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var int
     */
    public $planItemId;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var string[]
     */
    public $redeemNoList;

    /**
     * @var string
     */
    public $redeemOrderType;

    /**
     * @var string
     */
    public $refundSpecCode;

    /**
     * @var string
     */
    public $specCode;

    /**
     * @var string[]
     */
    public $specUpgradeOriginSpecCodes;

    /**
     * @var int
     */
    public $specifyStartDate;

    /**
     * @var bool
     */
    public $upgradeInquireFinancialValue;
    protected $_name = [
        'activityId' => 'activityId',
        'aliyunProduceCode' => 'aliyunProduceCode',
        'chargeType' => 'chargeType',
        'commodityCode' => 'commodityCode',
        'components' => 'components',
        'duration' => 'duration',
        'instanceId' => 'instanceId',
        'isFree' => 'isFree',
        'isPrePayPostCharge' => 'isPrePayPostCharge',
        'isRenewChange' => 'isRenewChange',
        'isSyncToSubscription' => 'isSyncToSubscription',
        'orderParams' => 'orderParams',
        'orderType' => 'orderType',
        'planItemId' => 'planItemId',
        'pricingCycle' => 'pricingCycle',
        'quantity' => 'quantity',
        'redeemNoList' => 'redeemNoList',
        'redeemOrderType' => 'redeemOrderType',
        'refundSpecCode' => 'refundSpecCode',
        'specCode' => 'specCode',
        'specUpgradeOriginSpecCodes' => 'specUpgradeOriginSpecCodes',
        'specifyStartDate' => 'specifyStartDate',
        'upgradeInquireFinancialValue' => 'upgradeInquireFinancialValue',
    ];

    public function validate()
    {
        if (\is_array($this->components)) {
            Model::validateArray($this->components);
        }
        if (\is_array($this->orderParams)) {
            Model::validateArray($this->orderParams);
        }
        if (\is_array($this->redeemNoList)) {
            Model::validateArray($this->redeemNoList);
        }
        if (\is_array($this->specUpgradeOriginSpecCodes)) {
            Model::validateArray($this->specUpgradeOriginSpecCodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['activityId'] = $this->activityId;
        }

        if (null !== $this->aliyunProduceCode) {
            $res['aliyunProduceCode'] = $this->aliyunProduceCode;
        }

        if (null !== $this->chargeType) {
            $res['chargeType'] = $this->chargeType;
        }

        if (null !== $this->commodityCode) {
            $res['commodityCode'] = $this->commodityCode;
        }

        if (null !== $this->components) {
            if (\is_array($this->components)) {
                $res['components'] = [];
                $n1 = 0;
                foreach ($this->components as $item1) {
                    $res['components'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->isFree) {
            $res['isFree'] = $this->isFree;
        }

        if (null !== $this->isPrePayPostCharge) {
            $res['isPrePayPostCharge'] = $this->isPrePayPostCharge;
        }

        if (null !== $this->isRenewChange) {
            $res['isRenewChange'] = $this->isRenewChange;
        }

        if (null !== $this->isSyncToSubscription) {
            $res['isSyncToSubscription'] = $this->isSyncToSubscription;
        }

        if (null !== $this->orderParams) {
            if (\is_array($this->orderParams)) {
                $res['orderParams'] = [];
                foreach ($this->orderParams as $key1 => $value1) {
                    $res['orderParams'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->orderType) {
            $res['orderType'] = $this->orderType;
        }

        if (null !== $this->planItemId) {
            $res['planItemId'] = $this->planItemId;
        }

        if (null !== $this->pricingCycle) {
            $res['pricingCycle'] = $this->pricingCycle;
        }

        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
        }

        if (null !== $this->redeemNoList) {
            if (\is_array($this->redeemNoList)) {
                $res['redeemNoList'] = [];
                $n1 = 0;
                foreach ($this->redeemNoList as $item1) {
                    $res['redeemNoList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->redeemOrderType) {
            $res['redeemOrderType'] = $this->redeemOrderType;
        }

        if (null !== $this->refundSpecCode) {
            $res['refundSpecCode'] = $this->refundSpecCode;
        }

        if (null !== $this->specCode) {
            $res['specCode'] = $this->specCode;
        }

        if (null !== $this->specUpgradeOriginSpecCodes) {
            if (\is_array($this->specUpgradeOriginSpecCodes)) {
                $res['specUpgradeOriginSpecCodes'] = [];
                $n1 = 0;
                foreach ($this->specUpgradeOriginSpecCodes as $item1) {
                    $res['specUpgradeOriginSpecCodes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->specifyStartDate) {
            $res['specifyStartDate'] = $this->specifyStartDate;
        }

        if (null !== $this->upgradeInquireFinancialValue) {
            $res['upgradeInquireFinancialValue'] = $this->upgradeInquireFinancialValue;
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
        if (isset($map['activityId'])) {
            $model->activityId = $map['activityId'];
        }

        if (isset($map['aliyunProduceCode'])) {
            $model->aliyunProduceCode = $map['aliyunProduceCode'];
        }

        if (isset($map['chargeType'])) {
            $model->chargeType = $map['chargeType'];
        }

        if (isset($map['commodityCode'])) {
            $model->commodityCode = $map['commodityCode'];
        }

        if (isset($map['components'])) {
            if (!empty($map['components'])) {
                $model->components = [];
                $n1 = 0;
                foreach ($map['components'] as $item1) {
                    $model->components[$n1++] = CssInstanceComponent::fromMap($item1);
                }
            }
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['isFree'])) {
            $model->isFree = $map['isFree'];
        }

        if (isset($map['isPrePayPostCharge'])) {
            $model->isPrePayPostCharge = $map['isPrePayPostCharge'];
        }

        if (isset($map['isRenewChange'])) {
            $model->isRenewChange = $map['isRenewChange'];
        }

        if (isset($map['isSyncToSubscription'])) {
            $model->isSyncToSubscription = $map['isSyncToSubscription'];
        }

        if (isset($map['orderParams'])) {
            if (!empty($map['orderParams'])) {
                $model->orderParams = [];
                foreach ($map['orderParams'] as $key1 => $value1) {
                    $model->orderParams[$key1] = $value1;
                }
            }
        }

        if (isset($map['orderType'])) {
            $model->orderType = $map['orderType'];
        }

        if (isset($map['planItemId'])) {
            $model->planItemId = $map['planItemId'];
        }

        if (isset($map['pricingCycle'])) {
            $model->pricingCycle = $map['pricingCycle'];
        }

        if (isset($map['quantity'])) {
            $model->quantity = $map['quantity'];
        }

        if (isset($map['redeemNoList'])) {
            if (!empty($map['redeemNoList'])) {
                $model->redeemNoList = [];
                $n1 = 0;
                foreach ($map['redeemNoList'] as $item1) {
                    $model->redeemNoList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['redeemOrderType'])) {
            $model->redeemOrderType = $map['redeemOrderType'];
        }

        if (isset($map['refundSpecCode'])) {
            $model->refundSpecCode = $map['refundSpecCode'];
        }

        if (isset($map['specCode'])) {
            $model->specCode = $map['specCode'];
        }

        if (isset($map['specUpgradeOriginSpecCodes'])) {
            if (!empty($map['specUpgradeOriginSpecCodes'])) {
                $model->specUpgradeOriginSpecCodes = [];
                $n1 = 0;
                foreach ($map['specUpgradeOriginSpecCodes'] as $item1) {
                    $model->specUpgradeOriginSpecCodes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['specifyStartDate'])) {
            $model->specifyStartDate = $map['specifyStartDate'];
        }

        if (isset($map['upgradeInquireFinancialValue'])) {
            $model->upgradeInquireFinancialValue = $map['upgradeInquireFinancialValue'];
        }

        return $model;
    }
}
