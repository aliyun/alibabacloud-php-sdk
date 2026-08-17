<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineTypesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineTypesResponseBody\machineTypes\cpuInfoDetail;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineTypesResponseBody\machineTypes\diskInfoDetail;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineTypesResponseBody\machineTypes\frontendNetworkDetail;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineTypesResponseBody\machineTypes\gpuInfoDetail;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineTypesResponseBody\machineTypes\memoryInfoDetail;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineTypesResponseBody\machineTypes\rdmaInfoDetail;

class machineTypes extends Model
{
    /**
     * @var int
     */
    public $bondNum;

    /**
     * @var string
     */
    public $cpuInfo;

    /**
     * @var cpuInfoDetail
     */
    public $cpuInfoDetail;

    /**
     * @var string
     */
    public $diskInfo;

    /**
     * @var diskInfoDetail
     */
    public $diskInfoDetail;

    /**
     * @var frontendNetworkDetail
     */
    public $frontendNetworkDetail;

    /**
     * @var string
     */
    public $gpuInfo;

    /**
     * @var gpuInfoDetail
     */
    public $gpuInfoDetail;

    /**
     * @var string
     */
    public $memoryInfo;

    /**
     * @var memoryInfoDetail
     */
    public $memoryInfoDetail;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $networkInfo;

    /**
     * @var string
     */
    public $nodeCount;

    /**
     * @var rdmaInfoDetail
     */
    public $rdmaInfoDetail;

    /**
     * @var int
     */
    public $totalCpuCore;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bondNum' => 'BondNum',
        'cpuInfo' => 'CpuInfo',
        'cpuInfoDetail' => 'CpuInfoDetail',
        'diskInfo' => 'DiskInfo',
        'diskInfoDetail' => 'DiskInfoDetail',
        'frontendNetworkDetail' => 'FrontendNetworkDetail',
        'gpuInfo' => 'GpuInfo',
        'gpuInfoDetail' => 'GpuInfoDetail',
        'memoryInfo' => 'MemoryInfo',
        'memoryInfoDetail' => 'MemoryInfoDetail',
        'name' => 'Name',
        'networkInfo' => 'NetworkInfo',
        'nodeCount' => 'NodeCount',
        'rdmaInfoDetail' => 'RdmaInfoDetail',
        'totalCpuCore' => 'TotalCpuCore',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->cpuInfoDetail) {
            $this->cpuInfoDetail->validate();
        }
        if (null !== $this->diskInfoDetail) {
            $this->diskInfoDetail->validate();
        }
        if (null !== $this->frontendNetworkDetail) {
            $this->frontendNetworkDetail->validate();
        }
        if (null !== $this->gpuInfoDetail) {
            $this->gpuInfoDetail->validate();
        }
        if (null !== $this->memoryInfoDetail) {
            $this->memoryInfoDetail->validate();
        }
        if (null !== $this->rdmaInfoDetail) {
            $this->rdmaInfoDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bondNum) {
            $res['BondNum'] = $this->bondNum;
        }

        if (null !== $this->cpuInfo) {
            $res['CpuInfo'] = $this->cpuInfo;
        }

        if (null !== $this->cpuInfoDetail) {
            $res['CpuInfoDetail'] = null !== $this->cpuInfoDetail ? $this->cpuInfoDetail->toArray($noStream) : $this->cpuInfoDetail;
        }

        if (null !== $this->diskInfo) {
            $res['DiskInfo'] = $this->diskInfo;
        }

        if (null !== $this->diskInfoDetail) {
            $res['DiskInfoDetail'] = null !== $this->diskInfoDetail ? $this->diskInfoDetail->toArray($noStream) : $this->diskInfoDetail;
        }

        if (null !== $this->frontendNetworkDetail) {
            $res['FrontendNetworkDetail'] = null !== $this->frontendNetworkDetail ? $this->frontendNetworkDetail->toArray($noStream) : $this->frontendNetworkDetail;
        }

        if (null !== $this->gpuInfo) {
            $res['GpuInfo'] = $this->gpuInfo;
        }

        if (null !== $this->gpuInfoDetail) {
            $res['GpuInfoDetail'] = null !== $this->gpuInfoDetail ? $this->gpuInfoDetail->toArray($noStream) : $this->gpuInfoDetail;
        }

        if (null !== $this->memoryInfo) {
            $res['MemoryInfo'] = $this->memoryInfo;
        }

        if (null !== $this->memoryInfoDetail) {
            $res['MemoryInfoDetail'] = null !== $this->memoryInfoDetail ? $this->memoryInfoDetail->toArray($noStream) : $this->memoryInfoDetail;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->networkInfo) {
            $res['NetworkInfo'] = $this->networkInfo;
        }

        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }

        if (null !== $this->rdmaInfoDetail) {
            $res['RdmaInfoDetail'] = null !== $this->rdmaInfoDetail ? $this->rdmaInfoDetail->toArray($noStream) : $this->rdmaInfoDetail;
        }

        if (null !== $this->totalCpuCore) {
            $res['TotalCpuCore'] = $this->totalCpuCore;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['BondNum'])) {
            $model->bondNum = $map['BondNum'];
        }

        if (isset($map['CpuInfo'])) {
            $model->cpuInfo = $map['CpuInfo'];
        }

        if (isset($map['CpuInfoDetail'])) {
            $model->cpuInfoDetail = cpuInfoDetail::fromMap($map['CpuInfoDetail']);
        }

        if (isset($map['DiskInfo'])) {
            $model->diskInfo = $map['DiskInfo'];
        }

        if (isset($map['DiskInfoDetail'])) {
            $model->diskInfoDetail = diskInfoDetail::fromMap($map['DiskInfoDetail']);
        }

        if (isset($map['FrontendNetworkDetail'])) {
            $model->frontendNetworkDetail = frontendNetworkDetail::fromMap($map['FrontendNetworkDetail']);
        }

        if (isset($map['GpuInfo'])) {
            $model->gpuInfo = $map['GpuInfo'];
        }

        if (isset($map['GpuInfoDetail'])) {
            $model->gpuInfoDetail = gpuInfoDetail::fromMap($map['GpuInfoDetail']);
        }

        if (isset($map['MemoryInfo'])) {
            $model->memoryInfo = $map['MemoryInfo'];
        }

        if (isset($map['MemoryInfoDetail'])) {
            $model->memoryInfoDetail = memoryInfoDetail::fromMap($map['MemoryInfoDetail']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NetworkInfo'])) {
            $model->networkInfo = $map['NetworkInfo'];
        }

        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }

        if (isset($map['RdmaInfoDetail'])) {
            $model->rdmaInfoDetail = rdmaInfoDetail::fromMap($map['RdmaInfoDetail']);
        }

        if (isset($map['TotalCpuCore'])) {
            $model->totalCpuCore = $map['TotalCpuCore'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
