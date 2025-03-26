<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ExecuteAITeacherEnglishParaphraseChatMessageRequest extends Model
{
    /**
     * @var string
     */
    public $chatId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $grade;

    /**
     * @var string
     */
    public $questionId;

    /**
     * @var string
     */
    public $questionInfo;

    /**
     * @var string
     */
    public $responseMode;

    /**
     * @var string
     */
    public $userAnswer;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'chatId' => 'chatId',
        'content' => 'content',
        'grade' => 'grade',
        'questionId' => 'questionId',
        'questionInfo' => 'questionInfo',
        'responseMode' => 'responseMode',
        'userAnswer' => 'userAnswer',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chatId) {
            $res['chatId'] = $this->chatId;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->grade) {
            $res['grade'] = $this->grade;
        }

        if (null !== $this->questionId) {
            $res['questionId'] = $this->questionId;
        }

        if (null !== $this->questionInfo) {
            $res['questionInfo'] = $this->questionInfo;
        }

        if (null !== $this->responseMode) {
            $res['responseMode'] = $this->responseMode;
        }

        if (null !== $this->userAnswer) {
            $res['userAnswer'] = $this->userAnswer;
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
        if (isset($map['chatId'])) {
            $model->chatId = $map['chatId'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['grade'])) {
            $model->grade = $map['grade'];
        }

        if (isset($map['questionId'])) {
            $model->questionId = $map['questionId'];
        }

        if (isset($map['questionInfo'])) {
            $model->questionInfo = $map['questionInfo'];
        }

        if (isset($map['responseMode'])) {
            $model->responseMode = $map['responseMode'];
        }

        if (isset($map['userAnswer'])) {
            $model->userAnswer = $map['userAnswer'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
