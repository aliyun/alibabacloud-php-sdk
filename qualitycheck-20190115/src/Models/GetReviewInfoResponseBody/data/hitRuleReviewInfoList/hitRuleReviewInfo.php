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
    public $autoReview;

    /**
     * @var conditionHitInfoList
     */
    public $conditionHitInfoList;

    /**
     * @var reviewInfo
     */
    public $reviewInfo;

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
    public $ruleType;

    /**
     * @var int
     */
    public $scoreId;

    /**
     * @var int
     */
    public $scoreSubId;

    /**
     * @var int
     */
    public $totalNumber;
    protected $_name = [
        'autoReview'           => 'AutoReview',
        'conditionHitInfoList' => 'ConditionHitInfoList',
        'reviewInfo'           => 'ReviewInfo',
        'rid'                  => 'Rid',
        'ruleName'             => 'RuleName',
        'ruleScoreType'        => 'RuleScoreType',
        'ruleType'             => 'RuleType',
        'scoreId'              => 'ScoreId',
        'scoreSubId'           => 'ScoreSubId',
        'totalNumber'          => 'TotalNumber',
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
        if (null !== $this->conditionHitInfoList) {
            $res['ConditionHitInfoList'] = null !== $this->conditionHitInfoList ? $this->conditionHitInfoList->toMap() : null;
        }
        if (null !== $this->reviewInfo) {
            $res['ReviewInfo'] = null !== $this->reviewInfo ? $this->reviewInfo->toMap() : null;
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
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->scoreId) {
            $res['ScoreId'] = $this->scoreId;
        }
        if (null !== $this->scoreSubId) {
            $res['ScoreSubId'] = $this->scoreSubId;
        }
        if (null !== $this->totalNumber) {
            $res['TotalNumber'] = $this->totalNumber;
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
        if (isset($map['AutoReview'])) {
            $model->autoReview = $map['AutoReview'];
        }
        if (isset($map['ConditionHitInfoList'])) {
            $model->conditionHitInfoList = conditionHitInfoList::fromMap($map['ConditionHitInfoList']);
        }
        if (isset($map['ReviewInfo'])) {
            $model->reviewInfo = reviewInfo::fromMap($map['ReviewInfo']);
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
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['ScoreId'])) {
            $model->scoreId = $map['ScoreId'];
        }
        if (isset($map['ScoreSubId'])) {
            $model->scoreSubId = $map['ScoreSubId'];
        }
        if (isset($map['TotalNumber'])) {
            $model->totalNumber = $map['TotalNumber'];
        }

        return $model;
    }
}
