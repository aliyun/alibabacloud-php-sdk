<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class CreateUserGroupRequest extends Model
{
    /**
     * @description The ID of the parent user group. You can add new user groups to this group:
     *
     *   If you enter the ID of a parent user group, the new user group is added to the user group with the ID.
     *   If you enter -1, the new user group is added to the root directory.
     *
     * @example 3d2c23d4-2b41-4af8-a1f5-f6390f32****
     *
     * @var string
     */
    public $parentUserGroupId;

    /**
     * @description The description of the user group.
     *
     *   Format verification: Maximum length 255
     *   Special format verification: Chinese and English digits\_ \ / | () ] \[
     *
     * @example User group description
     *
     * @var string
     */
    public $userGroupDescription;

    /**
     * @description The unique ID of the user group.
     *
     *   If you specify the UserGroupId parameter, the system automatically generates the UserGroupId parameter. If you specify the UserGroupId parameter, the user ID is used as the user group ID. You must ensure that the user ID is unique within the organization.
     *   Format verification: Maximum length 64, cannot be -1,
     *
     * @example pop0001
     *
     * @var string
     */
    public $userGroupId;

    /**
     * @description The name of the RAM user group.
     *
     *   Format verification: Maximum length 255
     *   Special format verification: Chinese and English digits\_ \ / | () ] \[
     *
     * @example Hangzhou Financial Report
     *
     * @var string
     */
    public $userGroupName;
    protected $_name = [
        'parentUserGroupId'    => 'ParentUserGroupId',
        'userGroupDescription' => 'UserGroupDescription',
        'userGroupId'          => 'UserGroupId',
        'userGroupName'        => 'UserGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parentUserGroupId) {
            $res['ParentUserGroupId'] = $this->parentUserGroupId;
        }
        if (null !== $this->userGroupDescription) {
            $res['UserGroupDescription'] = $this->userGroupDescription;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }
        if (null !== $this->userGroupName) {
            $res['UserGroupName'] = $this->userGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParentUserGroupId'])) {
            $model->parentUserGroupId = $map['ParentUserGroupId'];
        }
        if (isset($map['UserGroupDescription'])) {
            $model->userGroupDescription = $map['UserGroupDescription'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }
        if (isset($map['UserGroupName'])) {
            $model->userGroupName = $map['UserGroupName'];
        }

        return $model;
    }
}
