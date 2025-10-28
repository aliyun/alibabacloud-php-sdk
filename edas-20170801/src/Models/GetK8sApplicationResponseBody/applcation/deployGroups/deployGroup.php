<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\deployGroups;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\deployGroups\deployGroup\components;

class deployGroup extends Model
{
    /**
     * @var components
     */
    public $components;

    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $envFrom;
    protected $_name = [
        'components' => 'Components',
        'env' => 'Env',
        'envFrom' => 'EnvFrom',
    ];

    public function validate()
    {
        if (null !== $this->components) {
            $this->components->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->components) {
            $res['Components'] = null !== $this->components ? $this->components->toArray($noStream) : $this->components;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->envFrom) {
            $res['EnvFrom'] = $this->envFrom;
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
        if (isset($map['Components'])) {
            $model->components = components::fromMap($map['Components']);
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['EnvFrom'])) {
            $model->envFrom = $map['EnvFrom'];
        }

        return $model;
    }
}
