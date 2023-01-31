<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class ModifyGlobalQuestionRequest extends Model
{
    /**
     * @var string
     */
    public $answers;

    /**
     * @example ad80de88-1661-445a-92ec-bf88dc45d581
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
     * @example 8fa1953f-4a84-46d8-b80c-8ce9cf684fb3
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $questions;

    /**
     * @example 19ac2375-53e3-477f-abe9-6cd334227981
     *
     * @var string
     */
    public $scriptId;
    protected $_name = [
        'answers'            => 'Answers',
        'globalQuestionId'   => 'GlobalQuestionId',
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
        if (null !== $this->globalQuestionId) {
            $res['GlobalQuestionId'] = $this->globalQuestionId;
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
     * @return ModifyGlobalQuestionRequest
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
