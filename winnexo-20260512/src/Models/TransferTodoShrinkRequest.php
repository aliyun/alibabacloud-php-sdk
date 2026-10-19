<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class TransferTodoShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $targetUserIdsShrink;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $todoId;
    protected $_name = [
        'comment' => 'comment',
        'targetUserIdsShrink' => 'targetUserIds',
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
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }

        if (null !== $this->targetUserIdsShrink) {
            $res['targetUserIds'] = $this->targetUserIdsShrink;
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
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }

        if (isset($map['targetUserIds'])) {
            $model->targetUserIdsShrink = $map['targetUserIds'];
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
