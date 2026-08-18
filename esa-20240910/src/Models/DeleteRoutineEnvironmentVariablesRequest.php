<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class DeleteRoutineEnvironmentVariablesRequest extends Model
{
    /**
     * @var string
     */
    public $env;

    /**
     * @var string[]
     */
    public $environmentVariableKeys;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'env' => 'Env',
        'environmentVariableKeys' => 'EnvironmentVariableKeys',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->environmentVariableKeys)) {
            Model::validateArray($this->environmentVariableKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->environmentVariableKeys) {
            if (\is_array($this->environmentVariableKeys)) {
                $res['EnvironmentVariableKeys'] = [];
                $n1 = 0;
                foreach ($this->environmentVariableKeys as $item1) {
                    $res['EnvironmentVariableKeys'][$n1] = $item1;
                    ++$n1;
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

        if (isset($map['EnvironmentVariableKeys'])) {
            if (!empty($map['EnvironmentVariableKeys'])) {
                $model->environmentVariableKeys = [];
                $n1 = 0;
                foreach ($map['EnvironmentVariableKeys'] as $item1) {
                    $model->environmentVariableKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
