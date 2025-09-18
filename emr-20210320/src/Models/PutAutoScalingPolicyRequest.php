<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class PutAutoScalingPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var ScalingConstraints
     */
    public $constraints;

    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var ScalingRule[]
     */
    public $scalingRules;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'constraints' => 'Constraints',
        'nodeGroupId' => 'NodeGroupId',
        'regionId' => 'RegionId',
        'scalingRules' => 'ScalingRules',
    ];

    public function validate()
    {
        if (null !== $this->constraints) {
            $this->constraints->validate();
        }
        if (\is_array($this->scalingRules)) {
            Model::validateArray($this->scalingRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->constraints) {
            $res['Constraints'] = null !== $this->constraints ? $this->constraints->toArray($noStream) : $this->constraints;
        }

        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->scalingRules) {
            if (\is_array($this->scalingRules)) {
                $res['ScalingRules'] = [];
                $n1 = 0;
                foreach ($this->scalingRules as $item1) {
                    $res['ScalingRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['Constraints'])) {
            $model->constraints = ScalingConstraints::fromMap($map['Constraints']);
        }

        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ScalingRules'])) {
            if (!empty($map['ScalingRules'])) {
                $model->scalingRules = [];
                $n1 = 0;
                foreach ($map['ScalingRules'] as $item1) {
                    $model->scalingRules[$n1] = ScalingRule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
