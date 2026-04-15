<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class ContainerConfiguration extends Model
{
    /**
     * @var string
     */
    public $acrInstanceId;

    /**
     * @var string[]
     */
    public $command;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $imageRegistryType;

    /**
     * @var int
     */
    public $port;

    /**
     * @var RegistryConfig
     */
    public $registryConfig;
    protected $_name = [
        'acrInstanceId' => 'acrInstanceId',
        'command' => 'command',
        'image' => 'image',
        'imageRegistryType' => 'imageRegistryType',
        'port' => 'port',
        'registryConfig' => 'registryConfig',
    ];

    public function validate()
    {
        if (\is_array($this->command)) {
            Model::validateArray($this->command);
        }
        if (null !== $this->registryConfig) {
            $this->registryConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acrInstanceId) {
            $res['acrInstanceId'] = $this->acrInstanceId;
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

        if (null !== $this->image) {
            $res['image'] = $this->image;
        }

        if (null !== $this->imageRegistryType) {
            $res['imageRegistryType'] = $this->imageRegistryType;
        }

        if (null !== $this->port) {
            $res['port'] = $this->port;
        }

        if (null !== $this->registryConfig) {
            $res['registryConfig'] = null !== $this->registryConfig ? $this->registryConfig->toArray($noStream) : $this->registryConfig;
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
        if (isset($map['acrInstanceId'])) {
            $model->acrInstanceId = $map['acrInstanceId'];
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

        if (isset($map['image'])) {
            $model->image = $map['image'];
        }

        if (isset($map['imageRegistryType'])) {
            $model->imageRegistryType = $map['imageRegistryType'];
        }

        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        if (isset($map['registryConfig'])) {
            $model->registryConfig = RegistryConfig::fromMap($map['registryConfig']);
        }

        return $model;
    }
}
