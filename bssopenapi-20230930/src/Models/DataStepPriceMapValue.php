<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DataStepPriceMapValue extends Model
{
    /**
     * @var bool
     */
    public $rightClose;

    /**
     * @var string
     */
    public $min;

    /**
     * @var string
     */
    public $max;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var bool
     */
    public $leftClose;

    /**
     * @var string
     */
    public $stepPriceValue;

    /**
     * @var string
     */
    public $priceValueType;

    /**
     * @var string
     */
    public $priceValue;

    /**
     * @var string
     */
    public $deductCycleType;
    protected $_name = [
        'rightClose' => 'RightClose',
        'min' => 'Min',
        'max' => 'Max',
        'currency' => 'Currency',
        'leftClose' => 'LeftClose',
        'stepPriceValue' => 'StepPriceValue',
        'priceValueType' => 'PriceValueType',
        'priceValue' => 'PriceValue',
        'deductCycleType' => 'DeductCycleType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rightClose) {
            $res['RightClose'] = $this->rightClose;
        }

        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }

        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }

        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->leftClose) {
            $res['LeftClose'] = $this->leftClose;
        }

        if (null !== $this->stepPriceValue) {
            $res['StepPriceValue'] = $this->stepPriceValue;
        }

        if (null !== $this->priceValueType) {
            $res['PriceValueType'] = $this->priceValueType;
        }

        if (null !== $this->priceValue) {
            $res['PriceValue'] = $this->priceValue;
        }

        if (null !== $this->deductCycleType) {
            $res['DeductCycleType'] = $this->deductCycleType;
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
        if (isset($map['RightClose'])) {
            $model->rightClose = $map['RightClose'];
        }

        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }

        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }

        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['LeftClose'])) {
            $model->leftClose = $map['LeftClose'];
        }

        if (isset($map['StepPriceValue'])) {
            $model->stepPriceValue = $map['StepPriceValue'];
        }

        if (isset($map['PriceValueType'])) {
            $model->priceValueType = $map['PriceValueType'];
        }

        if (isset($map['PriceValue'])) {
            $model->priceValue = $map['PriceValue'];
        }

        if (isset($map['DeductCycleType'])) {
            $model->deductCycleType = $map['DeductCycleType'];
        }

        return $model;
    }
}
