<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Tea\Model;

class RunEssayCorrectionRequest extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $answer;

    /**
     * @var string
     */
    public $grade;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $otherReviewPoints;

    /**
     * @example xx
     *
     * @var string
     */
    public $question;

    /**
     * @var string
     */
    public $subject;

    /**
     * @example 60
     *
     * @var int
     */
    public $totalScore;
    protected $_name = [
        'answer' => 'answer',
        'grade' => 'grade',
        'modelId' => 'modelId',
        'otherReviewPoints' => 'otherReviewPoints',
        'question' => 'question',
        'subject' => 'subject',
        'totalScore' => 'totalScore',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->answer) {
            $res['answer'] = $this->answer;
        }
        if (null !== $this->grade) {
            $res['grade'] = $this->grade;
        }
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }
        if (null !== $this->otherReviewPoints) {
            $res['otherReviewPoints'] = $this->otherReviewPoints;
        }
        if (null !== $this->question) {
            $res['question'] = $this->question;
        }
        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
        }
        if (null !== $this->totalScore) {
            $res['totalScore'] = $this->totalScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunEssayCorrectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['answer'])) {
            $model->answer = $map['answer'];
        }
        if (isset($map['grade'])) {
            $model->grade = $map['grade'];
        }
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }
        if (isset($map['otherReviewPoints'])) {
            $model->otherReviewPoints = $map['otherReviewPoints'];
        }
        if (isset($map['question'])) {
            $model->question = $map['question'];
        }
        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }
        if (isset($map['totalScore'])) {
            $model->totalScore = $map['totalScore'];
        }

        return $model;
    }
}
