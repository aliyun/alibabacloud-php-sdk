<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTasksResponseBody\taskSet;

use AlibabaCloud\Dara\Model;

class task extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $finishedTime;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $supportCancel;

    /**
     * @var string
     */
    public $taskAction;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'finishedTime' => 'FinishedTime',
        'resourceId' => 'ResourceId',
        'supportCancel' => 'SupportCancel',
        'taskAction' => 'TaskAction',
        'taskId' => 'TaskId',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->supportCancel) {
            $res['SupportCancel'] = $this->supportCancel;
        }

        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['SupportCancel'])) {
            $model->supportCancel = $map['SupportCancel'];
        }

        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
