<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class InsertRoleRequest extends Model
{
    /**
     * @description The set of permissions to be granted to the role. The value is in the format of `Permission group ID 1:Permission serial number 1;...;Permission group ID n:Permission serial number n`. Example: `1:1;1:2;2:1;2:2`. For more information about permission groups and permission serial numbers, see [ListAuthority](~~149409~~).
     *
     * @example 15:1;14:2
     *
     * @var string
     */
    public $actionData;

    /**
     * @description The name of the role.
     *
     * @example testrole
     *
     * @var string
     */
    public $roleName;
    protected $_name = [
        'actionData' => 'ActionData',
        'roleName'   => 'RoleName',
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
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionData'])) {
            $model->actionData = $map['ActionData'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
