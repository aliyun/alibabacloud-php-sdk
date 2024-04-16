<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20230701\Models\DescribeJobMetricLastResponseBody;

use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $arrayIndex;

    /**
     * @example {"memory_utilization": 37.42,"cpu_utilization": 1.008, "disk_utilization": 3.562}
     *
     * @var string
     */
    public $metric;
    protected $_name = [
        'arrayIndex' => 'ArrayIndex',
        'metric'     => 'Metric',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrayIndex) {
            $res['ArrayIndex'] = $this->arrayIndex;
        }
        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArrayIndex'])) {
            $model->arrayIndex = $map['ArrayIndex'];
        }
        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }

        return $model;
    }
}
