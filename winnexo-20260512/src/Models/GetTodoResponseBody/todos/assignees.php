<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetTodoResponseBody\todos;

use AlibabaCloud\Dara\Model;

class assignees extends Model
{
    /**
     * @var string
     */
    public $actedAt;

    /**
     * @var string
     */
    public $assigneeSource;

    /**
     * @var string
     */
    public $assigneeUserId;

    /**
     * @var string
     */
    public $readAt;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $transferredFromUserId;
    protected $_name = [
        'actedAt' => 'actedAt',
        'assigneeSource' => 'assigneeSource',
        'assigneeUserId' => 'assigneeUserId',
        'readAt' => 'readAt',
        'status' => 'status',
        'transferredFromUserId' => 'transferredFromUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actedAt) {
            $res['actedAt'] = $this->actedAt;
        }

        if (null !== $this->assigneeSource) {
            $res['assigneeSource'] = $this->assigneeSource;
        }

        if (null !== $this->assigneeUserId) {
            $res['assigneeUserId'] = $this->assigneeUserId;
        }

        if (null !== $this->readAt) {
            $res['readAt'] = $this->readAt;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->transferredFromUserId) {
            $res['transferredFromUserId'] = $this->transferredFromUserId;
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
        if (isset($map['actedAt'])) {
            $model->actedAt = $map['actedAt'];
        }

        if (isset($map['assigneeSource'])) {
            $model->assigneeSource = $map['assigneeSource'];
        }

        if (isset($map['assigneeUserId'])) {
            $model->assigneeUserId = $map['assigneeUserId'];
        }

        if (isset($map['readAt'])) {
            $model->readAt = $map['readAt'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['transferredFromUserId'])) {
            $model->transferredFromUserId = $map['transferredFromUserId'];
        }

        return $model;
    }
}
