<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateUserRequest\customFields;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateUserRequest\passwordInitializationConfig;
use AlibabaCloud\Tea\Model;

class CreateUserRequest extends Model
{
    /**
     * @description Custom fields
     *
     * @var customFields[]
     */
    public $customFields;

    /**
     * @description The description of the account. The description can be up to 256 characters in length.
     *
     * @example test user
     *
     * @var string
     */
    public $description;

    /**
     * @description The display name of the account. The display name can be up to 64 characters in length.
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
     * @description Indicates whether the email address is verified. This field is required if an email address is specified. If you have no special requirement, set this parameter to true.
     *
     * @example true
     *
     * @var bool
     */
    public $emailVerified;

    /**
     * @description The password of the account. For information about the password rules, go to the Create User panel in the Identity as a Service (IDaaS) console.
     *
     * @example xxxxx
     *
     * @var string
     */
    public $password;

    /**
     * @description Configure the initial password
     *
     * @var passwordInitializationConfig
     */
    public $passwordInitializationConfig;

    /**
     * @description The mobile number of the user who owns the account.
     *
     * @example 156xxxxxxx
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description Indicates whether the mobile number is verified. This field is required if a mobile number is specified. If you have no special requirement, set this parameter to true.
     *
     * @example true
     *
     * @var bool
     */
    public $phoneNumberVerified;

    /**
     * @description The country code of the mobile number. For example, the country code of China is 86 without 00 or +. This parameter is required if a mobile number is specified.
     *
     * @example 86
     *
     * @var string
     */
    public $phoneRegion;

    /**
     * @description The ID of the primary organizational unit.
     *
     * This parameter is required.
     *
     * @example ou_wovwffm62xifdziem7an7xxxxx
     *
     * @var string
     */
    public $primaryOrganizationalUnitId;

    /**
     * @description The external ID of the account. The external ID can be used to map external data to the data of the account in EIAM of Identity as a Service (IDaaS). By default, the external ID is the account ID.
     *
     * @example user_d6sbsuumeta4h66ec3il7yxxxx
     *
     * @var string
     */
    public $userExternalId;

    /**
     * @description The username of the account.
     *
     * This parameter is required.
     *
     * @example name001
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'customFields' => 'customFields',
        'description' => 'description',
        'displayName' => 'displayName',
        'email' => 'email',
        'emailVerified' => 'emailVerified',
        'password' => 'password',
        'passwordInitializationConfig' => 'passwordInitializationConfig',
        'phoneNumber' => 'phoneNumber',
        'phoneNumberVerified' => 'phoneNumberVerified',
        'phoneRegion' => 'phoneRegion',
        'primaryOrganizationalUnitId' => 'primaryOrganizationalUnitId',
        'userExternalId' => 'userExternalId',
        'username' => 'username',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->customFields) {
            $res['customFields'] = [];
            if (null !== $this->customFields && \is_array($this->customFields)) {
                $n = 0;
                foreach ($this->customFields as $item) {
                    $res['customFields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }
        if (null !== $this->passwordInitializationConfig) {
            $res['passwordInitializationConfig'] = null !== $this->passwordInitializationConfig ? $this->passwordInitializationConfig->toMap() : null;
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
        if (null !== $this->primaryOrganizationalUnitId) {
            $res['primaryOrganizationalUnitId'] = $this->primaryOrganizationalUnitId;
        }
        if (null !== $this->userExternalId) {
            $res['userExternalId'] = $this->userExternalId;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
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
        if (isset($map['customFields'])) {
            if (!empty($map['customFields'])) {
                $model->customFields = [];
                $n = 0;
                foreach ($map['customFields'] as $item) {
                    $model->customFields[$n++] = null !== $item ? customFields::fromMap($item) : $item;
                }
            }
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
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }
        if (isset($map['passwordInitializationConfig'])) {
            $model->passwordInitializationConfig = passwordInitializationConfig::fromMap($map['passwordInitializationConfig']);
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
        if (isset($map['primaryOrganizationalUnitId'])) {
            $model->primaryOrganizationalUnitId = $map['primaryOrganizationalUnitId'];
        }
        if (isset($map['userExternalId'])) {
            $model->userExternalId = $map['userExternalId'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
