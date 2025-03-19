<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceTestTasksResponseBody;

use AlibabaCloud\Tea\Model;

class serviceTestTasks extends Model
{
    /**
     * @description The time when the task was created.
     *
     * @example 2024-02-26T02:16:35Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description the status of service task.
     *
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @description The task ID.
     *
     * @example sttt-000h5nd4yrg59ucurzy1
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The name of the task.
     *
     * @example dadadad
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The task region id.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $taskRegionId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
        'taskRegionId' => 'TaskRegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskRegionId) {
            $res['TaskRegionId'] = $this->taskRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceTestTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskRegionId'])) {
            $model->taskRegionId = $map['TaskRegionId'];
        }

        return $model;
    }
}
