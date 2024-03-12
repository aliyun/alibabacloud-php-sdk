<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneRuleRequest;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneRuleRequest\interveneRuleConfig\answerConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneRuleRequest\interveneRuleConfig\effectConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneRuleRequest\interveneRuleConfig\interveneConfigList;
use AlibabaCloud\Tea\Model;

class interveneRuleConfig extends Model
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
     * @var interveneConfigList[]
     */
    public $interveneConfigList;

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
     * @example 2
     *
     * @var int
     */
    public $ruleId;

    /**
     * @example tf-test-rule
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'answerConfig'        => 'AnswerConfig',
        'effectConfig'        => 'EffectConfig',
        'interveneConfigList' => 'InterveneConfigList',
        'interveneType'       => 'InterveneType',
        'namespaceList'       => 'NamespaceList',
        'ruleId'              => 'RuleId',
        'ruleName'            => 'RuleName',
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
        if (null !== $this->interveneConfigList) {
            $res['InterveneConfigList'] = [];
            if (null !== $this->interveneConfigList && \is_array($this->interveneConfigList)) {
                $n = 0;
                foreach ($this->interveneConfigList as $item) {
                    $res['InterveneConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return interveneRuleConfig
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
        if (isset($map['InterveneConfigList'])) {
            if (!empty($map['InterveneConfigList'])) {
                $model->interveneConfigList = [];
                $n                          = 0;
                foreach ($map['InterveneConfigList'] as $item) {
                    $model->interveneConfigList[$n++] = null !== $item ? interveneConfigList::fromMap($item) : $item;
                }
            }
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
