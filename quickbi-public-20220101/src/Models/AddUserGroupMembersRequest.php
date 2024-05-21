<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class AddUserGroupMembersRequest extends Model
{
    /**
     * @description The IDs of the user groups. Separate the IDs with commas (,). Example: aGroupId,bGroupId,cGroupIds
     *
     * This parameter is required.
     * @example 0d5fb19b-****-****-99da-1248fc27ca51
     *
     * @var string
     */
    public $userGroupIds;

    /**
     * @description The user ID of the Quick BI.
     *
     * This parameter is required.
     * @example 46e5****37a5
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'userGroupIds' => 'UserGroupIds',
        'userId'       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userGroupIds) {
            $res['UserGroupIds'] = $this->userGroupIds;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddUserGroupMembersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserGroupIds'])) {
            $model->userGroupIds = $map['UserGroupIds'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
