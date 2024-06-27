<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListUserGroupsByUserIdResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 2021-03-15 17:13:55
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 46e5374665ba4b679ee22e2a2927****
     *
     * @var string
     */
    public $createUser;

    /**
     * @var string
     */
    public $identifiedPath;

    /**
     * @example 2021-03-15 20:36:40
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example 46e5374665ba4b679ee22e2a2927****
     *
     * @var string
     */
    public $modifyUser;

    /**
     * @example 2fe4fbd8-588f-489a-b3e1-e92c7af0****
     *
     * @var string
     */
    public $parentUsergroupId;

    /**
     * @var string
     */
    public $usergroupDesc;

    /**
     * @example 34fd141d-4598-4093-8c33-8e066dcb****
     *
     * @var string
     */
    public $usergroupId;

    /**
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
