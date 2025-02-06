<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConditionBasicInfo;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data\hitRuleReviewInfoList\branchInfoList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data\hitRuleReviewInfoList\conditionHitInfoList;

class hitRuleReviewInfoList extends Model
{
    /**
     * @var int
     */
    public $branchHitId;
    /**
     * @var branchInfoList[]
     */
    public $branchInfoList;
    /**
     * @var conditionHitInfoList[]
     */
    public $conditionHitInfoList;
    /**
     * @var ConditionBasicInfo[]
     */
    public $conditionInfoList;
    /**
     * @var string
     */
    public $judgeNodeName;
    /**
     * @var string
     */
    public $lambda;
    /**
     * @var bool
     */
    public $matched;
    /**
     * @var string
     */
    public $nodeType;
    /**
     * @var int
     */
    public $rid;
    /**
     * @var string
     */
    public $ruleName;
    /**
     * @var int
     */
    public $ruleScoreType;
    /**
     * @var int
     */
    public $scoreNumType;
    /**
     * @var int
     */
    public $taskFlowId;
    protected $_name = [
        'branchHitId'          => 'BranchHitId',
        'branchInfoList'       => 'BranchInfoList',
        'conditionHitInfoList' => 'ConditionHitInfoList',
        'conditionInfoList'    => 'ConditionInfoList',
        'judgeNodeName'        => 'JudgeNodeName',
        'lambda'               => 'Lambda',
        'matched'              => 'Matched',
        'nodeType'             => 'NodeType',
        'rid'                  => 'Rid',
        'ruleName'             => 'RuleName',
        'ruleScoreType'        => 'RuleScoreType',
        'scoreNumType'         => 'ScoreNumType',
        'taskFlowId'           => 'TaskFlowId',
    ];

    public function validate()
    {
        if (\is_array($this->branchInfoList)) {
            Model::validateArray($this->branchInfoList);
        }
        if (\is_array($this->conditionHitInfoList)) {
            Model::validateArray($this->conditionHitInfoList);
        }
        if (\is_array($this->conditionInfoList)) {
            Model::validateArray($this->conditionInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->branchHitId) {
            $res['BranchHitId'] = $this->branchHitId;
        }

        if (null !== $this->branchInfoList) {
            if (\is_array($this->branchInfoList)) {
                $res['BranchInfoList'] = [];
                $n1                    = 0;
                foreach ($this->branchInfoList as $item1) {
                    $res['BranchInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->conditionHitInfoList) {
            if (\is_array($this->conditionHitInfoList)) {
                $res['ConditionHitInfoList'] = [];
                $n1                          = 0;
                foreach ($this->conditionHitInfoList as $item1) {
                    $res['ConditionHitInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->conditionInfoList) {
            if (\is_array($this->conditionInfoList)) {
                $res['ConditionInfoList'] = [];
                $n1                       = 0;
                foreach ($this->conditionInfoList as $item1) {
                    $res['ConditionInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->judgeNodeName) {
            $res['JudgeNodeName'] = $this->judgeNodeName;
        }

        if (null !== $this->lambda) {
            $res['Lambda'] = $this->lambda;
        }

        if (null !== $this->matched) {
            $res['Matched'] = $this->matched;
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->ruleScoreType) {
            $res['RuleScoreType'] = $this->ruleScoreType;
        }

        if (null !== $this->scoreNumType) {
            $res['ScoreNumType'] = $this->scoreNumType;
        }

        if (null !== $this->taskFlowId) {
            $res['TaskFlowId'] = $this->taskFlowId;
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
        if (isset($map['BranchHitId'])) {
            $model->branchHitId = $map['BranchHitId'];
        }

        if (isset($map['BranchInfoList'])) {
            if (!empty($map['BranchInfoList'])) {
                $model->branchInfoList = [];
                $n1                    = 0;
                foreach ($map['BranchInfoList'] as $item1) {
                    $model->branchInfoList[$n1++] = branchInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['ConditionHitInfoList'])) {
            if (!empty($map['ConditionHitInfoList'])) {
                $model->conditionHitInfoList = [];
                $n1                          = 0;
                foreach ($map['ConditionHitInfoList'] as $item1) {
                    $model->conditionHitInfoList[$n1++] = conditionHitInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['ConditionInfoList'])) {
            if (!empty($map['ConditionInfoList'])) {
                $model->conditionInfoList = [];
                $n1                       = 0;
                foreach ($map['ConditionInfoList'] as $item1) {
                    $model->conditionInfoList[$n1++] = ConditionBasicInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['JudgeNodeName'])) {
            $model->judgeNodeName = $map['JudgeNodeName'];
        }

        if (isset($map['Lambda'])) {
            $model->lambda = $map['Lambda'];
        }

        if (isset($map['Matched'])) {
            $model->matched = $map['Matched'];
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['RuleScoreType'])) {
            $model->ruleScoreType = $map['RuleScoreType'];
        }

        if (isset($map['ScoreNumType'])) {
            $model->scoreNumType = $map['ScoreNumType'];
        }

        if (isset($map['TaskFlowId'])) {
            $model->taskFlowId = $map['TaskFlowId'];
        }

        return $model;
    }
}
