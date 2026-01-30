<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\AiServiceConfig\bedrockServiceConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\AiServiceConfig\paiEASServiceConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\AiServiceConfig\vertexServiceConfig;

class AiServiceConfig extends Model
{
    /**
     * @var string
     */
    public $apiKeyGenerateMode;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string[]
     */
    public $apiKeys;

    /**
     * @var bedrockServiceConfig
     */
    public $bedrockServiceConfig;

    /**
     * @var string[]
     */
    public $compatibleProtocols;

    /**
     * @var string
     */
    public $defaultModelName;

    /**
     * @var bool
     */
    public $enableHealthCheck;

    /**
     * @var bool
     */
    public $enableOutlierDetection;

    /**
     * @var paiEASServiceConfig
     */
    public $paiEASServiceConfig;

    /**
     * @var string[]
     */
    public $protocols;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var vertexServiceConfig
     */
    public $vertexServiceConfig;
    protected $_name = [
        'apiKeyGenerateMode' => 'ApiKeyGenerateMode',
        'address' => 'address',
        'apiKeys' => 'apiKeys',
        'bedrockServiceConfig' => 'bedrockServiceConfig',
        'compatibleProtocols' => 'compatibleProtocols',
        'defaultModelName' => 'defaultModelName',
        'enableHealthCheck' => 'enableHealthCheck',
        'enableOutlierDetection' => 'enableOutlierDetection',
        'paiEASServiceConfig' => 'paiEASServiceConfig',
        'protocols' => 'protocols',
        'provider' => 'provider',
        'vertexServiceConfig' => 'vertexServiceConfig',
    ];

    public function validate()
    {
        if (\is_array($this->apiKeys)) {
            Model::validateArray($this->apiKeys);
        }
        if (null !== $this->bedrockServiceConfig) {
            $this->bedrockServiceConfig->validate();
        }
        if (\is_array($this->compatibleProtocols)) {
            Model::validateArray($this->compatibleProtocols);
        }
        if (null !== $this->paiEASServiceConfig) {
            $this->paiEASServiceConfig->validate();
        }
        if (\is_array($this->protocols)) {
            Model::validateArray($this->protocols);
        }
        if (null !== $this->vertexServiceConfig) {
            $this->vertexServiceConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeyGenerateMode) {
            $res['ApiKeyGenerateMode'] = $this->apiKeyGenerateMode;
        }

        if (null !== $this->address) {
            $res['address'] = $this->address;
        }

        if (null !== $this->apiKeys) {
            if (\is_array($this->apiKeys)) {
                $res['apiKeys'] = [];
                $n1 = 0;
                foreach ($this->apiKeys as $item1) {
                    $res['apiKeys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bedrockServiceConfig) {
            $res['bedrockServiceConfig'] = null !== $this->bedrockServiceConfig ? $this->bedrockServiceConfig->toArray($noStream) : $this->bedrockServiceConfig;
        }

        if (null !== $this->compatibleProtocols) {
            if (\is_array($this->compatibleProtocols)) {
                $res['compatibleProtocols'] = [];
                $n1 = 0;
                foreach ($this->compatibleProtocols as $item1) {
                    $res['compatibleProtocols'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->defaultModelName) {
            $res['defaultModelName'] = $this->defaultModelName;
        }

        if (null !== $this->enableHealthCheck) {
            $res['enableHealthCheck'] = $this->enableHealthCheck;
        }

        if (null !== $this->enableOutlierDetection) {
            $res['enableOutlierDetection'] = $this->enableOutlierDetection;
        }

        if (null !== $this->paiEASServiceConfig) {
            $res['paiEASServiceConfig'] = null !== $this->paiEASServiceConfig ? $this->paiEASServiceConfig->toArray($noStream) : $this->paiEASServiceConfig;
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

        if (null !== $this->vertexServiceConfig) {
            $res['vertexServiceConfig'] = null !== $this->vertexServiceConfig ? $this->vertexServiceConfig->toArray($noStream) : $this->vertexServiceConfig;
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
        if (isset($map['ApiKeyGenerateMode'])) {
            $model->apiKeyGenerateMode = $map['ApiKeyGenerateMode'];
        }

        if (isset($map['address'])) {
            $model->address = $map['address'];
        }

        if (isset($map['apiKeys'])) {
            if (!empty($map['apiKeys'])) {
                $model->apiKeys = [];
                $n1 = 0;
                foreach ($map['apiKeys'] as $item1) {
                    $model->apiKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['bedrockServiceConfig'])) {
            $model->bedrockServiceConfig = bedrockServiceConfig::fromMap($map['bedrockServiceConfig']);
        }

        if (isset($map['compatibleProtocols'])) {
            if (!empty($map['compatibleProtocols'])) {
                $model->compatibleProtocols = [];
                $n1 = 0;
                foreach ($map['compatibleProtocols'] as $item1) {
                    $model->compatibleProtocols[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['defaultModelName'])) {
            $model->defaultModelName = $map['defaultModelName'];
        }

        if (isset($map['enableHealthCheck'])) {
            $model->enableHealthCheck = $map['enableHealthCheck'];
        }

        if (isset($map['enableOutlierDetection'])) {
            $model->enableOutlierDetection = $map['enableOutlierDetection'];
        }

        if (isset($map['paiEASServiceConfig'])) {
            $model->paiEASServiceConfig = paiEASServiceConfig::fromMap($map['paiEASServiceConfig']);
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

        if (isset($map['vertexServiceConfig'])) {
            $model->vertexServiceConfig = vertexServiceConfig::fromMap($map['vertexServiceConfig']);
        }

        return $model;
    }
}
