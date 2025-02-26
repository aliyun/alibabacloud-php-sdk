<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

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
     * @var CustomHealthCheckConfig
     */
    public $healthCheckConfig;
    /**
     * @var int
     */
    public $port;
    protected $_name = [
        'args'              => 'args',
        'command'           => 'command',
        'healthCheckConfig' => 'healthCheckConfig',
        'port'              => 'port',
    ];

    public function validate()
    {
        if (\is_array($this->args)) {
            Model::validateArray($this->args);
        }
        if (\is_array($this->command)) {
            Model::validateArray($this->command);
        }
        if (null !== $this->healthCheckConfig) {
            $this->healthCheckConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->args) {
            if (\is_array($this->args)) {
                $res['args'] = [];
                $n1          = 0;
                foreach ($this->args as $item1) {
                    $res['args'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->command) {
            if (\is_array($this->command)) {
                $res['command'] = [];
                $n1             = 0;
                foreach ($this->command as $item1) {
                    $res['command'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->healthCheckConfig) {
            $res['healthCheckConfig'] = null !== $this->healthCheckConfig ? $this->healthCheckConfig->toArray($noStream) : $this->healthCheckConfig;
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
                $n1          = 0;
                foreach ($map['args'] as $item1) {
                    $model->args[$n1++] = $item1;
                }
            }
        }

        if (isset($map['command'])) {
            if (!empty($map['command'])) {
                $model->command = [];
                $n1             = 0;
                foreach ($map['command'] as $item1) {
                    $model->command[$n1++] = $item1;
                }
            }
        }

        if (isset($map['healthCheckConfig'])) {
            $model->healthCheckConfig = CustomHealthCheckConfig::fromMap($map['healthCheckConfig']);
        }

        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        return $model;
    }
}
