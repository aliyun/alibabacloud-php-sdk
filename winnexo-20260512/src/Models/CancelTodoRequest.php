<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CancelTodoRequest extends Model
{
    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $todoId;

    /**
     * @var string
     */
    public $workItemId;
    protected $_name = [
        'tenantId' => 'tenantId',
        'todoId' => 'todoId',
        'workItemId' => 'workItemId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->todoId) {
            $res['todoId'] = $this->todoId;
        }

        if (null !== $this->workItemId) {
            $res['workItemId'] = $this->workItemId;
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
        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['todoId'])) {
            $model->todoId = $map['todoId'];
        }

        if (isset($map['workItemId'])) {
            $model->workItemId = $map['workItemId'];
        }

        return $model;
    }
}
