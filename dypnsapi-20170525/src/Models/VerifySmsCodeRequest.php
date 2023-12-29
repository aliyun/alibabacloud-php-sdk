<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class VerifySmsCodeRequest extends Model
{
    /**
     * @description The phone number, which is used to receive SMS verification codes.
     *
     * @example 1321111****
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The SMS verification code.
     *
     * @example 12****
     *
     * @var string
     */
    public $smsCode;

    /**
     * @description The text message verification code. After you successfully call the corresponding API operation to send the SMS verification code, the end users receive the SMS verification code. SmsToken is returned by the SDK for SMS verification for you to verify the text message verification code. For an Android client, sendVerifyCode is called to send the verification code. For an iOS client, sendVerifyCodeWithTimeout is called to send the verification code. For more information, see [Overview](~~400434~~).
     *
     * @example sddsbvdbvjd****
     *
     * @var string
     */
    public $smsToken;
    protected $_name = [
        'phoneNumber' => 'PhoneNumber',
        'smsCode'     => 'SmsCode',
        'smsToken'    => 'SmsToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->smsCode) {
            $res['SmsCode'] = $this->smsCode;
        }
        if (null !== $this->smsToken) {
            $res['SmsToken'] = $this->smsToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifySmsCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['SmsCode'])) {
            $model->smsCode = $map['SmsCode'];
        }
        if (isset($map['SmsToken'])) {
            $model->smsToken = $map['SmsToken'];
        }

        return $model;
    }
}
