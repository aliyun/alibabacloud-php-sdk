<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarTaskAndActionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarTaskAndActionsResponseBody\details\actions;

class details extends Model
{
    /**
     * @var int
     */
    public $actionLogNum;

    /**
     * @var actions[]
     */
    public $actions;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $rawEventReq;

    /**
     * @var string
     */
    public $requestUuid;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskFlowMd5;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $triggerType;

    /**
     * @var string
     */
    public $triggerUser;
    protected $_name = [
        'actionLogNum' => 'ActionLogNum',
        'actions' => 'Actions',
        'endTime' => 'EndTime',
        'errorMsg' => 'ErrorMsg',
        'rawEventReq' => 'RawEventReq',
        'requestUuid' => 'RequestUuid',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'taskFlowMd5' => 'TaskFlowMd5',
        'taskName' => 'TaskName',
        'triggerType' => 'TriggerType',
        'triggerUser' => 'TriggerUser',
    ];

    public function validate()
    {
        if (\is_array($this->actions)) {
            Model::validateArray($this->actions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionLogNum) {
            $res['ActionLogNum'] = $this->actionLogNum;
        }

        if (null !== $this->actions) {
            if (\is_array($this->actions)) {
                $res['Actions'] = [];
                $n1 = 0;
                foreach ($this->actions as $item1) {
                    $res['Actions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }

        if (null !== $this->triggerUser) {
            $res['TriggerUser'] = $this->triggerUser;
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
        if (isset($map['ActionLogNum'])) {
            $model->actionLogNum = $map['ActionLogNum'];
        }

        if (isset($map['Actions'])) {
            if (!empty($map['Actions'])) {
                $model->actions = [];
                $n1 = 0;
                foreach ($map['Actions'] as $item1) {
                    $model->actions[$n1] = actions::fromMap($item1);
                    ++$n1;
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

        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }

        if (isset($map['TriggerUser'])) {
            $model->triggerUser = $map['TriggerUser'];
        }

        return $model;
    }
}
