<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class CreateCommodityOrderShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $componentsShrink;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $orderParamsShrink;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var string
     */
    public $specCode;
    protected $_name = [
        'bizType'           => 'BizType',
        'chargeType'        => 'ChargeType',
        'clientToken'       => 'ClientToken',
        'commodityCode'     => 'CommodityCode',
        'componentsShrink'  => 'Components',
        'duration'          => 'Duration',
        'instanceId'        => 'InstanceId',
        'orderParamsShrink' => 'OrderParams',
        'orderType'         => 'OrderType',
        'pricingCycle'      => 'PricingCycle',
        'quantity'          => 'Quantity',
        'specCode'          => 'SpecCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->componentsShrink) {
            $res['Components'] = $this->componentsShrink;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->orderParamsShrink) {
            $res['OrderParams'] = $this->orderParamsShrink;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->specCode) {
            $res['SpecCode'] = $this->specCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCommodityOrderShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['Components'])) {
            $model->componentsShrink = $map['Components'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OrderParams'])) {
            $model->orderParamsShrink = $map['OrderParams'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['SpecCode'])) {
            $model->specCode = $map['SpecCode'];
        }

        return $model;
    }
}
