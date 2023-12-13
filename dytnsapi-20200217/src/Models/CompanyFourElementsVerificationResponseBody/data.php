<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CompanyFourElementsVerificationResponseBody;

use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CompanyFourElementsVerificationResponseBody\data\detailInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The information about the enterprise.
     *
     * @var detailInfo
     */
    public $detailInfo;

    /**
     * @description The fields to be verified.
     *
     * @var string[]
     */
    public $inconsistentData;

    /**
     * @description The code of the verification result. Valid values:
     *
     *   0: The four elements belong to the same enterprise.
     *   1: The four elements belong to the same enterprise, but the business status of the enterprise is abnormal.
     *   2: The legal representative information cannot match the enterprise information.
     *   3: The four elements do not belong to the same enterprise.
     *   4: No information about the enterprise is found.
     *   5: No information about the legal representative is found.
     *
     * @example 0
     *
     * @var int
     */
    public $reasonCode;

    /**
     * @description The verification result. Valid values:
     *
     *   true: The four elements belong to the same enterprise and the business status of the enterprise is Active.
     *   false: The four elements do not belong to the same enterprise.
     *
     * @example true
     *
     * @var string
     */
    public $verifyResult;
    protected $_name = [
        'detailInfo'       => 'DetailInfo',
        'inconsistentData' => 'InconsistentData',
        'reasonCode'       => 'ReasonCode',
        'verifyResult'     => 'VerifyResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detailInfo) {
            $res['DetailInfo'] = null !== $this->detailInfo ? $this->detailInfo->toMap() : null;
        }
        if (null !== $this->inconsistentData) {
            $res['InconsistentData'] = $this->inconsistentData;
        }
        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
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
        if (isset($map['DetailInfo'])) {
            $model->detailInfo = detailInfo::fromMap($map['DetailInfo']);
        }
        if (isset($map['InconsistentData'])) {
            if (!empty($map['InconsistentData'])) {
                $model->inconsistentData = $map['InconsistentData'];
            }
        }
        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }
        if (isset($map['VerifyResult'])) {
            $model->verifyResult = $map['VerifyResult'];
        }

        return $model;
    }
}
