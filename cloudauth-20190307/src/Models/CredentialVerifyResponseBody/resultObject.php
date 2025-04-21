<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialVerifyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialVerifyResponseBody\resultObject\vlResult;

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
     * @var string
     */
    public $result;

    /**
     * @var string[]
     */
    public $riskScore;

    /**
     * @var string
     */
    public $riskTag;

    /**
     * @var string
     */
    public $verifyDetail;

    /**
     * @var string
     */
    public $verifyResult;

    /**
     * @var vlResult
     */
    public $vlResult;
    protected $_name = [
        'materialInfo' => 'MaterialInfo',
        'ocrInfo' => 'OcrInfo',
        'result' => 'Result',
        'riskScore' => 'RiskScore',
        'riskTag' => 'RiskTag',
        'verifyDetail' => 'VerifyDetail',
        'verifyResult' => 'VerifyResult',
        'vlResult' => 'VlResult',
    ];

    public function validate()
    {
        if (\is_array($this->riskScore)) {
            Model::validateArray($this->riskScore);
        }
        if (null !== $this->vlResult) {
            $this->vlResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->riskScore)) {
                $res['RiskScore'] = [];
                foreach ($this->riskScore as $key1 => $value1) {
                    $res['RiskScore'][$key1] = $value1;
                }
            }
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

        if (null !== $this->vlResult) {
            $res['VlResult'] = null !== $this->vlResult ? $this->vlResult->toArray($noStream) : $this->vlResult;
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
            if (!empty($map['RiskScore'])) {
                $model->riskScore = [];
                foreach ($map['RiskScore'] as $key1 => $value1) {
                    $model->riskScore[$key1] = $value1;
                }
            }
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

        if (isset($map['VlResult'])) {
            $model->vlResult = vlResult::fromMap($map['VlResult']);
        }

        return $model;
    }
}
