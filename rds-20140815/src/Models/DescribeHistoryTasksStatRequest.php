<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeHistoryTasksStatRequest extends Model
{
    /**
     * @description The minimum execution duration of a task. This parameter is used to filter tasks whose execution duration is longer than the minimum execution duration. Unit: seconds. The default value is 0, which indicates that no limit is imposed.
     *
     * @example 0
     *
     * @var int
     */
    public $fromExecTime;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*t*HH:mm:ss*z format. The time must be in UTC.
     *
     * @example 2023-05-08T07:04:17Z
     *
     * @var string
     */
    public $fromStartTime;

    /**
     * @description The instance ID.
     *
     * @example rm-2ze704f*****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID. You can call the DescribeRegions operation to query the most recent region list.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmy*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The task status. Valid values:
     *
     *   Scheduled
     *   Running
     *   Succeed
     *   Failed
     *   Cancelling
     *   Canceled
     *   Waiting
     *
     * Separate multiple states with commas (,). This parameter is empty by default, which indicates that tasks in all states are queried.
     * @example Scheduled
     *
     * @var string
     */
    public $status;

    /**
     * @description The task ID.
     *
     * @example 12221
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The task type.
     *
     * @example all
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The maximum execution duration of a task. This parameter is used to filter tasks whose execution duration is shorter than or equal to the maximum execution duration. Unit: seconds. The default value is 0, which indicates that no limit is imposed.
     *
     * @example 0
     *
     * @var int
     */
    public $toExecTime;

    /**
     * @description The end of the time range to query. Only tasks that have a start time earlier than or equal to the time specified by this parameter are queried. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2023-02-24T10:01:37Z
     *
     * @var string
     */
    public $toStartTime;
    protected $_name = [
        'fromExecTime'         => 'FromExecTime',
        'fromStartTime'        => 'FromStartTime',
        'instanceId'           => 'InstanceId',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
     * @return DescribeHistoryTasksStatRequest
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
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
