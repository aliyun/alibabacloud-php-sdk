<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateRoleRequest extends Model
{
    /**
     * @description The set of permissions to be granted to the role. The value is in the format of `Permission group ID 1:Permission serial number 1;...;Permission group ID n:Permission serial number n`. Example: `1:1;1:2;2:1;2:2`. For more information about permission groups and permission serial numbers, see [ListAuthority](~~149409~~).
     *
     * @example 15:1
     *
     * @var string
     */
    public $actionData;

    /**
     * @description The ID of the role. You can call the ListRole operation to query the role IDs. For more information, see [ListRole](~~149410~~).
     *
     * @example 32371
     *
     * @var int
     */
    public $roleId;
    protected $_name = [
        'actionData' => 'ActionData',
        'roleId'     => 'RoleId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateRoleRequest
     */
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
