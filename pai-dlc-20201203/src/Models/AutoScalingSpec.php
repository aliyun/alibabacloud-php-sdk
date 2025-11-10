<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class AutoScalingSpec extends Model
{
    /**
     * @var AutoscalingMetricSpec
     */
    public $autoscalingMetricSpec;

    /**
     * @var int
     */
    public $maxReplicas;

    /**
     * @var int
     */
    public $minReplicas;

    /**
     * @var string[]
     */
    public $podsToDelete;

    /**
     * @var string
     */
    public $scalingStrategy;
    protected $_name = [
        'autoscalingMetricSpec' => 'AutoscalingMetricSpec',
        'maxReplicas' => 'MaxReplicas',
        'minReplicas' => 'MinReplicas',
        'podsToDelete' => 'PodsToDelete',
        'scalingStrategy' => 'ScalingStrategy',
    ];

    public function validate()
    {
        if (null !== $this->autoscalingMetricSpec) {
            $this->autoscalingMetricSpec->validate();
        }
        if (\is_array($this->podsToDelete)) {
            Model::validateArray($this->podsToDelete);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoscalingMetricSpec) {
            $res['AutoscalingMetricSpec'] = null !== $this->autoscalingMetricSpec ? $this->autoscalingMetricSpec->toArray($noStream) : $this->autoscalingMetricSpec;
        }

        if (null !== $this->maxReplicas) {
            $res['MaxReplicas'] = $this->maxReplicas;
        }

        if (null !== $this->minReplicas) {
            $res['MinReplicas'] = $this->minReplicas;
        }

        if (null !== $this->podsToDelete) {
            if (\is_array($this->podsToDelete)) {
                $res['PodsToDelete'] = [];
                $n1 = 0;
                foreach ($this->podsToDelete as $item1) {
                    $res['PodsToDelete'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AutoscalingMetricSpec'])) {
            $model->autoscalingMetricSpec = AutoscalingMetricSpec::fromMap($map['AutoscalingMetricSpec']);
        }

        if (isset($map['MaxReplicas'])) {
            $model->maxReplicas = $map['MaxReplicas'];
        }

        if (isset($map['MinReplicas'])) {
            $model->minReplicas = $map['MinReplicas'];
        }

        if (isset($map['PodsToDelete'])) {
            if (!empty($map['PodsToDelete'])) {
                $model->podsToDelete = [];
                $n1 = 0;
                foreach ($map['PodsToDelete'] as $item1) {
                    $model->podsToDelete[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ScalingStrategy'])) {
            $model->scalingStrategy = $map['ScalingStrategy'];
        }

        return $model;
    }
}
