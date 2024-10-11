<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddUserGroupMemberRequest;

use AlibabaCloud\Tea\Model;

class addCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 132331
     *
     * @var string
     */
    public $userGroupId;

    /**
     * @var string[]
     */
    public $userIdList;
    protected $_name = [
        'userGroupId' => 'UserGroupId',
        'userIdList'  => 'UserIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }
        if (null !== $this->userIdList) {
            $res['UserIdList'] = $this->userIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }
        if (isset($map['UserIdList'])) {
            if (!empty($map['UserIdList'])) {
                $model->userIdList = $map['UserIdList'];
            }
        }

        return $model;
    }
}
