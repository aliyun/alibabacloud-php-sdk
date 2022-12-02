<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances\resource\cpu;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances\resource\diskSize;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances\resource\memory;
use AlibabaCloud\Tea\Model;

class resource extends Model
{
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
        'cpu'       => 'Cpu',
        'diskSize'  => 'DiskSize',
        'memory'    => 'Memory',
        'unitCount' => 'UnitCount',
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
        if (isset($map['Memory'])) {
            $model->memory = memory::fromMap($map['Memory']);
        }
        if (isset($map['UnitCount'])) {
            $model->unitCount = $map['UnitCount'];
        }

        return $model;
    }
}
