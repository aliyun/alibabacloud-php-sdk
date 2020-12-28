<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListAvailableEcsTypesResponseBody\instanceTypeFamilies;

use AlibabaCloud\Tea\Model;

class types extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $instanceTypeId;

    /**
     * @var int
     */
    public $instanceBandwidthRx;

    /**
     * @var string
     */
    public $GPUSpec;

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
     * @var int
     */
    public $GPUAmount;

    /**
     * @var int
     */
    public $cpuCoreCount;

    /**
     * @var int
     */
    public $memorySize;

    /**
     * @var int
     */
    public $eniQuantity;
    protected $_name = [
        'status'              => 'Status',
        'instanceTypeId'      => 'InstanceTypeId',
        'instanceBandwidthRx' => 'InstanceBandwidthRx',
        'GPUSpec'             => 'GPUSpec',
        'instanceBandwidthTx' => 'InstanceBandwidthTx',
        'instancePpsRx'       => 'InstancePpsRx',
        'instancePpsTx'       => 'InstancePpsTx',
        'GPUAmount'           => 'GPUAmount',
        'cpuCoreCount'        => 'CpuCoreCount',
        'memorySize'          => 'MemorySize',
        'eniQuantity'         => 'EniQuantity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->instanceTypeId) {
            $res['InstanceTypeId'] = $this->instanceTypeId;
        }
        if (null !== $this->instanceBandwidthRx) {
            $res['InstanceBandwidthRx'] = $this->instanceBandwidthRx;
        }
        if (null !== $this->GPUSpec) {
            $res['GPUSpec'] = $this->GPUSpec;
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
        if (null !== $this->GPUAmount) {
            $res['GPUAmount'] = $this->GPUAmount;
        }
        if (null !== $this->cpuCoreCount) {
            $res['CpuCoreCount'] = $this->cpuCoreCount;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->eniQuantity) {
            $res['EniQuantity'] = $this->eniQuantity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return types
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['InstanceTypeId'])) {
            $model->instanceTypeId = $map['InstanceTypeId'];
        }
        if (isset($map['InstanceBandwidthRx'])) {
            $model->instanceBandwidthRx = $map['InstanceBandwidthRx'];
        }
        if (isset($map['GPUSpec'])) {
            $model->GPUSpec = $map['GPUSpec'];
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
        if (isset($map['GPUAmount'])) {
            $model->GPUAmount = $map['GPUAmount'];
        }
        if (isset($map['CpuCoreCount'])) {
            $model->cpuCoreCount = $map['CpuCoreCount'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['EniQuantity'])) {
            $model->eniQuantity = $map['EniQuantity'];
        }

        return $model;
    }
}
