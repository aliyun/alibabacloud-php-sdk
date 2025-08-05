<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListJobMetricResponseBody\data;

use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @description Metric related information.
     *
     * @var string[]
     */
    public $metric;

    /**
     * @description Metric values information.
     *
     * @var float[][]
     */
    public $values;
    protected $_name = [
        'metric' => 'metric',
        'values' => 'values',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->metric) {
            $res['metric'] = $this->metric;
        }
        if (null !== $this->values) {
            $res['values'] = $this->values;
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
        if (isset($map['metric'])) {
            $model->metric = $map['metric'];
        }
        if (isset($map['values'])) {
            if (!empty($map['values'])) {
                $model->values = $map['values'];
            }
        }

        return $model;
    }
}
