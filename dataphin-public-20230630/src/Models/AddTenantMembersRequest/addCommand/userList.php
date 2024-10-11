<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddTenantMembersRequest\addCommand;

use AlibabaCloud\Tea\Model;

class userList extends Model
{
    /**
     * @example 1323241
     *
     * @var string
     */
    public $id;

    /**
     * @var string[]
     */
    public $roleList;
    protected $_name = [
        'id'       => 'Id',
        'roleList' => 'RoleList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->roleList) {
            $res['RoleList'] = $this->roleList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RoleList'])) {
            if (!empty($map['RoleList'])) {
                $model->roleList = $map['RoleList'];
            }
        }

        return $model;
    }
}
