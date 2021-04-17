<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunMedQAResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $questionType;

    /**
     * @var string
     */
    public $question;

    /**
     * @var string
     */
    public $answerType;

    /**
     * @var string[]
     */
    public $options;

    /**
     * @var string[]
     */
    public $reports;
    protected $_name = [
        'sessionId'    => 'SessionId',
        'questionType' => 'QuestionType',
        'question'     => 'Question',
        'answerType'   => 'AnswerType',
        'options'      => 'Options',
        'reports'      => 'Reports',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->questionType) {
            $res['QuestionType'] = $this->questionType;
        }
        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }
        if (null !== $this->answerType) {
            $res['AnswerType'] = $this->answerType;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->reports) {
            $res['Reports'] = $this->reports;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['QuestionType'])) {
            $model->questionType = $map['QuestionType'];
        }
        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }
        if (isset($map['AnswerType'])) {
            $model->answerType = $map['AnswerType'];
        }
        if (isset($map['Options'])) {
            if (!empty($map['Options'])) {
                $model->options = $map['Options'];
            }
        }
        if (isset($map['Reports'])) {
            $model->reports = $map['Reports'];
        }

        return $model;
    }
}
