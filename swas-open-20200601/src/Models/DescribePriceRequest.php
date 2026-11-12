<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribePriceRequest\promotionOptions;

class DescribePriceRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $commodityType;

    /**
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var string
     */
    public $priceUnit;

    /**
     * @var promotionOptions
     */
    public $promotionOptions;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'amount' => 'Amount',
        'commodityType' => 'CommodityType',
        'dataDiskSize' => 'DataDiskSize',
        'instanceId' => 'InstanceId',
        'orderType' => 'OrderType',
        'payType' => 'PayType',
        'period' => 'Period',
        'planId' => 'PlanId',
        'priceUnit' => 'PriceUnit',
        'promotionOptions' => 'PromotionOptions',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (null !== $this->promotionOptions) {
            $this->promotionOptions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->commodityType) {
            $res['CommodityType'] = $this->commodityType;
        }

        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }

        if (null !== $this->priceUnit) {
            $res['PriceUnit'] = $this->priceUnit;
        }

        if (null !== $this->promotionOptions) {
            $res['PromotionOptions'] = null !== $this->promotionOptions ? $this->promotionOptions->toArray($noStream) : $this->promotionOptions;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['CommodityType'])) {
            $model->commodityType = $map['CommodityType'];
        }

        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }

        if (isset($map['PriceUnit'])) {
            $model->priceUnit = $map['PriceUnit'];
        }

        if (isset($map['PromotionOptions'])) {
            $model->promotionOptions = promotionOptions::fromMap($map['PromotionOptions']);
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
