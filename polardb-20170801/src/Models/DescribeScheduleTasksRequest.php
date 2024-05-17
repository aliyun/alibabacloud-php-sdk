<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeScheduleTasksRequest extends Model
{
    /**
     * @description The description of the cluster.
     *
     * @example testdb
     *
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @description The cluster ID.
     *
     * >
     *
     *   You can call the [DescribeDBClusters](https://help.aliyun.com/document_detail/98094.html) operation to query the information of all PolarDB clusters that are deployed in a specific region, such as the cluster IDs.
     *
     *   If you do not specify this parameter, all scheduled tasks on your clusters are queried.
     *
     * @example pc-**************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The ID of the order.
     *
     * >  The order ID can contain only digits.
     * @example 20951253014****
     *
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number of the page to return. Set this parameter to an integer that is greater than 0. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: **30**, **50**, and **100**. Default value: 30.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The latest start time of the task that you specified when you created the scheduled task. The time is displayed in UTC.
     *
     * @example 2021-01-28T12:30Z
     *
     * @var string
     */
    public $plannedEndTime;

    /**
     * @description The earliest start time of the task that you specified when you created the scheduled task. The time is displayed in UTC.
     *
     * @example 2021-01-28T12:00Z
     *
     * @var string
     */
    public $plannedStartTime;

    /**
     * @description The ID of the region.
     *
     * >
     *
     *   You can call the [DescribeRegions](https://help.aliyun.com/document_detail/98041.html) operation to query the region information of all clusters in a specific account.
     *
     *   If you do not specify this parameter, scheduled tasks on your clusters that are deployed in all regions are queried.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-************
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The state of the tasks that you want to query. Valid values:
     *
     *   **pending**: The tasks are pending execution.
     *   **executing**: The tasks are being executed.
     *   **failure**: The tasks failed and need to be run again.
     *   **finish**: The tasks are complete.
     *   **cancel**: The tasks are canceled.
     *   **expired**: The tasks are expired. The tasks are not started within the time periods that are specified to start the tasks.
     *   **rollback**: The tasks are being rolled back.
     *
     * >  If you do not specify this parameter, all scheduled tasks in all states are queried.
     * @example finish
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of scheduled tasks that you want to query. Valid values:
     *
     *   **CreateDBNodes**
     *   **ModifyDBNodeClass**
     *   **UpgradeDBClusterVersion**
     *   **ModifyDBClusterPrimaryZone**
     *
     * >
     *
     *   If you specify the `PlannedStartTime` parameter when you call the four preceding operations, the details of each task are returned. Otherwise, an empty string is returned for the `TimerInfos` parameter.
     *
     *   If you do not specify this parameter, all types of scheduled tasks on you clusters are queried.
     *
     * @example CreateDBNodes
     *
     * @var string
     */
    public $taskAction;
    protected $_name = [
        'DBClusterDescription' => 'DBClusterDescription',
        'DBClusterId'          => 'DBClusterId',
        'orderId'              => 'OrderId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'plannedEndTime'       => 'PlannedEndTime',
        'plannedStartTime'     => 'PlannedStartTime',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'status'               => 'Status',
        'taskAction'           => 'TaskAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->plannedEndTime) {
            $res['PlannedEndTime'] = $this->plannedEndTime;
        }
        if (null !== $this->plannedStartTime) {
            $res['PlannedStartTime'] = $this->plannedStartTime;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScheduleTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PlannedEndTime'])) {
            $model->plannedEndTime = $map['PlannedEndTime'];
        }
        if (isset($map['PlannedStartTime'])) {
            $model->plannedStartTime = $map['PlannedStartTime'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }

        return $model;
    }
}
