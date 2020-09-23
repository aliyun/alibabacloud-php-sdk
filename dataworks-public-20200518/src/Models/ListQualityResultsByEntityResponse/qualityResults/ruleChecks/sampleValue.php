<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByEntityResponse\qualityResults\ruleChecks;

use AlibabaCloud\Tea\Model;

class sampleValue extends Model
{
    /**
     * @var int
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
    protected $_name = [
        'bizDate'          => 'BizDate',
        'discreteProperty' => 'DiscreteProperty',
        'value'            => 'Value',
    ];

    public function validate()
    {
        Model::validateRequired('bizDate', $this->bizDate, true);
        Model::validateRequired('discreteProperty', $this->discreteProperty, true);
        Model::validateRequired('value', $this->value, true);
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sampleValue
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

        return $model;
    }
}
