<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class CreateTemplateCopyAction extends Model
{
    /**
     * @var string
     */
    public $acrInstanceId;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $image;

    /**
     * @var CreateTemplateRegistryConfig
     */
    public $registryConfig;

    /**
     * @var string
     */
    public $registryType;
    protected $_name = [
        'acrInstanceId' => 'acrInstanceId',
        'enabled' => 'enabled',
        'image' => 'image',
        'registryConfig' => 'registryConfig',
        'registryType' => 'registryType',
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

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->image) {
            $res['image'] = $this->image;
        }

        if (null !== $this->registryConfig) {
            $res['registryConfig'] = null !== $this->registryConfig ? $this->registryConfig->toArray($noStream) : $this->registryConfig;
        }

        if (null !== $this->registryType) {
            $res['registryType'] = $this->registryType;
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

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['image'])) {
            $model->image = $map['image'];
        }

        if (isset($map['registryConfig'])) {
            $model->registryConfig = CreateTemplateRegistryConfig::fromMap($map['registryConfig']);
        }

        if (isset($map['registryType'])) {
            $model->registryType = $map['registryType'];
        }

        return $model;
    }
}
