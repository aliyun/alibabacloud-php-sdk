<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListGlobalQuestionsResponseBody\globalQuestions;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $answers;

    /**
     * @example 53c27755-d41e-46a6-bb3c-4f66f257d50c
     *
     * @var string
     */
    public $globalQuestionId;

    /**
     * @var string
     */
    public $globalQuestionName;

    /**
     * @example SYSTEM
     *
     * @var string
     */
    public $globalQuestionType;

    /**
     * @var string
     */
    public $questions;

    /**
     * @example aa279896-64a6-4182-864c-4f2b04ec8d17
     *
     * @var string
     */
    public $scriptId;
    protected $_name = [
        'answers'            => 'Answers',
        'globalQuestionId'   => 'GlobalQuestionId',
        'globalQuestionName' => 'GlobalQuestionName',
        'globalQuestionType' => 'GlobalQuestionType',
        'questions'          => 'Questions',
        'scriptId'           => 'ScriptId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answers) {
            $res['Answers'] = $this->answers;
        }
        if (null !== $this->globalQuestionId) {
            $res['GlobalQuestionId'] = $this->globalQuestionId;
        }
        if (null !== $this->globalQuestionName) {
            $res['GlobalQuestionName'] = $this->globalQuestionName;
        }
        if (null !== $this->globalQuestionType) {
            $res['GlobalQuestionType'] = $this->globalQuestionType;
        }
        if (null !== $this->questions) {
            $res['Questions'] = $this->questions;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Answers'])) {
            $model->answers = $map['Answers'];
        }
        if (isset($map['GlobalQuestionId'])) {
            $model->globalQuestionId = $map['GlobalQuestionId'];
        }
        if (isset($map['GlobalQuestionName'])) {
            $model->globalQuestionName = $map['GlobalQuestionName'];
        }
        if (isset($map['GlobalQuestionType'])) {
            $model->globalQuestionType = $map['GlobalQuestionType'];
        }
        if (isset($map['Questions'])) {
            $model->questions = $map['Questions'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        return $model;
    }
}
