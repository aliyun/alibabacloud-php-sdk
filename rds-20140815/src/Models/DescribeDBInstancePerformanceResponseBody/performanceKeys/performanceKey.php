<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancePerformanceResponseBody\performanceKeys;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancePerformanceResponseBody\performanceKeys\performanceKey\values;
use AlibabaCloud\Tea\Model;

class performanceKey extends Model
{
    /**
     * @description Specify the name of the performance metric.
     *
     * @example MySQL_Sessions
     *
     * @var string
     */
    public $key;

    /**
     * @description The unit of the performance metrics.
     *
     * @example KB
     *
     * @var string
     */
    public $unit;

    /**
     * @description The format in which the value of the performance metric is returned.
     *
     * >  Multiple performance metric values are separated with ampersands (&). Example: com_delete\&com_insert\&com_insert_select\&com_replace.
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
