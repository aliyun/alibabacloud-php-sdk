<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyWithFusionAuthTokenResponseBody;

use AlibabaCloud\Dara\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var int
     */
    public $phoneScore;

    /**
     * @var string
     */
    public $verifyResult;
    protected $_name = [
        'phoneNumber' => 'PhoneNumber',
        'phoneScore' => 'PhoneScore',
        'verifyResult' => 'VerifyResult',
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

        if (null !== $this->phoneScore) {
            $res['PhoneScore'] = $this->phoneScore;
        }

        if (null !== $this->verifyResult) {
            $res['VerifyResult'] = $this->verifyResult;
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

        if (isset($map['PhoneScore'])) {
            $model->phoneScore = $map['PhoneScore'];
        }

        if (isset($map['VerifyResult'])) {
            $model->verifyResult = $map['VerifyResult'];
        }

        return $model;
    }
}
