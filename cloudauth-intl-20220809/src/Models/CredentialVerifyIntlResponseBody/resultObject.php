<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CredentialVerifyIntlResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $materialInfo;

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
     * @example PS
     *
     * @var string
     */
    public $riskTag;
    protected $_name = [
        'materialInfo' => 'MaterialInfo',
        'result' => 'Result',
        'riskScore' => 'RiskScore',
        'riskTag' => 'RiskTag',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->materialInfo) {
            $res['MaterialInfo'] = $this->materialInfo;
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
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['RiskScore'])) {
            $model->riskScore = $map['RiskScore'];
        }
        if (isset($map['RiskTag'])) {
            $model->riskTag = $map['RiskTag'];
        }

        return $model;
    }
}
