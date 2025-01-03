<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data\resource;

use AlibabaCloud\Tea\Model;

class machineType extends Model
{
    /**
     * @example 5
     *
     * @var int
     */
    public $bondNum;

    /**
     * @example 2x Intel Icelake 8369B 32C CPU
     *
     * @var string
     */
    public $cpuInfo;

    /**
     * @example 2x 480GB SATA SSD \\n 4x 3.84TB NVMe SSD
     *
     * @var string
     */
    public $diskInfo;

    /**
     * @example 8x NVIDIA SXM4 80GB A100 GPU
     *
     * @var string
     */
    public $gpuInfo;

    /**
     * @example 32x 64GB DDR4 3200 Memory
     *
     * @var string
     */
    public $memoryInfo;

    /**
     * @example efg1.nvga1n
     *
     * @var string
     */
    public $name;

    /**
     * @example 1x 100Gbps DP NIC for VPC \\n 4x 100Gbps DP RoCE NIC
     *
     * @var string
     */
    public $networkInfo;

    /**
     * @example 2
     *
     * @var string
     */
    public $networkMode;

    /**
     * @example 1
     *
     * @var int
     */
    public $nodeCount;

    /**
     * @example Public
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
