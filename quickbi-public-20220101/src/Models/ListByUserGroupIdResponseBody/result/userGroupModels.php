<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListByUserGroupIdResponseBody\result;

use AlibabaCloud\Tea\Model;

class userGroupModels extends Model
{
    /**
     * @description The time when the Secret was created.
     *
     * @example 2021-03-15 17:13:55
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The UserID of the creator in the Quick BI.
     *
     * @example 46e5*******ee22e2a292704c8
     *
     * @var string
     */
    public $createUser;

    /**
     * @description The path of the user group.
     *
     * @example 2fe4fbd8-****-af083ea/34fd1-****-dcbc33f
     *
     * @var string
     */
    public $identifiedPath;

    /**
     * @description The time when the protection policy was last modified.
     *
     * @example 2021-03-15 20:36:40
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The UserID of the modifier in the Quick BI.
     *
     * @example 46e5*******ee22e2a292704c8
     *
     * @var string
     */
    public $modifyUser;

    /**
     * @description The ID of the parent user group.
     *
     * @example 2fe4fbd8-588f-489a-b3e1-e92c7af083ea
     *
     * @var string
     */
    public $parentUsergroupId;

    /**
     * @description The description of the user group.
     *
     * @example Description
     *
     * @var string
     */
    public $usergroupDesc;

    /**
     * @description The ID of the user group.
     *
     * @example 34fd141d-****-4093-8c33-8e066dcbc33f
     *
     * @var string
     */
    public $usergroupId;

    /**
     * @description The name of the user group.
     *
     * @example Test user group
     *
     * @var string
     */
    public $usergroupName;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'createUser'        => 'CreateUser',
        'identifiedPath'    => 'IdentifiedPath',
        'modifiedTime'      => 'ModifiedTime',
        'modifyUser'        => 'ModifyUser',
        'parentUsergroupId' => 'ParentUsergroupId',
        'usergroupDesc'     => 'UsergroupDesc',
        'usergroupId'       => 'UsergroupId',
        'usergroupName'     => 'UsergroupName',
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
        if (null !== $this->parentUsergroupId) {
            $res['ParentUsergroupId'] = $this->parentUsergroupId;
        }
        if (null !== $this->usergroupDesc) {
            $res['UsergroupDesc'] = $this->usergroupDesc;
        }
        if (null !== $this->usergroupId) {
            $res['UsergroupId'] = $this->usergroupId;
        }
        if (null !== $this->usergroupName) {
            $res['UsergroupName'] = $this->usergroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userGroupModels
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
        if (isset($map['ParentUsergroupId'])) {
            $model->parentUsergroupId = $map['ParentUsergroupId'];
        }
        if (isset($map['UsergroupDesc'])) {
            $model->usergroupDesc = $map['UsergroupDesc'];
        }
        if (isset($map['UsergroupId'])) {
            $model->usergroupId = $map['UsergroupId'];
        }
        if (isset($map['UsergroupName'])) {
            $model->usergroupName = $map['UsergroupName'];
        }

        return $model;
    }
}
