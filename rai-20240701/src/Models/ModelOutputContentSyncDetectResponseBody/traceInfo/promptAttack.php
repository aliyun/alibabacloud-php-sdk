<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\ModelOutputContentSyncDetectResponseBody\traceInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RAI\V20240701\Models\ModelOutputContentSyncDetectResponseBody\traceInfo\promptAttack\promptAttackInfoList;

class promptAttack extends Model
{
    /**
     * @var float
     */
    public $confidenceScore;

    /**
     * @var string
     */
    public $promptAttackInfo;

    /**
     * @var promptAttackInfoList[]
     */
    public $promptAttackInfoList;

    /**
     * @var int
     */
    public $riskResult;

    /**
     * @var int
     */
    public $securityLevel;
    protected $_name = [
        'confidenceScore' => 'ConfidenceScore',
        'promptAttackInfo' => 'PromptAttackInfo',
        'promptAttackInfoList' => 'PromptAttackInfoList',
        'riskResult' => 'RiskResult',
        'securityLevel' => 'SecurityLevel',
    ];

    public function validate()
    {
        if (\is_array($this->promptAttackInfoList)) {
            Model::validateArray($this->promptAttackInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confidenceScore) {
            $res['ConfidenceScore'] = $this->confidenceScore;
        }

        if (null !== $this->promptAttackInfo) {
            $res['PromptAttackInfo'] = $this->promptAttackInfo;
        }

        if (null !== $this->promptAttackInfoList) {
            if (\is_array($this->promptAttackInfoList)) {
                $res['PromptAttackInfoList'] = [];
                $n1 = 0;
                foreach ($this->promptAttackInfoList as $item1) {
                    $res['PromptAttackInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->riskResult) {
            $res['RiskResult'] = $this->riskResult;
        }

        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = $this->securityLevel;
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
        if (isset($map['ConfidenceScore'])) {
            $model->confidenceScore = $map['ConfidenceScore'];
        }

        if (isset($map['PromptAttackInfo'])) {
            $model->promptAttackInfo = $map['PromptAttackInfo'];
        }

        if (isset($map['PromptAttackInfoList'])) {
            if (!empty($map['PromptAttackInfoList'])) {
                $model->promptAttackInfoList = [];
                $n1 = 0;
                foreach ($map['PromptAttackInfoList'] as $item1) {
                    $model->promptAttackInfoList[$n1] = promptAttackInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RiskResult'])) {
            $model->riskResult = $map['RiskResult'];
        }

        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = $map['SecurityLevel'];
        }

        return $model;
    }
}
