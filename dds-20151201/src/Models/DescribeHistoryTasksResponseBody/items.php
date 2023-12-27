<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeHistoryTasksResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description A set of allowed actions that can be taken on the task. The system matches the current step name and status of the task to the available actions specified by ActionInfo. If no matching action is found, the current status of the task does not support any action. Example:
     *
     * The system may support the following actions:
     *
     *   retry: makes another attempt.
     *   cancel: makes a cancellation.
     *   modifySwitchTime: changes the switching or restoration time.
     *
     * @example `{\"steps\":[{\"action_info\":{\"Waiting\":[\"modifySwitchTime\"]},\"step_name\":\"exec_task\"}]}`
     *
     * @var string
     */
    public $actionInfo;

    /**
     * @description The request source. Valid values: System and User.
     *
     * @example System
     *
     * @var string
     */
    public $callerSource;

    /**
     * @description The ID of the user who made the request. If CallerSource is set to User, CallerUid indicates the unique ID (UID) of the user.
     *
     * @example 141345906006****
     *
     * @var string
     */
    public $callerUid;

    /**
     * @description The name of the current step. If this parameter is left empty, the task is not started.
     *
     * @example exec_task
     *
     * @var string
     */
    public $currentStepName;

    /**
     * @description The database type. The value is fixed to mongodb.
     *
     * @example mongodb
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The end time of the performed O\&M task. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-03-16T02:59Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The instance ID
     *
     * @example dds-t4n18194768fxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance.
     *
     * @example test-dds
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The instance type of the instance. The value is fixed to Instance.
     *
     * @example Instance
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The product. The value is fixed to dds.
     *
     * @example dds
     *
     * @var string
     */
    public $product;

    /**
     * @description The current progress of the task. The valid values range from 0 to 100.
     *
     * @example 100.0
     *
     * @var float
     */
    public $progress;

    /**
     * @description The reason why the current task was initiated.
     *
     * @example test
     *
     * @var string
     */
    public $reasonCode;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The estimated remaining execution time. Unit: seconds. The value 0 indicates that the task is completed.
     *
     * @example 1000
     *
     * @var int
     */
    public $remainTime;

    /**
     * @description The start time of the performed O\&M task. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-02-11T02:33Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The task status. Valid values:
     *
     *   Scheduled: The task is waiting to be executed.
     *   Running: The task is running.
     *   Succeed: The task is successful.
     *   Failed: The task failed.
     *   Cancelling: The task is being terminated.
     *   Canceled: The task has been terminated.
     *   Waiting: The task is waiting for scheduled time.
     *
     * @example Succeed
     *
     * @var int
     */
    public $status;

    /**
     * @description The details of the task. The task details vary based on the value of the taskType parameter.
     *
     * @example {\"callerUid\":\"test\"}
     *
     * @var string
     */
    public $taskDetail;

    /**
     * @description The task ID.
     *
     * @example t-0mq1yyhm3ffl2bxxxx
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The task type.
     *
     *   CreateIns: Create an instance.
     *   DeleteIns: Delete an instance.
     *   ChangeVariable: Modify parameter settings for an instance.
     *   ModifyInsConfig: Change the configurations of an instance.
     *   RestartIns: Restart an instance.
     *   HaSwitch: Perform a primary/secondary switchover on an instance.
     *   CloneIns: Clone an instance.
     *   KernelVersionUpgrade: Update the minor version of an instance.
     *   ProxyVersionUpgrade: Upgrade the agent version of an instance.
     *   ModifyAccount: Change the account of an instance.
     *   ModifyInsSpec: Change the specifications of an instance or perform a data migration on the instance.
     *   CreateReadIns: Create a read-only instance.
     *   StartIns: Start an instance.
     *   StopIns: Stop an instance.
     *   ModifyNetwork: Modify the network type for an instance.
     *   LockIns: Lock an instance.
     *   UnlockIns: Unlock an instance.
     *   DiskOnlineExpansion: Scale out the disks of an instance online.
     *   StorageOnlineExpansion: Expend the storage capacity of an instance online.
     *   AddInsNode: Add a node to an instance.
     *   DeleteInsNode: Delete a node from an instance.
     *   ManualBackupIns: Manually back up an instance.
     *   ModifyInsStorageType: Modify the storage type for an instance.
     *
     * @example CreateIns
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The ID of the user to which the resource belongs.
     *
     * @example 141345906006****
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'actionInfo'      => 'ActionInfo',
        'callerSource'    => 'CallerSource',
        'callerUid'       => 'CallerUid',
        'currentStepName' => 'CurrentStepName',
        'dbType'          => 'DbType',
        'endTime'         => 'EndTime',
        'instanceId'      => 'InstanceId',
        'instanceName'    => 'InstanceName',
        'instanceType'    => 'InstanceType',
        'product'         => 'Product',
        'progress'        => 'Progress',
        'reasonCode'      => 'ReasonCode',
        'regionId'        => 'RegionId',
        'remainTime'      => 'RemainTime',
        'startTime'       => 'StartTime',
        'status'          => 'Status',
        'taskDetail'      => 'TaskDetail',
        'taskId'          => 'TaskId',
        'taskType'        => 'TaskType',
        'uid'             => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionInfo) {
            $res['ActionInfo'] = $this->actionInfo;
        }
        if (null !== $this->callerSource) {
            $res['CallerSource'] = $this->callerSource;
        }
        if (null !== $this->callerUid) {
            $res['CallerUid'] = $this->callerUid;
        }
        if (null !== $this->currentStepName) {
            $res['CurrentStepName'] = $this->currentStepName;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->remainTime) {
            $res['RemainTime'] = $this->remainTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskDetail) {
            $res['TaskDetail'] = $this->taskDetail;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionInfo'])) {
            $model->actionInfo = $map['ActionInfo'];
        }
        if (isset($map['CallerSource'])) {
            $model->callerSource = $map['CallerSource'];
        }
        if (isset($map['CallerUid'])) {
            $model->callerUid = $map['CallerUid'];
        }
        if (isset($map['CurrentStepName'])) {
            $model->currentStepName = $map['CurrentStepName'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RemainTime'])) {
            $model->remainTime = $map['RemainTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskDetail'])) {
            $model->taskDetail = $map['TaskDetail'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
