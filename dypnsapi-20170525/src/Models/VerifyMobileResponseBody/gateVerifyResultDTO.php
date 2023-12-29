<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyMobileResponseBody;

use AlibabaCloud\Tea\Model;

class gateVerifyResultDTO extends Model
{
    /**
     * @description The verification ID.
     *
     * @example 121343241
     *
     * @var string
     */
    public $verifyId;

    /**
     * @description The verification results. Valid values:
     *
     *   **PASS: The input phone number is consistent with the phone number that you use.**
     *   **REJECT: The input phone number is different from the phone number that you use.**
     *   **UNKNOWN: The system cannot judge whether the input phone number is consistent with the phone number that you use.
     *
     * @example PASS
     *
     * @var string
     */
    public $verifyResult;
    protected $_name = [
        'verifyId'     => 'VerifyId',
        'verifyResult' => 'VerifyResult',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return gateVerifyResultDTO
     */
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
