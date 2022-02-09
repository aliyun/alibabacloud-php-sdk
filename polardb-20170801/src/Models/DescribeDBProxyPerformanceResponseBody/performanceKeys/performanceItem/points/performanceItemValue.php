<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBProxyPerformanceResponseBody\performanceKeys\performanceItem\points;

use AlibabaCloud\Tea\Model;

class performanceItemValue extends Model
{
    /**
     * @var int
     */
    public $timestamp;

    /**
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
