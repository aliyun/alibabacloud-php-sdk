<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\GetRenderingProjectInstanceStateMetricsResponseBody;

use AlibabaCloud\Tea\Model;

class stateMetrics extends Model
{
    /**
     * @example 10
     *
     * @var string
     */
    public $count;

    /**
     * @example Idle
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'count' => 'Count',
        'state' => 'State',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stateMetrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
