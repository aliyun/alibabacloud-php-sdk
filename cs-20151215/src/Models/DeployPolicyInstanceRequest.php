<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DeployPolicyInstanceRequest extends Model
{
    /**
     * @description 规则治理动作
     *
     * @var string
     */
    public $action;

    /**
     * @description 策略实例实施范围
     *
     * @var string
     */
    public $namespace;

    /**
     * @description 当前规则实例的配置参数
     *
     * @var mixed[]
     */
    public $parameters;
    protected $_name = [
        'action'     => 'action',
        'namespace'  => 'namespace',
        'parameters' => 'parameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->parameters) {
            $res['parameters'] = $this->parameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeployPolicyInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['parameters'])) {
            $model->parameters = $map['parameters'];
        }

        return $model;
    }
}
