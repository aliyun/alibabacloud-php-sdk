<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstancesResponseBody\DBInstances\nodes;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstancesResponseBody\DBInstances\tagSet;

class DBInstances extends Model
{
    /**
     * @var string
     */
    public $cdcInstanceName;

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
     * @var bool
     */
    public $containBinlogX;

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
    public $DBInstanceName;

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
    public $expireTime;

    /**
     * @var bool
     */
    public $expired;

    /**
     * @var string
     */
    public $id;

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
    public $minorVersion;

    /**
     * @var string
     */
    public $network;

    /**
     * @var string
     */
    public $nodeClass;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var nodes[]
     */
    public $nodes;

    /**
     * @var string
     */
    public $payType;

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
     * @var bool
     */
    public $supportBinlogX;

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
    public $zoneId;

    /**
     * @var string
     */
    public $gdnRole;

    /**
     * @var bool
     */
    public $isInGdn;
    protected $_name = [
        'cdcInstanceName' => 'CdcInstanceName',
        'cnNodeClassCode' => 'CnNodeClassCode',
        'cnNodeCount' => 'CnNodeCount',
        'columnarInstanceName' => 'ColumnarInstanceName',
        'columnarReadDBInstances' => 'ColumnarReadDBInstances',
        'commodityCode' => 'CommodityCode',
        'containBinlogX' => 'ContainBinlogX',
        'cpuType' => 'CpuType',
        'createTime' => 'CreateTime',
        'DBInstanceName' => 'DBInstanceName',
        'DBType' => 'DBType',
        'DBVersion' => 'DBVersion',
        'description' => 'Description',
        'dnNodeClassCode' => 'DnNodeClassCode',
        'dnNodeCount' => 'DnNodeCount',
        'engine' => 'Engine',
        'expireTime' => 'ExpireTime',
        'expired' => 'Expired',
        'id' => 'Id',
        'lockMode' => 'LockMode',
        'lockReason' => 'LockReason',
        'minorVersion' => 'MinorVersion',
        'network' => 'Network',
        'nodeClass' => 'NodeClass',
        'nodeCount' => 'NodeCount',
        'nodes' => 'Nodes',
        'payType' => 'PayType',
        'primaryInstanceId' => 'PrimaryInstanceId',
        'primaryZone' => 'PrimaryZone',
        'readDBInstances' => 'ReadDBInstances',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'secondaryZone' => 'SecondaryZone',
        'series' => 'Series',
        'status' => 'Status',
        'storageType' => 'StorageType',
        'storageUsed' => 'StorageUsed',
        'supportBinlogX' => 'SupportBinlogX',
        'tagSet' => 'TagSet',
        'tertiaryZone' => 'TertiaryZone',
        'topologyType' => 'TopologyType',
        'type' => 'Type',
        'VPCId' => 'VPCId',
        'zoneId' => 'ZoneId',
        'gdnRole' => 'gdnRole',
        'isInGdn' => 'isInGdn',
    ];

    public function validate()
    {
        if (\is_array($this->columnarReadDBInstances)) {
            Model::validateArray($this->columnarReadDBInstances);
        }
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
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
        if (null !== $this->cdcInstanceName) {
            $res['CdcInstanceName'] = $this->cdcInstanceName;
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

        if (null !== $this->containBinlogX) {
            $res['ContainBinlogX'] = $this->containBinlogX;
        }

        if (null !== $this->cpuType) {
            $res['CpuType'] = $this->cpuType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
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

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }

        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }

        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }

        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }

        if (null !== $this->nodeClass) {
            $res['NodeClass'] = $this->nodeClass;
        }

        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }

        if (null !== $this->nodes) {
            if (\is_array($this->nodes)) {
                $res['Nodes'] = [];
                $n1 = 0;
                foreach ($this->nodes as $item1) {
                    $res['Nodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
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

        if (null !== $this->secondaryZone) {
            $res['SecondaryZone'] = $this->secondaryZone;
        }

        if (null !== $this->series) {
            $res['Series'] = $this->series;
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

        if (null !== $this->supportBinlogX) {
            $res['SupportBinlogX'] = $this->supportBinlogX;
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

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        if (null !== $this->gdnRole) {
            $res['gdnRole'] = $this->gdnRole;
        }

        if (null !== $this->isInGdn) {
            $res['isInGdn'] = $this->isInGdn;
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
        if (isset($map['CdcInstanceName'])) {
            $model->cdcInstanceName = $map['CdcInstanceName'];
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

        if (isset($map['ContainBinlogX'])) {
            $model->containBinlogX = $map['ContainBinlogX'];
        }

        if (isset($map['CpuType'])) {
            $model->cpuType = $map['CpuType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
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

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }

        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }

        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }

        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }

        if (isset($map['NodeClass'])) {
            $model->nodeClass = $map['NodeClass'];
        }

        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }

        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n1 = 0;
                foreach ($map['Nodes'] as $item1) {
                    $model->nodes[$n1] = nodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
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

        if (isset($map['SecondaryZone'])) {
            $model->secondaryZone = $map['SecondaryZone'];
        }

        if (isset($map['Series'])) {
            $model->series = $map['Series'];
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

        if (isset($map['SupportBinlogX'])) {
            $model->supportBinlogX = $map['SupportBinlogX'];
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

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        if (isset($map['gdnRole'])) {
            $model->gdnRole = $map['gdnRole'];
        }

        if (isset($map['isInGdn'])) {
            $model->isInGdn = $map['isInGdn'];
        }

        return $model;
    }
}
