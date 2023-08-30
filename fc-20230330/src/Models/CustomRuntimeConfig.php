<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

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

    /**
     * @var CustomHealthCheckConfig
     */
    public $healthCheckConfig;

    /**
     * @example 9000
     *
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
        if (null !== $this->healthCheckConfig) {
            $res['healthCheckConfig'] = null !== $this->healthCheckConfig ? $this->healthCheckConfig->toMap() : null;
        }
        if (null !== $this->port) {
            $res['port'] = $this->port;
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
        if (isset($map['healthCheckConfig'])) {
            $model->healthCheckConfig = CustomHealthCheckConfig::fromMap($map['healthCheckConfig']);
        }
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        return $model;
    }
}
