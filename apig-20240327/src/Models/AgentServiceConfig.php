<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\AgentServiceConfig\dashScopeConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\AgentServiceConfig\difyConfig;
use AlibabaCloud\Tea\Model;

class AgentServiceConfig extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example https://dashscope.aliyuncs.com/api/v1
     *
     * @var string
     */
    public $address;

    /**
     * @var dashScopeConfig
     */
    public $dashScopeConfig;

    /**
     * @var difyConfig
     */
    public $difyConfig;

    /**
     * @var bool
     */
    public $enableHealthCheck;

    /**
     * @var string[]
     */
    public $protocols;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $provider;
    protected $_name = [
        'address' => 'address',
        'dashScopeConfig' => 'dashScopeConfig',
        'difyConfig' => 'difyConfig',
        'enableHealthCheck' => 'enableHealthCheck',
        'protocols' => 'protocols',
        'provider' => 'provider',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }
        if (null !== $this->dashScopeConfig) {
            $res['dashScopeConfig'] = null !== $this->dashScopeConfig ? $this->dashScopeConfig->toMap() : null;
        }
        if (null !== $this->difyConfig) {
            $res['difyConfig'] = null !== $this->difyConfig ? $this->difyConfig->toMap() : null;
        }
        if (null !== $this->enableHealthCheck) {
            $res['enableHealthCheck'] = $this->enableHealthCheck;
        }
        if (null !== $this->protocols) {
            $res['protocols'] = $this->protocols;
        }
        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AgentServiceConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }
        if (isset($map['dashScopeConfig'])) {
            $model->dashScopeConfig = dashScopeConfig::fromMap($map['dashScopeConfig']);
        }
        if (isset($map['difyConfig'])) {
            $model->difyConfig = difyConfig::fromMap($map['difyConfig']);
        }
        if (isset($map['enableHealthCheck'])) {
            $model->enableHealthCheck = $map['enableHealthCheck'];
        }
        if (isset($map['protocols'])) {
            if (!empty($map['protocols'])) {
                $model->protocols = $map['protocols'];
            }
        }
        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        return $model;
    }
}
