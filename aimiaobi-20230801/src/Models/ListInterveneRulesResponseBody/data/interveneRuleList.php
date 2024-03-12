<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneRulesResponseBody\data;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneRulesResponseBody\data\interveneRuleList\answerConfig;
use AlibabaCloud\Tea\Model;

class interveneRuleList extends Model
{
    /**
     * @var answerConfig[]
     */
    public $answerConfig;

    /**
     * @example 2023-06-05 15:17:01
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2023-04-03 02:42:01
     *
     * @var string
     */
    public $effectTime;

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
     * @example mr-iuo9pi9w555phfbb
     *
     * @var int
     */
    public $ruleId;

    /**
     * @example ruletest
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'answerConfig'  => 'AnswerConfig',
        'createTime'    => 'CreateTime',
        'effectTime'    => 'EffectTime',
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
     * @return interveneRuleList
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
