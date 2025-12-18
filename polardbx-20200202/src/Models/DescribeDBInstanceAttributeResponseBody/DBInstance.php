<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceAttributeResponseBody\DBInstance\connAddrs;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceAttributeResponseBody\DBInstance\DBNodes;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceAttributeResponseBody\DBInstance\gdnMemberList;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceAttributeResponseBody\DBInstance\tagSet;

class DBInstance extends Model
{
    /**
     * @var bool
     */
    public $canNotCreateColumnar;

    /**
     * @var string
     */
    public $cnNodeClassCode;

    /**
     * @var int
     */
    public $cnNodeCount;

    /**
     * @var string
     */
    public $columnarInstanceName;

    /**
     * @var string[]
     */
    public $columnarReadDBInstances;

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
    public $cpuType;

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
     * @var bool
     */
    public $differentDNSpec;

    /**
     * @var string
     */
    public $dnNodeClassCode;

    /**
     * @var int
     */
    public $dnNodeCount;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

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
    public $gdnInstanceName;

    /**
     * @var gdnMemberList[]
     */
    public $gdnMemberList;

    /**
     * @var string
     */
    public $gdnRole;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $kindCode;

    /**
     * @var string[]
     */
    public $LTSVersions;

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
     * @var string
     */
    public $primaryInstanceId;

    /**
     * @var string
     */
    public $primaryZone;

    /**
     * @var string[]
     */
    public $readDBInstances;

    /**
     * @var string
     */
    public $regionId;

    /**
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
    public $secondaryZone;

    /**
     * @var string
     */
    public $series;

    /**
     * @var string
     */
    public $specCategory;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var int
     */
    public $storageUsed;

    /**
     * @var tagSet[]
     */
    public $tagSet;

    /**
     * @var string
     */
    public $tertiaryZone;

