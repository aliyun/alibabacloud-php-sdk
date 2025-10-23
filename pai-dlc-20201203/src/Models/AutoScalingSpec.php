<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class AutoScalingSpec extends Model
{
    /**
     * @var int
     */
    public $maxReplicas;

    /**
     * @var int
     */
    public $minReplicas;

    /**
     * @var string
     */
    public $scalingStrategy;
    protected $_name = [
        'maxReplicas' => 'MaxReplicas',
        'minReplicas' => 'MinReplicas',
        'scalingStrategy' => 'ScalingStrategy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxReplicas) {
            $res['MaxReplicas'] = $this->maxReplicas;
        }

        if (null !== $this->minReplicas) {
            $res['MinReplicas'] = $this->minReplicas;
        }

        if (null !== $this->scalingStrategy) {
            $res['ScalingStrategy'] = $this->scalingStrategy;
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
        if (isset($map['MaxReplicas'])) {
            $model->maxReplicas = $map['MaxReplicas'];
        }

        if (isset($map['MinReplicas'])) {
            $model->minReplicas = $map['MinReplicas'];
        }

        if (isset($map['ScalingStrategy'])) {
            $model->scalingStrategy = $map['ScalingStrategy'];
        }

        return $model;
    }
}
