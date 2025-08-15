<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneRulesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneRulesResponseBody\data\interveneRuleList\answerConfig;

class interveneRuleList extends Model
{
    /**
     * @var answerConfig[]
     */
    public $answerConfig;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $effectTime;

    /**
     * @var int
     */
    public $interveneType;

    /**
     * @var string[]
     */
    public $namespaceList;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'answerConfig' => 'AnswerConfig',
        'createTime' => 'CreateTime',
        'effectTime' => 'EffectTime',
        'interveneType' => 'InterveneType',
        'namespaceList' => 'NamespaceList',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
    ];

    public function validate()
    {
        if (\is_array($this->answerConfig)) {
            Model::validateArray($this->answerConfig);
        }
        if (\is_array($this->namespaceList)) {
            Model::validateArray($this->namespaceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answerConfig) {
            if (\is_array($this->answerConfig)) {
                $res['AnswerConfig'] = [];
                $n1 = 0;
                foreach ($this->answerConfig as $item1) {
                    $res['AnswerConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->effectTime) {
            $res['EffectTime'] = $this->effectTime;
        }

        if (null !== $this->interveneType) {
            $res['InterveneType'] = $this->interveneType;
        }

        if (null !== $this->namespaceList) {
            if (\is_array($this->namespaceList)) {
                $res['NamespaceList'] = [];
                $n1 = 0;
                foreach ($this->namespaceList as $item1) {
                    $res['NamespaceList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
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
        if (isset($map['AnswerConfig'])) {
            if (!empty($map['AnswerConfig'])) {
                $model->answerConfig = [];
                $n1 = 0;
                foreach ($map['AnswerConfig'] as $item1) {
                    $model->answerConfig[$n1] = answerConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EffectTime'])) {
            $model->effectTime = $map['EffectTime'];
        }

        if (isset($map['InterveneType'])) {
            $model->interveneType = $map['InterveneType'];
        }

        if (isset($map['NamespaceList'])) {
            if (!empty($map['NamespaceList'])) {
                $model->namespaceList = [];
                $n1 = 0;
                foreach ($map['NamespaceList'] as $item1) {
                    $model->namespaceList[$n1] = $item1;
                    ++$n1;
                }
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
