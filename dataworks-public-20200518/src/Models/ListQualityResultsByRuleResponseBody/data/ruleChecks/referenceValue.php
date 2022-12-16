<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByRuleResponseBody\data\ruleChecks;

use AlibabaCloud\Tea\Model;

class referenceValue extends Model
{
    /**
     * @example 1600704000000
     *
     * @var string
     */
    public $bizDate;

    /**
     * @example type1
     *
     * @var string
     */
    public $discreteProperty;

    /**
     * @example 2
     *
     * @var int
     */
    public $singleCheckResult;

    /**
     * @example 0.2
     *
     * @var float
     */
    public $threshold;

    /**
     * @example 20
     *
     * @var float
     */
    public $value;
    protected $_name = [
        'bizDate'           => 'BizDate',
        'discreteProperty'  => 'DiscreteProperty',
        'singleCheckResult' => 'SingleCheckResult',
        'threshold'         => 'Threshold',
        'value'             => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->discreteProperty) {
            $res['DiscreteProperty'] = $this->discreteProperty;
        }
        if (null !== $this->singleCheckResult) {
            $res['SingleCheckResult'] = $this->singleCheckResult;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return referenceValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['DiscreteProperty'])) {
            $model->discreteProperty = $map['DiscreteProperty'];
        }
        if (isset($map['SingleCheckResult'])) {
            $model->singleCheckResult = $map['SingleCheckResult'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
