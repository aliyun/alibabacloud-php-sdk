<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ProvisionConfig extends Model
{
    /**
     * @var bool
     */
    public $alwaysAllocateCPU;

    /**
     * @var bool
     */
    public $alwaysAllocateGPU;

    /**
     * @var int
     */
    public $current;

    /**
     * @var string
     */
    public $currentError;

    /**
     * @var int
     */
    public $defaultTarget;

    /**
     * @var string
     */
    public $functionArn;

    /**
     * @var ScheduledAction[]
     */
    public $scheduledActions;

    /**
     * @var int
     */
    public $target;

    /**
     * @var TargetTrackingPolicy[]
     */
    public $targetTrackingPolicies;
    protected $_name = [
        'alwaysAllocateCPU' => 'alwaysAllocateCPU',
        'alwaysAllocateGPU' => 'alwaysAllocateGPU',
        'current' => 'current',
        'currentError' => 'currentError',
        'defaultTarget' => 'defaultTarget',
        'functionArn' => 'functionArn',
        'scheduledActions' => 'scheduledActions',
        'target' => 'target',
        'targetTrackingPolicies' => 'targetTrackingPolicies',
    ];

    public function validate()
    {
        if (\is_array($this->scheduledActions)) {
            Model::validateArray($this->scheduledActions);
        }
        if (\is_array($this->targetTrackingPolicies)) {
            Model::validateArray($this->targetTrackingPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alwaysAllocateCPU) {
            $res['alwaysAllocateCPU'] = $this->alwaysAllocateCPU;
        }

        if (null !== $this->alwaysAllocateGPU) {
            $res['alwaysAllocateGPU'] = $this->alwaysAllocateGPU;
        }

        if (null !== $this->current) {
            $res['current'] = $this->current;
        }

        if (null !== $this->currentError) {
            $res['currentError'] = $this->currentError;
        }

        if (null !== $this->defaultTarget) {
            $res['defaultTarget'] = $this->defaultTarget;
        }

        if (null !== $this->functionArn) {
            $res['functionArn'] = $this->functionArn;
        }

        if (null !== $this->scheduledActions) {
            if (\is_array($this->scheduledActions)) {
                $res['scheduledActions'] = [];
                $n1 = 0;
                foreach ($this->scheduledActions as $item1) {
                    $res['scheduledActions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->target) {
            $res['target'] = $this->target;
        }

        if (null !== $this->targetTrackingPolicies) {
            if (\is_array($this->targetTrackingPolicies)) {
                $res['targetTrackingPolicies'] = [];
                $n1 = 0;
                foreach ($this->targetTrackingPolicies as $item1) {
                    $res['targetTrackingPolicies'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['alwaysAllocateCPU'])) {
            $model->alwaysAllocateCPU = $map['alwaysAllocateCPU'];
        }

        if (isset($map['alwaysAllocateGPU'])) {
            $model->alwaysAllocateGPU = $map['alwaysAllocateGPU'];
        }

        if (isset($map['current'])) {
            $model->current = $map['current'];
        }

        if (isset($map['currentError'])) {
            $model->currentError = $map['currentError'];
        }

        if (isset($map['defaultTarget'])) {
            $model->defaultTarget = $map['defaultTarget'];
        }

        if (isset($map['functionArn'])) {
            $model->functionArn = $map['functionArn'];
        }

        if (isset($map['scheduledActions'])) {
            if (!empty($map['scheduledActions'])) {
                $model->scheduledActions = [];
                $n1 = 0;
                foreach ($map['scheduledActions'] as $item1) {
                    $model->scheduledActions[$n1++] = ScheduledAction::fromMap($item1);
                }
            }
        }

        if (isset($map['target'])) {
            $model->target = $map['target'];
        }

        if (isset($map['targetTrackingPolicies'])) {
            if (!empty($map['targetTrackingPolicies'])) {
                $model->targetTrackingPolicies = [];
                $n1 = 0;
                foreach ($map['targetTrackingPolicies'] as $item1) {
                    $model->targetTrackingPolicies[$n1++] = TargetTrackingPolicy::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
