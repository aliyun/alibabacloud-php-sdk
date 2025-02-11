<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetServiceFuncStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetServiceFuncStatusResponseBody\data\args;

class data extends Model
{
    /**
     * @var args
     */
    public $args;
    protected $_name = [
        'args' => 'args',
    ];

    public function validate()
    {
        if (null !== $this->args) {
            $this->args->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->args) {
            $res['args'] = null !== $this->args ? $this->args->toArray($noStream) : $this->args;
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
        if (isset($map['args'])) {
            $model->args = args::fromMap($map['args']);
        }

        return $model;
    }
}
