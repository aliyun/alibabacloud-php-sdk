<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\PatchUserRequest\customFields;
use AlibabaCloud\Tea\Model;

class PatchUserRequest extends Model
{
    /**
     * @var customFields[]
     */
    public $customFields;

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
     * @description The username of the account.
     *
     * @example name001
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'customFields' => 'customFields',
        'displayName' => 'displayName',
        'email' => 'email',
        'emailVerified' => 'emailVerified',
        'phoneNumber' => 'phoneNumber',
        'phoneNumberVerified' => 'phoneNumberVerified',
        'phoneRegion' => 'phoneRegion',
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
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->emailVerified) {
            $res['emailVerified'] = $this->emailVerified;
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
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PatchUserRequest
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
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['emailVerified'])) {
            $model->emailVerified = $map['emailVerified'];
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
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
