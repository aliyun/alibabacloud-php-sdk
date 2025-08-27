<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineTypesResponseBody;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $diskInfo;

    /**
     * @var string
     */
    public $gpuInfo;

    /**
     * @var string
     */
    public $memoryInfo;

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
        'diskInfo' => 'DiskInfo',
        'gpuInfo' => 'GpuInfo',
        'memoryInfo' => 'MemoryInfo',
        'name' => 'Name',
        'networkInfo' => 'NetworkInfo',
        'nodeCount' => 'NodeCount',
        'totalCpuCore' => 'TotalCpuCore',
        'type' => 'Type',
    ];

    public function validate()
    {
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

        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
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

        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
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
