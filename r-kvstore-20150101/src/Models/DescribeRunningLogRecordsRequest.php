<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribeRunningLogRecordsRequest extends Model
{
    /**
     * @description The shard type of the cluster instance. Valid values:
     *
     *   **proxy**: proxy node
     *   **db**: data node
     *   **cs**: config server node
     *
     * >  If you set this parameter, you must also set the **NodeId** parameter.
     * @example proxy
     *
     * @var string
     */
    public $characterType;

    /**
     * @description The name of the database.
     *
     * @example 0
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The end of the time range to query. The end time must be later than the start time. The time range cannot exceed one day. We recommend that you specify 1 hour. Specify the time in the *yyyy-MM-dd*T*HH:mm*Z format. The time must be in UTC.
     *
     * This parameter is required.
     * @example 2018-12-03T08:01Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the node in the instance. You can set this parameter to query the operational logs of a specified node.
     *
     * > *   This parameter is available only for read/write splitting and cluster instances of ApsaraDB for Redis.
     * > *   If you set this parameter, you must also set the **CharacterType** parameter.
     * @example r-bp1zxszhcgatnx****-db-0
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The method that is used to sort the returned log entries. Valid values:
     *
     *   **asc**: ascending order
     *   **desc**: descending order
     *
     * @example asc
     *
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. The value must be an integer that is greater than **0** and less than or equal to the maximum value supported by the integer data type. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: **30**, **50**, and **100**. Default value: **30**.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The keyword that is used to query operational logs.
     *
     * @example aof
     *
     * @var string
     */
    public $queryKeyword;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmyiu4ekp****
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
     * @description The role of the data shard. Default value: master. Valid values:
     *
     *   **master**: master node
     *   **slave**: replica node
     *
     * @example master
     *
     * @var string
     */
    public $roleType;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The beginning of the time range to query. Specify the time in the *yyyy-MM-dd*T*HH:mm*Z format. The time must be in UTC.
     *
     * This parameter is required.
     * @example 2018-12-03T07:01Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'characterType'        => 'CharacterType',
        'DBName'               => 'DBName',
        'endTime'              => 'EndTime',
        'instanceId'           => 'InstanceId',
        'nodeId'               => 'NodeId',
        'orderType'            => 'OrderType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'queryKeyword'         => 'QueryKeyword',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'roleType'             => 'RoleType',
        'securityToken'        => 'SecurityToken',
        'startTime'            => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->characterType) {
            $res['CharacterType'] = $this->characterType;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
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
        if (null !== $this->queryKeyword) {
            $res['QueryKeyword'] = $this->queryKeyword;
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
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRunningLogRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CharacterType'])) {
            $model->characterType = $map['CharacterType'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
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
        if (isset($map['QueryKeyword'])) {
            $model->queryKeyword = $map['QueryKeyword'];
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
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
