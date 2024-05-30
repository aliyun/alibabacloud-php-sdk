<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class GetPreValidatePhoneIdRequest extends Model
{
    /**
     * @description The phone number.
     *
     * This parameter is required.
     * @example 861380000
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The verification code provided when you purchased the pre-registered phone number.
     *
     * This parameter is required.
     * @example 208393
     *
     * @var string
     */
    public $verifyCode;
    protected $_name = [
        'phoneNumber' => 'PhoneNumber',
        'verifyCode'  => 'VerifyCode',
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
        if (null !== $this->verifyCode) {
            $res['VerifyCode'] = $this->verifyCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPreValidatePhoneIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['VerifyCode'])) {
            $model->verifyCode = $map['VerifyCode'];
        }

        return $model;
    }
}
