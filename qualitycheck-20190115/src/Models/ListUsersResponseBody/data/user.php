<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListUsersResponseBody\data;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @example 2951869706989****
     *
     * @var string
     */
    public $aliUid;

    /**
     * @example 2020-03-11T16:54Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example XXX
     *
     * @var string
     */
    public $description;

    /**
     * @example xxx
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @example 2
     *
     * @var int
     */
    public $loginUserType;

    /**
     * @example AGENT
     *
     * @var string
     */
    public $roleName;

    /**
     * @example 2020-03-11T16:54Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example xxx
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'aliUid'        => 'AliUid',
        'createTime'    => 'CreateTime',
        'description'   => 'Description',
        'displayName'   => 'DisplayName',
        'id'            => 'Id',
        'loginUserType' => 'LoginUserType',
        'roleName'      => 'RoleName',
        'updateTime'    => 'UpdateTime',
        'userName'      => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->loginUserType) {
            $res['LoginUserType'] = $this->loginUserType;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LoginUserType'])) {
            $model->loginUserType = $map['LoginUserType'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
