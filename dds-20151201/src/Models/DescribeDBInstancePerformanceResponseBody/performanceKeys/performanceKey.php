<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancePerformanceResponseBody\performanceKeys;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancePerformanceResponseBody\performanceKeys\performanceKey\performanceValues;
use AlibabaCloud\Tea\Model;

class performanceKey extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var string
     */
    public $valueFormat;

    /**
     * @var performanceValues
     */
    public $performanceValues;
    protected $_name = [
        'key'               => 'Key',
        'unit'              => 'Unit',
        'valueFormat'       => 'ValueFormat',
        'performanceValues' => 'PerformanceValues',
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
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->valueFormat) {
            $res['ValueFormat'] = $this->valueFormat;
        }
        if (null !== $this->performanceValues) {
            $res['PerformanceValues'] = null !== $this->performanceValues ? $this->performanceValues->toMap() : null;
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
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['ValueFormat'])) {
            $model->valueFormat = $map['ValueFormat'];
        }
        if (isset($map['PerformanceValues'])) {
            $model->performanceValues = performanceValues::fromMap($map['PerformanceValues']);
        }

        return $model;
    }
}
