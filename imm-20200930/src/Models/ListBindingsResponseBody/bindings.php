<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\ListBindingsResponseBody;

use AlibabaCloud\SDK\Imm\V20200930\Models\ListBindingsResponseBody\bindings\binding;
use AlibabaCloud\Tea\Model;

class bindings extends Model
{
    /**
     * @var binding
     */
    public $binding;
    protected $_name = [
        'binding' => 'Binding',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->binding) {
            $res['Binding'] = null !== $this->binding ? $this->binding->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bindings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Binding'])) {
            $model->binding = binding::fromMap($map['Binding']);
        }

        return $model;
    }
}
