<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostTypesResponseBody;

use AlibabaCloud\Tea\Model;

class dedicatedHostTypes extends Model
{
    /**
     * @var int
     */
    public $cores;

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
    public $totalVcpus;

    /**
     * @var string
     */
    public $cpuOverCommitRatioRange;

    /**
     * @var string[]
     */
    public $supportedInstanceTypesList;

    /**
     * @var int
     */
    public $physicalGpus;

    /**
     * @var float
     */
    public $memorySize;

    /**
     * @var bool
     */
    public $supportCpuOverCommitRatio;

    /**
     * @var int
     */
    public $localStorageCapacity;

    /**
     * @var int
     */
    public $localStorageAmount;

    /**
     * @var string
     */
    public $dedicatedHostType;

    /**
     * @var int
     */
    public $totalVgpus;

    /**
     * @var int
     */
    public $sockets;

    /**
     * @var string[]
     */
    public $supportedInstanceTypeFamilies;
    protected $_name = [
        'cores'                         => 'Cores',
        'GPUSpec'                       => 'GPUSpec',
        'localStorageCategory'          => 'LocalStorageCategory',
        'totalVcpus'                    => 'TotalVcpus',
        'cpuOverCommitRatioRange'       => 'CpuOverCommitRatioRange',
        'supportedInstanceTypesList'    => 'SupportedInstanceTypesList',
        'physicalGpus'                  => 'PhysicalGpus',
        'memorySize'                    => 'MemorySize',
        'supportCpuOverCommitRatio'     => 'SupportCpuOverCommitRatio',
        'localStorageCapacity'          => 'LocalStorageCapacity',
        'localStorageAmount'            => 'LocalStorageAmount',
        'dedicatedHostType'             => 'DedicatedHostType',
        'totalVgpus'                    => 'TotalVgpus',
        'sockets'                       => 'Sockets',
        'supportedInstanceTypeFamilies' => 'SupportedInstanceTypeFamilies',
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
        if (null !== $this->GPUSpec) {
            $res['GPUSpec'] = $this->GPUSpec;
        }
        if (null !== $this->localStorageCategory) {
            $res['LocalStorageCategory'] = $this->localStorageCategory;
        }
        if (null !== $this->totalVcpus) {
            $res['TotalVcpus'] = $this->totalVcpus;
        }
        if (null !== $this->cpuOverCommitRatioRange) {
            $res['CpuOverCommitRatioRange'] = $this->cpuOverCommitRatioRange;
        }
        if (null !== $this->supportedInstanceTypesList) {
            $res['SupportedInstanceTypesList'] = $this->supportedInstanceTypesList;
        }
        if (null !== $this->physicalGpus) {
            $res['PhysicalGpus'] = $this->physicalGpus;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->supportCpuOverCommitRatio) {
            $res['SupportCpuOverCommitRatio'] = $this->supportCpuOverCommitRatio;
        }
        if (null !== $this->localStorageCapacity) {
            $res['LocalStorageCapacity'] = $this->localStorageCapacity;
        }
        if (null !== $this->localStorageAmount) {
            $res['LocalStorageAmount'] = $this->localStorageAmount;
        }
        if (null !== $this->dedicatedHostType) {
            $res['DedicatedHostType'] = $this->dedicatedHostType;
        }
        if (null !== $this->totalVgpus) {
            $res['TotalVgpus'] = $this->totalVgpus;
        }
        if (null !== $this->sockets) {
            $res['Sockets'] = $this->sockets;
        }
        if (null !== $this->supportedInstanceTypeFamilies) {
            $res['SupportedInstanceTypeFamilies'] = $this->supportedInstanceTypeFamilies;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHostTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['GPUSpec'])) {
            $model->GPUSpec = $map['GPUSpec'];
        }
        if (isset($map['LocalStorageCategory'])) {
            $model->localStorageCategory = $map['LocalStorageCategory'];
        }
        if (isset($map['TotalVcpus'])) {
            $model->totalVcpus = $map['TotalVcpus'];
        }
        if (isset($map['CpuOverCommitRatioRange'])) {
            $model->cpuOverCommitRatioRange = $map['CpuOverCommitRatioRange'];
        }
        if (isset($map['SupportedInstanceTypesList'])) {
            if (!empty($map['SupportedInstanceTypesList'])) {
                $model->supportedInstanceTypesList = $map['SupportedInstanceTypesList'];
            }
        }
        if (isset($map['PhysicalGpus'])) {
            $model->physicalGpus = $map['PhysicalGpus'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['SupportCpuOverCommitRatio'])) {
            $model->supportCpuOverCommitRatio = $map['SupportCpuOverCommitRatio'];
        }
        if (isset($map['LocalStorageCapacity'])) {
            $model->localStorageCapacity = $map['LocalStorageCapacity'];
        }
        if (isset($map['LocalStorageAmount'])) {
            $model->localStorageAmount = $map['LocalStorageAmount'];
        }
        if (isset($map['DedicatedHostType'])) {
            $model->dedicatedHostType = $map['DedicatedHostType'];
        }
        if (isset($map['TotalVgpus'])) {
            $model->totalVgpus = $map['TotalVgpus'];
        }
        if (isset($map['Sockets'])) {
            $model->sockets = $map['Sockets'];
        }
        if (isset($map['SupportedInstanceTypeFamilies'])) {
            if (!empty($map['SupportedInstanceTypeFamilies'])) {
                $model->supportedInstanceTypeFamilies = $map['SupportedInstanceTypeFamilies'];
            }
        }

        return $model;
    }
}
