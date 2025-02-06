<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\reviewHistoryList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\reviewHistoryList\reviewHistory\reviewRightRule;

class reviewHistory extends Model
{
    /**
     * @var string
     */
    public $comments;
    /**
     * @var int
     */
    public $complainResult;
    /**
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
     * @var int
     */
    public $reviewResult;
    /**
     * @var reviewRightRule
     */
    public $reviewRightRule;
    /**
     * @var int
     */
    public $score;
    /**
     * @var int
     */
    public $time;
    /**
     * @var string
     */
    public $timeStr;
    /**
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
        if (null !== $this->reviewRightRule) {
            $this->reviewRightRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['ReviewRightRule'] = null !== $this->reviewRightRule ? $this->reviewRightRule->toArray($noStream) : $this->reviewRightRule;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
