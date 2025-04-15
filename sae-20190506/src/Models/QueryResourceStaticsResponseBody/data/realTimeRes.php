<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\QueryResourceStaticsResponseBody\data;

use AlibabaCloud\Dara\Model;

class realTimeRes extends Model
{
    /**
     * @var float
     */
    public $cpu;

    /**
     * @var float
     */
    public $memory;
    protected $_name = [
        'cpu' => 'Cpu',
        'memory' => 'Memory',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
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
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        return $model;
    }
}
