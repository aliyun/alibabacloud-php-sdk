<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20210616\Models\QueryAllPermissionOfRoleResponseBody\permissionList;

use AlibabaCloud\Tea\Model;

class permissionItemList extends Model
{
    /**
     * @var string
     */
    public $permissionType;

    /**
     * @var string
     */
    public $actionType;

    /**
     * @var string
     */
    public $permissionItemId;
    protected $_name = [
        'permissionType'   => 'PermissionType',
        'actionType'       => 'ActionType',
        'permissionItemId' => 'PermissionItemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->permissionType) {
            $res['PermissionType'] = $this->permissionType;
        }
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }
        if (null !== $this->permissionItemId) {
            $res['PermissionItemId'] = $this->permissionItemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permissionItemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PermissionType'])) {
            $model->permissionType = $map['PermissionType'];
        }
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
        if (isset($map['PermissionItemId'])) {
            $model->permissionItemId = $map['PermissionItemId'];
        }

        return $model;
    }
}
