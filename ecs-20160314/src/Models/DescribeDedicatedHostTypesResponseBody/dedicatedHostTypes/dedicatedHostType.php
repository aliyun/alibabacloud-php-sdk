<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostTypesResponseBody\dedicatedHostTypes;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostTypesResponseBody\dedicatedHostTypes\dedicatedHostType\supportInstanceTypeFamilies;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostTypesResponseBody\dedicatedHostTypes\dedicatedHostType\supportInstanceTypesList;
use AlibabaCloud\Tea\Model;

class dedicatedHostType extends Model
{
    /**
     * @var string
     */
    public $cpuOverCommitRatioRange;

    /**
     * @var string
     */
    public $dedicatedHostType;

    /**
     * @var string
     */
    public $GPUSpec;

    /**
     * @var string
     */
    public $generation;

    /**
     * @var int
     */
    public $localStorageAmount;

    /**
     * @var int
     */
    public $localStorageCapacity;

    /**
     * @var string
     */
    public $localStorageCategory;

    /**
     * @var float
     */
    public $memorySize;

    /**
     * @var int
     */
    public $physicalGpus;

    /**
     * @var bool
     */
    public $supportCpuOverCommitRatio;

    /**
     * @var supportInstanceTypeFamilies
     */
    public $supportInstanceTypeFamilies;

    /**
     * @var supportInstanceTypesList
     */
    public $supportInstanceTypesList;

    /**
     * @var int
     */
    public $totalPhysicalCores;

    /**
     * @var int
     */
    public $totalSockets;

    /**
     * @var int
     */
    public $totalVcpus;

    /**
     * @var int
     */
    public $totalVgpus;
    protected $_name = [
        'cpuOverCommitRatioRange'     => 'CpuOverCommitRatioRange',
        'dedicatedHostType'           => 'DedicatedHostType',
        'GPUSpec'                     => 'GPUSpec',
        'generation'                  => 'Generation',
        'localStorageAmount'          => 'LocalStorageAmount',
        'localStorageCapacity'        => 'LocalStorageCapacity',
        'localStorageCategory'        => 'LocalStorageCategory',
        'memorySize'                  => 'MemorySize',
        'physicalGpus'                => 'PhysicalGpus',
        'supportCpuOverCommitRatio'   => 'SupportCpuOverCommitRatio',
        'supportInstanceTypeFamilies' => 'SupportInstanceTypeFamilies',
        'supportInstanceTypesList'    => 'SupportInstanceTypesList',
        'totalPhysicalCores'          => 'TotalPhysicalCores',
        'totalSockets'                => 'TotalSockets',
        'totalVcpus'                  => 'TotalVcpus',
        'totalVgpus'                  => 'TotalVgpus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuOverCommitRatioRange) {
            $res['CpuOverCommitRatioRange'] = $this->cpuOverCommitRatioRange;
        }
        if (null !== $this->dedicatedHostType) {
            $res['DedicatedHostType'] = $this->dedicatedHostType;
        }
        if (null !== $this->GPUSpec) {
            $res['GPUSpec'] = $this->GPUSpec;
        }
        if (null !== $this->generation) {
            $res['Generation'] = $this->generation;
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
        if (null !== $this->supportCpuOverCommitRatio) {
            $res['SupportCpuOverCommitRatio'] = $this->supportCpuOverCommitRatio;
        }
        if (null !== $this->supportInstanceTypeFamilies) {
            $res['SupportInstanceTypeFamilies'] = null !== $this->supportInstanceTypeFamilies ? $this->supportInstanceTypeFamilies->toMap() : null;
        }
        if (null !== $this->supportInstanceTypesList) {
            $res['SupportInstanceTypesList'] = null !== $this->supportInstanceTypesList ? $this->supportInstanceTypesList->toMap() : null;
        }
        if (null !== $this->totalPhysicalCores) {
            $res['TotalPhysicalCores'] = $this->totalPhysicalCores;
        }
        if (null !== $this->totalSockets) {
            $res['TotalSockets'] = $this->totalSockets;
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
        if (isset($map['CpuOverCommitRatioRange'])) {
            $model->cpuOverCommitRatioRange = $map['CpuOverCommitRatioRange'];
        }
        if (isset($map['DedicatedHostType'])) {
            $model->dedicatedHostType = $map['DedicatedHostType'];
        }
        if (isset($map['GPUSpec'])) {
            $model->GPUSpec = $map['GPUSpec'];
        }
        if (isset($map['Generation'])) {
            $model->generation = $map['Generation'];
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
        if (isset($map['SupportCpuOverCommitRatio'])) {
            $model->supportCpuOverCommitRatio = $map['SupportCpuOverCommitRatio'];
        }
        if (isset($map['SupportInstanceTypeFamilies'])) {
            $model->supportInstanceTypeFamilies = supportInstanceTypeFamilies::fromMap($map['SupportInstanceTypeFamilies']);
        }
        if (isset($map['SupportInstanceTypesList'])) {
            $model->supportInstanceTypesList = supportInstanceTypesList::fromMap($map['SupportInstanceTypesList']);
        }
        if (isset($map['TotalPhysicalCores'])) {
            $model->totalPhysicalCores = $map['TotalPhysicalCores'];
        }
        if (isset($map['TotalSockets'])) {
            $model->totalSockets = $map['TotalSockets'];
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
