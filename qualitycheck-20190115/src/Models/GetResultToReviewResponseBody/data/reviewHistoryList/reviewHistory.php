<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\reviewHistoryList;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\reviewHistoryList\reviewHistory\reviewRightRule;
use AlibabaCloud\Tea\Model;

class reviewHistory extends Model
{
    /**
     * @var string
     */
    public $comments;

    /**
     * @example 1
     *
     * @var int
     */
    public $complainResult;

    /**
     * @example 90
     *
     * @var int
     */
    public $oldScore;

    /**
     * @var int
     */
    public $operator;

    /**
     * @var string
     */
    public $operatorName;

    /**
     * @var string
     */
    public $reviewManagerType;

    /**
     * @example 1
     *
     * @var int
     */
    public $reviewResult;

    /**
     * @var reviewRightRule
     */
    public $reviewRightRule;

    /**
     * @example 95
     *
     * @var int
     */
    public $score;

    /**
     * @var int
     */
    public $time;

    /**
     * @example 2019-10-28 15:21:00
     *
     * @var string
     */
    public $timeStr;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'comments'          => 'Comments',
        'complainResult'    => 'ComplainResult',
        'oldScore'          => 'OldScore',
        'operator'          => 'Operator',
        'operatorName'      => 'OperatorName',
        'reviewManagerType' => 'ReviewManagerType',
        'reviewResult'      => 'ReviewResult',
        'reviewRightRule'   => 'ReviewRightRule',
        'score'             => 'Score',
        'time'              => 'Time',
        'timeStr'           => 'TimeStr',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->complainResult) {
            $res['ComplainResult'] = $this->complainResult;
        }
        if (null !== $this->oldScore) {
            $res['OldScore'] = $this->oldScore;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->operatorName) {
            $res['OperatorName'] = $this->operatorName;
        }
        if (null !== $this->reviewManagerType) {
            $res['ReviewManagerType'] = $this->reviewManagerType;
        }
        if (null !== $this->reviewResult) {
            $res['ReviewResult'] = $this->reviewResult;
        }
        if (null !== $this->reviewRightRule) {
            $res['ReviewRightRule'] = null !== $this->reviewRightRule ? $this->reviewRightRule->toMap() : null;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->timeStr) {
            $res['TimeStr'] = $this->timeStr;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reviewHistory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['ComplainResult'])) {
            $model->complainResult = $map['ComplainResult'];
        }
        if (isset($map['OldScore'])) {
            $model->oldScore = $map['OldScore'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['OperatorName'])) {
            $model->operatorName = $map['OperatorName'];
        }
        if (isset($map['ReviewManagerType'])) {
            $model->reviewManagerType = $map['ReviewManagerType'];
        }
        if (isset($map['ReviewResult'])) {
            $model->reviewResult = $map['ReviewResult'];
        }
        if (isset($map['ReviewRightRule'])) {
            $model->reviewRightRule = reviewRightRule::fromMap($map['ReviewRightRule']);
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['TimeStr'])) {
            $model->timeStr = $map['TimeStr'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