    /**
     * @var string
     */
    public $topologyType;

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
        'canNotCreateColumnar' => 'CanNotCreateColumnar',
        'cnNodeClassCode' => 'CnNodeClassCode',
        'cnNodeCount' => 'CnNodeCount',
        'columnarInstanceName' => 'ColumnarInstanceName',
        'columnarReadDBInstances' => 'ColumnarReadDBInstances',
        'commodityCode' => 'CommodityCode',
        'connAddrs' => 'ConnAddrs',
        'connectionString' => 'ConnectionString',
        'cpuType' => 'CpuType',
        'createTime' => 'CreateTime',
        'DBInstanceType' => 'DBInstanceType',
        'DBNodeClass' => 'DBNodeClass',
        'DBNodeCount' => 'DBNodeCount',
        'DBNodes' => 'DBNodes',
        'DBType' => 'DBType',
        'DBVersion' => 'DBVersion',
        'description' => 'Description',
        'differentDNSpec' => 'DifferentDNSpec',
        'dnNodeClassCode' => 'DnNodeClassCode',
        'dnNodeCount' => 'DnNodeCount',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'expireDate' => 'ExpireDate',
        'expired' => 'Expired',
        'gdnInstanceName' => 'GdnInstanceName',
        'gdnMemberList' => 'GdnMemberList',
        'gdnRole' => 'GdnRole',
        'id' => 'Id',
        'kindCode' => 'KindCode',
        'LTSVersions' => 'LTSVersions',
        'latestMinorVersion' => 'LatestMinorVersion',
        'lockMode' => 'LockMode',
        'maintainEndTime' => 'MaintainEndTime',
        'maintainStartTime' => 'MaintainStartTime',
        'minorVersion' => 'MinorVersion',
        'network' => 'Network',
        'payType' => 'PayType',
        'port' => 'Port',
        'primaryInstanceId' => 'PrimaryInstanceId',
        'primaryZone' => 'PrimaryZone',
        'readDBInstances' => 'ReadDBInstances',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'rightsSeparationEnabled' => 'RightsSeparationEnabled',
        'rightsSeparationStatus' => 'RightsSeparationStatus',
        'secondaryZone' => 'SecondaryZone',
        'series' => 'Series',
        'specCategory' => 'SpecCategory',
        'status' => 'Status',
        'storageType' => 'StorageType',
        'storageUsed' => 'StorageUsed',
        'tagSet' => 'TagSet',
        'tertiaryZone' => 'TertiaryZone',
        'topologyType' => 'TopologyType',
        'type' => 'Type',
        'VPCId' => 'VPCId',
        'vSwitchId' => 'VSwitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->columnarReadDBInstances)) {
            Model::validateArray($this->columnarReadDBInstances);
        }
        if (\is_array($this->connAddrs)) {
            Model::validateArray($this->connAddrs);
        }
        if (\is_array($this->DBNodes)) {
            Model::validateArray($this->DBNodes);
        }
        if (\is_array($this->gdnMemberList)) {
            Model::validateArray($this->gdnMemberList);
        }
        if (\is_array($this->LTSVersions)) {
            Model::validateArray($this->LTSVersions);
        }
        if (\is_array($this->readDBInstances)) {
            Model::validateArray($this->readDBInstances);
        }
        if (\is_array($this->tagSet)) {
            Model::validateArray($this->tagSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canNotCreateColumnar) {
            $res['CanNotCreateColumnar'] = $this->canNotCreateColumnar;
        }

        if (null !== $this->cnNodeClassCode) {
            $res['CnNodeClassCode'] = $this->cnNodeClassCode;
        }

        if (null !== $this->cnNodeCount) {
            $res['CnNodeCount'] = $this->cnNodeCount;
        }

        if (null !== $this->columnarInstanceName) {
            $res['ColumnarInstanceName'] = $this->columnarInstanceName;
        }

        if (null !== $this->columnarReadDBInstances) {
            if (\is_array($this->columnarReadDBInstances)) {
                $res['ColumnarReadDBInstances'] = [];
                $n1 = 0;
                foreach ($this->columnarReadDBInstances as $item1) {
                    $res['ColumnarReadDBInstances'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->connAddrs) {
            if (\is_array($this->connAddrs)) {
                $res['ConnAddrs'] = [];
                $n1 = 0;
                foreach ($this->connAddrs as $item1) {
                    $res['ConnAddrs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }

        if (null !== $this->cpuType) {
            $res['CpuType'] = $this->cpuType;
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
            if (\is_array($this->DBNodes)) {
                $res['DBNodes'] = [];
                $n1 = 0;
                foreach ($this->DBNodes as $item1) {
                    $res['DBNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->differentDNSpec) {
            $res['DifferentDNSpec'] = $this->differentDNSpec;
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

        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }

        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }

        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }

        if (null !== $this->gdnInstanceName) {
            $res['GdnInstanceName'] = $this->gdnInstanceName;
        }

        if (null !== $this->gdnMemberList) {
            if (\is_array($this->gdnMemberList)) {
                $res['GdnMemberList'] = [];
                $n1 = 0;
                foreach ($this->gdnMemberList as $item1) {
                    $res['GdnMemberList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->gdnRole) {
            $res['GdnRole'] = $this->gdnRole;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->kindCode) {
            $res['KindCode'] = $this->kindCode;
        }

        if (null !== $this->LTSVersions) {
            if (\is_array($this->LTSVersions)) {
                $res['LTSVersions'] = [];
                $n1 = 0;
                foreach ($this->LTSVersions as $item1) {
                    $res['LTSVersions'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->primaryInstanceId) {
            $res['PrimaryInstanceId'] = $this->primaryInstanceId;
        }

        if (null !== $this->primaryZone) {
            $res['PrimaryZone'] = $this->primaryZone;
        }

        if (null !== $this->readDBInstances) {
            if (\is_array($this->readDBInstances)) {
                $res['ReadDBInstances'] = [];
                $n1 = 0;
                foreach ($this->readDBInstances as $item1) {
                    $res['ReadDBInstances'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->secondaryZone) {
            $res['SecondaryZone'] = $this->secondaryZone;
        }

        if (null !== $this->series) {
            $res['Series'] = $this->series;
        }

        if (null !== $this->specCategory) {
            $res['SpecCategory'] = $this->specCategory;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->storageUsed) {
            $res['StorageUsed'] = $this->storageUsed;
        }

        if (null !== $this->tagSet) {
            if (\is_array($this->tagSet)) {
                $res['TagSet'] = [];
                $n1 = 0;
                foreach ($this->tagSet as $item1) {
                    $res['TagSet'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tertiaryZone) {
            $res['TertiaryZone'] = $this->tertiaryZone;
        }

        if (null !== $this->topologyType) {
            $res['TopologyType'] = $this->topologyType;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanNotCreateColumnar'])) {
            $model->canNotCreateColumnar = $map['CanNotCreateColumnar'];
        }

        if (isset($map['CnNodeClassCode'])) {
            $model->cnNodeClassCode = $map['CnNodeClassCode'];
        }

        if (isset($map['CnNodeCount'])) {
            $model->cnNodeCount = $map['CnNodeCount'];
        }

        if (isset($map['ColumnarInstanceName'])) {
            $model->columnarInstanceName = $map['ColumnarInstanceName'];
        }

        if (isset($map['ColumnarReadDBInstances'])) {
            if (!empty($map['ColumnarReadDBInstances'])) {
                $model->columnarReadDBInstances = [];
                $n1 = 0;
                foreach ($map['ColumnarReadDBInstances'] as $item1) {
                    $model->columnarReadDBInstances[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['ConnAddrs'])) {
            if (!empty($map['ConnAddrs'])) {
                $model->connAddrs = [];
                $n1 = 0;
                foreach ($map['ConnAddrs'] as $item1) {
                    $model->connAddrs[$n1] = connAddrs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }

        if (isset($map['CpuType'])) {
            $model->cpuType = $map['CpuType'];
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
                $n1 = 0;
                foreach ($map['DBNodes'] as $item1) {
                    $model->DBNodes[$n1] = DBNodes::fromMap($item1);
                    ++$n1;
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

        if (isset($map['DifferentDNSpec'])) {
            $model->differentDNSpec = $map['DifferentDNSpec'];
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

        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }

        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }

        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }

        if (isset($map['GdnInstanceName'])) {
            $model->gdnInstanceName = $map['GdnInstanceName'];
        }

        if (isset($map['GdnMemberList'])) {
            if (!empty($map['GdnMemberList'])) {
                $model->gdnMemberList = [];
                $n1 = 0;
                foreach ($map['GdnMemberList'] as $item1) {
                    $model->gdnMemberList[$n1] = gdnMemberList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['GdnRole'])) {
            $model->gdnRole = $map['GdnRole'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['KindCode'])) {
            $model->kindCode = $map['KindCode'];
        }

        if (isset($map['LTSVersions'])) {
            if (!empty($map['LTSVersions'])) {
                $model->LTSVersions = [];
                $n1 = 0;
                foreach ($map['LTSVersions'] as $item1) {
                    $model->LTSVersions[$n1] = $item1;
                    ++$n1;
                }
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

        if (isset($map['PrimaryInstanceId'])) {
            $model->primaryInstanceId = $map['PrimaryInstanceId'];
        }

        if (isset($map['PrimaryZone'])) {
            $model->primaryZone = $map['PrimaryZone'];
        }

        if (isset($map['ReadDBInstances'])) {
            if (!empty($map['ReadDBInstances'])) {
                $model->readDBInstances = [];
                $n1 = 0;
                foreach ($map['ReadDBInstances'] as $item1) {
                    $model->readDBInstances[$n1] = $item1;
                    ++$n1;
                }
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

        if (isset($map['SecondaryZone'])) {
            $model->secondaryZone = $map['SecondaryZone'];
        }

        if (isset($map['Series'])) {
            $model->series = $map['Series'];
        }

        if (isset($map['SpecCategory'])) {
            $model->specCategory = $map['SpecCategory'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['StorageUsed'])) {
            $model->storageUsed = $map['StorageUsed'];
        }

        if (isset($map['TagSet'])) {
            if (!empty($map['TagSet'])) {
                $model->tagSet = [];
                $n1 = 0;
                foreach ($map['TagSet'] as $item1) {
                    $model->tagSet[$n1] = tagSet::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TertiaryZone'])) {
            $model->tertiaryZone = $map['TertiaryZone'];
        }

        if (isset($map['TopologyType'])) {
            $model->topologyType = $map['TopologyType'];
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
