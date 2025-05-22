<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\QueryResourceStaticsResponseBody\data;

use AlibabaCloud\Dara\Model;

class summary extends Model
{
    /**
     * @var float
     */
    public $activeCpu;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var float
     */
    public $cu;

    /**
     * @var float
     */
    public $ephemeralStorage;

    /**
     * @var float
     */
    public $gpuA10;

    /**
     * @var float
     */
    public $gpuPpu810e;

    /**
     * @var float
     */
    public $idleCpu;

    /**
     * @var float
     */
    public $memory;
    protected $_name = [
        'activeCpu' => 'ActiveCpu',
        'cpu' => 'Cpu',
        'cu' => 'Cu',
        'ephemeralStorage' => 'EphemeralStorage',
        'gpuA10' => 'GpuA10',
        'gpuPpu810e' => 'GpuPpu810e',
        'idleCpu' => 'IdleCpu',
        'memory' => 'Memory',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeCpu) {
            $res['ActiveCpu'] = $this->activeCpu;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->cu) {
            $res['Cu'] = $this->cu;
        }

        if (null !== $this->ephemeralStorage) {
            $res['EphemeralStorage'] = $this->ephemeralStorage;
        }

        if (null !== $this->gpuA10) {
            $res['GpuA10'] = $this->gpuA10;
        }

        if (null !== $this->gpuPpu810e) {
            $res['GpuPpu810e'] = $this->gpuPpu810e;
        }

        if (null !== $this->idleCpu) {
            $res['IdleCpu'] = $this->idleCpu;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
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
        if (isset($map['ActiveCpu'])) {
            $model->activeCpu = $map['ActiveCpu'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['Cu'])) {
            $model->cu = $map['Cu'];
        }

        if (isset($map['EphemeralStorage'])) {
            $model->ephemeralStorage = $map['EphemeralStorage'];
        }

        if (isset($map['GpuA10'])) {
            $model->gpuA10 = $map['GpuA10'];
        }

        if (isset($map['GpuPpu810e'])) {
            $model->gpuPpu810e = $map['GpuPpu810e'];
        }

        if (isset($map['IdleCpu'])) {
            $model->idleCpu = $map['IdleCpu'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        return $model;
    }
}
