<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\GetEduHomeworkCorrectionResultResponseBody\data\questionResults;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\GetEduHomeworkCorrectionResultResponseBody\data\questionResults\answerResults\answerPoints;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\GetEduHomeworkCorrectionResultResponseBody\data\questionResults\answerResults\checkPoint;

class answerResults extends Model
{
    /**
     * @var answerPoints[]
     */
    public $answerPoints;

    /**
     * @var checkPoint
     */
    public $checkPoint;

    /**
     * @var string
     */
    public $checkResult;

    /**
     * @var string
     */
    public $standardAnswer;

    /**
     * @var string
     */
    public $userAnswer;
    protected $_name = [
        'answerPoints' => 'answerPoints',
        'checkPoint' => 'checkPoint',
        'checkResult' => 'checkResult',
        'standardAnswer' => 'standardAnswer',
        'userAnswer' => 'userAnswer',
    ];

    public function validate()
    {
        if (\is_array($this->answerPoints)) {
            Model::validateArray($this->answerPoints);
        }
        if (null !== $this->checkPoint) {
            $this->checkPoint->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answerPoints) {
            if (\is_array($this->answerPoints)) {
                $res['answerPoints'] = [];
                $n1 = 0;
                foreach ($this->answerPoints as $item1) {
                    $res['answerPoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->checkPoint) {
            $res['checkPoint'] = null !== $this->checkPoint ? $this->checkPoint->toArray($noStream) : $this->checkPoint;
        }

        if (null !== $this->checkResult) {
            $res['checkResult'] = $this->checkResult;
        }

        if (null !== $this->standardAnswer) {
            $res['standardAnswer'] = $this->standardAnswer;
        }

        if (null !== $this->userAnswer) {
            $res['userAnswer'] = $this->userAnswer;
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
        if (isset($map['answerPoints'])) {
            if (!empty($map['answerPoints'])) {
                $model->answerPoints = [];
                $n1 = 0;
                foreach ($map['answerPoints'] as $item1) {
                    $model->answerPoints[$n1] = answerPoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['checkPoint'])) {
            $model->checkPoint = checkPoint::fromMap($map['checkPoint']);
        }

        if (isset($map['checkResult'])) {
            $model->checkResult = $map['checkResult'];
        }

        if (isset($map['standardAnswer'])) {
            $model->standardAnswer = $map['standardAnswer'];
        }

        if (isset($map['userAnswer'])) {
            $model->userAnswer = $map['userAnswer'];
        }

        return $model;
    }
}
