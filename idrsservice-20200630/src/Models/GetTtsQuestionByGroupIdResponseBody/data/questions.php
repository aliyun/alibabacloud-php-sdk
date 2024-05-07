<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetTtsQuestionByGroupIdResponseBody\data;

use AlibabaCloud\Tea\Model;

class questions extends Model
{
    /**
     * @var string
     */
    public $answer;

    /**
     * @example 674
     *
     * @var float
     */
    public $duration;

    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @example https://pts-data-f***.pcm
     *
     * @var string
     */
    public $ossUrl;

    /**
     * @var string
     */
    public $question;

    /**
     * @example 47584ba4-9781-496b-8e6f-c8525a213***
     *
     * @var int
     */
    public $questionGroupId;

    /**
     * @example 47584ba4-9781-496b-8e6f-c8525a213***
     *
     * @var string
     */
    public $questionKey;

    /**
     * @example 2
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'answer'          => 'Answer',
        'duration'        => 'Duration',
        'id'              => 'Id',
        'ossUrl'          => 'OssUrl',
        'question'        => 'Question',
        'questionGroupId' => 'QuestionGroupId',
        'questionKey'     => 'QuestionKey',
        'tenantId'        => 'TenantId',
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
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ossUrl) {
            $res['OssUrl'] = $this->ossUrl;
        }
        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }
        if (null !== $this->questionGroupId) {
            $res['QuestionGroupId'] = $this->questionGroupId;
        }
        if (null !== $this->questionKey) {
            $res['QuestionKey'] = $this->questionKey;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return questions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Answer'])) {
            $model->answer = $map['Answer'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OssUrl'])) {
            $model->ossUrl = $map['OssUrl'];
        }
        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }
        if (isset($map['QuestionGroupId'])) {
            $model->questionGroupId = $map['QuestionGroupId'];
        }
        if (isset($map['QuestionKey'])) {
            $model->questionKey = $map['QuestionKey'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
