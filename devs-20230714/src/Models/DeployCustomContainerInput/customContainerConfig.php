<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DeployCustomContainerInput;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeployCustomContainerInput\customContainerConfig\healthCheckConfig;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeployCustomContainerInput\customContainerConfig\instanceLifecycleConfig;

class customContainerConfig extends Model
{
    /**
     * @var string[]
     */
    public $command;

    /**
     * @var string[]
     */
    public $entrypoint;

    /**
     * @var healthCheckConfig
     */
    public $healthCheckConfig;

    /**
     * @var string
     */
    public $image;

    /**
     * @var int
     */
    public $instanceConcurrency;

    /**
     * @var instanceLifecycleConfig
     */
    public $instanceLifecycleConfig;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $role;
    protected $_name = [
        'command' => 'command',
        'entrypoint' => 'entrypoint',
        'healthCheckConfig' => 'healthCheckConfig',
        'image' => 'image',
        'instanceConcurrency' => 'instanceConcurrency',
        'instanceLifecycleConfig' => 'instanceLifecycleConfig',
        'port' => 'port',
        'role' => 'role',
    ];

    public function validate()
    {
        if (\is_array($this->command)) {
            Model::validateArray($this->command);
        }
        if (\is_array($this->entrypoint)) {
            Model::validateArray($this->entrypoint);
        }
        if (null !== $this->healthCheckConfig) {
            $this->healthCheckConfig->validate();
        }
        if (null !== $this->instanceLifecycleConfig) {
            $this->instanceLifecycleConfig->validate();
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

        if (null !== $this->entrypoint) {
            if (\is_array($this->entrypoint)) {
                $res['entrypoint'] = [];
                $n1 = 0;
                foreach ($this->entrypoint as $item1) {
                    $res['entrypoint'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->healthCheckConfig) {
            $res['healthCheckConfig'] = null !== $this->healthCheckConfig ? $this->healthCheckConfig->toArray($noStream) : $this->healthCheckConfig;
        }

        if (null !== $this->image) {
            $res['image'] = $this->image;
        }

        if (null !== $this->instanceConcurrency) {
            $res['instanceConcurrency'] = $this->instanceConcurrency;
        }

        if (null !== $this->instanceLifecycleConfig) {
            $res['instanceLifecycleConfig'] = null !== $this->instanceLifecycleConfig ? $this->instanceLifecycleConfig->toArray($noStream) : $this->instanceLifecycleConfig;
        }

        if (null !== $this->port) {
            $res['port'] = $this->port;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
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

        if (isset($map['entrypoint'])) {
            if (!empty($map['entrypoint'])) {
                $model->entrypoint = [];
                $n1 = 0;
                foreach ($map['entrypoint'] as $item1) {
                    $model->entrypoint[$n1++] = $item1;
                }
            }
        }

        if (isset($map['healthCheckConfig'])) {
            $model->healthCheckConfig = healthCheckConfig::fromMap($map['healthCheckConfig']);
        }

        if (isset($map['image'])) {
            $model->image = $map['image'];
        }

        if (isset($map['instanceConcurrency'])) {
            $model->instanceConcurrency = $map['instanceConcurrency'];
        }

        if (isset($map['instanceLifecycleConfig'])) {
            $model->instanceLifecycleConfig = instanceLifecycleConfig::fromMap($map['instanceLifecycleConfig']);
        }

        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        return $model;
    }
}
