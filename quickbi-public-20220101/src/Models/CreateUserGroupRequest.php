<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class CreateUserGroupRequest extends Model
{
    /**
     * @var string
     */
    public $parentUserGroupId;

    /**
     * @var string
     */
    public $userGroupDescription;

    /**
     * @var string
     */
    public $userGroupId;

    /**
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
