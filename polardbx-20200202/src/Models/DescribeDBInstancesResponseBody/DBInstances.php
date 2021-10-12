<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstancesResponseBody;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstancesResponseBody\DBInstances\nodes;
use AlibabaCloud\Tea\Model;

class DBInstances extends Model
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
    public $commodityCode;

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
    public $createTime;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $lockReason;

    /**
     * @var string
     */
    public $DBType;

    /**
     * @var string
     */
    public $lockMode;

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
    public $description;

    /**
     * @var string
     */
    public $nodeClass;

    /**
     * @var int
     */
    public $storageUsed;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $id;

    /**
     * @var nodes[]
     */
    public $nodes;

    /**
     * @var string[]
     */
    public $readDBInstances;
    protected $_name = [
        'type'            => 'Type',
        'status'          => 'Status',
        'commodityCode'   => 'CommodityCode',
        'expireTime'      => 'ExpireTime',
        'expired'         => 'Expired',
        'createTime'      => 'CreateTime',
        'payType'         => 'PayType',
        'lockReason'      => 'LockReason',
        'DBType'          => 'DBType',
        'lockMode'        => 'LockMode',
        'VPCId'           => 'VPCId',
        'minorVersion'    => 'MinorVersion',
        'regionId'        => 'RegionId',
        'network'         => 'Network',
        'DBVersion'       => 'DBVersion',
        'description'     => 'Description',
        'nodeClass'       => 'NodeClass',
        'storageUsed'     => 'StorageUsed',
        'nodeCount'       => 'NodeCount',
        'zoneId'          => 'ZoneId',
        'engine'          => 'Engine',
        'id'              => 'Id',
        'nodes'           => 'Nodes',
        'readDBInstances' => 'ReadDBInstances',
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
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
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
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->nodeClass) {
            $res['NodeClass'] = $this->nodeClass;
        }
        if (null !== $this->storageUsed) {
            $res['StorageUsed'] = $this->storageUsed;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (null !== $this->readDBInstances) {
            $res['ReadDBInstances'] = $this->readDBInstances;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
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
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NodeClass'])) {
            $model->nodeClass = $map['NodeClass'];
        }
        if (isset($map['StorageUsed'])) {
            $model->storageUsed = $map['StorageUsed'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
        if (isset($map['ReadDBInstances'])) {
            if (!empty($map['ReadDBInstances'])) {
                $model->readDBInstances = $map['ReadDBInstances'];
            }
        }

        return $model;
    }
}
