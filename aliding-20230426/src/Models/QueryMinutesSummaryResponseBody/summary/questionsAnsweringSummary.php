<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryResponseBody\summary;

use AlibabaCloud\Tea\Model;

class questionsAnsweringSummary extends Model
{
    /**
     * @example 问题
     *
     * @var string
     */
    public $answer;

    /**
     * @example 回答
     *
     * @var string
     */
    public $question;

    /**
     * @example []
     *
     * @var int[]
     */
    public $sentenceIdsOfAnswer;

    /**
     * @example []
     *
     * @var int[]
     */
    public $sentenceIdsOfQuestion;
    protected $_name = [
        'answer'                => 'Answer',
        'question'              => 'Question',
        'sentenceIdsOfAnswer'   => 'SentenceIdsOfAnswer',
        'sentenceIdsOfQuestion' => 'SentenceIdsOfQuestion',
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
        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }
        if (null !== $this->sentenceIdsOfAnswer) {
            $res['SentenceIdsOfAnswer'] = $this->sentenceIdsOfAnswer;
        }
        if (null !== $this->sentenceIdsOfQuestion) {
            $res['SentenceIdsOfQuestion'] = $this->sentenceIdsOfQuestion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return questionsAnsweringSummary
     */
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
                $model->sentenceIdsOfAnswer = $map['SentenceIdsOfAnswer'];
            }
        }
        if (isset($map['SentenceIdsOfQuestion'])) {
            if (!empty($map['SentenceIdsOfQuestion'])) {
                $model->sentenceIdsOfQuestion = $map['SentenceIdsOfQuestion'];
            }
        }

        return $model;
    }
}
