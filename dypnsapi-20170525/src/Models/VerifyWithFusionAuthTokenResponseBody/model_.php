<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyWithFusionAuthTokenResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @example 180********
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $phoneScore;

    /**
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
