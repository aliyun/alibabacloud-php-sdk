<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserResponseBody\user\roleIdList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserResponseBody\user\roleNameList;
use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $curResultCount;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $lastLoginTime;

    /**
     * @var int
     */
    public $maxResultCount;

    /**
     * @var int
     */
    public $parentUid;

    /**
     * @var roleIdList
     */
    public $roleIdList;

    /**
     * @var roleNameList
     */
    public $roleNameList;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var int
     */
    public $maxExecuteCount;

    /**
     * @var int
     */
    public $curExecuteCount;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'state'           => 'State',
        'curResultCount'  => 'CurResultCount',
        'userId'          => 'UserId',
        'lastLoginTime'   => 'LastLoginTime',
        'maxResultCount'  => 'MaxResultCount',
        'parentUid'       => 'ParentUid',
        'roleIdList'      => 'RoleIdList',
        'roleNameList'    => 'RoleNameList',
        'nickName'        => 'NickName',
        'maxExecuteCount' => 'MaxExecuteCount',
        'curExecuteCount' => 'CurExecuteCount',
        'mobile'          => 'Mobile',
        'uid'             => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->curResultCount) {
            $res['CurResultCount'] = $this->curResultCount;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->lastLoginTime) {
            $res['LastLoginTime'] = $this->lastLoginTime;
        }
        if (null !== $this->maxResultCount) {
            $res['MaxResultCount'] = $this->maxResultCount;
        }
        if (null !== $this->parentUid) {
            $res['ParentUid'] = $this->parentUid;
        }
        if (null !== $this->roleIdList) {
            $res['RoleIdList'] = null !== $this->roleIdList ? $this->roleIdList->toMap() : null;
        }
        if (null !== $this->roleNameList) {
            $res['RoleNameList'] = null !== $this->roleNameList ? $this->roleNameList->toMap() : null;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->maxExecuteCount) {
            $res['MaxExecuteCount'] = $this->maxExecuteCount;
        }
        if (null !== $this->curExecuteCount) {
            $res['CurExecuteCount'] = $this->curExecuteCount;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['CurResultCount'])) {
            $model->curResultCount = $map['CurResultCount'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['LastLoginTime'])) {
            $model->lastLoginTime = $map['LastLoginTime'];
        }
        if (isset($map['MaxResultCount'])) {
            $model->maxResultCount = $map['MaxResultCount'];
        }
        if (isset($map['ParentUid'])) {
            $model->parentUid = $map['ParentUid'];
        }
        if (isset($map['RoleIdList'])) {
            $model->roleIdList = roleIdList::fromMap($map['RoleIdList']);
        }
        if (isset($map['RoleNameList'])) {
            $model->roleNameList = roleNameList::fromMap($map['RoleNameList']);
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['MaxExecuteCount'])) {
            $model->maxExecuteCount = $map['MaxExecuteCount'];
        }
        if (isset($map['CurExecuteCount'])) {
            $model->curExecuteCount = $map['CurExecuteCount'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
