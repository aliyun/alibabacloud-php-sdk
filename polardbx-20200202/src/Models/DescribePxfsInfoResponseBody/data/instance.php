<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribePxfsInfoResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribePxfsInfoResponseBody\data\instance\connAddrs;

class instance extends Model
{
    /**
     * @var string
     */
    public $classCode;

    /**
     * @var connAddrs[]
     */
    public $connAddrs;

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
    public $instanceId;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var string
     */
    public $pxfsInstanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $storageSize;

    /**
     * @var string
     */
    public $storageType;

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
    public $version;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'classCode' => 'ClassCode',
        'connAddrs' => 'ConnAddrs',
        'createTime' => 'CreateTime',
        'DBInstanceName' => 'DBInstanceName',
        'instanceId' => 'InstanceId',
        'nodeCount' => 'NodeCount',
        'pxfsInstanceId' => 'PxfsInstanceId',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'storageSize' => 'StorageSize',
        'storageType' => 'StorageType',
        'VPCId' => 'VPCId',
        'vSwitchId' => 'VSwitchId',
        'version' => 'Version',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->connAddrs)) {
            Model::validateArray($this->connAddrs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classCode) {
            $res['ClassCode'] = $this->classCode;
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

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }

        if (null !== $this->pxfsInstanceId) {
            $res['PxfsInstanceId'] = $this->pxfsInstanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['ClassCode'])) {
            $model->classCode = $map['ClassCode'];
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

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }

        if (isset($map['PxfsInstanceId'])) {
            $model->pxfsInstanceId = $map['PxfsInstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
