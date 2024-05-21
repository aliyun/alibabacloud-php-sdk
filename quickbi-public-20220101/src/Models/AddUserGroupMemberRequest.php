<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class AddUserGroupMemberRequest extends Model
{
    /**
     * @description The result of adding members to a user group is returned. Valid values:
     *
     *   true: The task is added.
     *   false: The tag failed to be added.
     *
     * This parameter is required.
     * @example 555c4cd****
     *
     * @var string
     */
    public $userGroupId;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   true: The request was successful.
     *   false: The request failed.
     *
     * This parameter is required.
     * @example 46e537a5****,3dadsu****
     *
     * @var string
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
     * @return AddUserGroupMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }
        if (isset($map['UserIdList'])) {
            $model->userIdList = $map['UserIdList'];
        }

        return $model;
    }
}
