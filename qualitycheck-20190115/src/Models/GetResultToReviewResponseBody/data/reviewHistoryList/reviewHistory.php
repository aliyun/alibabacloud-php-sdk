<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\reviewHistoryList;

use AlibabaCloud\Tea\Model;

class reviewHistory extends Model
{
    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $operatorName;

    /**
     * @var string
     */
    public $timeStr;

    /**
     * @var int
     */
    public $score;

    /**
     * @var int
     */
    public $reviewResult;

    /**
     * @var int
     */
    public $complainResult;

    /**
     * @var int
     */
    public $oldScore;
    protected $_name = [
        'type'           => 'Type',
        'operatorName'   => 'OperatorName',
        'timeStr'        => 'TimeStr',
        'score'          => 'Score',
        'reviewResult'   => 'ReviewResult',
        'complainResult' => 'ComplainResult',
        'oldScore'       => 'OldScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->operatorName) {
            $res['OperatorName'] = $this->operatorName;
        }
        if (null !== $this->timeStr) {
            $res['TimeStr'] = $this->timeStr;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->reviewResult) {
            $res['ReviewResult'] = $this->reviewResult;
        }
        if (null !== $this->complainResult) {
            $res['ComplainResult'] = $this->complainResult;
        }
        if (null !== $this->oldScore) {
            $res['OldScore'] = $this->oldScore;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['OperatorName'])) {
            $model->operatorName = $map['OperatorName'];
        }
        if (isset($map['TimeStr'])) {
            $model->timeStr = $map['TimeStr'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['ReviewResult'])) {
            $model->reviewResult = $map['ReviewResult'];
        }
        if (isset($map['ComplainResult'])) {
            $model->complainResult = $map['ComplainResult'];
        }
        if (isset($map['OldScore'])) {
            $model->oldScore = $map['OldScore'];
        }

        return $model;
    }
}
