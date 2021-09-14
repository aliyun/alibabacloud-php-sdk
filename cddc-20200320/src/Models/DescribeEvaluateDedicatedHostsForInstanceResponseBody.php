<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeEvaluateDedicatedHostsForInstanceResponseBody\dedicatedHosts;
use AlibabaCloud\Tea\Model;

class DescribeEvaluateDedicatedHostsForInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $instanceRequiredCPU;

    /**
     * @var int
     */
    public $cpuOverAllocationRatio;

    /**
     * @var int
     */
    public $memoryOverAllocationRatio;

    /**
     * @var int
     */
    public $instanceRequiredMemory;

    /**
     * @var string
     */
    public $instanceClassCode;

    /**
     * @var int
     */
    public $availableHostNum;

    /**
     * @var int
     */
    public $instanceRequiredStorage;

    /**
     * @var int
     */
    public $diskOverAllocationRatio;

    /**
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @var dedicatedHosts[]
     */
    public $dedicatedHosts;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'instanceRequiredCPU'       => 'InstanceRequiredCPU',
        'cpuOverAllocationRatio'    => 'CpuOverAllocationRatio',
        'memoryOverAllocationRatio' => 'MemoryOverAllocationRatio',
        'instanceRequiredMemory'    => 'InstanceRequiredMemory',
        'instanceClassCode'         => 'InstanceClassCode',
        'availableHostNum'          => 'AvailableHostNum',
        'instanceRequiredStorage'   => 'InstanceRequiredStorage',
        'diskOverAllocationRatio'   => 'DiskOverAllocationRatio',
        'dedicatedHostGroupId'      => 'DedicatedHostGroupId',
        'dedicatedHosts'            => 'DedicatedHosts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceRequiredCPU) {
            $res['InstanceRequiredCPU'] = $this->instanceRequiredCPU;
        }
        if (null !== $this->cpuOverAllocationRatio) {
            $res['CpuOverAllocationRatio'] = $this->cpuOverAllocationRatio;
        }
        if (null !== $this->memoryOverAllocationRatio) {
            $res['MemoryOverAllocationRatio'] = $this->memoryOverAllocationRatio;
        }
        if (null !== $this->instanceRequiredMemory) {
            $res['InstanceRequiredMemory'] = $this->instanceRequiredMemory;
        }
        if (null !== $this->instanceClassCode) {
            $res['InstanceClassCode'] = $this->instanceClassCode;
        }
        if (null !== $this->availableHostNum) {
            $res['AvailableHostNum'] = $this->availableHostNum;
        }
        if (null !== $this->instanceRequiredStorage) {
            $res['InstanceRequiredStorage'] = $this->instanceRequiredStorage;
        }
        if (null !== $this->diskOverAllocationRatio) {
            $res['DiskOverAllocationRatio'] = $this->diskOverAllocationRatio;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->dedicatedHosts) {
            $res['DedicatedHosts'] = [];
            if (null !== $this->dedicatedHosts && \is_array($this->dedicatedHosts)) {
                $n = 0;
                foreach ($this->dedicatedHosts as $item) {
                    $res['DedicatedHosts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEvaluateDedicatedHostsForInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceRequiredCPU'])) {
            $model->instanceRequiredCPU = $map['InstanceRequiredCPU'];
        }
        if (isset($map['CpuOverAllocationRatio'])) {
            $model->cpuOverAllocationRatio = $map['CpuOverAllocationRatio'];
        }
        if (isset($map['MemoryOverAllocationRatio'])) {
            $model->memoryOverAllocationRatio = $map['MemoryOverAllocationRatio'];
        }
        if (isset($map['InstanceRequiredMemory'])) {
            $model->instanceRequiredMemory = $map['InstanceRequiredMemory'];
        }
        if (isset($map['InstanceClassCode'])) {
            $model->instanceClassCode = $map['InstanceClassCode'];
        }
        if (isset($map['AvailableHostNum'])) {
            $model->availableHostNum = $map['AvailableHostNum'];
        }
        if (isset($map['InstanceRequiredStorage'])) {
            $model->instanceRequiredStorage = $map['InstanceRequiredStorage'];
        }
        if (isset($map['DiskOverAllocationRatio'])) {
            $model->diskOverAllocationRatio = $map['DiskOverAllocationRatio'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['DedicatedHosts'])) {
            if (!empty($map['DedicatedHosts'])) {
                $model->dedicatedHosts = [];
                $n                     = 0;
                foreach ($map['DedicatedHosts'] as $item) {
                    $model->dedicatedHosts[$n++] = null !== $item ? dedicatedHosts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
