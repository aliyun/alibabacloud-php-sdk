<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancePerformanceResponseBody\performanceKeys;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancePerformanceResponseBody\performanceKeys\performanceKey\values;
use AlibabaCloud\Tea\Model;

class performanceKey extends Model
{
    /**
     * @description The name of the performance metric.
     *
     * @example MySQL_Sessions
     *
     * @var string
     */
    public $key;

    /**
     * @description The unit of the performance metric.
     *
     * @example KB
     *
     * @var string
     */
    public $unit;

    /**
     * @description The format in which the value of the performance metric is returned. Multiple values of the performance metric are separated by the \&amp; string. Example: com_delete\&amp;com_insert\&amp;com_insert_select\&amp;com_replace.
     *
     * @example recv_k&sent_k
     *
     * @var string
     */
    public $valueFormat;

    /**
     * @description An array that consists of the values of the performance metric in the following format: {value1, value2, ...}.
     *
     * @var values
     */
    public $values;
    protected $_name = [
        'key'         => 'Key',
        'unit'        => 'Unit',
        'valueFormat' => 'ValueFormat',
        'values'      => 'Values',
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
        if (null !== $this->values) {
            $res['Values'] = null !== $this->values ? $this->values->toMap() : null;
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
        if (isset($map['Values'])) {
            $model->values = values::fromMap($map['Values']);
        }

        return $model;
    }
}
