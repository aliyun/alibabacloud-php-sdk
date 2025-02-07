<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterTasksResponseBody\tasks\error;

class tasks extends Model
{
    /**
     * @var string
     */
    public $created;
    /**
     * @var error
     */
    public $error;
    /**
     * @var string
     */
    public $state;
    /**
     * @var string
     */
    public $taskId;
    /**
     * @var string
     */
    public $taskType;
    /**
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
        if (null !== $this->error) {
            $this->error->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }

        if (null !== $this->error) {
            $res['error'] = null !== $this->error ? $this->error->toArray($noStream) : $this->error;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
