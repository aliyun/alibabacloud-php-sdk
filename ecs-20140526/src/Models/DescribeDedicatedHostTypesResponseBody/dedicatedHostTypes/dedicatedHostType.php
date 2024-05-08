<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostTypesResponseBody\dedicatedHostTypes;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostTypesResponseBody\dedicatedHostTypes\dedicatedHostType\supportedInstanceTypeFamilies;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostTypesResponseBody\dedicatedHostTypes\dedicatedHostType\supportedInstanceTypesList;
use AlibabaCloud\Tea\Model;

class dedicatedHostType extends Model
{
    /**
     * @description The number of cores per physical CPU.
     *
     * @example 2
     *
     * @var int
     */
    public $cores;

    /**
     * @description The supported CPU overcommit ratio range.
     *
     * @example 1-5
     *
     * @var string
     */
    public $cpuOverCommitRatioRange;

    /**
     * @description The dedicated host type.
     *
     * @example ddh.sn1ne
     *
     * @var string
     */
    public $dedicatedHostType;

    /**
     * @description The GPU model.
     *
     * @example gpu
     *
     * @var string
     */
    public $GPUSpec;

    /**
     * @description The number of local disks on a dedicated host.
     *
     * @example 0
     *
     * @var int
     */
    public $localStorageAmount;

    /**
     * @description The capacity of a local disk. Unit: GiB.
     *
     * @example 0
     *
     * @var int
     */
    public $localStorageCapacity;

    /**
     * @description The category of local disks.
     *
     * @example local
     *
     * @var string
     */
    public $localStorageCategory;

    /**
     * @description The memory size. Unit: GiB.
     *
     * @example 112.0
     *
     * @var float
     */
    public $memorySize;

    /**
     * @description The number of physical GPUs.
     *
     * @example 2
     *
     * @var int
     */
    public $physicalGpus;

    /**
     * @description The number of physical CPUs.
     *
     * @example 2
     *
     * @var int
     */
    public $sockets;

    /**
     * @description Indicates whether the CPU overcommit ratio settings are supported.
     *
     * @example true
     *
     * @var bool
     */
    public $supportCpuOverCommitRatio;

    /**
     * @description The ECS instance families supported by the dedicated host type.
     *
     * @var supportedInstanceTypeFamilies
     */
    public $supportedInstanceTypeFamilies;

    /**
     * @description The ECS instance types supported by the dedicated host type.
     *
     * @var supportedInstanceTypesList
     */
    public $supportedInstanceTypesList;

    /**
     * @description The total number of vCPUs.
     *
     * @example 56
     *
     * @var int
     */
    public $totalVcpus;

    /**
     * @description The total number of vGPUs.
     *
     * @example 10
     *
     * @var int
     */
    public $totalVgpus;
    protected $_name = [
        'cores'                         => 'Cores',
        'cpuOverCommitRatioRange'       => 'CpuOverCommitRatioRange',
        'dedicatedHostType'             => 'DedicatedHostType',
        'GPUSpec'                       => 'GPUSpec',
        'localStorageAmount'            => 'LocalStorageAmount',
        'localStorageCapacity'          => 'LocalStorageCapacity',
        'localStorageCategory'          => 'LocalStorageCategory',
        'memorySize'                    => 'MemorySize',
        'physicalGpus'                  => 'PhysicalGpus',
        'sockets'                       => 'Sockets',
        'supportCpuOverCommitRatio'     => 'SupportCpuOverCommitRatio',
        'supportedInstanceTypeFamilies' => 'SupportedInstanceTypeFamilies',
        'supportedInstanceTypesList'    => 'SupportedInstanceTypesList',
        'totalVcpus'                    => 'TotalVcpus',
        'totalVgpus'                    => 'TotalVgpus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }
        if (null !== $this->cpuOverCommitRatioRange) {
            $res['CpuOverCommitRatioRange'] = $this->cpuOverCommitRatioRange;
        }
        if (null !== $this->dedicatedHostType) {
            $res['DedicatedHostType'] = $this->dedicatedHostType;
        }
        if (null !== $this->GPUSpec) {
            $res['GPUSpec'] = $this->GPUSpec;
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
        if (null !== $this->physicalGpus) {
            $res['PhysicalGpus'] = $this->physicalGpus;
        }
        if (null !== $this->sockets) {
            $res['Sockets'] = $this->sockets;
        }
        if (null !== $this->supportCpuOverCommitRatio) {
            $res['SupportCpuOverCommitRatio'] = $this->supportCpuOverCommitRatio;
        }
        if (null !== $this->supportedInstanceTypeFamilies) {
            $res['SupportedInstanceTypeFamilies'] = null !== $this->supportedInstanceTypeFamilies ? $this->supportedInstanceTypeFamilies->toMap() : null;
        }
        if (null !== $this->supportedInstanceTypesList) {
            $res['SupportedInstanceTypesList'] = null !== $this->supportedInstanceTypesList ? $this->supportedInstanceTypesList->toMap() : null;
        }
        if (null !== $this->totalVcpus) {
            $res['TotalVcpus'] = $this->totalVcpus;
        }
        if (null !== $this->totalVgpus) {
            $res['TotalVgpus'] = $this->totalVgpus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHostType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['CpuOverCommitRatioRange'])) {
            $model->cpuOverCommitRatioRange = $map['CpuOverCommitRatioRange'];
        }
        if (isset($map['DedicatedHostType'])) {
            $model->dedicatedHostType = $map['DedicatedHostType'];
        }
        if (isset($map['GPUSpec'])) {
            $model->GPUSpec = $map['GPUSpec'];
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
        if (isset($map['PhysicalGpus'])) {
            $model->physicalGpus = $map['PhysicalGpus'];
        }
        if (isset($map['Sockets'])) {
            $model->sockets = $map['Sockets'];
        }
        if (isset($map['SupportCpuOverCommitRatio'])) {
            $model->supportCpuOverCommitRatio = $map['SupportCpuOverCommitRatio'];
        }
        if (isset($map['SupportedInstanceTypeFamilies'])) {
            $model->supportedInstanceTypeFamilies = supportedInstanceTypeFamilies::fromMap($map['SupportedInstanceTypeFamilies']);
        }
        if (isset($map['SupportedInstanceTypesList'])) {
            $model->supportedInstanceTypesList = supportedInstanceTypesList::fromMap($map['SupportedInstanceTypesList']);
        }
        if (isset($map['TotalVcpus'])) {
            $model->totalVcpus = $map['TotalVcpus'];
        }
        if (isset($map['TotalVgpus'])) {
            $model->totalVgpus = $map['TotalVgpus'];
        }

        return $model;
    }
}
