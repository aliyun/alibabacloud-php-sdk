<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationScoreHistoryResponseBody\scoreHistory;

use AlibabaCloud\Tea\Model;

class totalScoreHistory extends Model
{
    /**
     * @example 2024-06-30T03:34:02Z
     *
     * @var string
     */
    public $evaluationTime;

    /**
     * @example 0.6753
     *
     * @var float
     */
    public $score;
    protected $_name = [
        'evaluationTime' => 'EvaluationTime',
        'score'          => 'Score',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->evaluationTime) {
            $res['EvaluationTime'] = $this->evaluationTime;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return totalScoreHistory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EvaluationTime'])) {
            $model->evaluationTime = $map['EvaluationTime'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
