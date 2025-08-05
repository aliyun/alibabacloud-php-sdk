<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $gatewayType;

    /**
     * @var JwtIdentityConfig
     */
    public $jwtIdentityConfig;

    /**
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

    public function validate()
    {
        if (\is_array($this->akSkIdentityConfigs)) {
            Model::validateArray($this->akSkIdentityConfigs);
        }
        if (null !== $this->apikeyIdentityConfig) {
            $this->apikeyIdentityConfig->validate();
        }
        if (null !== $this->jwtIdentityConfig) {
            $this->jwtIdentityConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->akSkIdentityConfigs) {
            if (\is_array($this->akSkIdentityConfigs)) {
                $res['akSkIdentityConfigs'] = [];
                $n1 = 0;
                foreach ($this->akSkIdentityConfigs as $item1) {
                    $res['akSkIdentityConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->apikeyIdentityConfig) {
            $res['apikeyIdentityConfig'] = null !== $this->apikeyIdentityConfig ? $this->apikeyIdentityConfig->toArray($noStream) : $this->apikeyIdentityConfig;
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
            $res['jwtIdentityConfig'] = null !== $this->jwtIdentityConfig ? $this->jwtIdentityConfig->toArray($noStream) : $this->jwtIdentityConfig;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['akSkIdentityConfigs'])) {
            if (!empty($map['akSkIdentityConfigs'])) {
                $model->akSkIdentityConfigs = [];
                $n1 = 0;
                foreach ($map['akSkIdentityConfigs'] as $item1) {
                    $model->akSkIdentityConfigs[$n1] = AkSkIdentityConfig::fromMap($item1);
                    ++$n1;
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
