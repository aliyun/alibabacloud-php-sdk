<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddLhMembersRequest;

use AlibabaCloud\Tea\Model;

class members extends Model
{
    /**
     * @description The role. Valid values:
     *
     *   **ADMIN**: workspace administrator. You can add a workspace administrator only as a DMS administrator or a DBA.
     *   **MEMBER**: workspace member.
     *   **DEVELOPER**: task flow developer. Only a workspace member can be added as a task flow developer.
     *
     * @var string[]
     */
    public $roles;

    /**
     * @description The ID of the user to be added. You can call the [ListUsers](~~141938~~) or [GetUser](~~147098~~) operation to obtain the user ID.
     *
     * @example 15****
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'roles'  => 'Roles',
        'userId' => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roles) {
            $res['Roles'] = $this->roles;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return members
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Roles'])) {
            if (!empty($map['Roles'])) {
                $model->roles = $map['Roles'];
            }
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
