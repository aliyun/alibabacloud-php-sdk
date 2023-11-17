<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class soarExecuteRecords extends Model
{
    /**
     * @example 1686294686000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example stime not match
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @example {
     * }
     * @var string
     */
    public $rawEventReq;

    /**
     * @example ba1ec480-aa90-4bb6-a1a7-9e311ae79321
     *
     * @var string
     */
    public $requestUuid;

    /**
     * @example Playbook finish
     *
     * @var string
     */
    public $resultMessage;

    /**
     * @example 1675823338433
     *
     * @var int
     */
    public $startTime;

    /**
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @example 82848ebc-eaff-4791-acd4-xxxxx
     *
     * @var string
     */
    public $taskName;

    /**
     * @example standard
     *
     * @var string
     */
    public $taskType;

    /**
     * @example dea65a3db87fb9bd84bbxxxxx
     *
     * @var string
     */
    public $taskflowMd5;

    /**
     * @example debug
     *
     * @var string
     */
    public $triggerType;

    /**
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
