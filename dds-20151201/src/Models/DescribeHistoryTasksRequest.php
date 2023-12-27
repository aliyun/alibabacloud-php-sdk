<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribeHistoryTasksRequest extends Model
{
    /**
     * @description The minimum execution duration of the task. This parameter is used to filter tasks whose execution duration is longer than the minimum execution duration. Unit: seconds. The default value is 0, which indicates that no limit is imposed for the query.
     *
     * @example 0
     *
     * @var int
     */
    public $fromExecTime;

    /**
     * @description The start time of the O\&M task to perform. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC. You can query data within the last 30 days.
     *
     * @example 2023-03-15T03:41:26Z
     *
     * @var string
     */
    public $fromStartTime;

    /**
     * @description The instance ID. Separate multiple instance IDs with commas (,). You can specify up to 30 instance IDs. This parameter is empty by default, which indicates that tasks of all instances are queried.
     *
     * @example dds-8vb38f0e7933xxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance type of the instance. Set the value to Instance.
     *
     * @example Instance
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The number of the page to return. The value must be a positive integer. Default value: 1
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 10 to 100. Default value: 10
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the pending event. You can call the [DescribeRegions](~~61933~~) operation to query the most recent region list.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

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
     * Separate multiple states with commas (,). This parameter is empty by default, which indicates that tasks in all states are queried.
     * @example Succeed,Running,Waiting
     *
     * @var string
     */
    public $status;

    /**
     * @description The task ID. Separate multiple task IDs with commas (,). You can specify up to 30 task IDs. This parameter is empty by default, which indicates that all tasks are queried.
     *
     * @example t-0mq1yyhm3ffl2bxxxx
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The task type. This parameter is left empty by default, which indicates that all types of tasks are queried. Valid values:
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
     * @example DeleteInsNode
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The maximum execution duration of the task. This parameter is used to filter tasks whose execution duration is shorter than or equal to the maximum execution duration. Unit: seconds. The default value is 0, which indicates that no limit is imposed for the query.
     *
     * @example 0
     *
     * @var int
     */
    public $toExecTime;

    /**
     * @description The end time of the O\&M task to perform. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC. You can query data within the last 30 days.
     *
     * @example 2023-03-16T07:21:31Z
     *
     * @var string
     */
    public $toStartTime;
    protected $_name = [
        'fromExecTime'         => 'FromExecTime',
        'fromStartTime'        => 'FromStartTime',
        'instanceId'           => 'InstanceId',
        'instanceType'         => 'InstanceType',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'status'               => 'Status',
        'taskId'               => 'TaskId',
        'taskType'             => 'TaskType',
        'toExecTime'           => 'ToExecTime',
        'toStartTime'          => 'ToStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromExecTime) {
            $res['FromExecTime'] = $this->fromExecTime;
        }
        if (null !== $this->fromStartTime) {
            $res['FromStartTime'] = $this->fromStartTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->toExecTime) {
            $res['ToExecTime'] = $this->toExecTime;
        }
        if (null !== $this->toStartTime) {
            $res['ToStartTime'] = $this->toStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHistoryTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FromExecTime'])) {
            $model->fromExecTime = $map['FromExecTime'];
        }
        if (isset($map['FromStartTime'])) {
            $model->fromStartTime = $map['FromStartTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['ToExecTime'])) {
            $model->toExecTime = $map['ToExecTime'];
        }
        if (isset($map['ToStartTime'])) {
            $model->toStartTime = $map['ToStartTime'];
        }

        return $model;
    }
}
