<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class SetVerificationInfoRequest extends Model
{
    /**
     * @description The email address.
     *
     * >  If you set `VerifyType` to `email`, you must specify this parameter.
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The mobile phone number.
     *
     * >  If you set `VerifyType` to `sms`, you must specify this parameter.
     * @example 86-13900001234
     *
     * @var string
     */
    public $mobilePhone;

    /**
     * @description The logon name of the RAM user.
     *
     * @example test@example.onaliyun.com
     *
     * @var string
     */
    public $userPrincipalName;

    /**
     * @description The multi-factor authentication (MFA) method. Valid values:
     *
     *   sms: mobile phone.
     *   email: email.
     *
     * @example sms
     *
     * @var string
     */
    public $verifyType;
    protected $_name = [
        'email'             => 'Email',
        'mobilePhone'       => 'MobilePhone',
        'userPrincipalName' => 'UserPrincipalName',
        'verifyType'        => 'VerifyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->mobilePhone) {
            $res['MobilePhone'] = $this->mobilePhone;
        }
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
        }
        if (null !== $this->verifyType) {
            $res['VerifyType'] = $this->verifyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetVerificationInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['MobilePhone'])) {
            $model->mobilePhone = $map['MobilePhone'];
        }
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }
        if (isset($map['VerifyType'])) {
            $model->verifyType = $map['VerifyType'];
        }

        return $model;
    }
}
