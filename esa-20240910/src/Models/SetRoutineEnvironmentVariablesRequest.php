<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class SetRoutineEnvironmentVariablesRequest extends Model
{
    /**
     * @var string
     */
    public $env;

    /**
     * @var EnvironmentVariablesValue[]
     */
    public $environmentVariables;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'env' => 'Env',
        'environmentVariables' => 'EnvironmentVariables',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->environmentVariables)) {
            Model::validateArray($this->environmentVariables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->environmentVariables) {
            if (\is_array($this->environmentVariables)) {
                $res['EnvironmentVariables'] = [];
                foreach ($this->environmentVariables as $key1 => $value1) {
                    $res['EnvironmentVariables'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['EnvironmentVariables'])) {
            if (!empty($map['EnvironmentVariables'])) {
                $model->environmentVariables = [];
                foreach ($map['EnvironmentVariables'] as $key1 => $value1) {
                    $model->environmentVariables[$key1] = EnvironmentVariablesValue::fromMap($value1);
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
