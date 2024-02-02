<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryPhoneNumberOnlineTimeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $carrierCode;

    /**
     * @example 29
     *
     * @var int
     */
    public $verifyResult;
    protected $_name = [
        'carrierCode'  => 'CarrierCode',
        'verifyResult' => 'VerifyResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->carrierCode) {
            $res['CarrierCode'] = $this->carrierCode;
        }
        if (null !== $this->verifyResult) {
            $res['VerifyResult'] = $this->verifyResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CarrierCode'])) {
            $model->carrierCode = $map['CarrierCode'];
        }
        if (isset($map['VerifyResult'])) {
            $model->verifyResult = $map['VerifyResult'];
        }

        return $model;
    }
}
