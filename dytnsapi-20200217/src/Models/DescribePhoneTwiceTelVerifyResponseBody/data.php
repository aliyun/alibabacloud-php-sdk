<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneTwiceTelVerifyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The carrier. Valid values:
     *
     *   **CMCC**: China Mobile
     *   **CUCC**: China Unicom
     *   **CTCC**: China Telecom
     *
     * >  The returned result indicates the carrier who assigns the phone number. If the phone number involves mobile number portability, the carrier after mobile number portability is returned.
     * @example CMCC
     *
     * @var string
     */
    public $carrier;

    /**
     * @description The result of the request. Valid values:
     *
     *   **0**: It is unable to judge whether the phone number is a reassigned number.
     *   **1**: The phone number is a reassigned number.
     *   **2**: The phone number is not a reassigned number.
     *   **3**: The phone number has been canceled.
     *
     * @example 1
     *
     * @var string
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
     * @return data
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
