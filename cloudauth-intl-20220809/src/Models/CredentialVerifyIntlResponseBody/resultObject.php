<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CredentialVerifyIntlResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $materialInfo;

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
    protected $_name = [
        'materialInfo' => 'MaterialInfo',
        'result' => 'Result',
        'riskScore' => 'RiskScore',
        'riskTag' => 'RiskTag',
    ];

    public function validate()
    {
        if (\is_array($this->riskScore)) {
            Model::validateArray($this->riskScore);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->materialInfo) {
            $res['MaterialInfo'] = $this->materialInfo;
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

        return $model;
    }
}
