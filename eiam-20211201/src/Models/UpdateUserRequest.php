<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateUserRequest\customFields;
use AlibabaCloud\Tea\Model;

class UpdateUserRequest extends Model
{
    /**
     * @description The custom extended fields.
     *
     * @var customFields[]
     */
    public $customFields;

    /**
     * @description The display name of the account. The display name can be up to 64 characters in length.
     *
     * @example test_name
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The email address. The prefix of the email address can contain letters, digits, periods (.), underscores (_), and hyphens (-).
     *
     * @example example@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description Specifies whether the email address is verified. This parameter must be specified if you specify Email. You can set this parameter to true if you have no special business requirements.
     *
     * @example true
     *
     * @var bool
     */
    public $emailVerified;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The mobile number. The mobile number must be 6 to 15 digits in length.
     *
     * @example 156xxxxxxxxx
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description Specifies whether the mobile number is verified. This parameter must be specified if you specify PhoneNumber. You can set this parameter to true if you have no special business requirements.
     *
     * @example true
     *
     * @var bool
     */
    public $phoneNumberVerified;

    /**
     * @description The area code of the mobile number. For example, the area code of a mobile number in the Chinese mainland is 86 without 00 or the plus sign (+). This parameter must be specified if you specify PhoneNumber.
     *
     * @example 86
     *
     * @var string
     */
    public $phoneRegion;

    /**
     * @description The account ID.
     *
     * This parameter is required.
     * @example user_d6sbsuumeta4h66ec3il7yxxxx
     *
     * @var string
     */
    public $userId;

    /**
     * @description The name of the account. The name can be up to 64 characters in length. It can contain letters, digits, and the following special characters: _ . @ -
     *
     * @example username_test
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'customFields'        => 'CustomFields',
        'displayName'         => 'DisplayName',
        'email'               => 'Email',
        'emailVerified'       => 'EmailVerified',
        'instanceId'          => 'InstanceId',
        'phoneNumber'         => 'PhoneNumber',
        'phoneNumberVerified' => 'PhoneNumberVerified',
        'phoneRegion'         => 'PhoneRegion',
        'userId'              => 'UserId',
        'username'            => 'Username',
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

    /**
     * @param array $map
     *
     * @return UpdateUserRequest
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
