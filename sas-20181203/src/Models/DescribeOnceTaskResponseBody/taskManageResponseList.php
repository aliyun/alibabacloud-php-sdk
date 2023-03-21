<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeOnceTaskResponseBody;

use AlibabaCloud\Tea\Model;

class taskManageResponseList extends Model
{
    /**
     * @var string
     */
    public $detailData;

    /**
     * @var int
     */
    public $failCount;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $resultInfo;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var int
     */
    public $taskEndTime;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $taskStartTime;

    /**
     * @var int
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $taskStatusText;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'detailData'     => 'DetailData',
        'failCount'      => 'FailCount',
        'progress'       => 'Progress',
        'resultInfo'     => 'ResultInfo',
        'successCount'   => 'SuccessCount',
        'taskEndTime'    => 'TaskEndTime',
        'taskId'         => 'TaskId',
        'taskName'       => 'TaskName',
        'taskStartTime'  => 'TaskStartTime',
        'taskStatus'     => 'TaskStatus',
        'taskStatusText' => 'TaskStatusText',
        'taskType'       => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detailData) {
            $res['DetailData'] = $this->detailData;
        }
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->resultInfo) {
            $res['ResultInfo'] = $this->resultInfo;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }
        if (null !== $this->taskEndTime) {
            $res['TaskEndTime'] = $this->taskEndTime;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskStartTime) {
            $res['TaskStartTime'] = $this->taskStartTime;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskStatusText) {
            $res['TaskStatusText'] = $this->taskStatusText;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskManageResponseList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetailData'])) {
            $model->detailData = $map['DetailData'];
        }
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ResultInfo'])) {
            $model->resultInfo = $map['ResultInfo'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }
        if (isset($map['TaskEndTime'])) {
            $model->taskEndTime = $map['TaskEndTime'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskStartTime'])) {
            $model->taskStartTime = $map['TaskStartTime'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskStatusText'])) {
            $model->taskStatusText = $map['TaskStatusText'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
