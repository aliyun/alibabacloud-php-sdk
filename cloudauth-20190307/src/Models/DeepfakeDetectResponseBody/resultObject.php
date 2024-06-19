<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeepfakeDetectResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
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
     * @example SuspectDeepForgery,SuspectWarterMark
     *
     * @var string
     */
    public $riskTag;
    protected $_name = [
        'result'    => 'Result',
        'riskScore' => 'RiskScore',
        'riskTag'   => 'RiskTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
