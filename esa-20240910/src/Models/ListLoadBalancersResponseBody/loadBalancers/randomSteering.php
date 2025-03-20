<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancersResponseBody\loadBalancers;

use AlibabaCloud\Tea\Model;

class randomSteering extends Model
{
    /**
     * @description Weight configuration for each backend server pool, where the key is the pool ID and the value is the weight coefficient. The weight coefficient represents the proportion of relative traffic distribution.
     *
     * @example 50
     *
     * @var int
     */
    public $defaultWeight;

    /**
     * @description Weight configuration for each backend server pool, where the key is the pool ID and the value is the weight coefficient.
     *
     * @var int[]
     */
    public $poolWeights;
    protected $_name = [
        'defaultWeight' => 'DefaultWeight',
        'poolWeights' => 'PoolWeights',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultWeight) {
            $res['DefaultWeight'] = $this->defaultWeight;
        }
        if (null !== $this->poolWeights) {
            $res['PoolWeights'] = $this->poolWeights;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return randomSteering
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultWeight'])) {
            $model->defaultWeight = $map['DefaultWeight'];
        }
        if (isset($map['PoolWeights'])) {
            $model->poolWeights = $map['PoolWeights'];
        }

        return $model;
    }
}
