<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserGroupListByParentIdResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The time when the sub-user group was created.
     *
     * @example 2020-10-30 10:03:09
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The creator of the sub-user group. The UserID of the Quick BI is used instead of the UID of Alibaba Cloud.
     *
     * @example 136516262323****
     *
     * @var string
     */
    public $createUser;

    /**
     * @description Directory level of the sub-user group.
     *
     * @var string
     */
    public $identifiedPath;

    /**
     * @description The time when the sub-user group was last modified.
     *
     * @example 2020-11-16 15:49:08
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The user who modified the subgroup. The UserID of the Quick BI is used instead of the UID of Alibaba Cloud.
     *
     * @example 136516262323****
     *
     * @var string
     */
    public $modifyUser;

    /**
     * @description The ID of the parent user group.
     *
     * @example 3d2c23d4-2b41-4af8-a1f5-f6390f32****
     *
     * @var string
     */
    public $parentUserGroupId;

    /**
     * @description The description of the sub-user group.
     *
     * @example User Group for Testing
     *
     * @var string
     */
    public $userGroupDescription;

    /**
     * @description The ID of the sub-user group.
     *
     * @example f5eeb52e-d9c2-4a8b-80e3-47ab55c2****
     *
     * @var string
     */
    public $userGroupId;

    /**
     * @description The name of the sub-user group.
     *
     * @example popapi test group
     *
     * @var string
     */
    public $userGroupName;
    protected $_name = [
        'createTime'           => 'CreateTime',
        'createUser'           => 'CreateUser',
        'identifiedPath'       => 'IdentifiedPath',
        'modifiedTime'         => 'ModifiedTime',
        'modifyUser'           => 'ModifyUser',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->identifiedPath) {
            $res['IdentifiedPath'] = $this->identifiedPath;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->modifyUser) {
            $res['ModifyUser'] = $this->modifyUser;
        }
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
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['IdentifiedPath'])) {
            $model->identifiedPath = $map['IdentifiedPath'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ModifyUser'])) {
            $model->modifyUser = $map['ModifyUser'];
        }
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
