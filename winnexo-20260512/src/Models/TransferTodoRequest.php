<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class TransferTodoRequest extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string[]
     */
    public $targetUserIds;

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
        'targetUserIds' => 'targetUserIds',
        'tenantId' => 'tenantId',
        'todoId' => 'todoId',
    ];

    public function validate()
    {
        if (\is_array($this->targetUserIds)) {
            Model::validateArray($this->targetUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }

        if (null !== $this->targetUserIds) {
            if (\is_array($this->targetUserIds)) {
                $res['targetUserIds'] = [];
                $n1 = 0;
                foreach ($this->targetUserIds as $item1) {
                    $res['targetUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['targetUserIds'])) {
                $model->targetUserIds = [];
                $n1 = 0;
                foreach ($map['targetUserIds'] as $item1) {
                    $model->targetUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
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
