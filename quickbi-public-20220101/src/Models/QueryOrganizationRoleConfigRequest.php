<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryOrganizationRoleConfigRequest extends Model
{
    /**
     * @description Organization role ID, including predefined roles and custom roles:
     *
     * - Organization Administrator (predefined role): 111111111
     * - Permission Administrator (predefined role): 111111112
     * - Regular User (predefined role): 111111113
     * - Custom Role: The corresponding role ID of the custom role
     *
     * This parameter is required.
     *
     * @example 111111111
     *
     * @var int
     */
    public $roleId;
    protected $_name = [
        'roleId' => 'RoleId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryOrganizationRoleConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        return $model;
    }
}
