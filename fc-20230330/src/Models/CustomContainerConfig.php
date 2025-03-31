<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class CustomContainerConfig extends Model
{
    /**
     * @var AccelerationInfo
     */
    public $accelerationInfo;

    /**
     * @var string
     */
    public $accelerationType;

    /**
     * @var string
     */
    public $acrInstanceId;

    /**
     * @var string[]
     */
    public $command;

    /**
     * @var string[]
     */
    public $entrypoint;

    /**
     * @var CustomHealthCheckConfig
     */
    public $healthCheckConfig;

    /**
     * @var string
     */
    public $image;

    /**
     * @var int
     */
    public $port;

    /**
     * @var RegistryConfig
     */
    public $registryConfig;

    /**
     * @var string
     */
    public $resolvedImageUri;
    protected $_name = [
        'accelerationInfo' => 'accelerationInfo',
        'accelerationType' => 'accelerationType',
        'acrInstanceId' => 'acrInstanceId',
        'command' => 'command',
        'entrypoint' => 'entrypoint',
        'healthCheckConfig' => 'healthCheckConfig',
        'image' => 'image',
        'port' => 'port',
        'registryConfig' => 'registryConfig',
        'resolvedImageUri' => 'resolvedImageUri',
    ];

    public function validate()
    {
        if (null !== $this->accelerationInfo) {
            $this->accelerationInfo->validate();
        }
        if (\is_array($this->command)) {
            Model::validateArray($this->command);
        }
        if (\is_array($this->entrypoint)) {
            Model::validateArray($this->entrypoint);
        }
        if (null !== $this->healthCheckConfig) {
            $this->healthCheckConfig->validate();
        }
        if (null !== $this->registryConfig) {
            $this->registryConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accelerationInfo) {
            $res['accelerationInfo'] = null !== $this->accelerationInfo ? $this->accelerationInfo->toArray($noStream) : $this->accelerationInfo;
        }

        if (null !== $this->accelerationType) {
            $res['accelerationType'] = $this->accelerationType;
        }

        if (null !== $this->acrInstanceId) {
            $res['acrInstanceId'] = $this->acrInstanceId;
        }

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

        if (null !== $this->port) {
            $res['port'] = $this->port;
        }

        if (null !== $this->registryConfig) {
            $res['registryConfig'] = null !== $this->registryConfig ? $this->registryConfig->toArray($noStream) : $this->registryConfig;
        }

        if (null !== $this->resolvedImageUri) {
            $res['resolvedImageUri'] = $this->resolvedImageUri;
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
        if (isset($map['accelerationInfo'])) {
            $model->accelerationInfo = AccelerationInfo::fromMap($map['accelerationInfo']);
        }

        if (isset($map['accelerationType'])) {
            $model->accelerationType = $map['accelerationType'];
        }

        if (isset($map['acrInstanceId'])) {
            $model->acrInstanceId = $map['acrInstanceId'];
        }

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
            $model->healthCheckConfig = CustomHealthCheckConfig::fromMap($map['healthCheckConfig']);
        }

        if (isset($map['image'])) {
            $model->image = $map['image'];
        }

        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        if (isset($map['registryConfig'])) {
            $model->registryConfig = RegistryConfig::fromMap($map['registryConfig']);
        }

        if (isset($map['resolvedImageUri'])) {
            $model->resolvedImageUri = $map['resolvedImageUri'];
        }

        return $model;
    }
}
