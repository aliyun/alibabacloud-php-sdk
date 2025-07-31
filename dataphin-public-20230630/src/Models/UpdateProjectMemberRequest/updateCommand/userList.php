<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateProjectMemberRequest\updateCommand;

use AlibabaCloud\Tea\Model;

class userList extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var int[]
     */
    public $roleList;

    /**
     * @description This parameter is required.
     *
     * @example 30012011
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'roleList' => 'RoleList',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleList) {
            $res['RoleList'] = $this->roleList;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['RoleList'])) {
            if (!empty($map['RoleList'])) {
                $model->roleList = $map['RoleList'];
            }
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
