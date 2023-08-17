<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBResourcePoolRequest extends Model
{
    /**
     * @description The ID of the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * > You can call the [DescribeDBClusters](~~129857~~) operation to query the IDs of all AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters within a region.
     * @example am-bp1ub9grke1****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The number of nodes.
     *
     *   Each node provides 16 cores and 64 GB memory.
     *   The amount of resources that you want to add to or remove from the cluster cannot exceed the total amount of resources in the cluster.
     *
     * >
     *
     *   If you do not specify this parameter, the original value is retained.
     *
     *   You must specify at least one of the QueryType and NodeNum parameters.
     *
     * @example 2
     *
     * @var int
     */
    public $nodeNum;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The name of the resource group.
     *
     * @example test_group
     *
     * @var string
     */
    public $poolName;

    /**
     * @description The mode in which SQL statements are executed. Valid values:
     *
     *   **batch**
     *   **interactive**
     *
     * > If you do not specify this parameter, the original value is retained.
     * @example batch
     *
     * @var string
     */
    public $queryType;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'DBClusterId'          => 'DBClusterId',
        'nodeNum'              => 'NodeNum',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'poolName'             => 'PoolName',
        'queryType'            => 'QueryType',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->poolName) {
            $res['PoolName'] = $this->poolName;
        }
        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBResourcePoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PoolName'])) {
            $model->poolName = $map['PoolName'];
        }
        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
