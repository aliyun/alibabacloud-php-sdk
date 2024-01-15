<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\reviewHistoryList;

use AlibabaCloud\Tea\Model;

class reviewHistory extends Model
{
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
     * @var string
     */
    public $operatorName;

    /**
     * @example 1
     *
     * @var int
     */
    public $reviewResult;

    /**
     * @example 95
     *
     * @var int
     */
    public $score;

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
        'complainResult' => 'ComplainResult',
        'oldScore'       => 'OldScore',
        'operatorName'   => 'OperatorName',
        'reviewResult'   => 'ReviewResult',
        'score'          => 'Score',
        'timeStr'        => 'TimeStr',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complainResult) {
            $res['ComplainResult'] = $this->complainResult;
        }
        if (null !== $this->oldScore) {
            $res['OldScore'] = $this->oldScore;
        }
        if (null !== $this->operatorName) {
            $res['OperatorName'] = $this->operatorName;
        }
        if (null !== $this->reviewResult) {
            $res['ReviewResult'] = $this->reviewResult;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
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
        if (isset($map['ComplainResult'])) {
            $model->complainResult = $map['ComplainResult'];
        }
        if (isset($map['OldScore'])) {
            $model->oldScore = $map['OldScore'];
        }
        if (isset($map['OperatorName'])) {
            $model->operatorName = $map['OperatorName'];
        }
        if (isset($map['ReviewResult'])) {
            $model->reviewResult = $map['ReviewResult'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
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
