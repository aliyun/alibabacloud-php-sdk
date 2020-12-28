<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTasksResponseBody;

use AlibabaCloud\Tea\Model;

class taskSet extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $finishedTime;

    /**
     * @var string
     */
    public $supportCancel;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskAction;
    protected $_name = [
        'creationTime'  => 'CreationTime',
        'taskStatus'    => 'TaskStatus',
        'finishedTime'  => 'FinishedTime',
        'supportCancel' => 'SupportCancel',
        'taskId'        => 'TaskId',
        'taskAction'    => 'TaskAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }
        if (null !== $this->supportCancel) {
            $res['SupportCancel'] = $this->supportCancel;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }
        if (isset($map['SupportCancel'])) {
            $model->supportCancel = $map['SupportCancel'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }

        return $model;
    }
}
