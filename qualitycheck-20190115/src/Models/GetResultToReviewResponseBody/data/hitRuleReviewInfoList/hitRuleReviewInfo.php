<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\complainHistories;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\conditionHitInfoList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\reviewInfo;
use AlibabaCloud\Tea\Model;

class hitRuleReviewInfo extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $autoReview;

    /**
     * @var complainHistories
     */
    public $complainHistories;

    /**
     * @example true
     *
     * @var bool
     */
    public $complainable;

    /**
     * @var conditionHitInfoList
     */
    public $conditionHitInfoList;

    /**
     * @var reviewInfo
     */
    public $reviewInfo;

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
     * @example xxx
     *
     * @var int
     */
    public $scoreId;

    /**
     * @example -10
     *
     * @var int
     */
    public $scoreNum;

    /**
     * @example xxx
     *
     * @var int
     */
    public $scoreSubId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $scoreSubName;
    protected $_name = [
        'autoReview'           => 'AutoReview',
        'complainHistories'    => 'ComplainHistories',
        'complainable'         => 'Complainable',
        'conditionHitInfoList' => 'ConditionHitInfoList',
        'reviewInfo'           => 'ReviewInfo',
        'rid'                  => 'Rid',
        'ruleName'             => 'RuleName',
        'scoreId'              => 'ScoreId',
        'scoreNum'             => 'ScoreNum',
        'scoreSubId'           => 'ScoreSubId',
        'scoreSubName'         => 'ScoreSubName',
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
        if (null !== $this->complainHistories) {
            $res['ComplainHistories'] = null !== $this->complainHistories ? $this->complainHistories->toMap() : null;
        }
        if (null !== $this->complainable) {
            $res['Complainable'] = $this->complainable;
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
        if (null !== $this->scoreId) {
            $res['ScoreId'] = $this->scoreId;
        }
        if (null !== $this->scoreNum) {
            $res['ScoreNum'] = $this->scoreNum;
        }
        if (null !== $this->scoreSubId) {
            $res['ScoreSubId'] = $this->scoreSubId;
        }
        if (null !== $this->scoreSubName) {
            $res['ScoreSubName'] = $this->scoreSubName;
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
        if (isset($map['ComplainHistories'])) {
            $model->complainHistories = complainHistories::fromMap($map['ComplainHistories']);
        }
        if (isset($map['Complainable'])) {
            $model->complainable = $map['Complainable'];
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
        if (isset($map['ScoreId'])) {
            $model->scoreId = $map['ScoreId'];
        }
        if (isset($map['ScoreNum'])) {
            $model->scoreNum = $map['ScoreNum'];
        }
        if (isset($map['ScoreSubId'])) {
            $model->scoreSubId = $map['ScoreSubId'];
        }
        if (isset($map['ScoreSubName'])) {
            $model->scoreSubName = $map['ScoreSubName'];
        }

        return $model;
    }
}
