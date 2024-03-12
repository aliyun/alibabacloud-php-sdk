<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneRuleDetailResponseBody\data;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneRuleDetailResponseBody\data\interveneRuleDetail\answerConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneRuleDetailResponseBody\data\interveneRuleDetail\effectConfig;
use AlibabaCloud\Tea\Model;

class interveneRuleDetail extends Model
{
    /**
     * @var answerConfig[]
     */
    public $answerConfig;

    /**
     * @var effectConfig
     */
    public $effectConfig;

    /**
     * @example 0
     *
     * @var int
     */
    public $interveneType;

    /**
     * @var string[]
     */
    public $namespaceList;

    /**
     * @example 100418
     *
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'answerConfig'  => 'AnswerConfig',
        'effectConfig'  => 'EffectConfig',
        'interveneType' => 'InterveneType',
        'namespaceList' => 'NamespaceList',
        'ruleId'        => 'RuleId',
        'ruleName'      => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answerConfig) {
            $res['AnswerConfig'] = [];
            if (null !== $this->answerConfig && \is_array($this->answerConfig)) {
                $n = 0;
                foreach ($this->answerConfig as $item) {
                    $res['AnswerConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->effectConfig) {
            $res['EffectConfig'] = null !== $this->effectConfig ? $this->effectConfig->toMap() : null;
        }
        if (null !== $this->interveneType) {
            $res['InterveneType'] = $this->interveneType;
        }
        if (null !== $this->namespaceList) {
            $res['NamespaceList'] = $this->namespaceList;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return interveneRuleDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnswerConfig'])) {
            if (!empty($map['AnswerConfig'])) {
                $model->answerConfig = [];
                $n                   = 0;
                foreach ($map['AnswerConfig'] as $item) {
                    $model->answerConfig[$n++] = null !== $item ? answerConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EffectConfig'])) {
            $model->effectConfig = effectConfig::fromMap($map['EffectConfig']);
        }
        if (isset($map['InterveneType'])) {
            $model->interveneType = $map['InterveneType'];
        }
        if (isset($map['NamespaceList'])) {
            if (!empty($map['NamespaceList'])) {
                $model->namespaceList = $map['NamespaceList'];
            }
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
