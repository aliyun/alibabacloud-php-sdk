<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\deployGroups;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\deployGroups\deployGroup\components;
use AlibabaCloud\Tea\Model;

class deployGroup extends Model
{
    /**
     * @description The information about the component.
     *
     * @var components
     */
    public $components;

    /**
     * @description The environment variable. This parameter is different from the EnvList parameter. This parameter specifies the referenced configuration of the ConfigMap or Secret.
     *
     * @example "["{\"name\":\"test1\",\"valueFrom\":{\"configMapKeyRef\":{\"name\":\"edas-demo-configmap\",\"key\":\"key1\"}}}","{\"name\":\"k2\",\"value\":\"v2\"}","{\"name\":\"s1\",\"valueFrom\":{\"secretKeyRef\":{\"name\":\"edas-demo-secret\",\"key\":\"k1\"}}}"]"
     *
     * @var string
     */
    public $env;

    /**
     * @description The source of the environment variable.
     *
     * @example [{"configMapRef":{"name":"test-cm"}}]
     *
     * @var string
     */
    public $envFrom;
    protected $_name = [
        'components' => 'Components',
        'env'        => 'Env',
        'envFrom'    => 'EnvFrom',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->components) {
            $res['Components'] = null !== $this->components ? $this->components->toMap() : null;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->envFrom) {
            $res['EnvFrom'] = $this->envFrom;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deployGroup
     */
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
