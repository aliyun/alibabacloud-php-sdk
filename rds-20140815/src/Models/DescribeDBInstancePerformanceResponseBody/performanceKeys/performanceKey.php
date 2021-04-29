<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancePerformanceResponseBody\performanceKeys;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancePerformanceResponseBody\performanceKeys\performanceKey\values;
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
     * @var values
     */
    public $values;

    /**
     * @var string
     */
    public $valueFormat;
    protected $_name = [
        'key'         => 'Key',
        'unit'        => 'Unit',
        'values'      => 'Values',
        'valueFormat' => 'ValueFormat',
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
        if (null !== $this->values) {
            $res['Values'] = null !== $this->values ? $this->values->toMap() : null;
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
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['Values'])) {
            $model->values = values::fromMap($map['Values']);
        }
        if (isset($map['ValueFormat'])) {
            $model->valueFormat = $map['ValueFormat'];
        }

        return $model;
    }
}
