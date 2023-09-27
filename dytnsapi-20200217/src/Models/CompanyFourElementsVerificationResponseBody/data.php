<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CompanyFourElementsVerificationResponseBody;

use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CompanyFourElementsVerificationResponseBody\data\detailInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var detailInfo
     */
    public $detailInfo;

    /**
     * @var string[]
     */
    public $inconsistentData;

    /**
     * @example 0
     *
     * @var int
     */
    public $reasonCode;

    /**
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
