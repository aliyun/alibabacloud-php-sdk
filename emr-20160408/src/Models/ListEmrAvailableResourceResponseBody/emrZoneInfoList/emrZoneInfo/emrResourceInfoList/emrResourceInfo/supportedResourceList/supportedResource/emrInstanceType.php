<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody\emrZoneInfoList\emrZoneInfo\emrResourceInfoList\emrResourceInfo\supportedResourceList\supportedResource;

use AlibabaCloud\Tea\Model;

class emrInstanceType extends Model
{
    /**
     * @var int
     */
    public $instanceBandwidthRx;

    /**
     * @var string
     */
    public $GPUSpec;

    /**
     * @var string
     */
    public $localStorageCategory;

    /**
     * @var int
     */
    public $instanceBandwidthTx;

    /**
     * @var int
     */
    public $GPUAmount;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $memorySize;

    /**
     * @var int
     */
    public $initialCredit;

    /**
     * @var int
     */
    public $localStorageCapacity;

    /**
     * @var int
     */
    public $localStorageAmount;

    /**
     * @var int
     */
    public $instancePpsRx;

    /**
     * @var int
     */
    public $baselineCredit;

    /**
     * @var int
     */
    public $instancePpsTx;

    /**
     * @var int
     */
    public $cpuCoreCount;

    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var int
     */
    public $eniQuantity;
    protected $_name = [
        'instanceBandwidthRx'  => 'InstanceBandwidthRx',
        'GPUSpec'              => 'GPUSpec',
        'localStorageCategory' => 'LocalStorageCategory',
        'instanceBandwidthTx'  => 'InstanceBandwidthTx',
        'GPUAmount'            => 'GPUAmount',
        'instanceType'         => 'InstanceType',
        'memorySize'           => 'MemorySize',
        'initialCredit'        => 'InitialCredit',
        'localStorageCapacity' => 'LocalStorageCapacity',
        'localStorageAmount'   => 'LocalStorageAmount',
        'instancePpsRx'        => 'InstancePpsRx',
        'baselineCredit'       => 'BaselineCredit',
        'instancePpsTx'        => 'InstancePpsTx',
        'cpuCoreCount'         => 'CpuCoreCount',
        'instanceTypeFamily'   => 'InstanceTypeFamily',
        'eniQuantity'          => 'EniQuantity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceBandwidthRx) {
            $res['InstanceBandwidthRx'] = $this->instanceBandwidthRx;
        }
        if (null !== $this->GPUSpec) {
            $res['GPUSpec'] = $this->GPUSpec;
        }
        if (null !== $this->localStorageCategory) {
            $res['LocalStorageCategory'] = $this->localStorageCategory;
        }
        if (null !== $this->instanceBandwidthTx) {
            $res['InstanceBandwidthTx'] = $this->instanceBandwidthTx;
        }
        if (null !== $this->GPUAmount) {
            $res['GPUAmount'] = $this->GPUAmount;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->initialCredit) {
            $res['InitialCredit'] = $this->initialCredit;
        }
        if (null !== $this->localStorageCapacity) {
            $res['LocalStorageCapacity'] = $this->localStorageCapacity;
        }
        if (null !== $this->localStorageAmount) {
            $res['LocalStorageAmount'] = $this->localStorageAmount;
        }
        if (null !== $this->instancePpsRx) {
            $res['InstancePpsRx'] = $this->instancePpsRx;
        }
        if (null !== $this->baselineCredit) {
            $res['BaselineCredit'] = $this->baselineCredit;
        }
        if (null !== $this->instancePpsTx) {
            $res['InstancePpsTx'] = $this->instancePpsTx;
        }
        if (null !== $this->cpuCoreCount) {
            $res['CpuCoreCount'] = $this->cpuCoreCount;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->eniQuantity) {
            $res['EniQuantity'] = $this->eniQuantity;
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
        if (isset($map['InstanceBandwidthRx'])) {
            $model->instanceBandwidthRx = $map['InstanceBandwidthRx'];
        }
        if (isset($map['GPUSpec'])) {
            $model->GPUSpec = $map['GPUSpec'];
        }
        if (isset($map['LocalStorageCategory'])) {
            $model->localStorageCategory = $map['LocalStorageCategory'];
        }
        if (isset($map['InstanceBandwidthTx'])) {
            $model->instanceBandwidthTx = $map['InstanceBandwidthTx'];
        }
        if (isset($map['GPUAmount'])) {
            $model->GPUAmount = $map['GPUAmount'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['InitialCredit'])) {
            $model->initialCredit = $map['InitialCredit'];
        }
        if (isset($map['LocalStorageCapacity'])) {
            $model->localStorageCapacity = $map['LocalStorageCapacity'];
        }
        if (isset($map['LocalStorageAmount'])) {
            $model->localStorageAmount = $map['LocalStorageAmount'];
        }
        if (isset($map['InstancePpsRx'])) {
            $model->instancePpsRx = $map['InstancePpsRx'];
        }
        if (isset($map['BaselineCredit'])) {
            $model->baselineCredit = $map['BaselineCredit'];
        }
        if (isset($map['InstancePpsTx'])) {
            $model->instancePpsTx = $map['InstancePpsTx'];
        }
        if (isset($map['CpuCoreCount'])) {
            $model->cpuCoreCount = $map['CpuCoreCount'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['EniQuantity'])) {
            $model->eniQuantity = $map['EniQuantity'];
        }

        return $model;
    }
}
