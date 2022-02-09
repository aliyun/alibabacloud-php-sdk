<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersWithBackupsResponseBody\items;

use AlibabaCloud\Tea\Model;

class DBCluster extends Model
{
    /**
     * @var string
     */
    public $createTime;

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
    public $DBClusterNetworkType;

    /**
     * @var string
     */
    public $DBClusterStatus;

    /**
     * @var string
     */
    public $DBNodeClass;

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
    public $deletedTime;

    /**
     * @var int
     */
    public $deletionLock;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $expired;

    /**
     * @var int
     */
    public $isDeleted;

    /**
     * @var string
     */
    public $lockMode;

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
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'createTime'           => 'CreateTime',
        'DBClusterDescription' => 'DBClusterDescription',
        'DBClusterId'          => 'DBClusterId',
        'DBClusterNetworkType' => 'DBClusterNetworkType',
        'DBClusterStatus'      => 'DBClusterStatus',
        'DBNodeClass'          => 'DBNodeClass',
        'DBType'               => 'DBType',
        'DBVersion'            => 'DBVersion',
        'deletedTime'          => 'DeletedTime',
        'deletionLock'         => 'DeletionLock',
        'engine'               => 'Engine',
        'expireTime'           => 'ExpireTime',
        'expired'              => 'Expired',
        'isDeleted'            => 'IsDeleted',
        'lockMode'             => 'LockMode',
        'payType'              => 'PayType',
        'regionId'             => 'RegionId',
        'vpcId'                => 'VpcId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBClusterNetworkType) {
            $res['DBClusterNetworkType'] = $this->DBClusterNetworkType;
        }
        if (null !== $this->DBClusterStatus) {
            $res['DBClusterStatus'] = $this->DBClusterStatus;
        }
        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->deletedTime) {
            $res['DeletedTime'] = $this->deletedTime;
        }
        if (null !== $this->deletionLock) {
            $res['DeletionLock'] = $this->deletionLock;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->isDeleted) {
            $res['IsDeleted'] = $this->isDeleted;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBCluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBClusterNetworkType'])) {
            $model->DBClusterNetworkType = $map['DBClusterNetworkType'];
        }
        if (isset($map['DBClusterStatus'])) {
            $model->DBClusterStatus = $map['DBClusterStatus'];
        }
        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['DeletedTime'])) {
            $model->deletedTime = $map['DeletedTime'];
        }
        if (isset($map['DeletionLock'])) {
            $model->deletionLock = $map['DeletionLock'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['IsDeleted'])) {
            $model->isDeleted = $map['IsDeleted'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
