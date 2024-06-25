<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeDBClustersRequest extends Model
{
    /**
     * @description The endpoint of the cluster.
     *
     * @example ********.rwlb.polardb-pg-public.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The description of the cluster. Fuzzy match is supported.
     *
     * @example pc-****************
     *
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @description The ID of the cluster. Separate multiple cluster IDs with commas (,).
     *
     * @example pc-****************
     *
     * @var string
     */
    public $DBClusterIds;

    /**
     * @description The state of the cluster that you want to query. For information about valid values, see [Cluster states](https://help.aliyun.com/document_detail/99286.html).
     *
     * @example Running
     *
     * @var string
     */
    public $DBClusterStatus;

    /**
     * @description The ID of the node. You can specify multiple node IDs. Separate multiple node IDs with commas (,).
     *
     * @example pi-***************
     *
     * @var string
     */
    public $DBNodeIds;

    /**
     * @description The database engine that the cluster runs. Valid values:
     *
     *   **MySQL**
     *   **PostgreSQL**
     *   **Oracle**
     *
     * @example MySQL
     *
     * @var string
     */
    public $DBType;

    /**
     * @description The database engine version of the cluster.
     *
     * @example 5.6
     *
     * @var string
     */
    public $DBVersion;

    /**
     * @description The query mode of the list. The value Simple indicates that the simple mode is used. In this mode, only the basic metadata information of the cluster is returned.
     *
     * > If you do not specify this parameter, the detailed mode is used by default. Detailed information about the cluster is returned.
     * @example Simple
     *
     * @var string
     */
    public $describeType;

    /**
     * @description Specifies whether the cluster has expired. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $expired;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number. The value must be a positive integer that does not exceed the maximum value of the INTEGER data type. Default value: **1**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: **30**, **50**, or **100**.
     *
     * Default value: **30**.
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The billing method. Valid values:
     *
     *   **Postpaid**: pay-as-you-go
     *   **Prepaid**: subscription
     *
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description Filters clusters created in the last N days. Valid values: 0 to 15.
     *
     * @example 7
     *
     * @var int
     */
    public $recentCreationInterval;

    /**
     * @description Filters clusters that expire after N days. Valid values: 0 to 15.
     *
     * @example 6
     *
     * @var int
     */
    public $recentExpirationInterval;

    /**
     * @description The region ID of the cluster.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-**********
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
     * @description The tags of the cluster.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'connectionString'         => 'ConnectionString',
        'DBClusterDescription'     => 'DBClusterDescription',
        'DBClusterIds'             => 'DBClusterIds',
        'DBClusterStatus'          => 'DBClusterStatus',
        'DBNodeIds'                => 'DBNodeIds',
        'DBType'                   => 'DBType',
        'DBVersion'                => 'DBVersion',
        'describeType'             => 'DescribeType',
        'expired'                  => 'Expired',
        'ownerAccount'             => 'OwnerAccount',
        'ownerId'                  => 'OwnerId',
        'pageNumber'               => 'PageNumber',
        'pageSize'                 => 'PageSize',
        'payType'                  => 'PayType',
        'recentCreationInterval'   => 'RecentCreationInterval',
        'recentExpirationInterval' => 'RecentExpirationInterval',
        'regionId'                 => 'RegionId',
        'resourceGroupId'          => 'ResourceGroupId',
        'resourceOwnerAccount'     => 'ResourceOwnerAccount',
        'resourceOwnerId'          => 'ResourceOwnerId',
        'tag'                      => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }
        if (null !== $this->DBClusterIds) {
            $res['DBClusterIds'] = $this->DBClusterIds;
        }
        if (null !== $this->DBClusterStatus) {
            $res['DBClusterStatus'] = $this->DBClusterStatus;
        }
        if (null !== $this->DBNodeIds) {
            $res['DBNodeIds'] = $this->DBNodeIds;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->describeType) {
            $res['DescribeType'] = $this->describeType;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
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
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->recentCreationInterval) {
            $res['RecentCreationInterval'] = $this->recentCreationInterval;
        }
        if (null !== $this->recentExpirationInterval) {
            $res['RecentExpirationInterval'] = $this->recentExpirationInterval;
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClustersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }
        if (isset($map['DBClusterIds'])) {
            $model->DBClusterIds = $map['DBClusterIds'];
        }
        if (isset($map['DBClusterStatus'])) {
            $model->DBClusterStatus = $map['DBClusterStatus'];
        }
        if (isset($map['DBNodeIds'])) {
            $model->DBNodeIds = $map['DBNodeIds'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['DescribeType'])) {
            $model->describeType = $map['DescribeType'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
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
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RecentCreationInterval'])) {
            $model->recentCreationInterval = $map['RecentCreationInterval'];
        }
        if (isset($map['RecentExpirationInterval'])) {
            $model->recentExpirationInterval = $map['RecentExpirationInterval'];
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
