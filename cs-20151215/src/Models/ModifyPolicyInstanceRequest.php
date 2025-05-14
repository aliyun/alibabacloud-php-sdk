<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class ModifyPolicyInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string[]
     */
    public $namespaces;

    /**
     * @var mixed[]
     */
    public $parameters;
    protected $_name = [
        'action' => 'action',
        'instanceName' => 'instance_name',
        'namespaces' => 'namespaces',
        'parameters' => 'parameters',
    ];

    public function validate()
    {
        if (\is_array($this->namespaces)) {
            Model::validateArray($this->namespaces);
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        if (null !== $this->instanceName) {
            $res['instance_name'] = $this->instanceName;
        }

        if (null !== $this->namespaces) {
            if (\is_array($this->namespaces)) {
                $res['namespaces'] = [];
                $n1 = 0;
                foreach ($this->namespaces as $item1) {
                    $res['namespaces'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['parameters'][$key1] = $value1;
                }
            }
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
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

        if (isset($map['instance_name'])) {
            $model->instanceName = $map['instance_name'];
        }

        if (isset($map['namespaces'])) {
            if (!empty($map['namespaces'])) {
                $model->namespaces = [];
                $n1 = 0;
                foreach ($map['namespaces'] as $item1) {
                    $model->namespaces[$n1++] = $item1;
                }
            }
        }

        if (isset($map['parameters'])) {
            if (!empty($map['parameters'])) {
                $model->parameters = [];
                foreach ($map['parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
