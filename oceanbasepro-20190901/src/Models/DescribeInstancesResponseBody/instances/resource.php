<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances\resource\capacityUnit;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances\resource\cpu;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances\resource\diskSize;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances\resource\memory;

class resource extends Model
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
     * @var memory
     */
    public $memory;

    /**
     * @var int
     */
    public $unitCount;
    protected $_name = [
        'capacityUnit' => 'CapacityUnit',
        'cpu' => 'Cpu',
        'diskSize' => 'DiskSize',
        'memory' => 'Memory',
        'unitCount' => 'UnitCount',
    ];

    public function validate()
    {
        if (null !== $this->capacityUnit) {
            $this->capacityUnit->validate();
        }
        if (null !== $this->cpu) {
            $this->cpu->validate();
        }
        if (null !== $this->diskSize) {
            $this->diskSize->validate();
        }
        if (null !== $this->memory) {
            $this->memory->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacityUnit) {
            $res['CapacityUnit'] = null !== $this->capacityUnit ? $this->capacityUnit->toArray($noStream) : $this->capacityUnit;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = null !== $this->cpu ? $this->cpu->toArray($noStream) : $this->cpu;
        }

        if (null !== $this->diskSize) {
            $res['DiskSize'] = null !== $this->diskSize ? $this->diskSize->toArray($noStream) : $this->diskSize;
        }

        if (null !== $this->memory) {
            $res['Memory'] = null !== $this->memory ? $this->memory->toArray($noStream) : $this->memory;
        }

        if (null !== $this->unitCount) {
            $res['UnitCount'] = $this->unitCount;
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
        if (isset($map['CapacityUnit'])) {
            $model->capacityUnit = capacityUnit::fromMap($map['CapacityUnit']);
        }

        if (isset($map['Cpu'])) {
            $model->cpu = cpu::fromMap($map['Cpu']);
        }

        if (isset($map['DiskSize'])) {
            $model->diskSize = diskSize::fromMap($map['DiskSize']);
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
