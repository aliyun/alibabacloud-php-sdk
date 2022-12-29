<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancePerformanceResponseBody\performanceKeys\performanceKey\performanceValues;

use AlibabaCloud\Tea\Model;

class performanceValue extends Model
{
    /**
     * @description The date and time when the metric value was generated.
     *
     * @example 2022-06-13T10:58:00Z
     *
     * @var string
     */
    public $date;

    /**
     * @description The value of the performance metric.
     *
     * @example 0.23
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'date'  => 'Date',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performanceValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
