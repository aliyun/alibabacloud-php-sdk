<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceSupportMaxPerformanceResponseBody\performances;

use AlibabaCloud\Tea\Model;

class performance extends Model
{
    /**
     * @description The performance bottleneck type.
     *
     * @example ecs or disk
     *
     * @var string
     */
    public $bottleneck;

    /**
     * @description The name of the performance metric.
     *
     * @var string
     */
    public $key;

    /**
     * @description The unit of the performance metric.
     *
     * @var string
     */
    public $unit;

    /**
     * @description The value of the performance metric.
     *
     * @example 90
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'bottleneck' => 'Bottleneck',
        'key'        => 'Key',
        'unit'       => 'Unit',
        'value'      => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bottleneck) {
            $res['Bottleneck'] = $this->bottleneck;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bottleneck'])) {
            $model->bottleneck = $map['Bottleneck'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
