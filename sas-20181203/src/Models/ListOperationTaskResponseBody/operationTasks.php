<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationTaskResponseBody;

use AlibabaCloud\Tea\Model;

class operationTasks extends Model
{
    /**
     * @description 检查项的ID。
     *
     * @example 3
     *
     * @var int
     */
    public $checkId;

    /**
     * @description The name of the check item.
     *
     * @example checkShowName
     *
     * @var string
     */
    public $checkShowName;

    /**
     * @description The processing time of the task.
     *
     * @example 1723173101010
     *
     * @var int
     */
    public $dealTime;

    /**
     * @description The error code.
     *
     * @example BackUpScriptError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message.
     *
     * @example backUp script error
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description Whether the instance is released:
     * - true: Released
     * - false: Not released
     *
     * @example true
     *
     * @var bool
     */
    public $instanceFreed;

    /**
     * @description The ID of the server instance.
     *
     * @example i-wz9abo6wgjmh4yep****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The timestamp of the latest check, in milliseconds.
     *
     * @example 1723173101000
     *
     * @var int
     */
    public $lastCheckTime;

    /**
     * @description 服务器所在的地域的ID。
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of repair supported by the check item:
     *
     * - **1**：Supports repair and rollback operations
     * - **2**：Supports repair but not rollback
     * - **3**：Redirect to a third-party platform for operation
     *
     * @example 1
     *
     * @var int
     */
    public $repairSupportType;

    /**
     * @description 扫描出的告警的风险等级。取值：
     *
     * - **high**：高危。
     * - **medium**：中危。
     * - **low**：低危。
     *
     * @example high
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The ID of the main task.
     *
     * @example 01db51b0e5307bb703a22611c86f****
     *
     * @var string
     */
    public $rootTaskId;

    /**
     * @description The status of the task. Possible values:
     *
     * - **INIT**：Initialization
     * - **FAIL**：Processing failed
     * - **THROTTLING**：Repairing concurrently
     * - **IN_BACKUP**：Backing up
     * - **BACKED_UP**：Backed up
     * - **BACKUP_FAIL**：Backup failed
     * - **REPAIRING**：Repairing
     * - **REPAIR_SUCCESS**：Repair succeeded
     * - **REPAIR_FAIL**：Repair failed
     * - **REPAIR_SUCCESS_VERIFYING**：Verifying repair success
     * - **REPAIR_SUCCESS_UNVERIFIED**：Verification of repair success failed
     * - **REPAIR_SUCCESS_VERIFIED**：Verification of repair success succeeded
     * - **REPAIR_RE_EXECUTE**：Re-executing repair
     * - **ROLL_BACKING**：Rolling back
     * - **ROLL_BACKED**：Rolled back
     * - **ROLL_BACK_FAIL**：Rollback failed
     * - **ROLL_BACK_INIT**：Initiating rollback
     * - **ROLL_BACK_VERIFYING**：Verifying rollback success
     * - **ROLL_BACK_UNVERIFIED**：Verification of rollback success failed
     * - **ROLL_BACK_VERIFIED**：Verification of rollback success succeeded
     *
     * @example REPAIRING
     *
     * @var string
     */
    public $status;

    /**
     * @description The display status of the repair task.
     *
     * @example Verified After Repair Success
     *
     * @var string
     */
    public $statusShowName;

    /**
     * @description Whether rollback is supported:
     * - true: Supported
     * - false: Not supported
     *
     * @example true
     *
     * @var bool
     */
    public $supportRollBack;

    /**
     * @description The ID of the operation task.
     *
     * @example 5bb1a313f9924b728b3c12e007c1****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The type of the operation task being queried:
     * - REPAIR: Repair
     * - ROLLBACK: Rollback
     *
     * @example REPAIR
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return operationTasks
     */
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
