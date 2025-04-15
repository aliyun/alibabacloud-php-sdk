<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRuleResponseBody\data\timer;

use AlibabaCloud\Dara\Model;

class schedules extends Model
{
    /**
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
     * @var int
     */
    public $targetReplicas;
    protected $_name = [
        'atTime' => 'AtTime',
        'maxReplicas' => 'MaxReplicas',
        'minReplicas' => 'MinReplicas',
        'targetReplicas' => 'TargetReplicas',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
