<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListOperationPlansResponseBody;

use AlibabaCloud\Tea\Model;

class plans extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example c29ced64b3dfe4f33b57ca0aa9f68****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The time when the operation plan was created.
     *
     * @example 2023-11-21T20:01:22+08:00
     *
     * @var string
     */
    public $created;

    /**
     * @description The expected end time of the plan.
     *
     * @example 2023-11-22T18:00:00+08:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The operation plan ID.
     *
     * @example P-655c9c127e0e6603ef00****
     *
     * @var string
     */
    public $planId;

    /**
     * @description The expected start time of the plan.
     *
     * @example 2023-11-22T15:18:00+08:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The plan status. Valid values:
     *
     *   scheduled
     *   Canceled
     *
     * @example scheduled
     *
     * @var string
     */
    public $state;

    /**
     * @description The target ID.
     *
     * @example c29ced64b3dfe4f33b57ca0aa9f68****
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The target type.
     *
     * @example cluster
     *
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @description The plan type. Valid values:
     *
     *   cluster_upgrade
     *
     * @example cluster_upgrade
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'clusterId'  => 'cluster_id',
        'created'    => 'created',
        'endTime'    => 'end_time',
        'planId'     => 'plan_id',
        'startTime'  => 'start_time',
        'state'      => 'state',
        'targetId'   => 'target_id',
        'targetType' => 'target_type',
        'taskId'     => 'task_id',
        'type'       => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return plans
     */
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
