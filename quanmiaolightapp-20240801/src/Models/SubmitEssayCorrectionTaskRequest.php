<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitEssayCorrectionTaskRequest\tasks;

class SubmitEssayCorrectionTaskRequest extends Model
{
    /**
     * @var string
     */
    public $grade;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $otherReviewPoints;

    /**
     * @var string
     */
    public $question;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var tasks[]
     */
    public $tasks;

    /**
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

    public function validate()
    {
        if (\is_array($this->tasks)) {
            Model::validateArray($this->tasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tasks)) {
                $res['tasks'] = [];
                $n1 = 0;
                foreach ($this->tasks as $item1) {
                    $res['tasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalScore) {
            $res['totalScore'] = $this->totalScore;
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
                $n1 = 0;
                foreach ($map['tasks'] as $item1) {
                    $model->tasks[$n1] = tasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['totalScore'])) {
            $model->totalScore = $map['totalScore'];
        }

        return $model;
    }
}
