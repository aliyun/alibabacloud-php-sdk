<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class BindSecureMobilePhoneRequest extends Model
{
    /**
     * @description The Alibaba Cloud account ID of the member.
     *
     * @example 138660628348****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The mobile phone number that you want to bind to the member for security purposes.
     *
     * >  Mobile phone numbers in the `86-<Mobile phone number>` format in the Chinese mainland are not supported.
     * @example xx-13900001234
     *
     * @var string
     */
    public $secureMobilePhone;

    /**
     * @description The verification code.
     *
     * You can call the [SendVerificationCodeForBindSecureMobilePhone](~~372556~~) operation to obtain the verification code.
     * @example 123456
     *
     * @var string
     */
    public $verificationCode;
    protected $_name = [
        'accountId'         => 'AccountId',
        'secureMobilePhone' => 'SecureMobilePhone',
        'verificationCode'  => 'VerificationCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->secureMobilePhone) {
            $res['SecureMobilePhone'] = $this->secureMobilePhone;
        }
        if (null !== $this->verificationCode) {
            $res['VerificationCode'] = $this->verificationCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindSecureMobilePhoneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['SecureMobilePhone'])) {
            $model->secureMobilePhone = $map['SecureMobilePhone'];
        }
        if (isset($map['VerificationCode'])) {
            $model->verificationCode = $map['VerificationCode'];
        }

        return $model;
    }
}
