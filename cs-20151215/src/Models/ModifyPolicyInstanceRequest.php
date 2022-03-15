<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class ModifyPolicyInstanceRequest extends Model
{
    /**
     * @description 规则治理动作
     *
     * @var string
     */
    public $action;

    /**
     * @description 策略规则实例id
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description 限制策略实施的命名空间，为空时表示所有命名空间
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
        'action'       => 'action',
        'instanceName' => 'instance_name',
        'namespaces'   => 'namespaces',
        'parameters'   => 'parameters',
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
        if (null !== $this->instanceName) {
            $res['instance_name'] = $this->instanceName;
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
     * @return ModifyPolicyInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['instance_name'])) {
            $model->instanceName = $map['instance_name'];
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
