<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class CustomRuntimeConfig extends Model
{
    /**
     * @var string[]
     */
    public $args;

    /**
     * @var string[]
     */
    public $command;
    protected $_name = [
        'args'    => 'args',
        'command' => 'command',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->args) {
            $res['args'] = $this->args;
        }
        if (null !== $this->command) {
            $res['command'] = $this->command;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CustomRuntimeConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['args'])) {
            if (!empty($map['args'])) {
                $model->args = $map['args'];
            }
        }
        if (isset($map['command'])) {
            if (!empty($map['command'])) {
                $model->command = $map['command'];
            }
        }

        return $model;
    }
}
