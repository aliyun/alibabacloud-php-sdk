<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class LifecycleHook extends Model
{
    /**
     * @var string[]
     */
    public $command;

    /**
     * @var string
     */
    public $handler;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'command' => 'command',
        'handler' => 'handler',
        'timeout' => 'timeout',
    ];

    public function validate()
    {
        if (\is_array($this->command)) {
            Model::validateArray($this->command);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->command) {
            if (\is_array($this->command)) {
                $res['command'] = [];
                $n1 = 0;
                foreach ($this->command as $item1) {
                    $res['command'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->handler) {
            $res['handler'] = $this->handler;
        }

        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
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
        if (isset($map['command'])) {
            if (!empty($map['command'])) {
                $model->command = [];
                $n1 = 0;
                foreach ($map['command'] as $item1) {
                    $model->command[$n1++] = $item1;
                }
            }
        }

        if (isset($map['handler'])) {
            $model->handler = $map['handler'];
        }

        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        return $model;
    }
}
