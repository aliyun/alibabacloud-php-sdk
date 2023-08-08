<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTaskInfoResponseBody\error;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTaskInfoResponseBody\events;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTaskInfoResponseBody\stages;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTaskInfoResponseBody\target;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTaskInfoResponseBody\taskResult;
use AlibabaCloud\Tea\Model;

class DescribeTaskInfoResponseBody extends Model
{
    /**
     * @description The ID of the ACK cluster.
     *
     * @example c78592bfe92244365b3c3ad47f1de****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The time when the task was created.
     *
     * @example 2020-11-10T16:02:04+08:00
     *
     * @var string
     */
    public $created;

    /**
     * @example DrainNodes
     *
     * @var string
     */
    public $currentStage;

    /**
     * @var error
     */
    public $error;

    /**
     * @var events[]
     */
    public $events;

    /**
     * @var mixed[]
     */
    public $parameters;

    /**
     * @var stages[]
     */
    public $stages;

    /**
     * @description The state of the task. Valid values:
     *
     *   `running`: The task is running.
     *   `fail`: The task failed.
     *   `success`: The task is complete.
     *
     * @example running
     *
     * @var string
     */
    public $state;

    /**
     * @var target
     */
    public $target;

    /**
     * @description The ID of the task.
     *
     * @example T-5faa48fb31b6b8078d000006
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The execution result of the task.
     *
     * @var taskResult[]
     */
    public $taskResult;

    /**
     * @description The task type. A value of `cluster_scaleout` indicates a scale-out task.
     *
     * @example cluster_scaleout
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The time when the task was updated.
     *
     * @example 2020-11-10T16:03:06+08:00
     *
     * @var string
     */
    public $updated;
    protected $_name = [
        'clusterId'    => 'cluster_id',
        'created'      => 'created',
        'currentStage' => 'current_stage',
        'error'        => 'error',
        'events'       => 'events',
        'parameters'   => 'parameters',
        'stages'       => 'stages',
        'state'        => 'state',
        'target'       => 'target',
        'taskId'       => 'task_id',
        'taskResult'   => 'task_result',
        'taskType'     => 'task_type',
        'updated'      => 'updated',
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
        if (null !== $this->currentStage) {
            $res['current_stage'] = $this->currentStage;
        }
        if (null !== $this->error) {
            $res['error'] = null !== $this->error ? $this->error->toMap() : null;
        }
        if (null !== $this->events) {
            $res['events'] = [];
            if (null !== $this->events && \is_array($this->events)) {
                $n = 0;
                foreach ($this->events as $item) {
                    $res['events'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->parameters) {
            $res['parameters'] = $this->parameters;
        }
        if (null !== $this->stages) {
            $res['stages'] = [];
            if (null !== $this->stages && \is_array($this->stages)) {
                $n = 0;
                foreach ($this->stages as $item) {
                    $res['stages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->target) {
            $res['target'] = null !== $this->target ? $this->target->toMap() : null;
        }
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }
        if (null !== $this->taskResult) {
            $res['task_result'] = [];
            if (null !== $this->taskResult && \is_array($this->taskResult)) {
                $n = 0;
                foreach ($this->taskResult as $item) {
                    $res['task_result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskType) {
            $res['task_type'] = $this->taskType;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTaskInfoResponseBody
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
        if (isset($map['current_stage'])) {
            $model->currentStage = $map['current_stage'];
        }
        if (isset($map['error'])) {
            $model->error = error::fromMap($map['error']);
        }
        if (isset($map['events'])) {
            if (!empty($map['events'])) {
                $model->events = [];
                $n             = 0;
                foreach ($map['events'] as $item) {
                    $model->events[$n++] = null !== $item ? events::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['parameters'])) {
            $model->parameters = $map['parameters'];
        }
        if (isset($map['stages'])) {
            if (!empty($map['stages'])) {
                $model->stages = [];
                $n             = 0;
                foreach ($map['stages'] as $item) {
                    $model->stages[$n++] = null !== $item ? stages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['target'])) {
            $model->target = target::fromMap($map['target']);
        }
        if (isset($map['task_id'])) {
            $model->taskId = $map['task_id'];
        }
        if (isset($map['task_result'])) {
            if (!empty($map['task_result'])) {
                $model->taskResult = [];
                $n                 = 0;
                foreach ($map['task_result'] as $item) {
                    $model->taskResult[$n++] = null !== $item ? taskResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['task_type'])) {
            $model->taskType = $map['task_type'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
