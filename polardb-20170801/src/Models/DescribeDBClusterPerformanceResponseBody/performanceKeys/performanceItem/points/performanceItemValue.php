<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterPerformanceResponseBody\performanceKeys\performanceItem\points;

use AlibabaCloud\Tea\Model;

class performanceItemValue extends Model
{
    /**
     * @description The timestamp of the metric. This value is a UNIX timestamp. Unit: millisecond.
     *
     * @example 1600822800000
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The value of the metric.
     *
     * @example 42.38
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'timestamp' => 'Timestamp',
        'value'     => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performanceItemValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
