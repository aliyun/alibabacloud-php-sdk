<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateServiceEndpointRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateServiceEndpointRequest\body\authentication;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateServiceEndpointRequest\body\elasticityPolicy;

class body extends Model
{
    /**
     * @var string
     */
    public $agentVersion;

    /**
     * @var authentication
     */
    public $authentication;

    /**
     * @var elasticityPolicy
     */
    public $elasticityPolicy;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $publicAccessEnabled;

    /**
     * @var bool
     */
    public $updateElasticity;
    protected $_name = [
        'agentVersion' => 'agentVersion',
        'authentication' => 'authentication',
        'elasticityPolicy' => 'elasticityPolicy',
        'name' => 'name',
        'publicAccessEnabled' => 'publicAccessEnabled',
        'updateElasticity' => 'updateElasticity',
    ];

    public function validate()
    {
        if (null !== $this->authentication) {
            $this->authentication->validate();
        }
        if (null !== $this->elasticityPolicy) {
            $this->elasticityPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentVersion) {
            $res['agentVersion'] = $this->agentVersion;
        }

        if (null !== $this->authentication) {
            $res['authentication'] = null !== $this->authentication ? $this->authentication->toArray($noStream) : $this->authentication;
        }

        if (null !== $this->elasticityPolicy) {
            $res['elasticityPolicy'] = null !== $this->elasticityPolicy ? $this->elasticityPolicy->toArray($noStream) : $this->elasticityPolicy;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->publicAccessEnabled) {
            $res['publicAccessEnabled'] = $this->publicAccessEnabled;
        }

        if (null !== $this->updateElasticity) {
            $res['updateElasticity'] = $this->updateElasticity;
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
        if (isset($map['agentVersion'])) {
            $model->agentVersion = $map['agentVersion'];
        }

        if (isset($map['authentication'])) {
            $model->authentication = authentication::fromMap($map['authentication']);
        }

        if (isset($map['elasticityPolicy'])) {
            $model->elasticityPolicy = elasticityPolicy::fromMap($map['elasticityPolicy']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['publicAccessEnabled'])) {
            $model->publicAccessEnabled = $map['publicAccessEnabled'];
        }

        if (isset($map['updateElasticity'])) {
            $model->updateElasticity = $map['updateElasticity'];
        }

        return $model;
    }
}
