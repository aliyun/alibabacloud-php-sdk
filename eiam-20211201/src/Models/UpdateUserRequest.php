<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateUserRequest\customFields;

class UpdateUserRequest extends Model
{
    /**
     * @var customFields[]
     */
    public $customFields;

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
    public $userId;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'customFields' => 'CustomFields',
        'displayName' => 'DisplayName',
        'email' => 'Email',
        'emailVerified' => 'EmailVerified',
        'instanceId' => 'InstanceId',
        'phoneNumber' => 'PhoneNumber',
        'phoneNumberVerified' => 'PhoneNumberVerified',
        'phoneRegion' => 'PhoneRegion',
        'userId' => 'UserId',
        'username' => 'Username',
    ];

    public function validate()
    {
        if (\is_array($this->customFields)) {
            Model::validateArray($this->customFields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        if (null !== $this->phoneNumberVerified) {
            $res['PhoneNumberVerified'] = $this->phoneNumberVerified;
        }

        if (null !== $this->phoneRegion) {
            $res['PhoneRegion'] = $this->phoneRegion;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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

        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        if (isset($map['PhoneNumberVerified'])) {
            $model->phoneNumberVerified = $map['PhoneNumberVerified'];
        }

        if (isset($map['PhoneRegion'])) {
            $model->phoneRegion = $map['PhoneRegion'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
