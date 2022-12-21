<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserResponseBody\user\roleIdList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserResponseBody\user\roleNameList;
use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @description The number of queries that are performed on the current day.
     *
     * @example 3
     *
     * @var int
     */
    public $curExecuteCount;

    /**
     * @description The number of rows that are queried on the current day.
     *
     * @example 28
     *
     * @var int
     */
    public $curResultCount;

    /**
     * @description The DingTalk chatbot URL that is used to receive notifications.
     *
     * >
     *   The system returns this parameter if the user has set a DingTalk chatbot URL in the console. To set a DingTalk chatbot URL in the console, move the pointer over the profile picture in the upper-right corner and click the Edit icon next to **Notice**.
     *   The system does not return this parameter if the user has not set a DingTalk chatbot URL.
     *
     * @example https://XXX.dingtalk.com/robot/send?access_token=***
     *
     * @var string
     */
    public $dingRobot;

    /**
     * @description The email address that is used to receive notifications.
     *
     * >
     *   The system returns this parameter if the user has set an email address in the console. To set an email address in the console, move the pointer over the profile picture in the upper-right corner and click the Edit icon next to **Notice**.
     *   The system does not return this parameter if the user has not set an email address.
     *
     * @example Uesr_email
     *
     * @var string
     */
    public $email;

    /**
     * @description The last time when the user logged on to the console.
     *
     * @example 2021-11-08 11:26:21
     *
     * @var string
     */
    public $lastLoginTime;

    /**
     * @description The maximum number of queries that can be performed on the current day.
     *
     * @example 2000
     *
     * @var int
     */
    public $maxExecuteCount;

    /**
     * @description The maximum number of rows that can be queried on the current day.
     *
     * @example 10000
     *
     * @var int
     */
    public $maxResultCount;

    /**
     * @description The mobile phone number that is used to receive notifications.
     *
     * >
     *   The system returns this parameter if the user has set a mobile phone number in the console. To set a mobile phone number in the console, move the pointer over the profile picture in the upper-right corner and click the Edit icon next to **Notice**.
     *   The system does not return this parameter if the user has not set a mobile phone number.
     *
     * @example 1389223****
     *
     * @var string
     */
    public $mobile;

    /**
     * @description The nickname of the user.
     *
     * @example User_NickName
     *
     * @var string
     */
    public $nickName;

    /**
     * @description The notification method. The system returns one or more values. Valid values:
     *
     *   **SMS**: text message.
     *   **EMAIL**: email.
     *   **DingTalk**: DingTalk.
     *   **DINGROBOT**: DingTalk chatbot.
     *   **WEBHOOK**: webhook.
     *
     * @example EMAIL
     *
     * @var string
     */
    public $notificationMode;

    /**
     * @description The UID of the Alibaba Cloud account of the user.
     *
     * >  An Alibaba Cloud account can contain one or more RAM users.
     * @example 140692647406****
     *
     * @var int
     */
    public $parentUid;

    /**
     * @description The ID of the role that is assigned to the user. Valid values:
     *
     *   **1**: a regular user role.
     *   **2**: a database administrator (DBA) role.
     *   **3**: a DMS administrator role.
     *   **4**: a security administrator role.
     *   **6**: a schema read-only user role.
     *
     * @var roleIdList
     */
    public $roleIdList;

    /**
     * @description The name of the role that is assigned to the user. Valid values:
     *
     *   **USER**: a regular user.
     *   **DBA** : a DBA.
     *   **ADMIN**: a DMS administrator.
     *   **SECURITY_ADMIN**: a security administrator.
     *   **STRUCT_READ_ONLY**: a schema read-only user.
     *
     * @var roleNameList
     */
    public $roleNameList;

    /**
     * @description The signature method that is used to secure connections when a webhook URL is used. Valid values:
     *
     *   **NONE**: no signature.
     *   **HMAC_SHA1**: HMAC_SHA1.
     *
     * @example NONE
     *
     * @var string
     */
    public $signatureMethod;

    /**
     * @description The status of the user. Valid values:
     *
     *   **NORMAL**: The user is normal.
     *   **DISABLE**: The user is disabled.
     *   **DELETE**: The user is deleted.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $state;

    /**
     * @description The UID of the user.
     *
     * @example 22275482072787****
     *
     * @var string
     */
    public $uid;

    /**
     * @description The ID of the user.
     *
     * @example 51****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The webhook URL that is used to receive notifications.
     *
     * >
     *   If the user has set a webhook URL, DMS sends notifications to the specified URL.
     *   The system does not return this parameter if the user has not set a webhook URL.
     *
     * @example http://dms-XXX.aliyun.com:8***
     *
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
