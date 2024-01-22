<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\UpdateApplicationScalingRuleResponseBody\data\timer;

use AlibabaCloud\Tea\Model;

class schedules extends Model
{
    /**
     * @description The point in time. Format: **Hour:Minute**.
     *
     * @example 08:00
     *
     * @var string
     */
    public $atTime;

    /**
     * @var int
     */
    public $maxReplicas;

    /**
     * @var int
     */
    public $minReplicas;

    /**
     * @description The expected number of instances.
     *
     * @example 3
     *
     * @var int
     */
    public $targetReplicas;
    protected $_name = [
        'atTime'         => 'AtTime',
        'maxReplicas'    => 'MaxReplicas',
        'minReplicas'    => 'MinReplicas',
        'targetReplicas' => 'TargetReplicas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->atTime) {
            $res['AtTime'] = $this->atTime;
        }
        if (null !== $this->maxReplicas) {
            $res['MaxReplicas'] = $this->maxReplicas;
        }
        if (null !== $this->minReplicas) {
            $res['MinReplicas'] = $this->minReplicas;
        }
        if (null !== $this->targetReplicas) {
            $res['TargetReplicas'] = $this->targetReplicas;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schedules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AtTime'])) {
            $model->atTime = $map['AtTime'];
        }
        if (isset($map['MaxReplicas'])) {
            $model->maxReplicas = $map['MaxReplicas'];
        }
        if (isset($map['MinReplicas'])) {
            $model->minReplicas = $map['MinReplicas'];
        }
        if (isset($map['TargetReplicas'])) {
            $model->targetReplicas = $map['TargetReplicas'];
        }

        return $model;
    }
}
