<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstancesResponseBody;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstancesResponseBody\DBInstances\nodes;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstancesResponseBody\DBInstances\tagSet;
use AlibabaCloud\Tea\Model;

class DBInstances extends Model
{
    /**
     * @example pxc-c-dmlgit****
     *
     * @var string
     */
    public $cdcInstanceName;

    /**
     * @example polarx.x4.large.2e
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
     * @example drds_polarxpre_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example true
     *
     * @var bool
     */
    public $containBinlogX;

    /**
     * @example 2021-11-01T03:49:50.000+0000
     *
     * @var string
     */
    public $createTime;

    /**
     * @example pxc-xxxxx
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @example polarx
     *
     * @var string
     */
    public $DBType;

    /**
     * @example 5.7
     *
     * @var string
     */
    public $DBVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @example mysql.n4.medium.25
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
     * @example polarx
     *
     * @var string
     */
    public $engine;

    /**
     * @example 2021-12-01T16:00:00.000+0000
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $expired;

    /**
     * @example pxc-hzr2yeov9jmg3z
     *
     * @var string
     */
    public $id;

    /**
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $lockReason;

    /**
     * @example polarx-kernel_5.4.12-16349923_xcluster-20210926
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
     * @example polarx.x4.large.2e
     *
     * @var string
     */
    public $nodeClass;

    /**
     * @example 5
     *
     * @var int
     */
    public $nodeCount;

    /**
     * @var nodes[]
     */
    public $nodes;

    /**
     * @example Prepaid
     *
     * @var string
     */
    public $payType;

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
     * @example rg-xxxxxx
     *
     * @var string
     */
    public $resourceGroupId;

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
     * @example 40658534400
     *
     * @var int
     */
    public $storageUsed;

    /**
     * @example true
     *
     * @var bool
     */
    public $supportBinlogX;

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
     * @example VPCID
     *
     * @var string
     */
    public $VPCId;

    /**
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cdcInstanceName' => 'CdcInstanceName',
        'cnNodeClassCode' => 'CnNodeClassCode',
        'cnNodeCount'     => 'CnNodeCount',
        'commodityCode'   => 'CommodityCode',
        'containBinlogX'  => 'ContainBinlogX',
        'createTime'      => 'CreateTime',
        'DBInstanceName'  => 'DBInstanceName',
        'DBType'          => 'DBType',
        'DBVersion'       => 'DBVersion',
        'description'     => 'Description',
        'dnNodeClassCode' => 'DnNodeClassCode',
        'dnNodeCount'     => 'DnNodeCount',
        'engine'          => 'Engine',
        'expireTime'      => 'ExpireTime',
        'expired'         => 'Expired',
        'id'              => 'Id',
        'lockMode'        => 'LockMode',
        'lockReason'      => 'LockReason',
        'minorVersion'    => 'MinorVersion',
        'network'         => 'Network',
        'nodeClass'       => 'NodeClass',
        'nodeCount'       => 'NodeCount',
        'nodes'           => 'Nodes',
        'payType'         => 'PayType',
        'readDBInstances' => 'ReadDBInstances',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'series'          => 'Series',
        'status'          => 'Status',
        'storageUsed'     => 'StorageUsed',
        'supportBinlogX'  => 'SupportBinlogX',
        'tagSet'          => 'TagSet',
        'type'            => 'Type',
        'VPCId'           => 'VPCId',
        'zoneId'          => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->containBinlogX) {
            $res['ContainBinlogX'] = $this->containBinlogX;
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
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
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
        if (null !== $this->series) {
            $res['Series'] = $this->series;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageUsed) {
            $res['StorageUsed'] = $this->storageUsed;
        }
        if (null !== $this->supportBinlogX) {
            $res['SupportBinlogX'] = $this->supportBinlogX;
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
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstances
     */
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
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['ContainBinlogX'])) {
            $model->containBinlogX = $map['ContainBinlogX'];
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
                $n            = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
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
        if (isset($map['Series'])) {
            $model->series = $map['Series'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
