<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneTwiceTelVerifyResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $carrier;
    /**
     * @var string
     */
    public $verifyResult;
    protected $_name = [
        'carrier'      => 'Carrier',
        'verifyResult' => 'VerifyResult',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
