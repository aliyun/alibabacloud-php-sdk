<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarTaskAndActionsResponseBody;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarTaskAndActionsResponseBody\details\actions;
use AlibabaCloud\Tea\Model;

class details extends Model
{
    /**
     * @description The list of component actions during the running of the playbook.
     *
     * @var actions[]
     */
    public $actions;

    /**
     * @description The end of the time range during which the playbook is run. The value is a 13-digit timestamp.
     *
     * @example 1699868848767
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
     * @example 17f75844-75cc-4174-86da-cec07a690142
     *
     * @var string
     */
    public $requestUuid;

    /**
     * @description The flag of the task. For debugging tasks, the value is **DEBUG**. For other tasks, the parameter is left empty.
     *
     * @example DEBUG
     *
     * @var string
     */
    public $resultLevel;

    /**
     * @description The returned information about the playbook. You can define the value in the playbook.
     *
     * @example deubug playbook finished
     *
     * @var string
     */
    public $resultMessage;

    /**
     * @description The beginning of the time range during which the playbook is run. The value is a 13-digit timestamp.
     *
     * @example 1699868848645
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The task status. Valid values:
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
     * @description The MD5 value of the playbook.
     *
     * @example ed127287-6699-4e4d-b986-9f770879xxx
     *
     * @var string
     */
    public $taskFlowMd5;

    /**
     * @description The name of the task. The value is the same as the playbook UUID.
     *
     * @example 92af3c79-1754-4646-9366-9ddbd1e45536
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The ID of the Alibaba Cloud account to which the task belongs.
     *
     * @example 127xxxx4392
     *
     * @var string
     */
    public $taskTenantId;

    /**
     * @description The task type. Valid values:
     *
     *   **debug**: a debugging task
     *   **manual**: a manual task
     *   **siem**: an event-triggered task
     *
     * @example siem
     *
     * @var string
     */
    public $triggerType;

    /**
     * @description The ID of the Alibaba Cloud account that triggers the task.
     *
     * @example 127xxxx4392
     *
     * @var string
     */
    public $triggerUser;
    protected $_name = [
        'actions'       => 'Actions',
        'endTime'       => 'EndTime',
        'errorMsg'      => 'ErrorMsg',
        'rawEventReq'   => 'RawEventReq',
        'requestUuid'   => 'RequestUuid',
        'resultLevel'   => 'ResultLevel',
        'resultMessage' => 'ResultMessage',
        'startTime'     => 'StartTime',
        'status'        => 'Status',
        'taskFlowMd5'   => 'TaskFlowMd5',
        'taskName'      => 'TaskName',
        'taskTenantId'  => 'TaskTenantId',
        'triggerType'   => 'TriggerType',
        'triggerUser'   => 'TriggerUser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actions) {
            $res['Actions'] = [];
            if (null !== $this->actions && \is_array($this->actions)) {
                $n = 0;
                foreach ($this->actions as $item) {
                    $res['Actions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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
        if (null !== $this->resultLevel) {
            $res['ResultLevel'] = $this->resultLevel;
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
        if (null !== $this->taskFlowMd5) {
            $res['TaskFlowMd5'] = $this->taskFlowMd5;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskTenantId) {
            $res['TaskTenantId'] = $this->taskTenantId;
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
     * @return details
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Actions'])) {
            if (!empty($map['Actions'])) {
                $model->actions = [];
                $n              = 0;
                foreach ($map['Actions'] as $item) {
                    $model->actions[$n++] = null !== $item ? actions::fromMap($item) : $item;
                }
            }
        }
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
        if (isset($map['ResultLevel'])) {
            $model->resultLevel = $map['ResultLevel'];
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
        if (isset($map['TaskFlowMd5'])) {
            $model->taskFlowMd5 = $map['TaskFlowMd5'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskTenantId'])) {
            $model->taskTenantId = $map['TaskTenantId'];
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
