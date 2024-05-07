<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateTtsQuestionRequest;

use AlibabaCloud\Tea\Model;

class request extends Model
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
     * @example 47584ba4-9781-496b-8e6f-c8525a213***
     *
     * @var string
     */
    public $questionGroupId;
    protected $_name = [
        'answer'          => 'Answer',
        'question'        => 'Question',
        'questionGroupId' => 'QuestionGroupId',
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
        if (null !== $this->questionGroupId) {
            $res['QuestionGroupId'] = $this->questionGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return request
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
        if (isset($map['QuestionGroupId'])) {
            $model->questionGroupId = $map['QuestionGroupId'];
        }

        return $model;
    }
}
