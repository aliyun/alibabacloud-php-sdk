<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class PublicTemplateSandboxConfig extends Model
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
     * @var PublicTemplateRegistryConfig
     */
    public $registryConfig;

    /**
     * @var string
     */
    public $startCommand;
    protected $_name = [
        'acrInstanceId' => 'acrInstanceId',
        'generation' => 'generation',
        'image' => 'image',
        'osType' => 'osType',
        'readyCommand' => 'readyCommand',
        'registryConfig' => 'registryConfig',
        'startCommand' => 'startCommand',
    ];

    public function validate()
    {
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

        if (null !== $this->startCommand) {
            $res['startCommand'] = $this->startCommand;
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
            $model->registryConfig = PublicTemplateRegistryConfig::fromMap($map['registryConfig']);
        }

        if (isset($map['startCommand'])) {
            $model->startCommand = $map['startCommand'];
        }

        return $model;
    }
}
