<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;

class CreateSavingsPlansInstanceRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $effectiveDate;

    /**
     * @var string[]
     */
    public $extendMap;

    /**
     * @var string
     */
    public $payMode;

    /**
     * @var string
     */
    public $poolValue;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $specType;

    /**
     * @var string
     */
    public $specification;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'commodityCode' => 'CommodityCode',
        'duration' => 'Duration',
        'effectiveDate' => 'EffectiveDate',
        'extendMap' => 'ExtendMap',
        'payMode' => 'PayMode',
        'poolValue' => 'PoolValue',
        'pricingCycle' => 'PricingCycle',
        'region' => 'Region',
        'specType' => 'SpecType',
        'specification' => 'Specification',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->extendMap)) {
            Model::validateArray($this->extendMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->effectiveDate) {
            $res['EffectiveDate'] = $this->effectiveDate;
        }

        if (null !== $this->extendMap) {
            if (\is_array($this->extendMap)) {
                $res['ExtendMap'] = [];
                foreach ($this->extendMap as $key1 => $value1) {
                    $res['ExtendMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->payMode) {
            $res['PayMode'] = $this->payMode;
        }

        if (null !== $this->poolValue) {
            $res['PoolValue'] = $this->poolValue;
        }

        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }

        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['EffectiveDate'])) {
            $model->effectiveDate = $map['EffectiveDate'];
        }

        if (isset($map['ExtendMap'])) {
            if (!empty($map['ExtendMap'])) {
                $model->extendMap = [];
                foreach ($map['ExtendMap'] as $key1 => $value1) {
                    $model->extendMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['PayMode'])) {
            $model->payMode = $map['PayMode'];
        }

        if (isset($map['PoolValue'])) {
            $model->poolValue = $map['PoolValue'];
        }

        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }

        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
