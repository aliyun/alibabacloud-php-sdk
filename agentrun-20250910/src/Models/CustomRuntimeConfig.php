<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

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

    /**
     * @var int
     */
    public $port;
    protected $_name = [
        'args' => 'args',
        'command' => 'command',
        'port' => 'port',
    ];

    public function validate()
    {
        if (\is_array($this->args)) {
            Model::validateArray($this->args);
        }
        if (\is_array($this->command)) {
            Model::validateArray($this->command);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->args) {
            if (\is_array($this->args)) {
                $res['args'] = [];
                $n1 = 0;
                foreach ($this->args as $item1) {
                    $res['args'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->command) {
            if (\is_array($this->command)) {
                $res['command'] = [];
                $n1 = 0;
                foreach ($this->command as $item1) {
                    $res['command'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->port) {
            $res['port'] = $this->port;
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
            if (!empty($map['args'])) {
                $model->args = [];
                $n1 = 0;
                foreach ($map['args'] as $item1) {
                    $model->args[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['command'])) {
            if (!empty($map['command'])) {
                $model->command = [];
                $n1 = 0;
                foreach ($map['command'] as $item1) {
                    $model->command[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        return $model;
    }
}
