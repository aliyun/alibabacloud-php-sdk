<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authConfig) {
            $res['AuthConfig'] = null !== $this->authConfig ? $this->authConfig->toMap() : null;
        }
        if (null !== $this->certConfig) {
            $res['CertConfig'] = null !== $this->certConfig ? $this->certConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImageRegistryConfig
     */
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
