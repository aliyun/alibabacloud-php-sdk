<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class DeleteRoutineEnvironmentVariablesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $environmentVariableKeysShrink;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'env' => 'Env',
        'environmentVariableKeysShrink' => 'EnvironmentVariableKeys',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->environmentVariableKeysShrink) {
            $res['EnvironmentVariableKeys'] = $this->environmentVariableKeysShrink;
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
            $model->environmentVariableKeysShrink = $map['EnvironmentVariableKeys'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
