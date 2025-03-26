<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ExecuteAITeacherEnglishCompositionTutoringWorkflowRunRequest extends Model
{
    /**
     * @var string
     */
    public $essayOutline;

    /**
     * @var string
     */
    public $essayRequirements;

    /**
     * @var string
     */
    public $essayTopic;

    /**
     * @var string
     */
    public $essayType;

    /**
     * @var int
     */
    public $essayWordCount;

    /**
     * @var int
     */
    public $grade;

    /**
     * @var string
     */
    public $responseMode;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'essayOutline' => 'essayOutline',
        'essayRequirements' => 'essayRequirements',
        'essayTopic' => 'essayTopic',
        'essayType' => 'essayType',
        'essayWordCount' => 'essayWordCount',
        'grade' => 'grade',
        'responseMode' => 'responseMode',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->essayOutline) {
            $res['essayOutline'] = $this->essayOutline;
        }

        if (null !== $this->essayRequirements) {
            $res['essayRequirements'] = $this->essayRequirements;
        }

        if (null !== $this->essayTopic) {
            $res['essayTopic'] = $this->essayTopic;
        }

        if (null !== $this->essayType) {
            $res['essayType'] = $this->essayType;
        }

        if (null !== $this->essayWordCount) {
            $res['essayWordCount'] = $this->essayWordCount;
        }

        if (null !== $this->grade) {
            $res['grade'] = $this->grade;
        }

        if (null !== $this->responseMode) {
            $res['responseMode'] = $this->responseMode;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['essayOutline'])) {
            $model->essayOutline = $map['essayOutline'];
        }

        if (isset($map['essayRequirements'])) {
            $model->essayRequirements = $map['essayRequirements'];
        }

        if (isset($map['essayTopic'])) {
            $model->essayTopic = $map['essayTopic'];
        }

        if (isset($map['essayType'])) {
            $model->essayType = $map['essayType'];
        }

        if (isset($map['essayWordCount'])) {
            $model->essayWordCount = $map['essayWordCount'];
        }

        if (isset($map['grade'])) {
            $model->grade = $map['grade'];
        }

        if (isset($map['responseMode'])) {
            $model->responseMode = $map['responseMode'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
