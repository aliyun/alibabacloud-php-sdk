<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListModelPermissionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListModelPermissionsResponseBody\list_\permissions;

class list_ extends Model
{
    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $name;

    /**
     * @var permissions
     */
    public $permissions;
    protected $_name = [
        'model' => 'model',
        'name' => 'name',
        'permissions' => 'permissions',
    ];

    public function validate()
    {
        if (null !== $this->permissions) {
            $this->permissions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->permissions) {
            $res['permissions'] = null !== $this->permissions ? $this->permissions->toArray($noStream) : $this->permissions;
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
        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['permissions'])) {
            $model->permissions = permissions::fromMap($map['permissions']);
        }

        return $model;
    }
}
