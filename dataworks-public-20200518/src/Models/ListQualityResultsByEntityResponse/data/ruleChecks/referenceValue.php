<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByEntityResponse\data\ruleChecks;

use AlibabaCloud\Tea\Model;

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
     * @var float
     */
    public $value;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var int
     */
    public $singleCheckResult;
    protected $_name = [
        'bizDate'           => 'BizDate',
        'discreteProperty'  => 'DiscreteProperty',
        'value'             => 'Value',
        'threshold'         => 'Threshold',
        'singleCheckResult' => 'SingleCheckResult',
    ];

    public function validate()
    {
        Model::validateRequired('bizDate', $this->bizDate, true);
        Model::validateRequired('discreteProperty', $this->discreteProperty, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('threshold', $this->threshold, true);
        Model::validateRequired('singleCheckResult', $this->singleCheckResult, true);
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
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->singleCheckResult) {
            $res['SingleCheckResult'] = $this->singleCheckResult;
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
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['SingleCheckResult'])) {
            $model->singleCheckResult = $map['SingleCheckResult'];
        }

        return $model;
    }
}
