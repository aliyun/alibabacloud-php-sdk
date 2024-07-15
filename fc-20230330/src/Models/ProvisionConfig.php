<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class ProvisionConfig extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $alwaysAllocateCPU;

    /**
     * @example true
     *
     * @var bool
     */
    public $alwaysAllocateGPU;

    /**
     * @example 1
     *
     * @var int
     */
    public $current;

    /**
     * @example image not found
     *
     * @var string
     */
    public $currentError;

    /**
     * @example acs:fc:cn-shanghai:124:functions/myFunction
     *
     * @var string
     */
    public $functionArn;

    /**
     * @var ScheduledAction[]
     */
    public $scheduledActions;

    /**
     * @example 5
     *
     * @var int
     */
    public $target;

    /**
     * @var TargetTrackingPolicy[]
     */
    public $targetTrackingPolicies;
    protected $_name = [
        'alwaysAllocateCPU'      => 'alwaysAllocateCPU',
        'alwaysAllocateGPU'      => 'alwaysAllocateGPU',
        'current'                => 'current',
        'currentError'           => 'currentError',
        'functionArn'            => 'functionArn',
        'scheduledActions'       => 'scheduledActions',
        'target'                 => 'target',
        'targetTrackingPolicies' => 'targetTrackingPolicies',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->functionArn) {
            $res['functionArn'] = $this->functionArn;
        }
        if (null !== $this->scheduledActions) {
            $res['scheduledActions'] = [];
            if (null !== $this->scheduledActions && \is_array($this->scheduledActions)) {
                $n = 0;
                foreach ($this->scheduledActions as $item) {
                    $res['scheduledActions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->target) {
            $res['target'] = $this->target;
        }
        if (null !== $this->targetTrackingPolicies) {
            $res['targetTrackingPolicies'] = [];
            if (null !== $this->targetTrackingPolicies && \is_array($this->targetTrackingPolicies)) {
                $n = 0;
                foreach ($this->targetTrackingPolicies as $item) {
                    $res['targetTrackingPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProvisionConfig
     */
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
        if (isset($map['functionArn'])) {
            $model->functionArn = $map['functionArn'];
        }
        if (isset($map['scheduledActions'])) {
            if (!empty($map['scheduledActions'])) {
                $model->scheduledActions = [];
                $n                       = 0;
                foreach ($map['scheduledActions'] as $item) {
                    $model->scheduledActions[$n++] = null !== $item ? ScheduledAction::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['target'])) {
            $model->target = $map['target'];
        }
        if (isset($map['targetTrackingPolicies'])) {
            if (!empty($map['targetTrackingPolicies'])) {
                $model->targetTrackingPolicies = [];
                $n                             = 0;
                foreach ($map['targetTrackingPolicies'] as $item) {
                    $model->targetTrackingPolicies[$n++] = null !== $item ? TargetTrackingPolicy::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
