<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworkResponseBody;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworkResponseBody\DBClusters\DBNodes;
use AlibabaCloud\Tea\Model;

class DBClusters extends Model
{
    /**
     * @description The description of the cluster.
     *
     * @example test
     *
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @description The ID of the cluster in the GDN.
     *
     * @example pc-wz9fb5nn44u1d****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The status of the cluster in the GDN. For more information, see [Cluster status table](~~99286~~).
     *
     * @example Running
     *
     * @var string
     */
    public $DBClusterStatus;

    /**
     * @description The specifications of the node in the cluster.
     *
     * @example polar.mysql.x4.large
     *
     * @var string
     */
    public $DBNodeClass;

    /**
     * @description The details of the node.
     *
     * @var DBNodes[]
     */
    public $DBNodes;

    /**
     * @description The type of the database engine. Only MySQL is supported.
     *
     * @example MySQL
     *
     * @var string
     */
    public $DBType;

    /**
     * @description The version of the database engine. Only version 8.0 is supported.
     *
     * @example 8.0
     *
     * @var string
     */
    public $DBVersion;

    /**
     * @description The expiration time of the cluster.
     *
     * > A specific value is returned only for subscription (**Prepaid**) clusters. For pay-as-you-go (**Postpaid**) clusters, an empty string is returned.
     * @example 2020-11-14T16:00:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description Indicates whether the cluster is expired. Valid values:
     *
     *   **true**
     *   **false**
     *
     * > This parameter is returned only for subscription (**Prepaid**) clusters.
     * @example false
     *
     * @var string
     */
    public $expired;

    /**
     * @description The billing method of the cluster. Valid values:
     *
     *   **Postpaid**: pay-as-you-go.
     *   **Prepaid**: subscription.
     *
     * @example Prepaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The ID of the region in which the cluster resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The latency of cross-region data replication between the primary cluster and secondary clusters. Unit: seconds.
     *
     * @example 1
     *
     * @var string
     */
    public $replicaLag;

    /**
     * @description The role of the cluster. Valid values:
     *
     *   **Primary**: the primary cluster
     *   **standby**: the secondary cluster
     *
     * > A GDN consists of one primary cluster and up to four secondary clusters.
     * @example primary
     *
     * @var string
     */
    public $role;

    /**
     * @description The storage space that is occupied by the cluster. Unit: bytes.
     *
     * @example 3012558848
     *
     * @var string
     */
    public $storageUsed;
    protected $_name = [
        'DBClusterDescription' => 'DBClusterDescription',
        'DBClusterId'          => 'DBClusterId',
        'DBClusterStatus'      => 'DBClusterStatus',
        'DBNodeClass'          => 'DBNodeClass',
        'DBNodes'              => 'DBNodes',
        'DBType'               => 'DBType',
        'DBVersion'            => 'DBVersion',
        'expireTime'           => 'ExpireTime',
        'expired'              => 'Expired',
        'payType'              => 'PayType',
        'regionId'             => 'RegionId',
        'replicaLag'           => 'ReplicaLag',
        'role'                 => 'Role',
        'storageUsed'          => 'StorageUsed',
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
        if (null !== $this->DBClusterStatus) {
            $res['DBClusterStatus'] = $this->DBClusterStatus;
        }
        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }
        if (null !== $this->DBNodes) {
            $res['DBNodes'] = [];
            if (null !== $this->DBNodes && \is_array($this->DBNodes)) {
                $n = 0;
                foreach ($this->DBNodes as $item) {
                    $res['DBNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->replicaLag) {
            $res['ReplicaLag'] = $this->replicaLag;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->storageUsed) {
            $res['StorageUsed'] = $this->storageUsed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBClusters
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
        if (isset($map['DBClusterStatus'])) {
            $model->DBClusterStatus = $map['DBClusterStatus'];
        }
        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }
        if (isset($map['DBNodes'])) {
            if (!empty($map['DBNodes'])) {
                $model->DBNodes = [];
                $n              = 0;
                foreach ($map['DBNodes'] as $item) {
                    $model->DBNodes[$n++] = null !== $item ? DBNodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReplicaLag'])) {
            $model->replicaLag = $map['ReplicaLag'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['StorageUsed'])) {
            $model->storageUsed = $map['StorageUsed'];
        }

        return $model;
    }
}
