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
    public $idleCpu;

    /**
     * @var float
     */
    public $memory;
    protected $_name = [
        'activeCpu' => 'ActiveCpu',
        'cpu' => 'Cpu',
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

        if (isset($map['IdleCpu'])) {
            $model->idleCpu = $map['IdleCpu'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        return $model;
    }
}
