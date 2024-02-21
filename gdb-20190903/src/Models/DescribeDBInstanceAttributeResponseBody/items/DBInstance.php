<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeDBInstanceAttributeResponseBody\items;

use AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstance\readOnlyDBInstanceIds;
use AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstance\tags;
use AlibabaCloud\Tea\Model;

class DBInstance extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $currentMinorVersion;

    /**
     * @var string
     */
    public $DBInstanceCPU;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $DBInstanceMemory;

    /**
     * @var string
     */
    public $DBInstanceNetworkType;

    /**
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @var string
     */
    public $DBInstanceType;

    /**
     * @var string
     */
    public $DBNodeClass;

    /**
     * @var int
     */
    public $DBNodeCount;

    /**
     * @var int
     */
    public $DBNodeStorage;

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
    public $latestMinorVersion;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $lockReason;

    /**
     * @var string
     */
    public $maintainTime;

    /**
     * @var string
     */
    public $masterInstanceId;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $publicConnectionString;

    /**
     * @var int
     */
    public $publicPort;

    /**
     * @var readOnlyDBInstanceIds
     */
    public $readOnlyDBInstanceIds;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'category'               => 'Category',
        'connectionString'       => 'ConnectionString',
        'creationTime'           => 'CreationTime',
        'currentMinorVersion'    => 'CurrentMinorVersion',
        'DBInstanceCPU'          => 'DBInstanceCPU',
        'DBInstanceDescription'  => 'DBInstanceDescription',
        'DBInstanceId'           => 'DBInstanceId',
        'DBInstanceMemory'       => 'DBInstanceMemory',
        'DBInstanceNetworkType'  => 'DBInstanceNetworkType',
        'DBInstanceStatus'       => 'DBInstanceStatus',
        'DBInstanceStorageType'  => 'DBInstanceStorageType',
        'DBInstanceType'         => 'DBInstanceType',
        'DBNodeClass'            => 'DBNodeClass',
        'DBNodeCount'            => 'DBNodeCount',
        'DBNodeStorage'          => 'DBNodeStorage',
        'DBVersion'              => 'DBVersion',
        'expireTime'             => 'ExpireTime',
        'expired'                => 'Expired',
        'latestMinorVersion'     => 'LatestMinorVersion',
        'lockMode'               => 'LockMode',
        'lockReason'             => 'LockReason',
        'maintainTime'           => 'MaintainTime',
        'masterInstanceId'       => 'MasterInstanceId',
        'payType'                => 'PayType',
        'port'                   => 'Port',
        'publicConnectionString' => 'PublicConnectionString',
        'publicPort'             => 'PublicPort',
        'readOnlyDBInstanceIds'  => 'ReadOnlyDBInstanceIds',
        'regionId'               => 'RegionId',
        'resourceGroupId'        => 'ResourceGroupId',
        'tags'                   => 'Tags',
        'vSwitchId'              => 'VSwitchId',
        'vpcId'                  => 'VpcId',
        'zoneId'                 => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->currentMinorVersion) {
            $res['CurrentMinorVersion'] = $this->currentMinorVersion;
        }
        if (null !== $this->DBInstanceCPU) {
            $res['DBInstanceCPU'] = $this->DBInstanceCPU;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceMemory) {
            $res['DBInstanceMemory'] = $this->DBInstanceMemory;
        }
        if (null !== $this->DBInstanceNetworkType) {
            $res['DBInstanceNetworkType'] = $this->DBInstanceNetworkType;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->DBInstanceType) {
            $res['DBInstanceType'] = $this->DBInstanceType;
        }
        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }
        if (null !== $this->DBNodeCount) {
            $res['DBNodeCount'] = $this->DBNodeCount;
        }
        if (null !== $this->DBNodeStorage) {
            $res['DBNodeStorage'] = $this->DBNodeStorage;
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
        if (null !== $this->latestMinorVersion) {
            $res['LatestMinorVersion'] = $this->latestMinorVersion;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->maintainTime) {
            $res['MaintainTime'] = $this->maintainTime;
        }
        if (null !== $this->masterInstanceId) {
            $res['MasterInstanceId'] = $this->masterInstanceId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->publicConnectionString) {
            $res['PublicConnectionString'] = $this->publicConnectionString;
        }
        if (null !== $this->publicPort) {
            $res['PublicPort'] = $this->publicPort;
        }
        if (null !== $this->readOnlyDBInstanceIds) {
            $res['ReadOnlyDBInstanceIds'] = null !== $this->readOnlyDBInstanceIds ? $this->readOnlyDBInstanceIds->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
     * @return DBInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['CurrentMinorVersion'])) {
            $model->currentMinorVersion = $map['CurrentMinorVersion'];
        }
        if (isset($map['DBInstanceCPU'])) {
            $model->DBInstanceCPU = $map['DBInstanceCPU'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceMemory'])) {
            $model->DBInstanceMemory = $map['DBInstanceMemory'];
        }
        if (isset($map['DBInstanceNetworkType'])) {
            $model->DBInstanceNetworkType = $map['DBInstanceNetworkType'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['DBInstanceType'])) {
            $model->DBInstanceType = $map['DBInstanceType'];
        }
        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }
        if (isset($map['DBNodeCount'])) {
            $model->DBNodeCount = $map['DBNodeCount'];
        }
        if (isset($map['DBNodeStorage'])) {
            $model->DBNodeStorage = $map['DBNodeStorage'];
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
        if (isset($map['LatestMinorVersion'])) {
            $model->latestMinorVersion = $map['LatestMinorVersion'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['MaintainTime'])) {
            $model->maintainTime = $map['MaintainTime'];
        }
        if (isset($map['MasterInstanceId'])) {
            $model->masterInstanceId = $map['MasterInstanceId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['PublicConnectionString'])) {
            $model->publicConnectionString = $map['PublicConnectionString'];
        }
        if (isset($map['PublicPort'])) {
            $model->publicPort = $map['PublicPort'];
        }
        if (isset($map['ReadOnlyDBInstanceIds'])) {
            $model->readOnlyDBInstanceIds = readOnlyDBInstanceIds::fromMap($map['ReadOnlyDBInstanceIds']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
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
