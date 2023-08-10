<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateUserRequest\customFields;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateUserRequest\passwordInitializationConfig;
use AlibabaCloud\Tea\Model;

class CreateUserRequest extends Model
{
    /**
     * @description The extended fields.
     *
     * @example description
     *
     * @var customFields[]
     */
    public $customFields;

    /**
     * @description The description of the organizational unit. The description can be up to 256 characters in length.
     *
     * @example description text
     *
     * @var string
     */
    public $description;

    /**
     * @description The display name of the account. The display name can be up to 64 characters in length.
     *
     * @example name_001
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The email address of the user who owns the account. The email address prefix can contain letters, digits, underscores (\_), periods (.), and hyphens (-).
     *
     * @example example@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description Specifies whether the email address is a trusted email address. This parameter is required if the Email parameter is specified. If you have no special business requirements, set this parameter to true.
     *
     * @example true
     *
     * @var bool
     */
    public $emailVerified;

    /**
     * @description The ID of the instance.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IDs of organizational units to which the account belongs. An account can belong to multiple organizational units.
     *
     * @var string[]
     */
    public $organizationalUnitIds;

    /**
     * @description The password of the account. For more information, view the password policy of the instance in the IDaaS console.
     *
     * @example 123456
     *
     * @var string
     */
    public $password;

    /**
     * @description The configurations for password initialization.
     *
     * @var passwordInitializationConfig
     */
    public $passwordInitializationConfig;

    /**
     * @description The mobile phone number, which contains 6 to 15 digits.
     *
     * @example 12345678901
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description Specifies whether the mobile phone number is a trusted mobile phone number. This parameter is required if the PhoneNumber parameter is specified. If you have no special business requirements, set this parameter to true.
     *
     * @example true
     *
     * @var bool
     */
    public $phoneNumberVerified;

    /**
     * @description The country code of the mobile phone number. The country code contains only digits and does not contain a plus sign (+).
     *
     * @example 86
     *
     * @var string
     */
    public $phoneRegion;

    /**
     * @description The ID of the primary organizational unit to which the account belongs.
     *
     * @example ou_wovwffm62xifdziem7an7xxxxx
     *
     * @var string
     */
    public $primaryOrganizationalUnitId;

    /**
     * @description The external ID of the account. The external ID can be used to associate the account with an external system. The external ID can be up to 64 characters in length. If you do not specify an external ID for the account, the ID of the account is used as the external ID by default.
     *
     * @example user_d6sbsuumeta4h66ec3il7yxxxx
     *
     * @var string
     */
    public $userExternalId;

    /**
     * @description The name of the account. The name can be up to 64 characters in length and can contain letters, digits, underscores (\_), periods (.), at signs (@), and hyphens (-).
     *
     * @example user_001
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'customFields'                 => 'CustomFields',
        'description'                  => 'Description',
        'displayName'                  => 'DisplayName',
        'email'                        => 'Email',
        'emailVerified'                => 'EmailVerified',
        'instanceId'                   => 'InstanceId',
        'organizationalUnitIds'        => 'OrganizationalUnitIds',
        'password'                     => 'Password',
        'passwordInitializationConfig' => 'PasswordInitializationConfig',
        'phoneNumber'                  => 'PhoneNumber',
        'phoneNumberVerified'          => 'PhoneNumberVerified',
        'phoneRegion'                  => 'PhoneRegion',
        'primaryOrganizationalUnitId'  => 'PrimaryOrganizationalUnitId',
        'userExternalId'               => 'UserExternalId',
        'username'                     => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customFields) {
            $res['CustomFields'] = [];
            if (null !== $this->customFields && \is_array($this->customFields)) {
                $n = 0;
                foreach ($this->customFields as $item) {
                    $res['CustomFields'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['OrganizationalUnitIds'] = $this->organizationalUnitIds;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->passwordInitializationConfig) {
            $res['PasswordInitializationConfig'] = null !== $this->passwordInitializationConfig ? $this->passwordInitializationConfig->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return CreateUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomFields'])) {
            if (!empty($map['CustomFields'])) {
                $model->customFields = [];
                $n                   = 0;
                foreach ($map['CustomFields'] as $item) {
                    $model->customFields[$n++] = null !== $item ? customFields::fromMap($item) : $item;
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
                $model->organizationalUnitIds = $map['OrganizationalUnitIds'];
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
