<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListAvailableEcsTypesResponseBody\instanceTypeFamilies\instanceTypeFamilyInfo\types;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListAvailableEcsTypesResponseBody\instanceTypeFamilies\instanceTypeFamilyInfo\types\typesInfo\zoneIds;
use AlibabaCloud\Tea\Model;

class typesInfo extends Model
{
    /**
     * @var int
     */
    public $cpuCoreCount;

    /**
     * @var int
     */
    public $eniQuantity;

    /**
     * @var int
     */
    public $GPUAmount;

    /**
     * @var string
     */
    public $GPUSpec;

    /**
     * @var int
     */
    public $instanceBandwidthRx;

    /**
     * @var int
     */
    public $instanceBandwidthTx;

    /**
     * @var int
     */
    public $instancePpsRx;

    /**
     * @var int
     */
    public $instancePpsTx;

    /**
     * @var string
     */
    public $instanceTypeId;

    /**
     * @var int
     */
    public $memorySize;

    /**
     * @var string
     */
    public $status;

    /**
     * @var zoneIds
     */
    public $zoneIds;
    protected $_name = [
        'cpuCoreCount'        => 'CpuCoreCount',
        'eniQuantity'         => 'EniQuantity',
        'GPUAmount'           => 'GPUAmount',
        'GPUSpec'             => 'GPUSpec',
        'instanceBandwidthRx' => 'InstanceBandwidthRx',
        'instanceBandwidthTx' => 'InstanceBandwidthTx',
        'instancePpsRx'       => 'InstancePpsRx',
        'instancePpsTx'       => 'InstancePpsTx',
        'instanceTypeId'      => 'InstanceTypeId',
        'memorySize'          => 'MemorySize',
        'status'              => 'Status',
        'zoneIds'             => 'ZoneIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuCoreCount) {
            $res['CpuCoreCount'] = $this->cpuCoreCount;
        }
        if (null !== $this->eniQuantity) {
            $res['EniQuantity'] = $this->eniQuantity;
        }
        if (null !== $this->GPUAmount) {
            $res['GPUAmount'] = $this->GPUAmount;
        }
        if (null !== $this->GPUSpec) {
            $res['GPUSpec'] = $this->GPUSpec;
        }
        if (null !== $this->instanceBandwidthRx) {
            $res['InstanceBandwidthRx'] = $this->instanceBandwidthRx;
        }
        if (null !== $this->instanceBandwidthTx) {
            $res['InstanceBandwidthTx'] = $this->instanceBandwidthTx;
        }
        if (null !== $this->instancePpsRx) {
            $res['InstancePpsRx'] = $this->instancePpsRx;
        }
        if (null !== $this->instancePpsTx) {
            $res['InstancePpsTx'] = $this->instancePpsTx;
        }
        if (null !== $this->instanceTypeId) {
            $res['InstanceTypeId'] = $this->instanceTypeId;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->zoneIds) {
            $res['ZoneIds'] = null !== $this->zoneIds ? $this->zoneIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return typesInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuCoreCount'])) {
            $model->cpuCoreCount = $map['CpuCoreCount'];
        }
        if (isset($map['EniQuantity'])) {
            $model->eniQuantity = $map['EniQuantity'];
        }
        if (isset($map['GPUAmount'])) {
            $model->GPUAmount = $map['GPUAmount'];
        }
        if (isset($map['GPUSpec'])) {
            $model->GPUSpec = $map['GPUSpec'];
        }
        if (isset($map['InstanceBandwidthRx'])) {
            $model->instanceBandwidthRx = $map['InstanceBandwidthRx'];
        }
        if (isset($map['InstanceBandwidthTx'])) {
            $model->instanceBandwidthTx = $map['InstanceBandwidthTx'];
        }
        if (isset($map['InstancePpsRx'])) {
            $model->instancePpsRx = $map['InstancePpsRx'];
        }
        if (isset($map['InstancePpsTx'])) {
            $model->instancePpsTx = $map['InstancePpsTx'];
        }
        if (isset($map['InstanceTypeId'])) {
            $model->instanceTypeId = $map['InstanceTypeId'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ZoneIds'])) {
            $model->zoneIds = zoneIds::fromMap($map['ZoneIds']);
        }

        return $model;
    }
}
