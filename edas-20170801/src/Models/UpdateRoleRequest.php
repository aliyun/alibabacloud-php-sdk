<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class UpdateRoleRequest extends Model
{
    /**
     * @var string
     */
    public $actionData;

    /**
     * @var int
     */
    public $roleId;
    protected $_name = [
        'actionData' => 'ActionData',
        'roleId' => 'RoleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionData) {
            $res['ActionData'] = $this->actionData;
        }

        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
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
        if (isset($map['ActionData'])) {
            $model->actionData = $map['ActionData'];
        }

        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        return $model;
    }
}
