<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListUsersResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The time when the account expires. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1652085686179
     *
     * @var int
     */
    public $accountExpireTime;

    /**
     * @description The time when the account was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1652085686179
     *
     * @var int
     */
    public $createTime;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $description;

    /**
     * @description The display name of the account.
     *
     * @example display_name001
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The email address of the user who owns the account.
     *
     * @example example@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description Indicates whether the email address has been verified. A value of true indicates that the email address has been verified by the user or has been set to the verified status by the administrator. A value of false indicates that the email address has not been verified.
     *
     * @example true
     *
     * @var bool
     */
    public $emailVerified;

    /**
     * @description The instance ID.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The time when the account lock expires. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1652085686179
     *
     * @var int
     */
    public $lockExpireTime;

    /**
     * @description 密码是否已设置
     *
     * @example true
     *
     * @var bool
     */
    public $passwordSet;

    /**
     * @description The mobile number of the user who owns the account.
     *
     * @example 156xxxxxxx
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description Indicates whether the mobile number has been verified. A value of true indicates that the mobile number has been verified by the user or has been set to the verified status by the administrator. A value of false indicates that the mobile number has not been verified.
     *
     * @example true
     *
     * @var bool
     */
    public $phoneNumberVerified;

    /**
     * @description The country code of the mobile number. For example, the country code of China is 86 without 00 or +.
     *
     * @example 86
     *
     * @var string
     */
    public $phoneRegion;

    /**
     * @description The time when the account was registered. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1652085686179
     *
     * @var int
     */
    public $registerTime;

    /**
     * @description The status of the account. Valid values: enabled disabled
     *
     * @example enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the account was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1652085686179
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description The external ID of the account. The external ID can be used to map external data to the data of the account in EIAM of Identity as a Service (IDaaS). By default, the external ID is the account ID.
     *
     * Note: For accounts with the same source type and source ID, each account has a unique external ID.
     *
     * @example user_d6sbsuumeta4h66ec3il7yxxxx
     *
     * @var string
     */
    public $userExternalId;

    /**
     * @description The account ID.
     *
     * @example user_d6sbsuumeta4h66ec3il7yxxxx
     *
     * @var string
     */
    public $userId;

    /**
     * @description The source ID of the account.
     *
     * If the account was created in IDaaS, its source ID is the ID of the IDaaS instance. If the account was imported, its source ID is the enterprise ID in the source. For example, if the account was imported from DingTalk, its source ID is the corpId value of the enterprise in DingTalk.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $userSourceId;

    /**
     * @description The source type of the account. Valid values:
     *
     *   build_in: The account was created in IDaaS.
     *   ding_talk: The account was imported from DingTalk.
     *   ad: The account was imported from Microsoft Active Directory (AD).
     *   ldap: The account was imported from a Lightweight Directory Access Protocol (LDAP) service.
     *
     * @example build_in
     *
     * @var string
     */
    public $userSourceType;

    /**
     * @description The username of the account.
     *
     * @example name001
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'accountExpireTime' => 'accountExpireTime',
        'createTime' => 'createTime',
        'description' => 'description',
        'displayName' => 'displayName',
        'email' => 'email',
        'emailVerified' => 'emailVerified',
        'instanceId' => 'instanceId',
        'lockExpireTime' => 'lockExpireTime',
        'passwordSet' => 'passwordSet',
        'phoneNumber' => 'phoneNumber',
        'phoneNumberVerified' => 'phoneNumberVerified',
        'phoneRegion' => 'phoneRegion',
        'registerTime' => 'registerTime',
        'status' => 'status',
        'updateTime' => 'updateTime',
        'userExternalId' => 'userExternalId',
        'userId' => 'userId',
        'userSourceId' => 'userSourceId',
        'userSourceType' => 'userSourceType',
        'username' => 'username',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountExpireTime) {
            $res['accountExpireTime'] = $this->accountExpireTime;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->emailVerified) {
            $res['emailVerified'] = $this->emailVerified;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->lockExpireTime) {
            $res['lockExpireTime'] = $this->lockExpireTime;
        }
        if (null !== $this->passwordSet) {
            $res['passwordSet'] = $this->passwordSet;
        }
        if (null !== $this->phoneNumber) {
            $res['phoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->phoneNumberVerified) {
            $res['phoneNumberVerified'] = $this->phoneNumberVerified;
        }
        if (null !== $this->phoneRegion) {
            $res['phoneRegion'] = $this->phoneRegion;
        }
        if (null !== $this->registerTime) {
            $res['registerTime'] = $this->registerTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }
        if (null !== $this->userExternalId) {
            $res['userExternalId'] = $this->userExternalId;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->userSourceId) {
            $res['userSourceId'] = $this->userSourceId;
        }
        if (null !== $this->userSourceType) {
            $res['userSourceType'] = $this->userSourceType;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountExpireTime'])) {
            $model->accountExpireTime = $map['accountExpireTime'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['emailVerified'])) {
            $model->emailVerified = $map['emailVerified'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['lockExpireTime'])) {
            $model->lockExpireTime = $map['lockExpireTime'];
        }
        if (isset($map['passwordSet'])) {
            $model->passwordSet = $map['passwordSet'];
        }
        if (isset($map['phoneNumber'])) {
            $model->phoneNumber = $map['phoneNumber'];
        }
        if (isset($map['phoneNumberVerified'])) {
            $model->phoneNumberVerified = $map['phoneNumberVerified'];
        }
        if (isset($map['phoneRegion'])) {
            $model->phoneRegion = $map['phoneRegion'];
        }
        if (isset($map['registerTime'])) {
            $model->registerTime = $map['registerTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }
        if (isset($map['userExternalId'])) {
            $model->userExternalId = $map['userExternalId'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['userSourceId'])) {
            $model->userSourceId = $map['userSourceId'];
        }
        if (isset($map['userSourceType'])) {
            $model->userSourceType = $map['userSourceType'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
