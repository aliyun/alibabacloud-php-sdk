<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class CreateSavingsPlansInstanceRequest extends Model
{
    /**
     * @example savingplan_common_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example 1
     *
     * @var string
     */
    public $duration;

    /**
     * @example 2021-12-31T00:00:00Z
     *
     * @var string
     */
    public $effectiveDate;

    /**
     * @example total
     *
     * @var string
     */
    public $payMode;

    /**
     * @example 0.1
     *
     * @var string
     */
    public $poolValue;

    /**
     * @example Year
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @example family
     *
     * @var string
     */
    public $specType;

    /**
     * @example ecs.g6
     *
     * @var string
     */
    public $specification;

    /**
     * @example univeral
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'duration'      => 'Duration',
        'effectiveDate' => 'EffectiveDate',
        'payMode'       => 'PayMode',
        'poolValue'     => 'PoolValue',
        'pricingCycle'  => 'PricingCycle',
        'region'        => 'Region',
        'specType'      => 'SpecType',
        'specification' => 'Specification',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->effectiveDate) {
            $res['EffectiveDate'] = $this->effectiveDate;
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

    /**
     * @param array $map
     *
     * @return CreateSavingsPlansInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EffectiveDate'])) {
            $model->effectiveDate = $map['EffectiveDate'];
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
