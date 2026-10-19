<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateTodoResponseBody\assignees;

class CreateTodoResponseBody extends Model
{
    /**
     * @var assignees[]
     */
    public $assignees;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $todoId;
    protected $_name = [
        'assignees' => 'assignees',
        'code' => 'code',
        'gmtCreate' => 'gmtCreate',
        'message' => 'message',
        'requestId' => 'requestId',
        'status' => 'status',
        'todoId' => 'todoId',
    ];

    public function validate()
    {
        if (\is_array($this->assignees)) {
            Model::validateArray($this->assignees);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignees) {
            if (\is_array($this->assignees)) {
                $res['assignees'] = [];
                $n1 = 0;
                foreach ($this->assignees as $item1) {
                    $res['assignees'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['assignees'])) {
            if (!empty($map['assignees'])) {
                $model->assignees = [];
                $n1 = 0;
                foreach ($map['assignees'] as $item1) {
                    $model->assignees[$n1] = assignees::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['todoId'])) {
            $model->todoId = $map['todoId'];
        }

        return $model;
    }
}
