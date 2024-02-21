<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancePerformanceResponseBody\performanceKeys;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancePerformanceResponseBody\performanceKeys\performanceKey\performanceValues;
use AlibabaCloud\Tea\Model;

class performanceKey extends Model
{
    /**
     * @description The performance metrics that are returned.
     *
     * @example CpuUsage
     *
     * @var string
     */
    public $key;

    /**
     * @description The details of the performance metric values.
     *
     * @var performanceValues
     */
    public $performanceValues;

    /**
     * @description The unit of the performance metric.
     *
     * @example %
     *
     * @var string
     */
    public $unit;

    /**
     * @description The format of the performance metric value. If the performance metric contains multiple fields, the fields are separated with ampersands ( &).
     *
     * For example, if you query disk space usage, the returned value of the **ValueFormat** parameter is **ins_size\&data_size\&log_size**.
     * @example cpu_usage
     *
     * @var string
     */
    public $valueFormat;
    protected $_name = [
        'key'               => 'Key',
        'performanceValues' => 'PerformanceValues',
        'unit'              => 'Unit',
        'valueFormat'       => 'ValueFormat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->performanceValues) {
            $res['PerformanceValues'] = null !== $this->performanceValues ? $this->performanceValues->toMap() : null;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->valueFormat) {
            $res['ValueFormat'] = $this->valueFormat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performanceKey
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['PerformanceValues'])) {
            $model->performanceValues = performanceValues::fromMap($map['PerformanceValues']);
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['ValueFormat'])) {
            $model->valueFormat = $map['ValueFormat'];
        }

        return $model;
    }
}
