<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class DataSolutionSegmentBaggageMappingListPassengerBaggageAllowanceMappingValue extends Model
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

    /**
     * @var int
     */
    public $carryLength;

    /**
     * @var int
     */
    public $carryWidth;

    /**
     * @var int
     */
    public $carryHeight;

    /**
     * @var int
     */
    public $carrySumOfLengthWidthHeight;

    /**
     * @var int
     */
    public $length;

    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $sumOfLengthWidthHeight;
    protected $_name = [
        'baggageAmount' => 'baggage_amount',
        'baggageWeight' => 'baggage_weight',
        'baggageWeightUnit' => 'baggage_weight_unit',
        'isAllWeight' => 'is_all_weight',
        'carryOnAmount' => 'carry_on_amount',
        'carryOnWeight' => 'carry_on_weight',
        'carryOnWeightUnit' => 'carry_on_weight_unit',
        'isAllCarryOnWeight' => 'is_all_carry_on_weight',
        'carryLength' => 'carry_length',
        'carryWidth' => 'carry_width',
        'carryHeight' => 'carry_height',
        'carrySumOfLengthWidthHeight' => 'carry_sum_of_length_width_height',
        'length' => 'length',
        'width' => 'width',
        'height' => 'height',
        'sumOfLengthWidthHeight' => 'sum_of_length_width_height',
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

        if (null !== $this->carryLength) {
            $res['carry_length'] = $this->carryLength;
        }

        if (null !== $this->carryWidth) {
            $res['carry_width'] = $this->carryWidth;
        }

        if (null !== $this->carryHeight) {
            $res['carry_height'] = $this->carryHeight;
        }

        if (null !== $this->carrySumOfLengthWidthHeight) {
            $res['carry_sum_of_length_width_height'] = $this->carrySumOfLengthWidthHeight;
        }

        if (null !== $this->length) {
            $res['length'] = $this->length;
        }

        if (null !== $this->width) {
            $res['width'] = $this->width;
        }

        if (null !== $this->height) {
            $res['height'] = $this->height;
        }

        if (null !== $this->sumOfLengthWidthHeight) {
            $res['sum_of_length_width_height'] = $this->sumOfLengthWidthHeight;
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

        if (isset($map['carry_length'])) {
            $model->carryLength = $map['carry_length'];
        }

        if (isset($map['carry_width'])) {
            $model->carryWidth = $map['carry_width'];
        }

        if (isset($map['carry_height'])) {
            $model->carryHeight = $map['carry_height'];
        }

        if (isset($map['carry_sum_of_length_width_height'])) {
            $model->carrySumOfLengthWidthHeight = $map['carry_sum_of_length_width_height'];
        }

        if (isset($map['length'])) {
            $model->length = $map['length'];
        }

        if (isset($map['width'])) {
            $model->width = $map['width'];
        }

        if (isset($map['height'])) {
            $model->height = $map['height'];
        }

        if (isset($map['sum_of_length_width_height'])) {
            $model->sumOfLengthWidthHeight = $map['sum_of_length_width_height'];
        }

        return $model;
    }
}
