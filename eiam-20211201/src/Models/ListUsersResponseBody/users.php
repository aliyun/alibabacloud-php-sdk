<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersResponseBody;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @description The time when the account expires. This value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1652085686179
     *
     * @var int
     */
    public $accountExpireTime;

    /**
     * @description The time when the account was created. This value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1652085686179
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The description of the account.
     *
     * @example Test account
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
     * @example user@example.com
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
     * @description The ID of the instance
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The time when the account lock expires. This value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1652085686179
     *
     * @var int
     */
    public $lockExpireTime;

    /**
     * @description Time When Password Expires
     *
     * @example 1652085686179
     *
     * @var int
     */
    public $passwordExpireTime;

    /**
     * @description Indicates whether a password is set.
     *
     * @example false
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
     * @description The time when the account was registered. This value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1652085686179
     *
     * @var int
     */
    public $registerTime;

    /**
     * @description The status of the account. Valid values:
     *
     *   enabled: The account is enabled.
     *   disabled: The account is disabled.
     *
     * @example enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the account was last updated. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1652085686179
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description The external ID of the account. The external ID can be used by external data to map the data of the account in IDaaS EIAM. By default, the external ID is the account ID.
     *
     * For accounts with the same source type and source ID, each account has a unique external ID.
     * @example user_d6sbsuumeta4h66ec3il7yxxxx
     *
     * @var string
     */
    public $userExternalId;

    /**
     * @description The ID of the account.
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
        'accountExpireTime'   => 'AccountExpireTime',
        'createTime'          => 'CreateTime',
        'description'         => 'Description',
        'displayName'         => 'DisplayName',
        'email'               => 'Email',
        'emailVerified'       => 'EmailVerified',
        'instanceId'          => 'InstanceId',
        'lockExpireTime'      => 'LockExpireTime',
        'passwordExpireTime'  => 'PasswordExpireTime',
        'passwordSet'         => 'PasswordSet',
        'phoneNumber'         => 'PhoneNumber',
        'phoneNumberVerified' => 'PhoneNumberVerified',
        'phoneRegion'         => 'PhoneRegion',
        'registerTime'        => 'RegisterTime',
        'status'              => 'Status',
        'updateTime'          => 'UpdateTime',
        'userExternalId'      => 'UserExternalId',
        'userId'              => 'UserId',
        'userSourceId'        => 'UserSourceId',
        'userSourceType'      => 'UserSourceType',
        'username'            => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountExpireTime) {
            $res['AccountExpireTime'] = $this->accountExpireTime;
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
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->emailVerified) {
            $res['EmailVerified'] = $this->emailVerified;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lockExpireTime) {
            $res['LockExpireTime'] = $this->lockExpireTime;
        }
        if (null !== $this->passwordExpireTime) {
            $res['PasswordExpireTime'] = $this->passwordExpireTime;
        }
        if (null !== $this->passwordSet) {
            $res['PasswordSet'] = $this->passwordSet;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->phoneNumberVerified) {
            $res['PhoneNumberVerified'] = $this->phoneNumberVerified;
        }
        if (null !== $this->phoneRegion) {
            $res['PhoneRegion'] = $this->phoneRegion;
        }
        if (null !== $this->registerTime) {
            $res['RegisterTime'] = $this->registerTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userExternalId) {
            $res['UserExternalId'] = $this->userExternalId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userSourceId) {
            $res['UserSourceId'] = $this->userSourceId;
        }
        if (null !== $this->userSourceType) {
            $res['UserSourceType'] = $this->userSourceType;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return users
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountExpireTime'])) {
            $model->accountExpireTime = $map['AccountExpireTime'];
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
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['EmailVerified'])) {
            $model->emailVerified = $map['EmailVerified'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LockExpireTime'])) {
            $model->lockExpireTime = $map['LockExpireTime'];
        }
        if (isset($map['PasswordExpireTime'])) {
            $model->passwordExpireTime = $map['PasswordExpireTime'];
        }
        if (isset($map['PasswordSet'])) {
            $model->passwordSet = $map['PasswordSet'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['PhoneNumberVerified'])) {
            $model->phoneNumberVerified = $map['PhoneNumberVerified'];
        }
        if (isset($map['PhoneRegion'])) {
            $model->phoneRegion = $map['PhoneRegion'];
        }
        if (isset($map['RegisterTime'])) {
            $model->registerTime = $map['RegisterTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserExternalId'])) {
            $model->userExternalId = $map['UserExternalId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserSourceId'])) {
            $model->userSourceId = $map['UserSourceId'];
        }
        if (isset($map['UserSourceType'])) {
            $model->userSourceType = $map['UserSourceType'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
