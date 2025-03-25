<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunMedQAResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
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
     * @var string
     */
    public $questionType;

    /**
     * @var string[]
     */
    public $reports;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'answerType' => 'AnswerType',
        'options' => 'Options',
        'question' => 'Question',
        'questionType' => 'QuestionType',
        'reports' => 'Reports',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        if (\is_array($this->options)) {
            Model::validateArray($this->options);
        }
        if (\is_array($this->reports)) {
            Model::validateArray($this->reports);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answerType) {
            $res['AnswerType'] = $this->answerType;
        }

        if (null !== $this->options) {
            if (\is_array($this->options)) {
                $res['Options'] = [];
                $n1 = 0;
                foreach ($this->options as $item1) {
                    $res['Options'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }

        if (null !== $this->questionType) {
            $res['QuestionType'] = $this->questionType;
        }

        if (null !== $this->reports) {
            if (\is_array($this->reports)) {
                $res['Reports'] = [];
                foreach ($this->reports as $key1 => $value1) {
                    $res['Reports'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['AnswerType'])) {
            $model->answerType = $map['AnswerType'];
        }

        if (isset($map['Options'])) {
            if (!empty($map['Options'])) {
                $model->options = [];
                $n1 = 0;
                foreach ($map['Options'] as $item1) {
                    $model->options[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }

        if (isset($map['QuestionType'])) {
            $model->questionType = $map['QuestionType'];
        }

        if (isset($map['Reports'])) {
            if (!empty($map['Reports'])) {
                $model->reports = [];
                foreach ($map['Reports'] as $key1 => $value1) {
                    $model->reports[$key1] = $value1;
                }
            }
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
