<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyWithFusionAuthTokenResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @description The phone number, which is returned when the verification is successful.
     *
     * @example 180********
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The phone number score, which is generated only after the phone number scoring node is enabled and the verification is successful. The higher the score, the more risky the phone number. Valid values: 0 to 100.
     *
     * @example 20
     *
     * @var int
     */
    public $phoneScore;

    /**
     * @description The verification result. Valid values: PASS and UNKNOWN.
     *
     * @example PASS
     *
     * @var string
     */
    public $verifyResult;
    protected $_name = [
        'phoneNumber'  => 'PhoneNumber',
        'phoneScore'   => 'PhoneScore',
        'verifyResult' => 'VerifyResult',
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
        if (null !== $this->phoneScore) {
            $res['PhoneScore'] = $this->phoneScore;
        }
        if (null !== $this->verifyResult) {
            $res['VerifyResult'] = $this->verifyResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['PhoneScore'])) {
            $model->phoneScore = $map['PhoneScore'];
        }
        if (isset($map['VerifyResult'])) {
            $model->verifyResult = $map['VerifyResult'];
        }

        return $model;
    }
}
