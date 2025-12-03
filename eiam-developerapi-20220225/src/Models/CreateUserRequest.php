<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateUserRequest\customFields;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateUserRequest\passwordInitializationConfig;

class CreateUserRequest extends Model
{
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

    public function validate()
    {
        if (\is_array($this->customFields)) {
            Model::validateArray($this->customFields);
        }
        if (null !== $this->passwordInitializationConfig) {
            $this->passwordInitializationConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customFields) {
            if (\is_array($this->customFields)) {
                $res['customFields'] = [];
                $n1 = 0;
                foreach ($this->customFields as $item1) {
                    $res['customFields'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            $res['passwordInitializationConfig'] = null !== $this->passwordInitializationConfig ? $this->passwordInitializationConfig->toArray($noStream) : $this->passwordInitializationConfig;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['customFields'])) {
            if (!empty($map['customFields'])) {
                $model->customFields = [];
                $n1 = 0;
                foreach ($map['customFields'] as $item1) {
                    $model->customFields[$n1] = customFields::fromMap($item1);
                    ++$n1;
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
