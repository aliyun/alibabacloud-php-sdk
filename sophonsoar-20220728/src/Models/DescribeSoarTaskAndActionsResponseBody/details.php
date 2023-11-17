<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarTaskAndActionsResponseBody;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarTaskAndActionsResponseBody\details\actions;
use AlibabaCloud\Tea\Model;

class details extends Model
{
    /**
     * @var actions[]
     */
    public $actions;

    /**
     * @example 1699868848767
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
     * @example 17f75844-75cc-4174-86da-cec07a690142
     *
     * @var string
     */
    public $requestUuid;

    /**
     * @example DEBUG
     *
     * @var string
     */
    public $resultLevel;

    /**
     * @example deubug playbook finished
     *
     * @var string
     */
    public $resultMessage;

    /**
     * @example 1699868848645
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
     * @example ed127287-6699-4e4d-b986-9f770879xxx
     *
     * @var string
     */
    public $taskFlowMd5;

    /**
     * @example 92af3c79-1754-4646-9366-9ddbd1e45536
     *
     * @var string
     */
    public $taskName;

    /**
     * @example 127xxxx4392
     *
     * @var string
     */
    public $taskTenantId;

    /**
     * @example siem
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
