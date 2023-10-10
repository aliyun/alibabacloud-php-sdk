<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterTasksResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterTasksResponseBody\tasks\error;
use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @description The time when the task was created.
     *
     * @example 2022-08-03T10:11:33+08:00
     *
     * @var string
     */
    public $created;

    /**
     * @description The error returned for the task.
     *
     * @var error
     */
    public $error;

    /**
     * @description The status of the task.
     *
     * @example success
     *
     * @var string
     */
    public $state;

    /**
     * @description The task ID.
     *
     * @example install-addons-c3xxxxxx
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The type of task.
     *
     * @example cluster_addon_install
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The time when the task was updated.
     *
     * @example 2022-08-03T10:12:03.482+08:00
     *
     * @var string
     */
    public $updated;
    protected $_name = [
        'created'  => 'created',
        'error'    => 'error',
        'state'    => 'state',
        'taskId'   => 'task_id',
        'taskType' => 'task_type',
        'updated'  => 'updated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->error) {
            $res['error'] = null !== $this->error ? $this->error->toMap() : null;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
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
     * @return tasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['error'])) {
            $model->error = error::fromMap($map['error']);
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['task_id'])) {
            $model->taskId = $map['task_id'];
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
