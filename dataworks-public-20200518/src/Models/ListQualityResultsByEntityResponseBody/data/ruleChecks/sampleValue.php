<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByEntityResponseBody\data\ruleChecks;

use AlibabaCloud\Dara\Model;

class sampleValue extends Model
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
    protected $_name = [
        'bizDate' => 'BizDate',
        'discreteProperty' => 'DiscreteProperty',
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

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
