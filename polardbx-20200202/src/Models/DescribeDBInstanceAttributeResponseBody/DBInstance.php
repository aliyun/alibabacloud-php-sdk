<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceAttributeResponseBody;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceAttributeResponseBody\DBInstance\connAddrs;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceAttributeResponseBody\DBInstance\DBNodes;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceAttributeResponseBody\DBInstance\tagSet;
use AlibabaCloud\Tea\Model;

class DBInstance extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var connAddrs[]
     */
    public $connAddrs;

    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $createTime;

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
    public $description;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $expireDate;

    /**
     * @var string
     */
    public $expired;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $kindCode;

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
    public $maintainEndTime;

    /**
     * @var string
     */
    public $maintainStartTime;

    /**
     * @var string
     */
    public $minorVersion;

    /**
     * @var string
     */
    public $network;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string[]
     */
    public $readDBInstances;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description 资源组ID
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $rightsSeparationEnabled;

    /**
     * @var string
     */
    public $rightsSeparationStatus;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $storageUsed;

    /**
     * @description 标签集合
     *
     * @var tagSet[]
     */
    public $tagSet;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'commodityCode'           => 'CommodityCode',
        'connAddrs'               => 'ConnAddrs',
        'connectionString'        => 'ConnectionString',
        'createTime'              => 'CreateTime',
        'DBInstanceType'          => 'DBInstanceType',
        'DBNodeClass'             => 'DBNodeClass',
        'DBNodeCount'             => 'DBNodeCount',
        'DBNodes'                 => 'DBNodes',
        'DBType'                  => 'DBType',
        'DBVersion'               => 'DBVersion',
        'description'             => 'Description',
        'engine'                  => 'Engine',
        'expireDate'              => 'ExpireDate',
        'expired'                 => 'Expired',
        'id'                      => 'Id',
        'kindCode'                => 'KindCode',
        'latestMinorVersion'      => 'LatestMinorVersion',
        'lockMode'                => 'LockMode',
        'maintainEndTime'         => 'MaintainEndTime',
        'maintainStartTime'       => 'MaintainStartTime',
        'minorVersion'            => 'MinorVersion',
        'network'                 => 'Network',
        'payType'                 => 'PayType',
        'port'                    => 'Port',
        'readDBInstances'         => 'ReadDBInstances',
        'regionId'                => 'RegionId',
        'resourceGroupId'         => 'ResourceGroupId',
        'rightsSeparationEnabled' => 'RightsSeparationEnabled',
        'rightsSeparationStatus'  => 'RightsSeparationStatus',
        'status'                  => 'Status',
        'storageUsed'             => 'StorageUsed',
        'tagSet'                  => 'TagSet',
        'type'                    => 'Type',
        'VPCId'                   => 'VPCId',
        'vSwitchId'               => 'VSwitchId',
        'zoneId'                  => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->connAddrs) {
            $res['ConnAddrs'] = [];
            if (null !== $this->connAddrs && \is_array($this->connAddrs)) {
                $n = 0;
                foreach ($this->connAddrs as $item) {
                    $res['ConnAddrs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->kindCode) {
            $res['KindCode'] = $this->kindCode;
        }
        if (null !== $this->latestMinorVersion) {
            $res['LatestMinorVersion'] = $this->latestMinorVersion;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }
        if (null !== $this->maintainStartTime) {
            $res['MaintainStartTime'] = $this->maintainStartTime;
        }
        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->readDBInstances) {
            $res['ReadDBInstances'] = $this->readDBInstances;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->rightsSeparationEnabled) {
            $res['RightsSeparationEnabled'] = $this->rightsSeparationEnabled;
        }
        if (null !== $this->rightsSeparationStatus) {
            $res['RightsSeparationStatus'] = $this->rightsSeparationStatus;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageUsed) {
            $res['StorageUsed'] = $this->storageUsed;
        }
        if (null !== $this->tagSet) {
            $res['TagSet'] = [];
            if (null !== $this->tagSet && \is_array($this->tagSet)) {
                $n = 0;
                foreach ($this->tagSet as $item) {
                    $res['TagSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['ConnAddrs'])) {
            if (!empty($map['ConnAddrs'])) {
                $model->connAddrs = [];
                $n                = 0;
                foreach ($map['ConnAddrs'] as $item) {
                    $model->connAddrs[$n++] = null !== $item ? connAddrs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['KindCode'])) {
            $model->kindCode = $map['KindCode'];
        }
        if (isset($map['LatestMinorVersion'])) {
            $model->latestMinorVersion = $map['LatestMinorVersion'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }
        if (isset($map['MaintainStartTime'])) {
            $model->maintainStartTime = $map['MaintainStartTime'];
        }
        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ReadDBInstances'])) {
            if (!empty($map['ReadDBInstances'])) {
                $model->readDBInstances = $map['ReadDBInstances'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RightsSeparationEnabled'])) {
            $model->rightsSeparationEnabled = $map['RightsSeparationEnabled'];
        }
        if (isset($map['RightsSeparationStatus'])) {
            $model->rightsSeparationStatus = $map['RightsSeparationStatus'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageUsed'])) {
            $model->storageUsed = $map['StorageUsed'];
        }
        if (isset($map['TagSet'])) {
            if (!empty($map['TagSet'])) {
                $model->tagSet = [];
                $n             = 0;
                foreach ($map['TagSet'] as $item) {
                    $model->tagSet[$n++] = null !== $item ? tagSet::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
