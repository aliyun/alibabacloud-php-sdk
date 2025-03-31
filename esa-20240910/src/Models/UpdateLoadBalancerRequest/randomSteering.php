<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\UpdateLoadBalancerRequest;

use AlibabaCloud\Dara\Model;

class randomSteering extends Model
{
    /**
     * @var int
     */
    public $defaultWeight;

    /**
     * @var int[]
     */
    public $poolWeights;
    protected $_name = [
        'defaultWeight' => 'DefaultWeight',
        'poolWeights' => 'PoolWeights',
    ];

    public function validate()
    {
        if (\is_array($this->poolWeights)) {
            Model::validateArray($this->poolWeights);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultWeight) {
            $res['DefaultWeight'] = $this->defaultWeight;
        }

        if (null !== $this->poolWeights) {
            if (\is_array($this->poolWeights)) {
                $res['PoolWeights'] = [];
                foreach ($this->poolWeights as $key1 => $value1) {
                    $res['PoolWeights'][$key1] = $value1;
                }
            }
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
        if (isset($map['DefaultWeight'])) {
            $model->defaultWeight = $map['DefaultWeight'];
        }

        if (isset($map['PoolWeights'])) {
            if (!empty($map['PoolWeights'])) {
                $model->poolWeights = [];
                foreach ($map['PoolWeights'] as $key1 => $value1) {
                    $model->poolWeights[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
