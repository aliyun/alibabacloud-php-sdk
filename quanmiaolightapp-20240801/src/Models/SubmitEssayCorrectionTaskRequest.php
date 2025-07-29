<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitEssayCorrectionTaskRequest\tasks;
use AlibabaCloud\Tea\Model;

class SubmitEssayCorrectionTaskRequest extends Model
{
    /**
     * @example 高中二年级
     *
     * @var string
     */
    public $grade;

    /**
     * @example xxx
     *
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
     * @example xxx
     *
     * @var string
     */
    public $question;

    /**
     * @example 语文
     *
     * @var string
     */
    public $subject;

    /**
     * @var tasks[]
     */
    public $tasks;

    /**
     * @example 60
     *
     * @var int
     */
    public $totalScore;
    protected $_name = [
        'grade' => 'grade',
        'modelId' => 'modelId',
        'otherReviewPoints' => 'otherReviewPoints',
        'question' => 'question',
        'subject' => 'subject',
        'tasks' => 'tasks',
        'totalScore' => 'totalScore',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->tasks) {
            $res['tasks'] = [];
            if (null !== $this->tasks && \is_array($this->tasks)) {
                $n = 0;
                foreach ($this->tasks as $item) {
                    $res['tasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalScore) {
            $res['totalScore'] = $this->totalScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitEssayCorrectionTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['tasks'])) {
            if (!empty($map['tasks'])) {
                $model->tasks = [];
                $n = 0;
                foreach ($map['tasks'] as $item) {
                    $model->tasks[$n++] = null !== $item ? tasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['totalScore'])) {
            $model->totalScore = $map['totalScore'];
        }

        return $model;
    }
}
