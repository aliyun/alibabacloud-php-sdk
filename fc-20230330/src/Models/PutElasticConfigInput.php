<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class PutElasticConfigInput extends Model
{
    /**
     * @var int
     */
    public $minInstances;

    /**
     * @var string
     */
    public $residentPoolId;

    /**
     * @var ScalingPolicy[]
     */
    public $scalingPolicies;

    /**
     * @var ScheduledPolicy[]
     */
    public $scheduledPolicies;
    protected $_name = [
        'minInstances' => 'minInstances',
        'residentPoolId' => 'residentPoolId',
        'scalingPolicies' => 'scalingPolicies',
        'scheduledPolicies' => 'scheduledPolicies',
    ];

    public function validate()
    {
        if (\is_array($this->scalingPolicies)) {
            Model::validateArray($this->scalingPolicies);
        }
        if (\is_array($this->scheduledPolicies)) {
            Model::validateArray($this->scheduledPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->minInstances) {
            $res['minInstances'] = $this->minInstances;
        }

        if (null !== $this->residentPoolId) {
            $res['residentPoolId'] = $this->residentPoolId;
        }

        if (null !== $this->scalingPolicies) {
            if (\is_array($this->scalingPolicies)) {
                $res['scalingPolicies'] = [];
                $n1 = 0;
                foreach ($this->scalingPolicies as $item1) {
                    $res['scalingPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scheduledPolicies) {
            if (\is_array($this->scheduledPolicies)) {
                $res['scheduledPolicies'] = [];
                $n1 = 0;
                foreach ($this->scheduledPolicies as $item1) {
                    $res['scheduledPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['minInstances'])) {
            $model->minInstances = $map['minInstances'];
        }

        if (isset($map['residentPoolId'])) {
            $model->residentPoolId = $map['residentPoolId'];
        }

        if (isset($map['scalingPolicies'])) {
            if (!empty($map['scalingPolicies'])) {
                $model->scalingPolicies = [];
                $n1 = 0;
                foreach ($map['scalingPolicies'] as $item1) {
                    $model->scalingPolicies[$n1] = ScalingPolicy::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['scheduledPolicies'])) {
            if (!empty($map['scheduledPolicies'])) {
                $model->scheduledPolicies = [];
                $n1 = 0;
                foreach ($map['scheduledPolicies'] as $item1) {
                    $model->scheduledPolicies[$n1] = ScheduledPolicy::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
