<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByEntityResponseBody\data\ruleChecks;

use AlibabaCloud\Tea\Model;

class referenceValue extends Model
{
    /**
     * @var string
     */
    public $discreteProperty;

    /**
     * @var float
     */
    public $value;

    /**
     * @var string
     */
    public $bizDate;

    /**
     * @var int
     */
    public $singleCheckResult;

    /**
     * @var float
     */
    public $threshold;
    protected $_name = [
        'discreteProperty'  => 'DiscreteProperty',
        'value'             => 'Value',
        'bizDate'           => 'BizDate',
        'singleCheckResult' => 'SingleCheckResult',
        'threshold'         => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->discreteProperty) {
            $res['DiscreteProperty'] = $this->discreteProperty;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->singleCheckResult) {
            $res['SingleCheckResult'] = $this->singleCheckResult;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
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
        if (isset($map['DiscreteProperty'])) {
            $model->discreteProperty = $map['DiscreteProperty'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['SingleCheckResult'])) {
            $model->singleCheckResult = $map['SingleCheckResult'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
