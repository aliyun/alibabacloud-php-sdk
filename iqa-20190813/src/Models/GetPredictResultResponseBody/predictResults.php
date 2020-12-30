<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iqa\V20190813\Models\GetPredictResultResponseBody;

use AlibabaCloud\Tea\Model;

class predictResults extends Model
{
    /**
     * @var string
     */
    public $answer;

    /**
     * @var string
     */
    public $questionId;

    /**
     * @var int
     */
    public $rank;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $question;
    protected $_name = [
        'answer'     => 'Answer',
        'questionId' => 'QuestionId',
        'rank'       => 'Rank',
        'score'      => 'Score',
        'question'   => 'Question',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answer) {
            $res['Answer'] = $this->answer;
        }
        if (null !== $this->questionId) {
            $res['QuestionId'] = $this->questionId;
        }
        if (null !== $this->rank) {
            $res['Rank'] = $this->rank;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return predictResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Answer'])) {
            $model->answer = $map['Answer'];
        }
        if (isset($map['QuestionId'])) {
            $model->questionId = $map['QuestionId'];
        }
        if (isset($map['Rank'])) {
            $model->rank = $map['Rank'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }

        return $model;
    }
}
