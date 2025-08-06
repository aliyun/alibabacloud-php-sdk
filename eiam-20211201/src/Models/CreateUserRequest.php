<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateUserRequest\customFields;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateUserRequest\passwordInitializationConfig;

class CreateUserRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

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
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $organizationalUnitIds;

    /**
     * @var string
     */
    public $password;

    /**
     * @var passwordInitializationConfig
     */
    public $passwordInitializationConfig;

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
    public $primaryOrganizationalUnitId;

    /**
     * @var string
     */
    public $userExternalId;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'customFields' => 'CustomFields',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'email' => 'Email',
        'emailVerified' => 'EmailVerified',
        'instanceId' => 'InstanceId',
        'organizationalUnitIds' => 'OrganizationalUnitIds',
        'password' => 'Password',
        'passwordInitializationConfig' => 'PasswordInitializationConfig',
        'phoneNumber' => 'PhoneNumber',
        'phoneNumberVerified' => 'PhoneNumberVerified',
        'phoneRegion' => 'PhoneRegion',
        'primaryOrganizationalUnitId' => 'PrimaryOrganizationalUnitId',
        'userExternalId' => 'UserExternalId',
        'username' => 'Username',
    ];

    public function validate()
    {
        if (\is_array($this->customFields)) {
            Model::validateArray($this->customFields);
        }
        if (\is_array($this->organizationalUnitIds)) {
            Model::validateArray($this->organizationalUnitIds);
        }
        if (null !== $this->passwordInitializationConfig) {
            $this->passwordInitializationConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->organizationalUnitIds) {
            if (\is_array($this->organizationalUnitIds)) {
                $res['OrganizationalUnitIds'] = [];
                $n1 = 0;
                foreach ($this->organizationalUnitIds as $item1) {
                    $res['OrganizationalUnitIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->passwordInitializationConfig) {
            $res['PasswordInitializationConfig'] = null !== $this->passwordInitializationConfig ? $this->passwordInitializationConfig->toArray($noStream) : $this->passwordInitializationConfig;
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

        if (null !== $this->primaryOrganizationalUnitId) {
            $res['PrimaryOrganizationalUnitId'] = $this->primaryOrganizationalUnitId;
        }

        if (null !== $this->userExternalId) {
            $res['UserExternalId'] = $this->userExternalId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OrganizationalUnitIds'])) {
            if (!empty($map['OrganizationalUnitIds'])) {
                $model->organizationalUnitIds = [];
                $n1 = 0;
                foreach ($map['OrganizationalUnitIds'] as $item1) {
                    $model->organizationalUnitIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['PasswordInitializationConfig'])) {
            $model->passwordInitializationConfig = passwordInitializationConfig::fromMap($map['PasswordInitializationConfig']);
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

        if (isset($map['PrimaryOrganizationalUnitId'])) {
            $model->primaryOrganizationalUnitId = $map['PrimaryOrganizationalUnitId'];
        }

        if (isset($map['UserExternalId'])) {
            $model->userExternalId = $map['UserExternalId'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
