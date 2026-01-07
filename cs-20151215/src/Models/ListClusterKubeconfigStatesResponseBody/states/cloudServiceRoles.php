<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListClusterKubeconfigStatesResponseBody\states;

use AlibabaCloud\Dara\Model;

class cloudServiceRoles extends Model
{
    /**
     * @var bool
     */
    public $isDefaultTemplate;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $roleNamespace;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'isDefaultTemplate' => 'is_default_template',
        'roleName' => 'role_name',
        'roleNamespace' => 'role_namespace',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isDefaultTemplate) {
            $res['is_default_template'] = $this->isDefaultTemplate;
        }

        if (null !== $this->roleName) {
            $res['role_name'] = $this->roleName;
        }

        if (null !== $this->roleNamespace) {
            $res['role_namespace'] = $this->roleNamespace;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['is_default_template'])) {
            $model->isDefaultTemplate = $map['is_default_template'];
        }

        if (isset($map['role_name'])) {
            $model->roleName = $map['role_name'];
        }

        if (isset($map['role_namespace'])) {
            $model->roleNamespace = $map['role_namespace'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
