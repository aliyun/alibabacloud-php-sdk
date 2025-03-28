<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class EnvironmentBaseline extends Model
{
    /**
     * @var ServiceInstance[]
     */
    public $servicesInstances;

    /**
     * @var Variable[]
     */
    public $variables;
    protected $_name = [
        'servicesInstances' => 'servicesInstances',
        'variables' => 'variables',
    ];

    public function validate()
    {
        if (\is_array($this->servicesInstances)) {
            Model::validateArray($this->servicesInstances);
        }
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->servicesInstances) {
            if (\is_array($this->servicesInstances)) {
                $res['servicesInstances'] = [];
                foreach ($this->servicesInstances as $key1 => $value1) {
                    $res['servicesInstances'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['variables'] = [];
                foreach ($this->variables as $key1 => $value1) {
                    $res['variables'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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
        if (isset($map['servicesInstances'])) {
            if (!empty($map['servicesInstances'])) {
                $model->servicesInstances = [];
                foreach ($map['servicesInstances'] as $key1 => $value1) {
                    $model->servicesInstances[$key1] = ServiceInstance::fromMap($value1);
                }
            }
        }

        if (isset($map['variables'])) {
            if (!empty($map['variables'])) {
                $model->variables = [];
                foreach ($map['variables'] as $key1 => $value1) {
                    $model->variables[$key1] = Variable::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
