<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\GetEduHomeworkCorrectionResultResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\GetEduHomeworkCorrectionResultResponseBody\data\questionResults\answerResults;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\GetEduHomeworkCorrectionResultResponseBody\data\questionResults\questionPoints;

class questionResults extends Model
{
    /**
     * @var answerResults[]
     */
    public $answerResults;

    /**
     * @var bool
     */
    public $finish;

    /**
     * @var string
     */
    public $questionContent;

    /**
     * @var string
     */
    public $questionId;

    /**
     * @var questionPoints[][]
     */
    public $questionPoints;

    /**
     * @var string
     */
    public $questionType;

    /**
     * @var string
     */
    public $solution;
    protected $_name = [
        'answerResults' => 'answerResults',
        'finish' => 'finish',
        'questionContent' => 'questionContent',
        'questionId' => 'questionId',
        'questionPoints' => 'questionPoints',
        'questionType' => 'questionType',
        'solution' => 'solution',
    ];

    public function validate()
    {
        if (\is_array($this->answerResults)) {
            Model::validateArray($this->answerResults);
        }
        if (\is_array($this->questionPoints)) {
            Model::validateArray($this->questionPoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answerResults) {
            if (\is_array($this->answerResults)) {
                $res['answerResults'] = [];
                $n1 = 0;
                foreach ($this->answerResults as $item1) {
                    $res['answerResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->finish) {
            $res['finish'] = $this->finish;
        }

        if (null !== $this->questionContent) {
            $res['questionContent'] = $this->questionContent;
        }

        if (null !== $this->questionId) {
            $res['questionId'] = $this->questionId;
        }

        if (null !== $this->questionPoints) {
            if (\is_array($this->questionPoints)) {
                $res['questionPoints'] = [];
                $n1 = 0;
                foreach ($this->questionPoints as $item1) {
                    if (\is_array($item1)) {
                        $res['questionPoints'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['questionPoints'][$n1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->questionType) {
            $res['questionType'] = $this->questionType;
        }

        if (null !== $this->solution) {
            $res['solution'] = $this->solution;
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
        if (isset($map['answerResults'])) {
            if (!empty($map['answerResults'])) {
                $model->answerResults = [];
                $n1 = 0;
                foreach ($map['answerResults'] as $item1) {
                    $model->answerResults[$n1] = answerResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['finish'])) {
            $model->finish = $map['finish'];
        }

        if (isset($map['questionContent'])) {
            $model->questionContent = $map['questionContent'];
        }

        if (isset($map['questionId'])) {
            $model->questionId = $map['questionId'];
        }

        if (isset($map['questionPoints'])) {
            if (!empty($map['questionPoints'])) {
                $model->questionPoints = [];
                $n1 = 0;
                foreach ($map['questionPoints'] as $item1) {
                    if (!empty($item1)) {
                        $model->questionPoints[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->questionPoints[$n1][$n2] = questionPoints::fromMap($item2);
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['questionType'])) {
            $model->questionType = $map['questionType'];
        }

        if (isset($map['solution'])) {
            $model->solution = $map['solution'];
        }

        return $model;
    }
}
