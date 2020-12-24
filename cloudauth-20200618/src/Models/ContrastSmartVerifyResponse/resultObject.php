<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20200618\Models\ContrastSmartVerifyResponse;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $certifyId;

    /**
     * @var string
     */
    public $passed;

    /**
     * @var string
     */
    public $subCode;

    /**
     * @var string
     */
    public $verifyInfo;

    /**
     * @var string
     */
    public $riskInfo;
    protected $_name = [
        'certifyId'  => 'CertifyId',
        'passed'     => 'Passed',
        'subCode'    => 'SubCode',
        'verifyInfo' => 'VerifyInfo',
        'riskInfo'   => 'RiskInfo',
    ];

    public function validate()
    {
        Model::validateRequired('certifyId', $this->certifyId, true);
        Model::validateRequired('passed', $this->passed, true);
        Model::validateRequired('subCode', $this->subCode, true);
        Model::validateRequired('verifyInfo', $this->verifyInfo, true);
        Model::validateRequired('riskInfo', $this->riskInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
        }
        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }
        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
        }
        if (null !== $this->verifyInfo) {
            $res['VerifyInfo'] = $this->verifyInfo;
        }
        if (null !== $this->riskInfo) {
            $res['RiskInfo'] = $this->riskInfo;
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
        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }
        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }
        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }
        if (isset($map['VerifyInfo'])) {
            $model->verifyInfo = $map['VerifyInfo'];
        }
        if (isset($map['RiskInfo'])) {
            $model->riskInfo = $map['RiskInfo'];
        }

        return $model;
    }
}
