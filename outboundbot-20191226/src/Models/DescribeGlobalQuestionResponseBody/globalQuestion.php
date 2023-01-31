<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeGlobalQuestionResponseBody;

use AlibabaCloud\Tea\Model;

class globalQuestion extends Model
{
    /**
     * @var string
     */
    public $answers;

    /**
     * @example f160ec2e-94f2-4c03-87be-ece5b52d5dd9
     *
     * @var string
     */
    public $globalQuestionId;

    /**
     * @var string
     */
    public $globalQuestionName;

    /**
     * @example COMMON
     *
     * @var string
     */
    public $globalQuestionType;

    /**
     * @var string
     */
    public $questions;

    /**
     * @example 290e06a5-6de2-4cc8-8a9c-72b7c152256c
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
     * @return globalQuestion
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
