<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ListAsyncTaskResponseBody;

use AlibabaCloud\Tea\Model;

class asyncTasks extends Model
{
    /**
     * @example 1533866201000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1533866201000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 123
     *
     * @var int
     */
    public $taskId;

    /**
     * @example {"instanceId": "ddoscoo-1234-qrq2134"}
     *
     * @var string
     */
    public $taskParams;

    /**
     * @example {"instanceId": "ddoscoo-1234-qrq2134", "url": "https://oss.xxx.xxx"}
     *
     * @var string
     */
    public $taskResult;

    /**
     * @example 1
     *
     * @var int
     */
    public $taskStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $taskType;
    protected $_name = [
        'endTime'    => 'EndTime',
        'startTime'  => 'StartTime',
        'taskId'     => 'TaskId',
        'taskParams' => 'TaskParams',
        'taskResult' => 'TaskResult',
        'taskStatus' => 'TaskStatus',
        'taskType'   => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskParams) {
            $res['TaskParams'] = $this->taskParams;
        }
        if (null !== $this->taskResult) {
            $res['TaskResult'] = $this->taskResult;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return asyncTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskParams'])) {
            $model->taskParams = $map['TaskParams'];
        }
        if (isset($map['TaskResult'])) {
            $model->taskResult = $map['TaskResult'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
