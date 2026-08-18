<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class SetRoutineEnvironmentVariablesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $environmentVariablesShrink;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'env' => 'Env',
        'environmentVariablesShrink' => 'EnvironmentVariables',
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

        if (null !== $this->environmentVariablesShrink) {
            $res['EnvironmentVariables'] = $this->environmentVariablesShrink;
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
            $model->environmentVariablesShrink = $map['EnvironmentVariables'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
