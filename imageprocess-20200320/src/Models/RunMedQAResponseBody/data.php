<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunMedQAResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example text
     *
     * @var string
     */
    public $answerType;

    /**
     * @var string[]
     */
    public $options;

    /**
     * @var string
     */
    public $question;

    /**
     * @example age
     *
     * @var string
     */
    public $questionType;

    /**
     * @var string[]
     */
    public $reports;

    /**
     * @example d1f6a6c2444f4c01adfadd413938e5c7
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'answerType'   => 'AnswerType',
        'options'      => 'Options',
        'question'     => 'Question',
        'questionType' => 'QuestionType',
        'reports'      => 'Reports',
        'sessionId'    => 'SessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answerType) {
            $res['AnswerType'] = $this->answerType;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }
        if (null !== $this->questionType) {
            $res['QuestionType'] = $this->questionType;
        }
        if (null !== $this->reports) {
            $res['Reports'] = $this->reports;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['AnswerType'])) {
            $model->answerType = $map['AnswerType'];
        }
        if (isset($map['Options'])) {
            if (!empty($map['Options'])) {
                $model->options = $map['Options'];
            }
        }
        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }
        if (isset($map['QuestionType'])) {
            $model->questionType = $map['QuestionType'];
        }
        if (isset($map['Reports'])) {
            $model->reports = $map['Reports'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
