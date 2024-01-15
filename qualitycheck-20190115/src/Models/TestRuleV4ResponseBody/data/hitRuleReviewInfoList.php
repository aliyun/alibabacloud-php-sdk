<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConditionBasicInfo;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data\hitRuleReviewInfoList\branchInfoList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\TestRuleV4ResponseBody\data\hitRuleReviewInfoList\conditionHitInfoList;
use AlibabaCloud\Tea\Model;

class hitRuleReviewInfoList extends Model
{
    /**
     * @example 1
     *
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
     * @example a&&b
     *
     * @var string
     */
    public $lambda;

    /**
     * @example true
     *
     * @var bool
     */
    public $matched;

    /**
     * @example 0
     *
     * @var string
     */
    public $nodeType;

    /**
     * @example 451
     *
     * @var int
     */
    public $rid;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @example 1
     *
     * @var int
     */
    public $ruleScoreType;

    /**
     * @example 1
     *
     * @var int
     */
    public $scoreNumType;

    /**
     * @example 1
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->branchHitId) {
            $res['BranchHitId'] = $this->branchHitId;
        }
        if (null !== $this->branchInfoList) {
            $res['BranchInfoList'] = [];
            if (null !== $this->branchInfoList && \is_array($this->branchInfoList)) {
                $n = 0;
                foreach ($this->branchInfoList as $item) {
                    $res['BranchInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->conditionHitInfoList) {
            $res['ConditionHitInfoList'] = [];
            if (null !== $this->conditionHitInfoList && \is_array($this->conditionHitInfoList)) {
                $n = 0;
                foreach ($this->conditionHitInfoList as $item) {
                    $res['ConditionHitInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->conditionInfoList) {
            $res['ConditionInfoList'] = [];
            if (null !== $this->conditionInfoList && \is_array($this->conditionInfoList)) {
                $n = 0;
                foreach ($this->conditionInfoList as $item) {
                    $res['ConditionInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return hitRuleReviewInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BranchHitId'])) {
            $model->branchHitId = $map['BranchHitId'];
        }
        if (isset($map['BranchInfoList'])) {
            if (!empty($map['BranchInfoList'])) {
                $model->branchInfoList = [];
                $n                     = 0;
                foreach ($map['BranchInfoList'] as $item) {
                    $model->branchInfoList[$n++] = null !== $item ? branchInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ConditionHitInfoList'])) {
            if (!empty($map['ConditionHitInfoList'])) {
                $model->conditionHitInfoList = [];
                $n                           = 0;
                foreach ($map['ConditionHitInfoList'] as $item) {
                    $model->conditionHitInfoList[$n++] = null !== $item ? conditionHitInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ConditionInfoList'])) {
            if (!empty($map['ConditionInfoList'])) {
                $model->conditionInfoList = [];
                $n                        = 0;
                foreach ($map['ConditionInfoList'] as $item) {
                    $model->conditionInfoList[$n++] = null !== $item ? ConditionBasicInfo::fromMap($item) : $item;
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
