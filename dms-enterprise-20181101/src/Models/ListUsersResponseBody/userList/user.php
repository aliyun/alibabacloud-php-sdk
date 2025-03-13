<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUsersResponseBody\userList;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUsersResponseBody\userList\user\roleIdList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUsersResponseBody\userList\user\roleNameList;
use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @description The number of queries that were performed on the current day.
     *
     * @example 0
     *
     * @var int
     */
    public $curExecuteCount;

    /**
     * @description The number of rows that were queried on the current day.
     *
     * @example 0
     *
     * @var int
     */
    public $curResultCount;

    /**
     * @description The DingTalk chatbot URL that is used to receive notifications.
     *
     * >
     *
     *   The system returns this parameter if you have set a DingTalk chatbot URL in the console. To set a DingTalk chatbot URL in the console, move the pointer over the profile picture in the upper-right corner and click the Edit icon next to **Notice**.
     *
     *   The system does not return this parameter if you have not set a DingTalk chatbot URL.
     *
     * @example https://XXX.dingtalk.com/robot/send?access_token=9b7a4a562cbe7fcdea9962afac7b9d7b4504d564948083419750f9cafa78e4ef
     *
     * @var string
     */
    public $dingRobot;

    /**
     * @description The email address that is used to receive notifications.
     *
     * >
     *
     *   The system returns this parameter if you have set an email address in the console. To set an email address in the console, move the pointer over the profile picture in the upper-right corner and click the Edit icon next to **Notice**.
     *
     *   The system does not return this parameter if you have not set an email address.
     *
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The time when the user last logged on to the console.
     *
     * @example 2021-11-08 13:43:43
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
     * @example 50000
     *
     * @var int
     */
    public $maxResultCount;

    /**
     * @description The mobile phone number of the user.
     *
     * >
     *
     *   The system returns this parameter if you have set a mobile phone number in the console. To set a mobile phone number in the console, move the pointer over the profile picture in the upper-right corner and click the Edit icon next to **Notice**.
     *
     *   The system does not return this parameter if you have not set a mobile phone number.
     *
     * @example 1389999****
     *
     * @var string
     */
    public $mobile;

    /**
     * @description The nickname of the user.
     *
     * @example test_NickName
     *
     * @var string
     */
    public $nickName;

    /**
     * @description The notification method. The system returns one or more values. Valid values:
     *
     *   **SMS**: text message
     *   **EMAIL**: email.
     *   **DINGDING**: DingTalk.
     *   **DINGROBOT**: DingTalk chatbot.
     *   **WEBHOOK**: webhook.
     *
     * @example DINGROBOT
     *
     * @var string
     */
    public $notificationMode;

    /**
     * @description The ID of the Alibaba Cloud account of the user.
     *
     * @example 140692647406****
     *
     * @var string
     */
    public $parentUid;

    /**
     * @description The IDs of the roles.
     *
     * @var roleIdList
     */
    public $roleIdList;

    /**
     * @description The names of roles.
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
     * @example HMAC_SHA1
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
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 167382665015****
     *
     * @var string
     */
    public $uid;

    /**
     * @description The ID of the user.
     *
     * @example 8****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The webhook URL that is used to receive notifications.
     *
     * >
     *
     *   If you have set a webhook URL, DMS sends notifications to the specified URL.
     *
     *   The system does not return this parameter if you have not set a webhook URL.
     *
     * @example http://dms-XXX.aliyun.com:8***
     *
     * @var string
     */
    public $webhook;
    protected $_name = [
        'curExecuteCount' => 'CurExecuteCount',
        'curResultCount' => 'CurResultCount',
        'dingRobot' => 'DingRobot',
        'email' => 'Email',
        'lastLoginTime' => 'LastLoginTime',
        'maxExecuteCount' => 'MaxExecuteCount',
        'maxResultCount' => 'MaxResultCount',
        'mobile' => 'Mobile',
        'nickName' => 'NickName',
        'notificationMode' => 'NotificationMode',
        'parentUid' => 'ParentUid',
        'roleIdList' => 'RoleIdList',
        'roleNameList' => 'RoleNameList',
        'signatureMethod' => 'SignatureMethod',
        'state' => 'State',
        'uid' => 'Uid',
        'userId' => 'UserId',
        'webhook' => 'Webhook',
    ];

    public function validate(): void {}

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
