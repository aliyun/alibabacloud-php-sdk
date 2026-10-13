<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpResponseBody\data\deploymentConfig;

use AlibabaCloud\Dara\Model;

class containerConfiguration extends Model
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
     * @var string[]
     */
    public $entrypoint;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $imageRegistryType;

    /**
     * @var string
     */
    public $mcpRuntimeMode;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'acrInstanceId' => 'acrInstanceId',
        'command' => 'command',
        'entrypoint' => 'entrypoint',
        'image' => 'image',
        'imageRegistryType' => 'imageRegistryType',
        'mcpRuntimeMode' => 'mcpRuntimeMode',
        'sourceType' => 'sourceType',
    ];

    public function validate()
    {
        if (\is_array($this->command)) {
            Model::validateArray($this->command);
        }
        if (\is_array($this->entrypoint)) {
            Model::validateArray($this->entrypoint);
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

        if (null !== $this->entrypoint) {
            if (\is_array($this->entrypoint)) {
                $res['entrypoint'] = [];
                $n1 = 0;
                foreach ($this->entrypoint as $item1) {
                    $res['entrypoint'][$n1] = $item1;
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

        if (null !== $this->mcpRuntimeMode) {
            $res['mcpRuntimeMode'] = $this->mcpRuntimeMode;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
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

        if (isset($map['entrypoint'])) {
            if (!empty($map['entrypoint'])) {
                $model->entrypoint = [];
                $n1 = 0;
                foreach ($map['entrypoint'] as $item1) {
                    $model->entrypoint[$n1] = $item1;
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

        if (isset($map['mcpRuntimeMode'])) {
            $model->mcpRuntimeMode = $map['mcpRuntimeMode'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        return $model;
    }
}
