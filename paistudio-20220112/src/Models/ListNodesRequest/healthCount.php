<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListNodesRequest;

use AlibabaCloud\Dara\Model;

class healthCount extends Model
{
    /**
     * @var string
     */
    public $operation;

    /**
     * @var int
     */
    public $value;
    protected $_name = [
        'operation' => 'operation',
        'value' => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operation) {
            $res['operation'] = $this->operation;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['operation'])) {
            $model->operation = $map['operation'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
