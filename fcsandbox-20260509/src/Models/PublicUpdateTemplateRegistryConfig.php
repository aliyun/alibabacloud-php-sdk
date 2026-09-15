<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class PublicUpdateTemplateRegistryConfig extends Model
{
    /**
     * @var PublicUpdateTemplateRegistryAuthConfig
     */
    public $authConfig;

    /**
     * @var PublicUpdateTemplateRegistryCertConfig
     */
    public $certConfig;

    /**
     * @var PublicUpdateTemplateRegistryNetworkConfig
     */
    public $networkConfig;
    protected $_name = [
        'authConfig' => 'authConfig',
        'certConfig' => 'certConfig',
        'networkConfig' => 'networkConfig',
    ];

    public function validate()
    {
        if (null !== $this->authConfig) {
            $this->authConfig->validate();
        }
        if (null !== $this->certConfig) {
            $this->certConfig->validate();
        }
        if (null !== $this->networkConfig) {
            $this->networkConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authConfig) {
            $res['authConfig'] = null !== $this->authConfig ? $this->authConfig->toArray($noStream) : $this->authConfig;
        }

        if (null !== $this->certConfig) {
            $res['certConfig'] = null !== $this->certConfig ? $this->certConfig->toArray($noStream) : $this->certConfig;
        }

        if (null !== $this->networkConfig) {
            $res['networkConfig'] = null !== $this->networkConfig ? $this->networkConfig->toArray($noStream) : $this->networkConfig;
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
        if (isset($map['authConfig'])) {
            $model->authConfig = PublicUpdateTemplateRegistryAuthConfig::fromMap($map['authConfig']);
        }

        if (isset($map['certConfig'])) {
            $model->certConfig = PublicUpdateTemplateRegistryCertConfig::fromMap($map['certConfig']);
        }

        if (isset($map['networkConfig'])) {
            $model->networkConfig = PublicUpdateTemplateRegistryNetworkConfig::fromMap($map['networkConfig']);
        }

        return $model;
    }
}
