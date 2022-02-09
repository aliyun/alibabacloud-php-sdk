<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworkResponseBody;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworkResponseBody\DBClusters\DBNodes;
use AlibabaCloud\Tea\Model;

class DBClusters extends Model
{
    /**
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBClusterStatus;

    /**
     * @var string
     */
    public $DBNodeClass;

    /**
     * @var DBNodes[]
     */
    public $DBNodes;

    /**
     * @var string
     */
    public $DBType;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $expired;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $replicaLag;

    /**
     * @var string
     */
    public $role;

    /**
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
