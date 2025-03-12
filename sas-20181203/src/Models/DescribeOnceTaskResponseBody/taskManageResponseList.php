<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeOnceTaskResponseBody;

use AlibabaCloud\Tea\Model;

class taskManageResponseList extends Model
{
    /**
     * @description The execution details of the task. The value of this parameter is in the JSON format.
     *
     *   **causeCode**: the returned code for the cause.
     *   **causeMsg**: the returned message for the cause.
     *   **resCode**: the returned code for troubleshooting.
     *   **resMsg**: the returned message for troubleshooting.
     *   **problemType**: the type of the issue.
     *   **dispatchType**: the task delivery method.
     *   **uuid**: the UUID of the server.
     *   **instanceId**: the instance ID of the server.
     *   **internetIp**: the public IP address of the server.
     *   **intranetIp**: the private IP address of the server.
     *   **instanceName**: the instance name of the server.
     *   **url**: the download URL of the troubleshooting log.
     *
     * @example [
     * "problemType": "offline",
     * "uuid": "inet-eae04867-002f-423d-af00-c72cd629****"
     * ]
     * @var string
     */
    public $detailData;

    /**
     * @description The number of tasks that fail to be executed.
     *
     * @example 2
     *
     * @var int
     */
    public $failCount;

    /**
     * @description The progress of the task. Unit: percent (%).
     *
     * @example 10%
     *
     * @var string
     */
    public $progress;

    /**
     * @description The execution result of the task.
     *
     * @example successful
     *
     * @var string
     */
    public $resultInfo;

    /**
     * @description The number of tasks that are executed.
     *
     * @example 7
     *
     * @var int
     */
    public $successCount;

    /**
     * @description The timestamp that indicates the time when the task ends. Unit: milliseconds.
     *
     * @example 1650267989000
     *
     * @var int
     */
    public $taskEndTime;

    /**
     * @description The task ID.
     *
     * @example e900f528f5a6229bb640ca27cb44c98e
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The name of the task.
     *
     * @example CLIENT_PROBLEM_CHECK
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The timestamp that indicates the time when the task starts. Unit: milliseconds.
     *
     * @example 1649732012000
     *
     * @var int
     */
    public $taskStartTime;

    /**
     * @description The status of the task. Valid values:
     *
     *   **1**: The task is started.
     *   **2**: The task is complete.
     *   **3**: The task fails.
     *   **4**: The task times out.
     *
     * @example 1
     *
     * @var int
     */
    public $taskStatus;

    /**
     * @description The text description of the status for the task. Valid values:
     *
     *   **INIT**: The task is pending start.
     *   **START**: The task is started.
     *   **DISPATCH**: The self-check command is issued.
     *   **SUCCESS**: The self-check is complete.
     *   **FAIL**: The task fails.
     *   **TIMEOUT**: The task times out.
     *
     * @example INIT
     *
     * @var string
     */
    public $taskStatusText;

    /**
     * @description The type of the task. Valid values:
     *
     *   **CLIENT_PROBLEM_CHECK**: a task of the Security Center client
     *   **CLIENT_DEV_OPS**: an O\\&M task of Cloud Assistant
     *   **ASSET_SECURITY_CHECK**: a task for asset information collection
     *
     * @example CLIENT_PROBLEM_CHECK
     *
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
