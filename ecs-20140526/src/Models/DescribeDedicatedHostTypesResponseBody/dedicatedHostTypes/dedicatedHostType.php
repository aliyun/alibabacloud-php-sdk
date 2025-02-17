<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostTypesResponseBody\dedicatedHostTypes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostTypesResponseBody\dedicatedHostTypes\dedicatedHostType\supportedInstanceTypeFamilies;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostTypesResponseBody\dedicatedHostTypes\dedicatedHostType\supportedInstanceTypesList;

class dedicatedHostType extends Model
{
    /**
     * @var int
     */
    public $cores;
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
     * @var int
     */
    public $sockets;
    /**
     * @var bool
     */
    public $supportCpuOverCommitRatio;
    /**
     * @var supportedInstanceTypeFamilies
     */
    public $supportedInstanceTypeFamilies;
    /**
     * @var supportedInstanceTypesList
     */
    public $supportedInstanceTypesList;
    /**
     * @var int
     */
    public $totalVcpus;
    /**
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
        if (null !== $this->supportedInstanceTypeFamilies) {
            $this->supportedInstanceTypeFamilies->validate();
        }
        if (null !== $this->supportedInstanceTypesList) {
            $this->supportedInstanceTypesList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['SupportedInstanceTypeFamilies'] = null !== $this->supportedInstanceTypeFamilies ? $this->supportedInstanceTypeFamilies->toArray($noStream) : $this->supportedInstanceTypeFamilies;
        }

        if (null !== $this->supportedInstanceTypesList) {
            $res['SupportedInstanceTypesList'] = null !== $this->supportedInstanceTypesList ? $this->supportedInstanceTypesList->toArray($noStream) : $this->supportedInstanceTypesList;
        }

        if (null !== $this->totalVcpus) {
            $res['TotalVcpus'] = $this->totalVcpus;
        }

        if (null !== $this->totalVgpus) {
            $res['TotalVgpus'] = $this->totalVgpus;
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
