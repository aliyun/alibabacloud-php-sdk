<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceAttributeResponseBody;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceAttributeResponseBody\DBInstance\connAddrs;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceAttributeResponseBody\DBInstance\DBNodes;
use AlibabaCloud\Tea\Model;

class DBInstance extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $rightsSeparationStatus;

    /**
     * @var int
     */
    public $DBNodeCount;

    /**
     * @var string
     */
    public $expired;

    /**
     * @var string
     */
    public $createTime;

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
    public $lockMode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var int
     */
    public $storageUsed;

    /**
     * @var string
     */
    public $expireDate;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $maintainStartTime;

    /**
     * @var string
     */
    public $DBInstanceType;

    /**
     * @var string
     */
    public $DBNodeClass;

    /**
     * @var string
     */
    public $latestMinorVersion;

    /**
     * @var string
     */
    public $maintainEndTime;

    /**
     * @var string
     */
    public $DBType;

    /**
     * @var bool
     */
    public $rightsSeparationEnabled;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $minorVersion;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $network;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var int
     */
    public $kindCode;

    /**
     * @var string
     */
    public $id;

    /**
     * @var DBNodes[]
     */
    public $DBNodes;

    /**
     * @var connAddrs[]
     */
    public $connAddrs;

    /**
     * @var string[]
     */
    public $readDBInstances;
    protected $_name = [
        'type'                    => 'Type',
        'status'                  => 'Status',
        'rightsSeparationStatus'  => 'RightsSeparationStatus',
        'DBNodeCount'             => 'DBNodeCount',
        'expired'                 => 'Expired',
        'createTime'              => 'CreateTime',
        'payType'                 => 'PayType',
        'port'                    => 'Port',
        'lockMode'                => 'LockMode',
        'description'             => 'Description',
        'connectionString'        => 'ConnectionString',
        'storageUsed'             => 'StorageUsed',
        'expireDate'              => 'ExpireDate',
        'commodityCode'           => 'CommodityCode',
        'maintainStartTime'       => 'MaintainStartTime',
        'DBInstanceType'          => 'DBInstanceType',
        'DBNodeClass'             => 'DBNodeClass',
        'latestMinorVersion'      => 'LatestMinorVersion',
        'maintainEndTime'         => 'MaintainEndTime',
        'DBType'                  => 'DBType',
        'rightsSeparationEnabled' => 'RightsSeparationEnabled',
        'VPCId'                   => 'VPCId',
        'minorVersion'            => 'MinorVersion',
        'regionId'                => 'RegionId',
        'network'                 => 'Network',
        'DBVersion'               => 'DBVersion',
        'vSwitchId'               => 'VSwitchId',
        'zoneId'                  => 'ZoneId',
        'engine'                  => 'Engine',
        'kindCode'                => 'KindCode',
        'id'                      => 'Id',
        'DBNodes'                 => 'DBNodes',
        'connAddrs'               => 'ConnAddrs',
        'readDBInstances'         => 'ReadDBInstances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->rightsSeparationStatus) {
            $res['RightsSeparationStatus'] = $this->rightsSeparationStatus;
        }
        if (null !== $this->DBNodeCount) {
            $res['DBNodeCount'] = $this->DBNodeCount;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->storageUsed) {
            $res['StorageUsed'] = $this->storageUsed;
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->maintainStartTime) {
            $res['MaintainStartTime'] = $this->maintainStartTime;
        }
        if (null !== $this->DBInstanceType) {
            $res['DBInstanceType'] = $this->DBInstanceType;
        }
        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }
        if (null !== $this->latestMinorVersion) {
            $res['LatestMinorVersion'] = $this->latestMinorVersion;
        }
        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->rightsSeparationEnabled) {
            $res['RightsSeparationEnabled'] = $this->rightsSeparationEnabled;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->kindCode) {
            $res['KindCode'] = $this->kindCode;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (null !== $this->connAddrs) {
            $res['ConnAddrs'] = [];
            if (null !== $this->connAddrs && \is_array($this->connAddrs)) {
                $n = 0;
                foreach ($this->connAddrs as $item) {
                    $res['ConnAddrs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->readDBInstances) {
            $res['ReadDBInstances'] = $this->readDBInstances;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RightsSeparationStatus'])) {
            $model->rightsSeparationStatus = $map['RightsSeparationStatus'];
        }
        if (isset($map['DBNodeCount'])) {
            $model->DBNodeCount = $map['DBNodeCount'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['StorageUsed'])) {
            $model->storageUsed = $map['StorageUsed'];
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['MaintainStartTime'])) {
            $model->maintainStartTime = $map['MaintainStartTime'];
        }
        if (isset($map['DBInstanceType'])) {
            $model->DBInstanceType = $map['DBInstanceType'];
        }
        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }
        if (isset($map['LatestMinorVersion'])) {
            $model->latestMinorVersion = $map['LatestMinorVersion'];
        }
        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['RightsSeparationEnabled'])) {
            $model->rightsSeparationEnabled = $map['RightsSeparationEnabled'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['KindCode'])) {
            $model->kindCode = $map['KindCode'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
        if (isset($map['ConnAddrs'])) {
            if (!empty($map['ConnAddrs'])) {
                $model->connAddrs = [];
                $n                = 0;
                foreach ($map['ConnAddrs'] as $item) {
                    $model->connAddrs[$n++] = null !== $item ? connAddrs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ReadDBInstances'])) {
            if (!empty($map['ReadDBInstances'])) {
                $model->readDBInstances = $map['ReadDBInstances'];
            }
        }

        return $model;
    }
}
