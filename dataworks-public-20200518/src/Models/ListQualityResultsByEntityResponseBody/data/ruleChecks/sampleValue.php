<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByEntityResponseBody\data\ruleChecks;

use AlibabaCloud\Tea\Model;

class sampleValue extends Model
{
    /**
     * @description The data timestamp. If the monitored business entity is offline data, the value is usually one day before the monitoring is performed.
     *
     * @example 2020-12-03
     *
     * @var string
     */
    public $bizDate;

    /**
     * @description The values of the sample field that are grouped by using the GROUP BY clause. For example, the values of the Gender field are grouped by using the GROUP BY clause. In this case, the values of DiscreteProperty are Male, Female, and null.
     *
     * @example 0
     *
     * @var string
     */
    public $discreteProperty;

    /**
     * @description The current sample value.
     *
     * @example 19
     *
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
