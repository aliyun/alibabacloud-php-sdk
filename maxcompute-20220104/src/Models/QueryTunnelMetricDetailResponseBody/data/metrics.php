<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\QueryTunnelMetricDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @var string[]
     */
    public $metric;

    /**
     * @example "avgValue":"11.5"
     *
     * @var mixed[]
     */
    public $value;
    protected $_name = [
        'metric' => 'metric',
        'value' => 'value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->metric) {
            $res['metric'] = $this->metric;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
