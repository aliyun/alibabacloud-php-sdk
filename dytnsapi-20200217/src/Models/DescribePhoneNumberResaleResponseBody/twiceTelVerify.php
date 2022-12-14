<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberResaleResponseBody;

use AlibabaCloud\Tea\Model;

class twiceTelVerify extends Model
{
    /**
     * @example CMCC
     *
     * @var string
     */
    public $carrier;

    /**
     * @example 0
     *
     * @var int
     */
    public $verifyResult;
    protected $_name = [
        'carrier'      => 'Carrier',
        'verifyResult' => 'VerifyResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->carrier) {
            $res['Carrier'] = $this->carrier;
        }
        if (null !== $this->verifyResult) {
            $res['VerifyResult'] = $this->verifyResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return twiceTelVerify
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Carrier'])) {
            $model->carrier = $map['Carrier'];
        }
        if (isset($map['VerifyResult'])) {
            $model->verifyResult = $map['VerifyResult'];
        }

        return $model;
    }
}
