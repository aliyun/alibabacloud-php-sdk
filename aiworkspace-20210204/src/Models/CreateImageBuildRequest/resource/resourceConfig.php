<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateImageBuildRequest\resource;

use AlibabaCloud\Dara\Model;

class resourceConfig extends Model
{
    /**
     * @var string
     */
    public $CPU;

    /**
     * @var string
     */
    public $memory;
    protected $_name = [
        'CPU' => 'CPU',
        'memory' => 'Memory',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
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
        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        return $model;
    }
}
