<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyMobileResponseBody;

use AlibabaCloud\Dara\Model;

class gateVerifyResultDTO extends Model
{
    /**
     * @var string
     */
    public $verifyId;

    /**
     * @var string
     */
    public $verifyResult;
    protected $_name = [
        'verifyId' => 'VerifyId',
        'verifyResult' => 'VerifyResult',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->verifyId) {
            $res['VerifyId'] = $this->verifyId;
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
        if (isset($map['VerifyId'])) {
            $model->verifyId = $map['VerifyId'];
        }

        if (isset($map['VerifyResult'])) {
            $model->verifyResult = $map['VerifyResult'];
        }

        return $model;
    }
}
