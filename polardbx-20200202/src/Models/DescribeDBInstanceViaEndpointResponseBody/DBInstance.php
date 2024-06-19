<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceViaEndpointResponseBody;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceViaEndpointResponseBody\DBInstance\connAddrs;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceViaEndpointResponseBody\DBInstance\DBNodes;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceViaEndpointResponseBody\DBInstance\tagSet;
use AlibabaCloud\Tea\Model;

class DBInstance extends Model
{
    /**
     * @example polarx.x4.xlarge.2e
     *
     * @var string
     */
    public $cnNodeClassCode;

    /**
     * @example 2
     *
     * @var int
     */
    public $cnNodeCount;

    /**
     * @example drds_polarxpost_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @var connAddrs[]
     */
    public $connAddrs;

    /**
     * @example pxc-sprpx766vo****.polarx.singapore.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @example 2021-08-31T08:56:25.000+0000
     *
     * @var string
     */
    public $createTime;

    /**
     * @example ReadWrite
     *
     * @var string
     */
    public $DBInstanceType;

    /**
     * @example polarx.x4.large.2e
     *
     * @var string
     */
    public $DBNodeClass;

    /**
     * @example 2
     *
     * @var int
     */
    public $DBNodeCount;

    /**
     * @var DBNodes[]
     */
    public $DBNodes;

    /**
     * @example polarx
     *
     * @var string
     */
    public $DBType;

    /**
     * @example 5.5
     *
     * @var string
     */
    public $DBVersion;

    /**
     * @example test instance
     *
     * @var string
     */
    public $description;

    /**
     * @example mysql.x8.large.25
     *
     * @var string
     */
    public $dnNodeClassCode;

    /**
     * @example 2
     *
     * @var int
     */
    public $dnNodeCount;

    /**
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @example 2022-08-31T16:00:00.000+0000
     *
     * @var string
     */
    public $expireDate;

    /**
     * @example false
     *
     * @var string
     */
    public $expired;

    /**
     * @example pxc-zkralxpc5d****
     *
     * @var string
     */
    public $id;

    /**
     * @example 18
     *
     * @var int
     */
    public $kindCode;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $LTSVersions;

    /**
     * @example polarx-kernel_5.4.11-16301083_xcluster-20210805
     *
     * @var string
     */
    public $latestMinorVersion;

    /**
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @example 06:00
     *
     * @var string
     */
    public $maintainEndTime;

    /**
     * @example 06:00
     *
     * @var string
     */
    public $maintainStartTime;

    /**
     * @example polarx-kernel_5.4.11-16301083_xcluster-20210805
     *
     * @var string
     */
    public $minorVersion;

    /**
     * @example VPC
     *
     * @var string
     */
    public $network;

    /**
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @var string[]
     */
    public $readDBInstances;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-xxxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example false
     *
     * @var bool
     */
    public $rightsSeparationEnabled;

    /**
     * @example disabled
     *
     * @var string
     */
    public $rightsSeparationStatus;

    /**
     * @example enterprise
     *
     * @var string
     */
    public $series;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example 17042505728
     *
     * @var int
     */
    public $storageUsed;

    /**
     * @var tagSet[]
     */
    public $tagSet;

    /**
     * @example ReadWrite
     *
     * @var string
     */
    public $type;

    /**
     * @description VPC ID。
     *
     * @example vpc-xxxxx
     *
     * @var string
     */
    public $VPCId;

    /**
     * @example vsw-********
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cnNodeClassCode'         => 'CnNodeClassCode',
        'cnNodeCount'             => 'CnNodeCount',
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
        'dnNodeClassCode'         => 'DnNodeClassCode',
        'dnNodeCount'             => 'DnNodeCount',
        'engine'                  => 'Engine',
        'expireDate'              => 'ExpireDate',
        'expired'                 => 'Expired',
        'id'                      => 'Id',
        'kindCode'                => 'KindCode',
        'LTSVersions'             => 'LTSVersions',
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
        'series'                  => 'Series',
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
        if (null !== $this->cnNodeClassCode) {
            $res['CnNodeClassCode'] = $this->cnNodeClassCode;
        }
        if (null !== $this->cnNodeCount) {
            $res['CnNodeCount'] = $this->cnNodeCount;
        }
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
        if (null !== $this->dnNodeClassCode) {
            $res['DnNodeClassCode'] = $this->dnNodeClassCode;
        }
        if (null !== $this->dnNodeCount) {
            $res['DnNodeCount'] = $this->dnNodeCount;
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
        if (null !== $this->LTSVersions) {
            $res['LTSVersions'] = $this->LTSVersions;
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
        if (null !== $this->series) {
            $res['Series'] = $this->series;
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
        if (isset($map['CnNodeClassCode'])) {
            $model->cnNodeClassCode = $map['CnNodeClassCode'];
        }
        if (isset($map['CnNodeCount'])) {
            $model->cnNodeCount = $map['CnNodeCount'];
        }
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
        if (isset($map['DnNodeClassCode'])) {
            $model->dnNodeClassCode = $map['DnNodeClassCode'];
        }
        if (isset($map['DnNodeCount'])) {
            $model->dnNodeCount = $map['DnNodeCount'];
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
        if (isset($map['LTSVersions'])) {
            if (!empty($map['LTSVersions'])) {
                $model->LTSVersions = $map['LTSVersions'];
            }
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
        if (isset($map['Series'])) {
            $model->series = $map['Series'];
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
