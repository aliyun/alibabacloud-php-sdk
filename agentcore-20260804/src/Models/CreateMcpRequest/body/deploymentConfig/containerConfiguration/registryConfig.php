<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpRequest\body\deploymentConfig\containerConfiguration;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpRequest\body\deploymentConfig\containerConfiguration\registryConfig\authConfig;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpRequest\body\deploymentConfig\containerConfiguration\registryConfig\certConfig;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpRequest\body\deploymentConfig\containerConfiguration\registryConfig\networkConfig;

class registryConfig extends Model
{
    /**
     * @var authConfig
     */
    public $authConfig;

    /**
     * @var certConfig
     */
    public $certConfig;

    /**
     * @var networkConfig
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
            $model->authConfig = authConfig::fromMap($map['authConfig']);
        }

        if (isset($map['certConfig'])) {
            $model->certConfig = certConfig::fromMap($map['certConfig']);
        }

        if (isset($map['networkConfig'])) {
            $model->networkConfig = networkConfig::fromMap($map['networkConfig']);
        }

        return $model;
    }
}
