<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devs\V20230714\Models\ServiceInstance\latestDeployment;

class ServiceInstance extends Model
{
    /**
     * @var ServiceConfig
     */
    public $config;

    /**
     * @var latestDeployment
     */
    public $latestDeployment;

    /**
     * @var mixed[]
     */
    public $outputs;

    /**
     * @var Variable[]
     */
    public $variables;
    protected $_name = [
        'config' => 'config',
        'latestDeployment' => 'latestDeployment',
        'outputs' => 'outputs',
        'variables' => 'variables',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        if (null !== $this->latestDeployment) {
            $this->latestDeployment->validate();
        }
        if (\is_array($this->outputs)) {
            Model::validateArray($this->outputs);
        }
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->latestDeployment) {
            $res['latestDeployment'] = null !== $this->latestDeployment ? $this->latestDeployment->toArray($noStream) : $this->latestDeployment;
        }

        if (null !== $this->outputs) {
            if (\is_array($this->outputs)) {
                $res['outputs'] = [];
                foreach ($this->outputs as $key1 => $value1) {
                    $res['outputs'][$key1] = $value1;
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
        if (isset($map['config'])) {
            $model->config = ServiceConfig::fromMap($map['config']);
        }

        if (isset($map['latestDeployment'])) {
            $model->latestDeployment = latestDeployment::fromMap($map['latestDeployment']);
        }

        if (isset($map['outputs'])) {
            if (!empty($map['outputs'])) {
                $model->outputs = [];
                foreach ($map['outputs'] as $key1 => $value1) {
                    $model->outputs[$key1] = $value1;
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
