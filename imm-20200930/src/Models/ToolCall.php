<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ToolCall extends Model
{
    /**
     * @var FunctionCall
     */
    public $function;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'function' => 'Function',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->function) {
            $this->function->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->function) {
            $res['Function'] = null !== $this->function ? $this->function->toArray($noStream) : $this->function;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Function'])) {
            $model->function = FunctionCall::fromMap($map['Function']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
