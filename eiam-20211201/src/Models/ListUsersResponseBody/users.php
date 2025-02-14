<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersResponseBody;

use AlibabaCloud\Dara\Model;

class users extends Model
{
    /**
     * @var int
     */
    public $accountExpireTime;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var string
     */
    public $email;
    /**
     * @var bool
     */
    public $emailVerified;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var int
     */
    public $lockExpireTime;
    /**
     * @var int
     */
    public $passwordExpireTime;
    /**
     * @var bool
     */
    public $passwordSet;
    /**
     * @var string
     */
    public $phoneNumber;
    /**
     * @var bool
     */
    public $phoneNumberVerified;
    /**
     * @var string
     */
    public $phoneRegion;
    /**
     * @var int
     */
    public $registerTime;
    /**
     * @var string
     */
    public $status;
    /**
     * @var int
     */
    public $updateTime;
    /**
     * @var string
     */
    public $userExternalId;
    /**
     * @var string
     */
    public $userId;
    /**
     * @var string
     */
    public $userSourceId;
    /**
     * @var string
     */
    public $userSourceType;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
