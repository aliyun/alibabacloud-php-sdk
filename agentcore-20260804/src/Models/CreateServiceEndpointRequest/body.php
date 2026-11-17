<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateServiceEndpointRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateServiceEndpointRequest\body\authentication;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateServiceEndpointRequest\body\elasticityPolicy;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateServiceEndpointRequest\body\target;

class body extends Model
{
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
     * @var target
     */
    public $target;
    protected $_name = [
        'authentication' => 'authentication',
        'elasticityPolicy' => 'elasticityPolicy',
        'name' => 'name',
        'publicAccessEnabled' => 'publicAccessEnabled',
        'target' => 'target',
    ];

    public function validate()
    {
        if (null !== $this->authentication) {
            $this->authentication->validate();
        }
        if (null !== $this->elasticityPolicy) {
            $this->elasticityPolicy->validate();
        }
        if (null !== $this->target) {
            $this->target->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->target) {
            $res['target'] = null !== $this->target ? $this->target->toArray($noStream) : $this->target;
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

        if (isset($map['target'])) {
            $model->target = target::fromMap($map['target']);
        }

        return $model;
    }
}
