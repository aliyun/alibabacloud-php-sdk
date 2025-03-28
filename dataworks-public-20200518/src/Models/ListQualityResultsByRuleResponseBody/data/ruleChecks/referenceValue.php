<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByRuleResponseBody\data\ruleChecks;

use AlibabaCloud\Dara\Model;

class referenceValue extends Model
{
    /**
     * @var string
     */
    public $bizDate;

    /**
     * @var string
     */
    public $discreteProperty;

    /**
     * @var int
     */
    public $singleCheckResult;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var float
     */
    public $value;
    protected $_name = [
        'bizDate' => 'BizDate',
        'discreteProperty' => 'DiscreteProperty',
        'singleCheckResult' => 'SingleCheckResult',
        'threshold' => 'Threshold',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
