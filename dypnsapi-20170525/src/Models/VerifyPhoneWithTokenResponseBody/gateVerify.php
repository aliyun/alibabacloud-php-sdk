<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyPhoneWithTokenResponseBody;

use AlibabaCloud\Tea\Model;

class gateVerify extends Model
{
    /**
     * @var string
     */
    public $verifyResult;

    /**
     * @var string
     */
    public $verifyId;
    protected $_name = [
        'verifyResult' => 'VerifyResult',
        'verifyId'     => 'VerifyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->verifyResult) {
            $res['VerifyResult'] = $this->verifyResult;
        }
        if (null !== $this->verifyId) {
            $res['VerifyId'] = $this->verifyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gateVerify
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VerifyResult'])) {
            $model->verifyResult = $map['VerifyResult'];
        }
        if (isset($map['VerifyId'])) {
            $model->verifyId = $map['VerifyId'];
        }

        return $model;
    }
}
