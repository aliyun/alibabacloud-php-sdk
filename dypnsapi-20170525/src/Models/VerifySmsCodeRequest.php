<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class VerifySmsCodeRequest extends Model
{
    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $smsCode;

    /**
     * @var string
     */
    public $smsToken;
    protected $_name = [
        'phoneNumber' => 'PhoneNumber',
        'smsCode' => 'SmsCode',
        'smsToken' => 'SmsToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
