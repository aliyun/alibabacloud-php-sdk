<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancePerformanceResponseBody\performanceKeys;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancePerformanceResponseBody\performanceKeys\performanceKey\performanceValues;

class performanceKey extends Model
{
    /**
     * @var string
     */
    public $key;
    /**
     * @var performanceValues
     */
    public $performanceValues;
    /**
     * @var string
     */
    public $unit;
    /**
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
        if (null !== $this->performanceValues) {
            $this->performanceValues->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->performanceValues) {
            $res['PerformanceValues'] = null !== $this->performanceValues ? $this->performanceValues->toArray($noStream) : $this->performanceValues;
        }

        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        if (null !== $this->valueFormat) {
            $res['ValueFormat'] = $this->valueFormat;
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
