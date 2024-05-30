<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialVerifyResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $materialInfo;

    /**
     * @var string
     */
    public $ocrInfo;

    /**
     * @example 1
     *
     * @var string
     */
    public $result;

    /**
     * @var string[]
     */
    public $riskScore;

    /**
     * @example PS,SCREEN_PHOTO
     *
     * @var string
     */
    public $riskTag;

    /**
     * @example **
     *
     * @var string
     */
    public $verifyDetail;

    /**
     * @example *
     *
     * @var string
     */
    public $verifyResult;
    protected $_name = [
        'materialInfo' => 'MaterialInfo',
        'ocrInfo'      => 'OcrInfo',
        'result'       => 'Result',
        'riskScore'    => 'RiskScore',
        'riskTag'      => 'RiskTag',
        'verifyDetail' => 'VerifyDetail',
        'verifyResult' => 'VerifyResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->materialInfo) {
            $res['MaterialInfo'] = $this->materialInfo;
        }
        if (null !== $this->ocrInfo) {
            $res['OcrInfo'] = $this->ocrInfo;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->riskScore) {
            $res['RiskScore'] = $this->riskScore;
        }
        if (null !== $this->riskTag) {
            $res['RiskTag'] = $this->riskTag;
        }
        if (null !== $this->verifyDetail) {
            $res['VerifyDetail'] = $this->verifyDetail;
        }
        if (null !== $this->verifyResult) {
            $res['VerifyResult'] = $this->verifyResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaterialInfo'])) {
            $model->materialInfo = $map['MaterialInfo'];
        }
        if (isset($map['OcrInfo'])) {
            $model->ocrInfo = $map['OcrInfo'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['RiskScore'])) {
            $model->riskScore = $map['RiskScore'];
        }
        if (isset($map['RiskTag'])) {
            $model->riskTag = $map['RiskTag'];
        }
        if (isset($map['VerifyDetail'])) {
            $model->verifyDetail = $map['VerifyDetail'];
        }
        if (isset($map['VerifyResult'])) {
            $model->verifyResult = $map['VerifyResult'];
        }

        return $model;
    }
}
