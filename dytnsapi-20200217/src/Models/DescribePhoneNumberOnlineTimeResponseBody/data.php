<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberOnlineTimeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The carrier code. Valid values:
     *
     *   **CMCC**: China Mobile
     *   **CUCC**: China Unicom
     *   **CTCC**: China Telecom
     *   **CBN**: China Broadnet
     *
     * @example CMCC
     *
     * @var string
     */
    public $carrierCode;

    /**
     * @description The enumerated value of the usage period of a phone number. Valid values:
     *
     *   **-1**: No usage period information is available for the phone number.
     *   **0**: The phone number status is abnormal. For example, the phone number is a nonexistent number.
     *   **1** :\[0-3) months.
     *   **2** :\[3-6] months.
     *   **3** :(6-12] months.
     *   **4** :(12-24] months.
     *   **5** :(24,+) months.
     *
     * @example 1
     *
     * @var string
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
