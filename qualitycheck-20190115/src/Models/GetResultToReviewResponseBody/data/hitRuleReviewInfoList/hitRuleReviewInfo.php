<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\complainHistories;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\conditionHitInfoList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\reviewInfo;

class hitRuleReviewInfo extends Model
{
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
     * @var conditionHitInfoList
     */
    public $conditionHitInfoList;

    /**
     * @var int
     */
    public $machineHitResult;

    /**
     * @var int
     */
    public $reviewHitResult;

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
    public $scoreId;

    /**
     * @var int
     */
    public $scoreNum;

    /**
     * @var int
     */
    public $scoreSubId;

    /**
     * @var string
     */
    public $scoreSubName;
    protected $_name = [
        'autoReview' => 'AutoReview',
        'complainHistories' => 'ComplainHistories',
        'complainable' => 'Complainable',
        'conditionHitInfoList' => 'ConditionHitInfoList',
        'machineHitResult' => 'MachineHitResult',
        'reviewHitResult' => 'ReviewHitResult',
        'reviewInfo' => 'ReviewInfo',
        'rid' => 'Rid',
        'ruleName' => 'RuleName',
        'scoreId' => 'ScoreId',
        'scoreNum' => 'ScoreNum',
        'scoreSubId' => 'ScoreSubId',
        'scoreSubName' => 'ScoreSubName',
    ];

    public function validate()
    {
        if (null !== $this->complainHistories) {
            $this->complainHistories->validate();
        }
        if (null !== $this->conditionHitInfoList) {
            $this->conditionHitInfoList->validate();
        }
        if (null !== $this->reviewInfo) {
            $this->reviewInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoReview) {
            $res['AutoReview'] = $this->autoReview;
        }

        if (null !== $this->complainHistories) {
            $res['ComplainHistories'] = null !== $this->complainHistories ? $this->complainHistories->toArray($noStream) : $this->complainHistories;
        }

        if (null !== $this->complainable) {
            $res['Complainable'] = $this->complainable;
        }

        if (null !== $this->conditionHitInfoList) {
            $res['ConditionHitInfoList'] = null !== $this->conditionHitInfoList ? $this->conditionHitInfoList->toArray($noStream) : $this->conditionHitInfoList;
        }

        if (null !== $this->machineHitResult) {
            $res['MachineHitResult'] = $this->machineHitResult;
        }

        if (null !== $this->reviewHitResult) {
            $res['ReviewHitResult'] = $this->reviewHitResult;
        }

        if (null !== $this->reviewInfo) {
            $res['ReviewInfo'] = null !== $this->reviewInfo ? $this->reviewInfo->toArray($noStream) : $this->reviewInfo;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['MachineHitResult'])) {
            $model->machineHitResult = $map['MachineHitResult'];
        }

        if (isset($map['ReviewHitResult'])) {
            $model->reviewHitResult = $map['ReviewHitResult'];
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
