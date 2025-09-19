<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationTaskResponseBody;

use AlibabaCloud\Dara\Model;

class operationTasks extends Model
{
    /**
     * @var int
     */
    public $checkId;

    /**
     * @var string
     */
    public $checkShowName;

    /**
     * @var int
     */
    public $dealTime;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var bool
     */
    public $instanceFreed;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $lastCheckTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $repairSupportType;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $rootTaskId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusShowName;

    /**
     * @var bool
     */
    public $supportRollBack;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'checkId' => 'CheckId',
        'checkShowName' => 'CheckShowName',
        'dealTime' => 'DealTime',
        'errorCode' => 'ErrorCode',
        'errorMsg' => 'ErrorMsg',
        'instanceFreed' => 'InstanceFreed',
        'instanceId' => 'InstanceId',
        'lastCheckTime' => 'LastCheckTime',
        'regionId' => 'RegionId',
        'repairSupportType' => 'RepairSupportType',
        'riskLevel' => 'RiskLevel',
        'rootTaskId' => 'RootTaskId',
        'status' => 'Status',
        'statusShowName' => 'StatusShowName',
        'supportRollBack' => 'SupportRollBack',
        'taskId' => 'TaskId',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->checkShowName) {
            $res['CheckShowName'] = $this->checkShowName;
        }

        if (null !== $this->dealTime) {
            $res['DealTime'] = $this->dealTime;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }

        if (null !== $this->instanceFreed) {
            $res['InstanceFreed'] = $this->instanceFreed;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lastCheckTime) {
            $res['LastCheckTime'] = $this->lastCheckTime;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->repairSupportType) {
            $res['RepairSupportType'] = $this->repairSupportType;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->rootTaskId) {
            $res['RootTaskId'] = $this->rootTaskId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusShowName) {
            $res['StatusShowName'] = $this->statusShowName;
        }

        if (null !== $this->supportRollBack) {
            $res['SupportRollBack'] = $this->supportRollBack;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['CheckShowName'])) {
            $model->checkShowName = $map['CheckShowName'];
        }

        if (isset($map['DealTime'])) {
            $model->dealTime = $map['DealTime'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }

        if (isset($map['InstanceFreed'])) {
            $model->instanceFreed = $map['InstanceFreed'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LastCheckTime'])) {
            $model->lastCheckTime = $map['LastCheckTime'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RepairSupportType'])) {
            $model->repairSupportType = $map['RepairSupportType'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['RootTaskId'])) {
            $model->rootTaskId = $map['RootTaskId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusShowName'])) {
            $model->statusShowName = $map['StatusShowName'];
        }

        if (isset($map['SupportRollBack'])) {
            $model->supportRollBack = $map['SupportRollBack'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
