<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class CreateTemplateSandboxConfig extends Model
{
    /**
     * @var string
     */
    public $acrInstanceId;

    /**
     * @var int
     */
    public $generation;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $readyCommand;

    /**
     * @var CreateTemplateRegistryConfig
     */
    public $registryConfig;

    /**
     * @var string
     */
    public $registryType;

    /**
     * @var string
     */
    public $startCommand;

    /**
     * @var CreateTemplateStep[]
     */
    public $steps;
    protected $_name = [
        'acrInstanceId' => 'acrInstanceId',
        'generation' => 'generation',
        'image' => 'image',
        'osType' => 'osType',
        'readyCommand' => 'readyCommand',
        'registryConfig' => 'registryConfig',
        'registryType' => 'registryType',
        'startCommand' => 'startCommand',
        'steps' => 'steps',
    ];

    public function validate()
    {
        if (null !== $this->registryConfig) {
            $this->registryConfig->validate();
        }
        if (\is_array($this->steps)) {
            Model::validateArray($this->steps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acrInstanceId) {
            $res['acrInstanceId'] = $this->acrInstanceId;
        }

        if (null !== $this->generation) {
            $res['generation'] = $this->generation;
        }

        if (null !== $this->image) {
            $res['image'] = $this->image;
        }

        if (null !== $this->osType) {
            $res['osType'] = $this->osType;
        }

        if (null !== $this->readyCommand) {
            $res['readyCommand'] = $this->readyCommand;
        }

        if (null !== $this->registryConfig) {
            $res['registryConfig'] = null !== $this->registryConfig ? $this->registryConfig->toArray($noStream) : $this->registryConfig;
        }

        if (null !== $this->registryType) {
            $res['registryType'] = $this->registryType;
        }

        if (null !== $this->startCommand) {
            $res['startCommand'] = $this->startCommand;
        }

        if (null !== $this->steps) {
            if (\is_array($this->steps)) {
                $res['steps'] = [];
                $n1 = 0;
                foreach ($this->steps as $item1) {
                    $res['steps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['generation'])) {
            $model->generation = $map['generation'];
        }

        if (isset($map['image'])) {
            $model->image = $map['image'];
        }

        if (isset($map['osType'])) {
            $model->osType = $map['osType'];
        }

        if (isset($map['readyCommand'])) {
            $model->readyCommand = $map['readyCommand'];
        }

        if (isset($map['registryConfig'])) {
            $model->registryConfig = CreateTemplateRegistryConfig::fromMap($map['registryConfig']);
        }

        if (isset($map['registryType'])) {
            $model->registryType = $map['registryType'];
        }

        if (isset($map['startCommand'])) {
            $model->startCommand = $map['startCommand'];
        }

        if (isset($map['steps'])) {
            if (!empty($map['steps'])) {
                $model->steps = [];
                $n1 = 0;
                foreach ($map['steps'] as $item1) {
                    $model->steps[$n1] = CreateTemplateStep::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
