<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class CreateSavingsPlansInstanceRequest extends Model
{
    /**
     * @description The code of the service.
     *
     * @example savingplan_common_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The service duration. This parameter is used together with the PricingCycle parameter.
     *
     * @example 1
     *
     * @var string
     */
    public $duration;

    /**
     * @description The time when the savings plan takes effect. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2021-12-31T00:00:00Z
     *
     * @var string
     */
    public $effectiveDate;

    /**
     * @description The payment mode. Valid values:
     *
     *   total: all upfront
     *   half: partial upfront
     *   zero: no upfront
     *
     * @example total
     *
     * @var string
     */
    public $payMode;

    /**
     * @description The contracted amount. unit: CNY
     *
     * @example 0.1
     *
     * @var string
     */
    public $poolValue;

    /**
     * @description The unit of the service duration. This parameter is used together with the During parameter. Valid values:
     *
     *   Year
     *   Month
     *
     * @example Year
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description The ID of the region in which you create the savings plan. You must specify this parameter if the Type parameter is not set to universal.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The specification type. This parameter is used together with the Specification parameter. You must specify this parameter if the Type parameter is not set to universal. Valid values:
     *
     *   group: specification group
     *   family: specification family
     *
     * @example family
     *
     * @var string
     */
    public $specType;

    /**
     * @description The specifications of the savings plan. This parameter is used together with the SpecType parameter.
     *
     * @example ecs.g6
     *
     * @var string
     */
    public $specification;

    /**
     * @description The type of the savings plan. Valid values:
     *
     *   universal: general-purpose type
     *   ecs: ECS compute type
     *   elasticy: elastic type
     *
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
