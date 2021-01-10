<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListUsersResponseBody\data;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $loginUserType;

    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'displayName'   => 'DisplayName',
        'updateTime'    => 'UpdateTime',
        'description'   => 'Description',
        'createTime'    => 'CreateTime',
        'loginUserType' => 'LoginUserType',
        'aliUid'        => 'AliUid',
        'roleName'      => 'RoleName',
        'userName'      => 'UserName',
        'id'            => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->loginUserType) {
            $res['LoginUserType'] = $this->loginUserType;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LoginUserType'])) {
            $model->loginUserType = $map['LoginUserType'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
