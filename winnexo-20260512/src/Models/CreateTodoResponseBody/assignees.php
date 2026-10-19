<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateTodoResponseBody;

use AlibabaCloud\Dara\Model;

class assignees extends Model
{
    /**
     * @var string
     */
    public $assigneeUserId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'assigneeUserId' => 'assigneeUserId',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assigneeUserId) {
            $res['assigneeUserId'] = $this->assigneeUserId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['assigneeUserId'])) {
            $model->assigneeUserId = $map['assigneeUserId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
