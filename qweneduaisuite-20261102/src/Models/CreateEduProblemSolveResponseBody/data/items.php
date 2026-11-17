<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\CreateEduProblemSolveResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\CreateEduProblemSolveResponseBody\data\items\thinking;

class items extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $questionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var thinking
     */
    public $thinking;
    protected $_name = [
        'content' => 'content',
        'imageUrl' => 'imageUrl',
        'questionId' => 'questionId',
        'status' => 'status',
        'thinking' => 'thinking',
    ];

    public function validate()
    {
        if (null !== $this->thinking) {
            $this->thinking->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->imageUrl) {
            $res['imageUrl'] = $this->imageUrl;
        }

        if (null !== $this->questionId) {
            $res['questionId'] = $this->questionId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->thinking) {
            $res['thinking'] = null !== $this->thinking ? $this->thinking->toArray($noStream) : $this->thinking;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['imageUrl'])) {
            $model->imageUrl = $map['imageUrl'];
        }

        if (isset($map['questionId'])) {
            $model->questionId = $map['questionId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['thinking'])) {
            $model->thinking = thinking::fromMap($map['thinking']);
        }

        return $model;
    }
}
