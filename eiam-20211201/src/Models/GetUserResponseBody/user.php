<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetUserResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetUserResponseBody\user\customFields;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetUserResponseBody\user\groups;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetUserResponseBody\user\organizationalUnits;

class user extends Model
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
     * @var customFields[]
     */
    public $customFields;

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
     * @var groups[]
     */
    public $groups;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $lockExpireTime;

    /**
     * @var organizationalUnits[]
     */
    public $organizationalUnits;

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
     * @var string
     */
    public $preferredLanguage;

    /**
     * @var string
     */
    public $primaryOrganizationalUnitId;

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
        'accountExpireTime' => 'AccountExpireTime',
        'createTime' => 'CreateTime',
        'customFields' => 'CustomFields',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'email' => 'Email',
        'emailVerified' => 'EmailVerified',
        'groups' => 'Groups',
        'instanceId' => 'InstanceId',
        'lockExpireTime' => 'LockExpireTime',
        'organizationalUnits' => 'OrganizationalUnits',
        'passwordExpireTime' => 'PasswordExpireTime',
        'passwordSet' => 'PasswordSet',
        'phoneNumber' => 'PhoneNumber',
        'phoneNumberVerified' => 'PhoneNumberVerified',
        'phoneRegion' => 'PhoneRegion',
        'preferredLanguage' => 'PreferredLanguage',
        'primaryOrganizationalUnitId' => 'PrimaryOrganizationalUnitId',
        'registerTime' => 'RegisterTime',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
        'userExternalId' => 'UserExternalId',
        'userId' => 'UserId',
        'userSourceId' => 'UserSourceId',
        'userSourceType' => 'UserSourceType',
        'username' => 'Username',
    ];

    public function validate()
    {
        if (\is_array($this->customFields)) {
            Model::validateArray($this->customFields);
        }
        if (\is_array($this->groups)) {
            Model::validateArray($this->groups);
        }
        if (\is_array($this->organizationalUnits)) {
            Model::validateArray($this->organizationalUnits);
        }
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

        if (null !== $this->customFields) {
            if (\is_array($this->customFields)) {
                $res['CustomFields'] = [];
                $n1 = 0;
                foreach ($this->customFields as $item1) {
                    $res['CustomFields'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->groups) {
            if (\is_array($this->groups)) {
                $res['Groups'] = [];
                $n1 = 0;
                foreach ($this->groups as $item1) {
                    $res['Groups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lockExpireTime) {
            $res['LockExpireTime'] = $this->lockExpireTime;
        }

        if (null !== $this->organizationalUnits) {
            if (\is_array($this->organizationalUnits)) {
                $res['OrganizationalUnits'] = [];
                $n1 = 0;
                foreach ($this->organizationalUnits as $item1) {
                    $res['OrganizationalUnits'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->preferredLanguage) {
            $res['PreferredLanguage'] = $this->preferredLanguage;
        }

        if (null !== $this->primaryOrganizationalUnitId) {
            $res['PrimaryOrganizationalUnitId'] = $this->primaryOrganizationalUnitId;
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

        if (isset($map['CustomFields'])) {
            if (!empty($map['CustomFields'])) {
                $model->customFields = [];
                $n1 = 0;
                foreach ($map['CustomFields'] as $item1) {
                    $model->customFields[$n1] = customFields::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['Groups'])) {
            if (!empty($map['Groups'])) {
                $model->groups = [];
                $n1 = 0;
                foreach ($map['Groups'] as $item1) {
                    $model->groups[$n1] = groups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LockExpireTime'])) {
            $model->lockExpireTime = $map['LockExpireTime'];
        }

        if (isset($map['OrganizationalUnits'])) {
            if (!empty($map['OrganizationalUnits'])) {
                $model->organizationalUnits = [];
                $n1 = 0;
                foreach ($map['OrganizationalUnits'] as $item1) {
                    $model->organizationalUnits[$n1] = organizationalUnits::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['PreferredLanguage'])) {
            $model->preferredLanguage = $map['PreferredLanguage'];
        }

        if (isset($map['PrimaryOrganizationalUnitId'])) {
            $model->primaryOrganizationalUnitId = $map['PrimaryOrganizationalUnitId'];
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
