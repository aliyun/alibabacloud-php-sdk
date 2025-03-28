<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class EnvironmentStagedConfigs extends Model
{
    /**
     * @var ServiceConfig[]
     */
    public $services;

    /**
     * @var Variable[]
     */
    public $variables;
    protected $_name = [
        'services' => 'services',
        'variables' => 'variables',
    ];

    public function validate()
    {
        if (\is_array($this->services)) {
            Model::validateArray($this->services);
        }
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->services) {
            if (\is_array($this->services)) {
                $res['services'] = [];
                foreach ($this->services as $key1 => $value1) {
                    $res['services'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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
        if (isset($map['services'])) {
            if (!empty($map['services'])) {
                $model->services = [];
                foreach ($map['services'] as $key1 => $value1) {
                    $model->services[$key1] = ServiceConfig::fromMap($value1);
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
