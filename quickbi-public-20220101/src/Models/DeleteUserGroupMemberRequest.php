<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DeleteUserGroupMemberRequest extends Model
{
    /**
     * @description The ID of the user group.
     *
     * This parameter is required.
     * @example 46e537****
     *
     * @var string
     */
    public $userGroupId;

    /**
     * @description The user ID of the Quick BI.
     *
     * This parameter is required.
     * @example 2fe4fbd8****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'userGroupId' => 'UserGroupId',
        'userId'      => 'UserId',
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteUserGroupMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
