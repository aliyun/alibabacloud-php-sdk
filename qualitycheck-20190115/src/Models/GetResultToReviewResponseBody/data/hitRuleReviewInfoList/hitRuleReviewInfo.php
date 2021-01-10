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
     * @var conditionHitInfoList
     */
    public $conditionHitInfoList;

    /**
     * @var int
     */
    public $scoreSubId;

    /**
     * @var reviewInfo
     */
    public $reviewInfo;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $rid;

    /**
     * @var string
     */
    public $scoreSubName;

    /**
     * @var int
     */
    public $scoreNum;

    /**
     * @var int
     */
    public $autoReview;

    /**
     * @var complainHistories
     */
    public $complainHistories;

    /**
     * @var bool
     */
    public $complainable;

    /**
     * @var int
     */
    public $scoreId;
    protected $_name = [
        'conditionHitInfoList' => 'ConditionHitInfoList',
        'scoreSubId'           => 'ScoreSubId',
        'reviewInfo'           => 'ReviewInfo',
        'ruleName'             => 'RuleName',
        'rid'                  => 'Rid',
        'scoreSubName'         => 'ScoreSubName',
        'scoreNum'             => 'ScoreNum',
        'autoReview'           => 'AutoReview',
        'complainHistories'    => 'ComplainHistories',
        'complainable'         => 'Complainable',
        'scoreId'              => 'ScoreId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionHitInfoList) {
            $res['ConditionHitInfoList'] = null !== $this->conditionHitInfoList ? $this->conditionHitInfoList->toMap() : null;
        }
        if (null !== $this->scoreSubId) {
            $res['ScoreSubId'] = $this->scoreSubId;
        }
        if (null !== $this->reviewInfo) {
            $res['ReviewInfo'] = null !== $this->reviewInfo ? $this->reviewInfo->toMap() : null;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }
        if (null !== $this->scoreSubName) {
            $res['ScoreSubName'] = $this->scoreSubName;
        }
        if (null !== $this->scoreNum) {
            $res['ScoreNum'] = $this->scoreNum;
        }
        if (null !== $this->autoReview) {
            $res['AutoReview'] = $this->autoReview;
        }
        if (null !== $this->complainHistories) {
            $res['ComplainHistories'] = null !== $this->complainHistories ? $this->complainHistories->toMap() : null;
        }
        if (null !== $this->complainable) {
            $res['Complainable'] = $this->complainable;
        }
        if (null !== $this->scoreId) {
            $res['ScoreId'] = $this->scoreId;
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
        if (isset($map['ConditionHitInfoList'])) {
            $model->conditionHitInfoList = conditionHitInfoList::fromMap($map['ConditionHitInfoList']);
        }
        if (isset($map['ScoreSubId'])) {
            $model->scoreSubId = $map['ScoreSubId'];
        }
        if (isset($map['ReviewInfo'])) {
            $model->reviewInfo = reviewInfo::fromMap($map['ReviewInfo']);
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }
        if (isset($map['ScoreSubName'])) {
            $model->scoreSubName = $map['ScoreSubName'];
        }
        if (isset($map['ScoreNum'])) {
            $model->scoreNum = $map['ScoreNum'];
        }
        if (isset($map['AutoReview'])) {
            $model->autoReview = $map['AutoReview'];
        }
        if (isset($map['ComplainHistories'])) {
            $model->complainHistories = complainHistories::fromMap($map['ComplainHistories']);
        }
        if (isset($map['Complainable'])) {
            $model->complainable = $map['Complainable'];
        }
        if (isset($map['ScoreId'])) {
            $model->scoreId = $map['ScoreId'];
        }

        return $model;
    }
}
