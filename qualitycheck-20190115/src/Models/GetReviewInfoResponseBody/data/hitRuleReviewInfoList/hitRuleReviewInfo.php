<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetReviewInfoResponseBody\data\hitRuleReviewInfoList;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetReviewInfoResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\conditionHitInfoList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetReviewInfoResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\reviewInfo;
use AlibabaCloud\Tea\Model;

class hitRuleReviewInfo extends Model
{
    /**
     * @var int
     */
    public $ruleScoreType;

    /**
     * @var conditionHitInfoList
     */
    public $conditionHitInfoList;

    /**
     * @var int
     */
    public $ruleType;

    /**
     * @var int
     */
    public $autoReview;

    /**
     * @var int
     */
    public $scoreSubId;

    /**
     * @var reviewInfo
     */
    public $reviewInfo;

    /**
     * @var int
     */
    public $totalNumber;

    /**
     * @var int
     */
    public $scoreId;

    /**
     * @var int
     */
    public $rid;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'ruleScoreType'        => 'RuleScoreType',
        'conditionHitInfoList' => 'ConditionHitInfoList',
        'ruleType'             => 'RuleType',
        'autoReview'           => 'AutoReview',
        'scoreSubId'           => 'ScoreSubId',
        'reviewInfo'           => 'ReviewInfo',
        'totalNumber'          => 'TotalNumber',
        'scoreId'              => 'ScoreId',
        'rid'                  => 'Rid',
        'ruleName'             => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleScoreType) {
            $res['RuleScoreType'] = $this->ruleScoreType;
        }
        if (null !== $this->conditionHitInfoList) {
            $res['ConditionHitInfoList'] = null !== $this->conditionHitInfoList ? $this->conditionHitInfoList->toMap() : null;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->autoReview) {
            $res['AutoReview'] = $this->autoReview;
        }
        if (null !== $this->scoreSubId) {
            $res['ScoreSubId'] = $this->scoreSubId;
        }
        if (null !== $this->reviewInfo) {
            $res['ReviewInfo'] = null !== $this->reviewInfo ? $this->reviewInfo->toMap() : null;
        }
        if (null !== $this->totalNumber) {
            $res['TotalNumber'] = $this->totalNumber;
        }
        if (null !== $this->scoreId) {
            $res['ScoreId'] = $this->scoreId;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hitRuleReviewInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleScoreType'])) {
            $model->ruleScoreType = $map['RuleScoreType'];
        }
        if (isset($map['ConditionHitInfoList'])) {
            $model->conditionHitInfoList = conditionHitInfoList::fromMap($map['ConditionHitInfoList']);
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['AutoReview'])) {
            $model->autoReview = $map['AutoReview'];
        }
        if (isset($map['ScoreSubId'])) {
            $model->scoreSubId = $map['ScoreSubId'];
        }
        if (isset($map['ReviewInfo'])) {
            $model->reviewInfo = reviewInfo::fromMap($map['ReviewInfo']);
        }
        if (isset($map['TotalNumber'])) {
            $model->totalNumber = $map['TotalNumber'];
        }
        if (isset($map['ScoreId'])) {
            $model->scoreId = $map['ScoreId'];
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
