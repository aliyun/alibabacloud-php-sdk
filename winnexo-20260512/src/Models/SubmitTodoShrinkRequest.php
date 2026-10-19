<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class SubmitTodoShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $answersShrink;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $todoId;
    protected $_name = [
        'answersShrink' => 'answers',
        'tenantId' => 'tenantId',
        'todoId' => 'todoId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answersShrink) {
            $res['answers'] = $this->answersShrink;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->todoId) {
            $res['todoId'] = $this->todoId;
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
        if (isset($map['answers'])) {
            $model->answersShrink = $map['answers'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['todoId'])) {
            $model->todoId = $map['todoId'];
        }

        return $model;
    }
}
