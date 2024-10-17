<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class RegistryConfig extends Model
{
    /**
     * @var RegistryAuthConfig
     */
    public $authConfig;

    /**
     * @var RegistryCertConfig
     */
    public $certConfig;
    protected $_name = [
        'authConfig' => 'authConfig',
        'certConfig' => 'certConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authConfig) {
            $res['authConfig'] = null !== $this->authConfig ? $this->authConfig->toMap() : null;
        }
        if (null !== $this->certConfig) {
            $res['certConfig'] = null !== $this->certConfig ? $this->certConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegistryConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['authConfig'])) {
            $model->authConfig = RegistryAuthConfig::fromMap($map['authConfig']);
        }
        if (isset($map['certConfig'])) {
            $model->certConfig = RegistryCertConfig::fromMap($map['certConfig']);
        }

        return $model;
    }
}
