<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\resource\cpu;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\resource\diskSize;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\resource\logDiskSize;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\resource\memory;
use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description The information about the CPU resources of the cluster.
     *
     * @var cpu
     */
    public $cpu;

    /**
     * @description The information about the storage resources of the cluster.
     *
     * @var diskSize
     */
    public $diskSize;

    /**
     * @description The information about the log disk space of the cluster.
     *
     * @var logDiskSize
     */
    public $logDiskSize;

    /**
     * @description The information about the memory resources of the cluster.
     *
     * @var memory
     */
    public $memory;

    /**
     * @description The number of resource units in the cluster.
     *
     * @example 1
     *
     * @var int
     */
    public $unitCount;
    protected $_name = [
        'cpu'         => 'Cpu',
        'diskSize'    => 'DiskSize',
        'logDiskSize' => 'LogDiskSize',
        'memory'      => 'Memory',
        'unitCount'   => 'UnitCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = null !== $this->cpu ? $this->cpu->toMap() : null;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = null !== $this->diskSize ? $this->diskSize->toMap() : null;
        }
        if (null !== $this->logDiskSize) {
            $res['LogDiskSize'] = null !== $this->logDiskSize ? $this->logDiskSize->toMap() : null;
        }
        if (null !== $this->memory) {
            $res['Memory'] = null !== $this->memory ? $this->memory->toMap() : null;
        }
        if (null !== $this->unitCount) {
            $res['UnitCount'] = $this->unitCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = cpu::fromMap($map['Cpu']);
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = diskSize::fromMap($map['DiskSize']);
        }
        if (isset($map['LogDiskSize'])) {
            $model->logDiskSize = logDiskSize::fromMap($map['LogDiskSize']);
        }
        if (isset($map['Memory'])) {
            $model->memory = memory::fromMap($map['Memory']);
        }
        if (isset($map['UnitCount'])) {
            $model->unitCount = $map['UnitCount'];
        }

        return $model;
    }
}
