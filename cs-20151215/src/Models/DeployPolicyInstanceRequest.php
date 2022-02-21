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
     * @description 策略实例实施范围（限定命名空间）。默认 [] 代表集群所有命名空间。
     *
     * @var string[]
     */
    public $namespaces;

    /**
     * @description 当前规则实例的配置参数
     *
     * @var mixed[]
     */
    public $parameters;
    protected $_name = [
        'action'     => 'action',
        'namespaces' => 'namespaces',
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
        if (null !== $this->namespaces) {
            $res['namespaces'] = $this->namespaces;
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
        if (isset($map['namespaces'])) {
            if (!empty($map['namespaces'])) {
                $model->namespaces = $map['namespaces'];
            }
        }
        if (isset($map['parameters'])) {
            $model->parameters = $map['parameters'];
        }

        return $model;
    }
}
