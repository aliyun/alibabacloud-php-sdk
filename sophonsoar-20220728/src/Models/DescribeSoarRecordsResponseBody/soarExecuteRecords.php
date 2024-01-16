<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class soarExecuteRecords extends Model
{
    /**
     * @description The end of the time range to query. The value is a 13-digit timestamp.
     *
     * @example 1686294686000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The error message of the task. If the task is successful, this field is empty.
     *
     * @example stime not match
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description The request parameters of the task.
     *
     * @example {
     * }
     * @var string
     */
    public $rawEventReq;

    /**
     * @description The request ID of the task. The value is unique.
     *
     * @example ba1ec480-aa90-4bb6-a1a7-9e311ae79321
     *
     * @var string
     */
    public $requestUuid;

    /**
     * @description The returned information about the playbook. You can define the value in the playbook.
     *
     * @example Playbook finish
     *
     * @var string
     */
    public $resultMessage;

    /**
     * @description The beginning of the time range to query. The value is a 13-byte timestamp.
     *
     * @example 1675823338433
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the task. Valid values:
     *
     *   **success**
     *   **fail**
     *   **running**
     *
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the task. The value is the same as the playbook UUID.
     *
     * @example 82848ebc-eaff-4791-acd4-xxxxx
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The type of the task. Valid values:
     *
     *   **general**: a common task
     *   **standard**: a component task
     *
     * @example standard
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The MD5 value of the playbook.
     *
     * @example dea65a3db87fb9bd84bbxxxxx
     *
     * @var string
     */
    public $taskflowMd5;

    /**
     * @description The type of the task. Valid values:
     *
     *   **debug**: a debugging task
     *   **manual**: a manual task
     *   **siem**: a task that is triggered by an event or alert
     *
     * @example debug
     *
     * @var string
     */
    public $triggerType;

    /**
     * @description The ID of the Alibaba Cloud account that is used to execute the task.
     *
     * @example 127xxxx4392
     *
     * @var string
     */
    public $triggerUser;
    protected $_name = [
        'endTime'       => 'EndTime',
        'errorMsg'      => 'ErrorMsg',
        'rawEventReq'   => 'RawEventReq',
        'requestUuid'   => 'RequestUuid',
        'resultMessage' => 'ResultMessage',
        'startTime'     => 'StartTime',
        'status'        => 'Status',
        'taskName'      => 'TaskName',
        'taskType'      => 'TaskType',
        'taskflowMd5'   => 'TaskflowMd5',
        'triggerType'   => 'TriggerType',
        'triggerUser'   => 'TriggerUser',
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
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->rawEventReq) {
            $res['RawEventReq'] = $this->rawEventReq;
        }
        if (null !== $this->requestUuid) {
            $res['RequestUuid'] = $this->requestUuid;
        }
        if (null !== $this->resultMessage) {
            $res['ResultMessage'] = $this->resultMessage;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->taskflowMd5) {
            $res['TaskflowMd5'] = $this->taskflowMd5;
        }
        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }
        if (null !== $this->triggerUser) {
            $res['TriggerUser'] = $this->triggerUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return soarExecuteRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['RawEventReq'])) {
            $model->rawEventReq = $map['RawEventReq'];
        }
        if (isset($map['RequestUuid'])) {
            $model->requestUuid = $map['RequestUuid'];
        }
        if (isset($map['ResultMessage'])) {
            $model->resultMessage = $map['ResultMessage'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TaskflowMd5'])) {
            $model->taskflowMd5 = $map['TaskflowMd5'];
        }
        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }
        if (isset($map['TriggerUser'])) {
            $model->triggerUser = $map['TriggerUser'];
        }

        return $model;
    }
}
