<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeUsersWithPermissionsRequest extends Model
{
    /**
     * @description Specifies whether to query the IDs of all RAM users or RAM roles to which an RBAC role is assigned. Valid values:
     *
     *   `SubUser`: Query the IDs of all RAM users to which an RBAC role is assigned.
     *   `RamRole`: Query the IDs of all RAM roles to which an RBAC role is assigned.
     *
     * @example SubUser
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'userType' => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUsersWithPermissionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
