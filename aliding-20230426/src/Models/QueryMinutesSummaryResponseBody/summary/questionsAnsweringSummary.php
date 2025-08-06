<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryResponseBody\summary;

use AlibabaCloud\Dara\Model;

class questionsAnsweringSummary extends Model
{
    /**
     * @var string
     */
    public $answer;

    /**
     * @var string
     */
    public $question;

    /**
     * @var int[]
     */
    public $sentenceIdsOfAnswer;

    /**
     * @var int[]
     */
    public $sentenceIdsOfQuestion;
    protected $_name = [
        'answer' => 'Answer',
        'question' => 'Question',
        'sentenceIdsOfAnswer' => 'SentenceIdsOfAnswer',
        'sentenceIdsOfQuestion' => 'SentenceIdsOfQuestion',
    ];

    public function validate()
    {
        if (\is_array($this->sentenceIdsOfAnswer)) {
            Model::validateArray($this->sentenceIdsOfAnswer);
        }
        if (\is_array($this->sentenceIdsOfQuestion)) {
            Model::validateArray($this->sentenceIdsOfQuestion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answer) {
            $res['Answer'] = $this->answer;
        }

        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }

        if (null !== $this->sentenceIdsOfAnswer) {
            if (\is_array($this->sentenceIdsOfAnswer)) {
                $res['SentenceIdsOfAnswer'] = [];
                $n1 = 0;
                foreach ($this->sentenceIdsOfAnswer as $item1) {
                    $res['SentenceIdsOfAnswer'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sentenceIdsOfQuestion) {
            if (\is_array($this->sentenceIdsOfQuestion)) {
                $res['SentenceIdsOfQuestion'] = [];
                $n1 = 0;
                foreach ($this->sentenceIdsOfQuestion as $item1) {
                    $res['SentenceIdsOfQuestion'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Answer'])) {
            $model->answer = $map['Answer'];
        }

        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }

        if (isset($map['SentenceIdsOfAnswer'])) {
            if (!empty($map['SentenceIdsOfAnswer'])) {
                $model->sentenceIdsOfAnswer = [];
                $n1 = 0;
                foreach ($map['SentenceIdsOfAnswer'] as $item1) {
                    $model->sentenceIdsOfAnswer[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SentenceIdsOfQuestion'])) {
            if (!empty($map['SentenceIdsOfQuestion'])) {
                $model->sentenceIdsOfQuestion = [];
                $n1 = 0;
                foreach ($map['SentenceIdsOfQuestion'] as $item1) {
                    $model->sentenceIdsOfQuestion[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
