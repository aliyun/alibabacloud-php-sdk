<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\replicas;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\replicas\replicaResource\cpu;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\replicas\replicaResource\diskSize;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\replicas\replicaResource\memory;

class replicaResource extends Model
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
    protected $_name = [
        'cpu' => 'Cpu',
        'diskSize' => 'DiskSize',
        'memory' => 'Memory',
    ];

    public function validate()
    {
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
        if (null !== $this->cpu) {
            $res['Cpu'] = null !== $this->cpu ? $this->cpu->toArray($noStream) : $this->cpu;
        }

        if (null !== $this->diskSize) {
            $res['DiskSize'] = null !== $this->diskSize ? $this->diskSize->toArray($noStream) : $this->diskSize;
        }

        if (null !== $this->memory) {
            $res['Memory'] = null !== $this->memory ? $this->memory->toArray($noStream) : $this->memory;
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
        if (isset($map['Cpu'])) {
            $model->cpu = cpu::fromMap($map['Cpu']);
        }

        if (isset($map['DiskSize'])) {
            $model->diskSize = diskSize::fromMap($map['DiskSize']);
        }

        if (isset($map['Memory'])) {
            $model->memory = memory::fromMap($map['Memory']);
        }

        return $model;
    }
}
