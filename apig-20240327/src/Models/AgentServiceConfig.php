<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\AgentServiceConfig\customConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\AgentServiceConfig\dashScopeConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\AgentServiceConfig\difyConfig;

class AgentServiceConfig extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var customConfig
     */
    public $customConfig;

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
     * @var bool
     */
    public $enableOutlierDetection;

    /**
     * @var string[]
     */
    public $protocols;

    /**
     * @var string
     */
    public $provider;
    protected $_name = [
        'address' => 'address',
        'customConfig' => 'customConfig',
        'dashScopeConfig' => 'dashScopeConfig',
        'difyConfig' => 'difyConfig',
        'enableHealthCheck' => 'enableHealthCheck',
        'enableOutlierDetection' => 'enableOutlierDetection',
        'protocols' => 'protocols',
        'provider' => 'provider',
    ];

    public function validate()
    {
        if (null !== $this->customConfig) {
            $this->customConfig->validate();
        }
        if (null !== $this->dashScopeConfig) {
            $this->dashScopeConfig->validate();
        }
        if (null !== $this->difyConfig) {
            $this->difyConfig->validate();
        }
        if (\is_array($this->protocols)) {
            Model::validateArray($this->protocols);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }

        if (null !== $this->customConfig) {
            $res['customConfig'] = null !== $this->customConfig ? $this->customConfig->toArray($noStream) : $this->customConfig;
        }

        if (null !== $this->dashScopeConfig) {
            $res['dashScopeConfig'] = null !== $this->dashScopeConfig ? $this->dashScopeConfig->toArray($noStream) : $this->dashScopeConfig;
        }

        if (null !== $this->difyConfig) {
            $res['difyConfig'] = null !== $this->difyConfig ? $this->difyConfig->toArray($noStream) : $this->difyConfig;
        }

        if (null !== $this->enableHealthCheck) {
            $res['enableHealthCheck'] = $this->enableHealthCheck;
        }

        if (null !== $this->enableOutlierDetection) {
            $res['enableOutlierDetection'] = $this->enableOutlierDetection;
        }

        if (null !== $this->protocols) {
            if (\is_array($this->protocols)) {
                $res['protocols'] = [];
                $n1 = 0;
                foreach ($this->protocols as $item1) {
                    $res['protocols'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
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
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }

        if (isset($map['customConfig'])) {
            $model->customConfig = customConfig::fromMap($map['customConfig']);
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

        if (isset($map['enableOutlierDetection'])) {
            $model->enableOutlierDetection = $map['enableOutlierDetection'];
        }

        if (isset($map['protocols'])) {
            if (!empty($map['protocols'])) {
                $model->protocols = [];
                $n1 = 0;
                foreach ($map['protocols'] as $item1) {
                    $model->protocols[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        return $model;
    }
}
