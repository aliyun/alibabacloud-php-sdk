<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUsersResponseBody\userList;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUsersResponseBody\userList\user\roleIdList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUsersResponseBody\userList\user\roleNameList;
use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @var int
     */
    public $curExecuteCount;

    /**
     * @var int
     */
    public $curResultCount;

    /**
     * @var string
     */
    public $dingRobot;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $lastLoginTime;

    /**
     * @var int
     */
    public $maxExecuteCount;

    /**
     * @var int
     */
    public $maxResultCount;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $notificationMode;

    /**
     * @var string
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
    public $signatureMethod;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $webhook;
    protected $_name = [
        'curExecuteCount'  => 'CurExecuteCount',
        'curResultCount'   => 'CurResultCount',
        'dingRobot'        => 'DingRobot',
        'email'            => 'Email',
        'lastLoginTime'    => 'LastLoginTime',
        'maxExecuteCount'  => 'MaxExecuteCount',
        'maxResultCount'   => 'MaxResultCount',
        'mobile'           => 'Mobile',
        'nickName'         => 'NickName',
        'notificationMode' => 'NotificationMode',
        'parentUid'        => 'ParentUid',
        'roleIdList'       => 'RoleIdList',
        'roleNameList'     => 'RoleNameList',
        'signatureMethod'  => 'SignatureMethod',
        'state'            => 'State',
        'uid'              => 'Uid',
        'userId'           => 'UserId',
        'webhook'          => 'Webhook',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->curExecuteCount) {
            $res['CurExecuteCount'] = $this->curExecuteCount;
        }
        if (null !== $this->curResultCount) {
            $res['CurResultCount'] = $this->curResultCount;
        }
        if (null !== $this->dingRobot) {
            $res['DingRobot'] = $this->dingRobot;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->lastLoginTime) {
            $res['LastLoginTime'] = $this->lastLoginTime;
        }
        if (null !== $this->maxExecuteCount) {
            $res['MaxExecuteCount'] = $this->maxExecuteCount;
        }
        if (null !== $this->maxResultCount) {
            $res['MaxResultCount'] = $this->maxResultCount;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->notificationMode) {
            $res['NotificationMode'] = $this->notificationMode;
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
        if (null !== $this->signatureMethod) {
            $res['SignatureMethod'] = $this->signatureMethod;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
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
        if (isset($map['CurExecuteCount'])) {
            $model->curExecuteCount = $map['CurExecuteCount'];
        }
        if (isset($map['CurResultCount'])) {
            $model->curResultCount = $map['CurResultCount'];
        }
        if (isset($map['DingRobot'])) {
            $model->dingRobot = $map['DingRobot'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['LastLoginTime'])) {
            $model->lastLoginTime = $map['LastLoginTime'];
        }
        if (isset($map['MaxExecuteCount'])) {
            $model->maxExecuteCount = $map['MaxExecuteCount'];
        }
        if (isset($map['MaxResultCount'])) {
            $model->maxResultCount = $map['MaxResultCount'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['NotificationMode'])) {
            $model->notificationMode = $map['NotificationMode'];
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
        if (isset($map['SignatureMethod'])) {
            $model->signatureMethod = $map['SignatureMethod'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }

        return $model;
    }
}
