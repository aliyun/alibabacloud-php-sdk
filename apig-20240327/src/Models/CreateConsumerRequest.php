<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class CreateConsumerRequest extends Model
{
    /**
     * @var AkSkIdentityConfig[]
     */
    public $akSkIdentityConfigs;

    /**
     * @var ApiKeyIdentityConfig
     */
    public $apikeyIdentityConfig;

    /**
     * @example consumer for test
     *
     * @var string
     */
    public $description;

    /**
     * @example false
     *
     * @var bool
     */
    public $enable;

    /**
     * @example API
     *
     * @var string
     */
    public $gatewayType;

    /**
     * @var JwtIdentityConfig
     */
    public $jwtIdentityConfig;

    /**
     * @example test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'akSkIdentityConfigs' => 'akSkIdentityConfigs',
        'apikeyIdentityConfig' => 'apikeyIdentityConfig',
        'description' => 'description',
        'enable' => 'enable',
        'gatewayType' => 'gatewayType',
        'jwtIdentityConfig' => 'jwtIdentityConfig',
        'name' => 'name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->akSkIdentityConfigs) {
            $res['akSkIdentityConfigs'] = [];
            if (null !== $this->akSkIdentityConfigs && \is_array($this->akSkIdentityConfigs)) {
                $n = 0;
                foreach ($this->akSkIdentityConfigs as $item) {
                    $res['akSkIdentityConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->apikeyIdentityConfig) {
            $res['apikeyIdentityConfig'] = null !== $this->apikeyIdentityConfig ? $this->apikeyIdentityConfig->toMap() : null;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->gatewayType) {
            $res['gatewayType'] = $this->gatewayType;
        }
        if (null !== $this->jwtIdentityConfig) {
            $res['jwtIdentityConfig'] = null !== $this->jwtIdentityConfig ? $this->jwtIdentityConfig->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConsumerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['akSkIdentityConfigs'])) {
            if (!empty($map['akSkIdentityConfigs'])) {
                $model->akSkIdentityConfigs = [];
                $n = 0;
                foreach ($map['akSkIdentityConfigs'] as $item) {
                    $model->akSkIdentityConfigs[$n++] = null !== $item ? AkSkIdentityConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['apikeyIdentityConfig'])) {
            $model->apikeyIdentityConfig = ApiKeyIdentityConfig::fromMap($map['apikeyIdentityConfig']);
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['gatewayType'])) {
            $model->gatewayType = $map['gatewayType'];
        }
        if (isset($map['jwtIdentityConfig'])) {
            $model->jwtIdentityConfig = JwtIdentityConfig::fromMap($map['jwtIdentityConfig']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
