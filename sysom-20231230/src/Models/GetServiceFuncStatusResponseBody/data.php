<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetServiceFuncStatusResponseBody;

use AlibabaCloud\SDK\SysOM\V20231230\Models\GetServiceFuncStatusResponseBody\data\args;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var args
     */
    public $args;
    protected $_name = [
        'args' => 'args',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->args) {
            $res['args'] = null !== $this->args ? $this->args->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['args'])) {
            $model->args = args::fromMap($map['args']);
        }

        return $model;
    }
}
