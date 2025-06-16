<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class DataSolutionListSegmentBaggageMappingListPassengerBaggageAllowanceMappingValue extends Model
{
    /**
     * @var int
     */
    public $baggageAmount;

    /**
     * @var int
     */
    public $baggageWeight;

    /**
     * @var string
     */
    public $baggageWeightUnit;

    /**
     * @var bool
     */
    public $isAllWeight;

    /**
     * @var int
     */
    public $carryOnAmount;

    /**
     * @var int
     */
    public $carryOnWeight;

    /**
     * @var string
     */
    public $carryOnWeightUnit;

    /**
     * @var bool
     */
    public $isAllCarryOnWeight;
    protected $_name = [
        'baggageAmount' => 'baggage_amount',
        'baggageWeight' => 'baggage_weight',
        'baggageWeightUnit' => 'baggage_weight_unit',
        'isAllWeight' => 'is_all_weight',
        'carryOnAmount' => 'carry_on_amount',
        'carryOnWeight' => 'carry_on_weight',
        'carryOnWeightUnit' => 'carry_on_weight_unit',
        'isAllCarryOnWeight' => 'is_all_carry_on_weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
