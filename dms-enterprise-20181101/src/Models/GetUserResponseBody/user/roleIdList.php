<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserResponseBody\user;

use AlibabaCloud\Tea\Model;

class roleIdList extends Model
{
    /**
     * @var int[]
     */
    public $roleIds;
    protected $_name = [
        'roleIds' => 'RoleIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleIds) {
            $res['RoleIds'] = $this->roleIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roleIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleIds'])) {
            if (!empty($map['RoleIds'])) {
                $model->roleIds = $map['RoleIds'];
            }
        }

        return $model;
    }
}
