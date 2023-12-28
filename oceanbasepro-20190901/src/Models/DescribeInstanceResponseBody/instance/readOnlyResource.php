<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\readOnlyResource\capacityUnit;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\readOnlyResource\cpu;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\readOnlyResource\diskSize;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\readOnlyResource\logDiskSize;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\readOnlyResource\memory;
use AlibabaCloud\Tea\Model;

class readOnlyResource extends Model
{
    /**
     * @var capacityUnit
     */
    public $capacityUnit;

    /**
     * @var cpu
     */
    public $cpu;

    /**
     * @var diskSize
     */
    public $diskSize;

    /**
     * @var logDiskSize
     */
    public $logDiskSize;

    /**
     * @var memory
     */
    public $memory;

    /**
     * @example 1
     *
     * @var int
     */
    public $unitCount;
    protected $_name = [
        'capacityUnit' => 'CapacityUnit',
        'cpu'          => 'Cpu',
        'diskSize'     => 'DiskSize',
        'logDiskSize'  => 'LogDiskSize',
        'memory'       => 'Memory',
        'unitCount'    => 'UnitCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacityUnit) {
            $res['CapacityUnit'] = null !== $this->capacityUnit ? $this->capacityUnit->toMap() : null;
        }
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
     * @return readOnlyResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CapacityUnit'])) {
            $model->capacityUnit = capacityUnit::fromMap($map['CapacityUnit']);
        }
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
