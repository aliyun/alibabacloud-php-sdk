<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\ListDatabasesResponseBody;

use AlibabaCloud\Dara\Model;

class databaseList extends Model
{
    /**
     * @var bool
     */
    public $external;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $permissionModel;

    /**
     * @var string
     */
    public $privilege;
    protected $_name = [
        'external' => 'External',
        'name' => 'Name',
        'permissionModel' => 'PermissionModel',
        'privilege' => 'Privilege',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->external) {
            $res['External'] = $this->external;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->permissionModel) {
            $res['PermissionModel'] = $this->permissionModel;
        }

        if (null !== $this->privilege) {
            $res['Privilege'] = $this->privilege;
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
        if (isset($map['External'])) {
            $model->external = $map['External'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PermissionModel'])) {
            $model->permissionModel = $map['PermissionModel'];
        }

        if (isset($map['Privilege'])) {
            $model->privilege = $map['Privilege'];
        }

        return $model;
    }
}
