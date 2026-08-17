<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineTypesResponseBody\machineTypes;

use AlibabaCloud\Dara\Model;

class cpuInfoDetail extends Model
{
    /**
     * @var string
     */
    public $cpuArch;

    /**
     * @var int
     */
    public $cpuSockets;

    /**
     * @var int
     */
    public $VCpuCores;
    protected $_name = [
        'cpuArch' => 'CpuArch',
        'cpuSockets' => 'CpuSockets',
        'VCpuCores' => 'VCpuCores',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuArch) {
            $res['CpuArch'] = $this->cpuArch;
        }

        if (null !== $this->cpuSockets) {
            $res['CpuSockets'] = $this->cpuSockets;
        }

        if (null !== $this->VCpuCores) {
            $res['VCpuCores'] = $this->VCpuCores;
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
        if (isset($map['CpuArch'])) {
            $model->cpuArch = $map['CpuArch'];
        }

        if (isset($map['CpuSockets'])) {
            $model->cpuSockets = $map['CpuSockets'];
        }

        if (isset($map['VCpuCores'])) {
            $model->VCpuCores = $map['VCpuCores'];
        }

        return $model;
    }
}
