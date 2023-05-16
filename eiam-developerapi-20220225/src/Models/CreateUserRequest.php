<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateUserRequest\customFields;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateUserRequest\passwordInitializationConfig;
use AlibabaCloud\Tea\Model;

class CreateUserRequest extends Model
{
    /**
     * @var customFields[]
     */
    public $customFields;

    /**
     * @example xxxxx
     *
     * @var string
     */
    public $description;

    /**
     * @example display_name001
     *
     * @var string
     */
    public $displayName;

    /**
     * @example example@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @example true
     *
     * @var bool
     */
    public $emailVerified;

    /**
     * @example xxxxx
     *
     * @var string
     */
    public $password;

    /**
     * @var passwordInitializationConfig
     */
    public $passwordInitializationConfig;

    /**
     * @example 156xxxxxxx
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @example true
     *
     * @var bool
     */
    public $phoneNumberVerified;

    /**
     * @example 86
     *
     * @var string
     */
    public $phoneRegion;

    /**
     * @example ou_wovwffm62xifdziem7an7xxxxx
     *
     * @var string
     */
    public $primaryOrganizationalUnitId;

    /**
     * @example user_d6sbsuumeta4h66ec3il7yxxxx
     *
     * @var string
     */
    public $userExternalId;

    /**
     * @example name001
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'customFields'                 => 'customFields',
        'description'                  => 'description',
        'displayName'                  => 'displayName',
        'email'                        => 'email',
        'emailVerified'                => 'emailVerified',
        'password'                     => 'password',
        'passwordInitializationConfig' => 'passwordInitializationConfig',
        'phoneNumber'                  => 'phoneNumber',
        'phoneNumberVerified'          => 'phoneNumberVerified',
        'phoneRegion'                  => 'phoneRegion',
        'primaryOrganizationalUnitId'  => 'primaryOrganizationalUnitId',
        'userExternalId'               => 'userExternalId',
        'username'                     => 'username',
    ];

    public function validate()
    {
    }

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
                $n                   = 0;
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
