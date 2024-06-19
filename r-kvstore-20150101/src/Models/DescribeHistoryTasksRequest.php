<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribeHistoryTasksRequest extends Model
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
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC. The start time can be up to 30 days earlier than the current time.
     *
     * This parameter is required.
     * @example 2022-01-02T11:31:03Z
     *
     * @var string
     */
    public $fromStartTime;

    /**
     * @description The instance ID. This parameter is empty by default, which indicates that you can specify an unlimited number of instance IDs. Separate multiple instance IDs with commas (,). You can specify up to 30 instance IDs.
     *
     * @example r-uf62br2491p5l****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Set the value to Instance.
     *
     * @example Instance
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 10 to 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/61012.html) operation to query the most recent region list.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

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
     *   **Scheduled**
     *   **Running**
     *   **Succeed**
     *   **Failed**
     *   **Cancelling**
     *   **Canceled**
     *   **Waiting**
     *
     * >  This parameter is empty by default, which indicates that tasks in all states are queried. Separate multiple states with commas (,).
     * @example Scheduled
     *
     * @var string
     */
    public $status;

    /**
     * @description The task ID. This parameter is empty by default, which indicates that you can specify an unlimited number of task IDs. Separate multiple task IDs with commas (,). You can specify up to 30 task IDs.
     *
     * @example t-83br18hloy3faf****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The task type. This parameter is empty by default, which indicates that you can specify an unlimited number of task types.
     *
     *   **ModifyInsSpec**
     *   **DeleteInsNode**
     *   **AddInsNode**
     *   **HaSwitch**
     *   **RestartIns**
     *   **CreateIns**
     *   **ModifyInsConfig**
     *
     * >  Separate multiple task types with commas (,).
     * @example ModifyInsSpec
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
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC. Only tasks that have a start time earlier than or equal to the time specified by this parameter are queried.
     *
     * This parameter is required.
     * @example 2022-03-02T11:31:03Z
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
