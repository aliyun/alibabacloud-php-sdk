<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceTestTasksResponseBody;

use AlibabaCloud\Dara\Model;

class serviceTestTasks extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $taskId;
    /**
     * @var string
     */
    public $taskName;
    /**
     * @var string
     */
    public $taskRegionId;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'status'       => 'Status',
        'taskId'       => 'TaskId',
        'taskName'     => 'TaskName',
        'taskRegionId' => 'TaskRegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
