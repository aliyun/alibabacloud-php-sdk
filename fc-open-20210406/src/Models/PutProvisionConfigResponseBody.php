<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class PutProvisionConfigResponseBody extends Model
{
    /**
     * @description Specifies whether to always allocate CPU to a function instance.
     *
     * @example true
     *
     * @var bool
     */
    public $alwaysAllocateCPU;

    /**
     * @description The actual number of provisioned instances.
     *
     * @example 1
     *
     * @var int
     */
    public $current;

    /**
     * @description The description of the resource.
     *
     * @example "12345#servierName#qualifier#functionName"
     *
     * @var string
     */
    public $resource;

    /**
     * @description The configurations of scheduled auto scaling.
     *
     * @var ScheduledActions[]
     */
    public $scheduledActions;

    /**
     * @description The number of target provisioned instances.
     *
     * @example 5
     *
     * @var int
     */
    public $target;

    /**
     * @description The configurations of metric-based auto scaling.
     *
     * @var TargetTrackingPolicies[]
     */
    public $targetTrackingPolicies;
    protected $_name = [
        'alwaysAllocateCPU'      => 'alwaysAllocateCPU',
        'current'                => 'current',
        'resource'               => 'resource',
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
        if (null !== $this->current) {
            $res['current'] = $this->current;
        }
        if (null !== $this->resource) {
            $res['resource'] = $this->resource;
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
     * @return PutProvisionConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alwaysAllocateCPU'])) {
            $model->alwaysAllocateCPU = $map['alwaysAllocateCPU'];
        }
        if (isset($map['current'])) {
            $model->current = $map['current'];
        }
        if (isset($map['resource'])) {
            $model->resource = $map['resource'];
        }
        if (isset($map['scheduledActions'])) {
            if (!empty($map['scheduledActions'])) {
                $model->scheduledActions = [];
                $n                       = 0;
                foreach ($map['scheduledActions'] as $item) {
                    $model->scheduledActions[$n++] = null !== $item ? ScheduledActions::fromMap($item) : $item;
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
                    $model->targetTrackingPolicies[$n++] = null !== $item ? TargetTrackingPolicies::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
