<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Tea\Model;

class DataSolutionSegmentBaggageMappingListPassengerBaggageAllowanceMappingValue extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $baggageAmount;

    /**
     * @example 10
     *
     * @var int
     */
    public $baggageWeight;

    /**
     * @example KG
     *
     * @var string
     */
    public $baggageWeightUnit;

    /**
     * @example true
     *
     * @var bool
     */
    public $isAllWeight;

    /**
     * @example 1
     *
     * @var int
     */
    public $carryOnAmount;

    /**
     * @example 5
     *
     * @var int
     */
    public $carryOnWeight;

    /**
     * @example KG
     *
     * @var string
     */
    public $carryOnWeightUnit;

    /**
     * @example true
     *
     * @var bool
     */
    public $isAllCarryOnWeight;
    protected $_name = [
        'baggageAmount'      => 'baggage_amount',
        'baggageWeight'      => 'baggage_weight',
        'baggageWeightUnit'  => 'baggage_weight_unit',
        'isAllWeight'        => 'is_all_weight',
        'carryOnAmount'      => 'carry_on_amount',
        'carryOnWeight'      => 'carry_on_weight',
        'carryOnWeightUnit'  => 'carry_on_weight_unit',
        'isAllCarryOnWeight' => 'is_all_carry_on_weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baggageAmount) {
            $res['baggage_amount'] = $this->baggageAmount;
        }
        if (null !== $this->baggageWeight) {
            $res['baggage_weight'] = $this->baggageWeight;
        }
        if (null !== $this->baggageWeightUnit) {
            $res['baggage_weight_unit'] = $this->baggageWeightUnit;
        }
        if (null !== $this->isAllWeight) {
            $res['is_all_weight'] = $this->isAllWeight;
        }
        if (null !== $this->carryOnAmount) {
            $res['carry_on_amount'] = $this->carryOnAmount;
        }
        if (null !== $this->carryOnWeight) {
            $res['carry_on_weight'] = $this->carryOnWeight;
        }
        if (null !== $this->carryOnWeightUnit) {
            $res['carry_on_weight_unit'] = $this->carryOnWeightUnit;
        }
        if (null !== $this->isAllCarryOnWeight) {
            $res['is_all_carry_on_weight'] = $this->isAllCarryOnWeight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataSolutionSegmentBaggageMappingListPassengerBaggageAllowanceMappingValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['baggage_amount'])) {
            $model->baggageAmount = $map['baggage_amount'];
        }
        if (isset($map['baggage_weight'])) {
            $model->baggageWeight = $map['baggage_weight'];
        }
        if (isset($map['baggage_weight_unit'])) {
            $model->baggageWeightUnit = $map['baggage_weight_unit'];
        }
        if (isset($map['is_all_weight'])) {
            $model->isAllWeight = $map['is_all_weight'];
        }
        if (isset($map['carry_on_amount'])) {
            $model->carryOnAmount = $map['carry_on_amount'];
        }
        if (isset($map['carry_on_weight'])) {
            $model->carryOnWeight = $map['carry_on_weight'];
        }
        if (isset($map['carry_on_weight_unit'])) {
            $model->carryOnWeightUnit = $map['carry_on_weight_unit'];
        }
        if (isset($map['is_all_carry_on_weight'])) {
            $model->isAllCarryOnWeight = $map['is_all_carry_on_weight'];
        }

        return $model;
    }
}
