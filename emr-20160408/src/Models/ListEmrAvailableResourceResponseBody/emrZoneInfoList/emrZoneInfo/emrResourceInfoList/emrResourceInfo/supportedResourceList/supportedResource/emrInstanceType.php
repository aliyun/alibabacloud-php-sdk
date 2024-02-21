<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody\emrZoneInfoList\emrZoneInfo\emrResourceInfoList\emrResourceInfo\supportedResourceList\supportedResource;

use AlibabaCloud\Tea\Model;

class emrInstanceType extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $baselineCredit;

    /**
     * @example 4
     *
     * @var int
     */
    public $cpuCoreCount;

    /**
     * @example 3
     *
     * @var int
     */
    public $eniQuantity;

    /**
     * @example 1
     *
     * @var int
     */
    public $GPUAmount;

    /**
     * @example NVIDIA P100
     *
     * @var string
     */
    public $GPUSpec;

    /**
     * @example 0
     *
     * @var int
     */
    public $initialCredit;

    /**
     * @example 1536000
     *
     * @var int
     */
    public $instanceBandwidthRx;

    /**
     * @example 1536000
     *
     * @var int
     */
    public $instanceBandwidthTx;

    /**
     * @example 500000
     *
     * @var int
     */
    public $instancePpsRx;

    /**
     * @example 500000
     *
     * @var int
     */
    public $instancePpsTx;

    /**
     * @example ecs.g5.xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example ecs.g5
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @example 2
     *
     * @var int
     */
    public $localStorageAmount;

    /**
     * @example 80
     *
     * @var int
     */
    public $localStorageCapacity;

    /**
     * @example local_ssd_pro
     *
     * @var string
     */
    public $localStorageCategory;

    /**
     * @example 16
     *
     * @var int
     */
    public $memorySize;
    protected $_name = [
        'baselineCredit'       => 'BaselineCredit',
        'cpuCoreCount'         => 'CpuCoreCount',
        'eniQuantity'          => 'EniQuantity',
        'GPUAmount'            => 'GPUAmount',
        'GPUSpec'              => 'GPUSpec',
        'initialCredit'        => 'InitialCredit',
        'instanceBandwidthRx'  => 'InstanceBandwidthRx',
        'instanceBandwidthTx'  => 'InstanceBandwidthTx',
        'instancePpsRx'        => 'InstancePpsRx',
        'instancePpsTx'        => 'InstancePpsTx',
        'instanceType'         => 'InstanceType',
        'instanceTypeFamily'   => 'InstanceTypeFamily',
        'localStorageAmount'   => 'LocalStorageAmount',
        'localStorageCapacity' => 'LocalStorageCapacity',
        'localStorageCategory' => 'LocalStorageCategory',
        'memorySize'           => 'MemorySize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineCredit) {
            $res['BaselineCredit'] = $this->baselineCredit;
        }
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
        if (null !== $this->initialCredit) {
            $res['InitialCredit'] = $this->initialCredit;
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
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->localStorageAmount) {
            $res['LocalStorageAmount'] = $this->localStorageAmount;
        }
        if (null !== $this->localStorageCapacity) {
            $res['LocalStorageCapacity'] = $this->localStorageCapacity;
        }
        if (null !== $this->localStorageCategory) {
            $res['LocalStorageCategory'] = $this->localStorageCategory;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return emrInstanceType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineCredit'])) {
            $model->baselineCredit = $map['BaselineCredit'];
        }
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
        if (isset($map['InitialCredit'])) {
            $model->initialCredit = $map['InitialCredit'];
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
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['LocalStorageAmount'])) {
            $model->localStorageAmount = $map['LocalStorageAmount'];
        }
        if (isset($map['LocalStorageCapacity'])) {
            $model->localStorageCapacity = $map['LocalStorageCapacity'];
        }
        if (isset($map['LocalStorageCategory'])) {
            $model->localStorageCategory = $map['LocalStorageCategory'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }

        return $model;
    }
}
