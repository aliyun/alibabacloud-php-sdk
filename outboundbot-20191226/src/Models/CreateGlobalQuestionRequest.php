<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class CreateGlobalQuestionRequest extends Model
{
    /**
     * @var string
     */
    public $answers;

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
     * @example 174952ab-9825-4cc9-a5e2-de82d7fa4cdd
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $questions;

    /**
     * @example 36fea72b-d6fa-4974-ace7-19ffe3f622fb
     *
     * @var string
     */
    public $scriptId;
    protected $_name = [
        'answers'            => 'Answers',
        'globalQuestionName' => 'GlobalQuestionName',
        'globalQuestionType' => 'GlobalQuestionType',
        'instanceId'         => 'InstanceId',
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
        if (null !== $this->globalQuestionName) {
            $res['GlobalQuestionName'] = $this->globalQuestionName;
        }
        if (null !== $this->globalQuestionType) {
            $res['GlobalQuestionType'] = $this->globalQuestionType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
     * @return CreateGlobalQuestionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Answers'])) {
            $model->answers = $map['Answers'];
        }
        if (isset($map['GlobalQuestionName'])) {
            $model->globalQuestionName = $map['GlobalQuestionName'];
        }
        if (isset($map['GlobalQuestionType'])) {
            $model->globalQuestionType = $map['GlobalQuestionType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
