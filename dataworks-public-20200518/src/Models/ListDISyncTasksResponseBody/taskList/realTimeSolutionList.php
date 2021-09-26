<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDISyncTasksResponseBody\taskList;

use AlibabaCloud\Tea\Model;

class realTimeSolutionList extends Model
{
    /**
     * @var string
     */
    public $processName;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var int
     */
    public $processId;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var int
     */
    public $createTime;
    protected $_name = [
        'processName' => 'ProcessName',
        'taskType'    => 'TaskType',
        'processId'   => 'ProcessId',
        'taskStatus'  => 'TaskStatus',
        'createTime'  => 'CreateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return realTimeSolutionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}
