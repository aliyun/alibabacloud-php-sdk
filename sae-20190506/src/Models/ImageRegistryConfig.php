<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class ImageRegistryConfig extends Model
{
    /**
     * @var RegistryAuthenticationConfig
     */
    public $authConfig;

    /**
     * @var RegistryCertificateConfig
     */
    public $certConfig;
    protected $_name = [
        'authConfig' => 'AuthConfig',
        'certConfig' => 'CertConfig',
    ];

    public function validate()
    {
        if (null !== $this->authConfig) {
            $this->authConfig->validate();
        }
        if (null !== $this->certConfig) {
            $this->certConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authConfig) {
            $res['AuthConfig'] = null !== $this->authConfig ? $this->authConfig->toArray($noStream) : $this->authConfig;
        }

        if (null !== $this->certConfig) {
            $res['CertConfig'] = null !== $this->certConfig ? $this->certConfig->toArray($noStream) : $this->certConfig;
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
        if (isset($map['AuthConfig'])) {
            $model->authConfig = RegistryAuthenticationConfig::fromMap($map['AuthConfig']);
        }

        if (isset($map['CertConfig'])) {
            $model->certConfig = RegistryCertificateConfig::fromMap($map['CertConfig']);
        }

        return $model;
    }
}
