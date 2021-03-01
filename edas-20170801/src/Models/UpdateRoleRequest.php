<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateRoleRequest extends Model
{
    /**
     * @var int
     */
    public $roleId;

    /**
     * @var string
     */
    public $actionData;
    protected $_name = [
        'roleId'     => 'RoleId',
        'actionData' => 'ActionData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->actionData) {
            $res['ActionData'] = $this->actionData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['ActionData'])) {
            $model->actionData = $map['ActionData'];
        }

        return $model;
    }
}
