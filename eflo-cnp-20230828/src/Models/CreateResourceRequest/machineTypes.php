<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateResourceRequest;

use AlibabaCloud\Tea\Model;

class machineTypes extends Model
{
    /**
     * @description Number of Network Bonds
     *
     * @example 5
     *
     * @var int
     */
    public $bondNum;

    /**
     * @description CPU Information
     *
     * @example 2x Intel Saphhire Rapid 8469C 48C CPU
     *
     * @var string
     */
    public $cpuInfo;

    /**
     * @description Disk Information
     *
     * @example 2x 480GB SATA SSD \\n 4x 3.84TB NVMe SSD
     *
     * @var string
     */
    public $diskInfo;

    /**
     * @description GPU Information
     *
     * @example 8x NVIDIA SXM4 80GB A100 GPU
     *
     * @var string
     */
    public $gpuInfo;

    /**
     * @description Memory Information
     *
     * @example 32x 64GB DDR4 4800 Memory
     *
     * @var string
     */
    public $memoryInfo;

    /**
     * @description Specification Name
     *
     * @example efg1.nvga1n
     *
     * @var string
     */
    public $name;

    /**
     * @description Network Information
     *
     * @example 1x 200Gbps Dual Port BF3 DPU for VPC\\\\n4x 200Gbps Dual Port EIC
     *
     * @var string
     */
    public $networkInfo;

    /**
     * @description Network Mode
     *
     * @example 2
     *
     * @var string
     */
    public $networkMode;

    /**
     * @description Number of Nodes
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
     * @return machineTypes
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
