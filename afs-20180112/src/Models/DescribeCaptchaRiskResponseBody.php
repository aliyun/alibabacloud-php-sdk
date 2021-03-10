<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models;

use AlibabaCloud\Tea\Model;

class DescribeCaptchaRiskResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $numOfLastMonth;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var int
     */
    public $numOfThisMonth;

    /**
     * @var string
     */
    public $bizCode;
    protected $_name = [
        'requestId'      => 'RequestId',
        'numOfLastMonth' => 'NumOfLastMonth',
        'riskLevel'      => 'RiskLevel',
        'numOfThisMonth' => 'NumOfThisMonth',
        'bizCode'        => 'BizCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->numOfLastMonth) {
            $res['NumOfLastMonth'] = $this->numOfLastMonth;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->numOfThisMonth) {
            $res['NumOfThisMonth'] = $this->numOfThisMonth;
        }
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCaptchaRiskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NumOfLastMonth'])) {
            $model->numOfLastMonth = $map['NumOfLastMonth'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['NumOfThisMonth'])) {
            $model->numOfThisMonth = $map['NumOfThisMonth'];
        }
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        return $model;
    }
}
