<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GraphFlowNode;

use AlibabaCloud\Tea\Model;

class properties extends Model
{
    /**
     * @var int
     */
    public $autoReview;

    /**
     * @var bool
     */
    public $branchJudge;

    /**
     * @var int
     */
    public $checkMoreSize;

    /**
     * @var int
     */
    public $checkType;

    /**
     * @var string
     */
    public $lambda;

    /**
     * @var string
     */
    public $role;

    /**
     * @var int
     */
    public $ruleScoreType;

    /**
     * @var string
     */
    public $sayType;

    /**
     * @var int
     */
    public $scoreNum;

    /**
     * @var int
     */
    public $scoreNumType;

    /**
     * @var int
     */
    public $scoreRuleHitType;

    /**
     * @var int
     */
    public $scoreType;

    /**
     * @var string[]
     */
    public $triggers;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'autoReview'       => 'AutoReview',
        'branchJudge'      => 'BranchJudge',
        'checkMoreSize'    => 'CheckMoreSize',
        'checkType'        => 'CheckType',
        'lambda'           => 'Lambda',
        'role'             => 'Role',
        'ruleScoreType'    => 'RuleScoreType',
        'sayType'          => 'SayType',
        'scoreNum'         => 'ScoreNum',
        'scoreNumType'     => 'ScoreNumType',
        'scoreRuleHitType' => 'ScoreRuleHitType',
        'scoreType'        => 'ScoreType',
        'triggers'         => 'Triggers',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoReview) {
            $res['AutoReview'] = $this->autoReview;
        }
        if (null !== $this->branchJudge) {
            $res['BranchJudge'] = $this->branchJudge;
        }
        if (null !== $this->checkMoreSize) {
            $res['CheckMoreSize'] = $this->checkMoreSize;
        }
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->lambda) {
            $res['Lambda'] = $this->lambda;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->ruleScoreType) {
            $res['RuleScoreType'] = $this->ruleScoreType;
        }
        if (null !== $this->sayType) {
            $res['SayType'] = $this->sayType;
        }
        if (null !== $this->scoreNum) {
            $res['ScoreNum'] = $this->scoreNum;
        }
        if (null !== $this->scoreNumType) {
            $res['ScoreNumType'] = $this->scoreNumType;
        }
        if (null !== $this->scoreRuleHitType) {
            $res['ScoreRuleHitType'] = $this->scoreRuleHitType;
        }
        if (null !== $this->scoreType) {
            $res['ScoreType'] = $this->scoreType;
        }
        if (null !== $this->triggers) {
            $res['Triggers'] = $this->triggers;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return properties
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoReview'])) {
            $model->autoReview = $map['AutoReview'];
        }
        if (isset($map['BranchJudge'])) {
            $model->branchJudge = $map['BranchJudge'];
        }
        if (isset($map['CheckMoreSize'])) {
            $model->checkMoreSize = $map['CheckMoreSize'];
        }
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['Lambda'])) {
            $model->lambda = $map['Lambda'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['RuleScoreType'])) {
            $model->ruleScoreType = $map['RuleScoreType'];
        }
        if (isset($map['SayType'])) {
            $model->sayType = $map['SayType'];
        }
        if (isset($map['ScoreNum'])) {
            $model->scoreNum = $map['ScoreNum'];
        }
        if (isset($map['ScoreNumType'])) {
            $model->scoreNumType = $map['ScoreNumType'];
        }
        if (isset($map['ScoreRuleHitType'])) {
            $model->scoreRuleHitType = $map['ScoreRuleHitType'];
        }
        if (isset($map['ScoreType'])) {
            $model->scoreType = $map['ScoreType'];
        }
        if (isset($map['Triggers'])) {
            if (!empty($map['Triggers'])) {
                $model->triggers = $map['Triggers'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
