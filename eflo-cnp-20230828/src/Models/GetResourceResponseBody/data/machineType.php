<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetResourceResponseBody\data;

use AlibabaCloud\Tea\Model;

class machineType extends Model
{
    /**
     * @description Number of network bonds
     *
     * @example 5
     *
     * @var int
     */
    public $bondNum;

    /**
     * @description CPU information
     *
     * @example 2x Intel Saphhire Rapid 8469C 48C CPU
     *
     * @var string
     */
    public $cpuInfo;

    /**
     * @description Disk information
     *
     * @example 2x 480GB SATA SSD\\n4x 3.84TB NVMe SSD
     *
     * @var string
     */
    public $diskInfo;

    /**
     * @description GPU information
     *
     * @example 8x OAM 810 GPU
     *
     * @var string
     */
    public $gpuInfo;

    /**
     * @description Memory information
     *
     * @example 32x 64GB DDR4 4800 Memory
     *
     * @var string
     */
    public $memoryInfo;

    /**
     * @description Specification name
     *
     * @example efg2.p8en
     *
     * @var string
     */
    public $name;

    /**
     * @description Network information
     *
     * @example 1x 200Gbps Dual Port BF3 DPU for VPC\\n4x 200Gbps Dual Port EIC
     *
     * @var string
     */
    public $networkInfo;

    /**
     * @description Network mode
     *
     * @example 2
     *
     * @var string
     */
    public $networkMode;

    /**
     * @description Number of nodes
     *
     * @example 1
     *
     * @var int
     */
    public $nodeCount;

    /**
     * @description Type
     *
     * @example Private
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bondNum'     => 'BondNum',
        'cpuInfo'     => 'CpuInfo',
        'diskInfo'    => 'DiskInfo',
        'gpuInfo'     => 'GpuInfo',
        'memoryInfo'  => 'MemoryInfo',
        'name'        => 'Name',
        'networkInfo' => 'NetworkInfo',
        'networkMode' => 'NetworkMode',
        'nodeCount'   => 'NodeCount',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bondNum) {
            $res['BondNum'] = $this->bondNum;
        }
        if (null !== $this->cpuInfo) {
            $res['CpuInfo'] = $this->cpuInfo;
        }
        if (null !== $this->diskInfo) {
            $res['DiskInfo'] = $this->diskInfo;
        }
        if (null !== $this->gpuInfo) {
            $res['GpuInfo'] = $this->gpuInfo;
        }
        if (null !== $this->memoryInfo) {
            $res['MemoryInfo'] = $this->memoryInfo;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->networkInfo) {
            $res['NetworkInfo'] = $this->networkInfo;
        }
        if (null !== $this->networkMode) {
            $res['NetworkMode'] = $this->networkMode;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return machineType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BondNum'])) {
            $model->bondNum = $map['BondNum'];
        }
        if (isset($map['CpuInfo'])) {
            $model->cpuInfo = $map['CpuInfo'];
        }
        if (isset($map['DiskInfo'])) {
            $model->diskInfo = $map['DiskInfo'];
        }
        if (isset($map['GpuInfo'])) {
            $model->gpuInfo = $map['GpuInfo'];
        }
        if (isset($map['MemoryInfo'])) {
            $model->memoryInfo = $map['MemoryInfo'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetworkInfo'])) {
            $model->networkInfo = $map['NetworkInfo'];
        }
        if (isset($map['NetworkMode'])) {
            $model->networkMode = $map['NetworkMode'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
