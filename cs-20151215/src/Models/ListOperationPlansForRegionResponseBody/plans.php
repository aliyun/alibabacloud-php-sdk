<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListOperationPlansForRegionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\ListOperationPlansForRegionResponseBody\plans\stateReason;

class plans extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var stateReason
     */
    public $stateReason;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'clusterId' => 'cluster_id',
        'created' => 'created',
        'endTime' => 'end_time',
        'planId' => 'plan_id',
        'startTime' => 'start_time',
        'state' => 'state',
        'stateReason' => 'state_reason',
        'targetId' => 'target_id',
        'targetType' => 'target_type',
        'taskId' => 'task_id',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->stateReason) {
            $this->stateReason->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }

        if (null !== $this->created) {
            $res['created'] = $this->created;
        }

        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }

        if (null !== $this->planId) {
            $res['plan_id'] = $this->planId;
        }

        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->stateReason) {
            $res['state_reason'] = null !== $this->stateReason ? $this->stateReason->toArray($noStream) : $this->stateReason;
        }

        if (null !== $this->targetId) {
            $res['target_id'] = $this->targetId;
        }

        if (null !== $this->targetType) {
            $res['target_type'] = $this->targetType;
        }

        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }

        if (isset($map['created'])) {
            $model->created = $map['created'];
        }

        if (isset($map['end_time'])) {
            $model->endTime = $map['end_time'];
        }

        if (isset($map['plan_id'])) {
            $model->planId = $map['plan_id'];
        }

        if (isset($map['start_time'])) {
            $model->startTime = $map['start_time'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['state_reason'])) {
            $model->stateReason = stateReason::fromMap($map['state_reason']);
        }

        if (isset($map['target_id'])) {
            $model->targetId = $map['target_id'];
        }

        if (isset($map['target_type'])) {
            $model->targetType = $map['target_type'];
        }

        if (isset($map['task_id'])) {
            $model->taskId = $map['task_id'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
