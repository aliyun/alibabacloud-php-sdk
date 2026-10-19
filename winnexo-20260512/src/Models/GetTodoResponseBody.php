<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetTodoResponseBody\todos;

class GetTodoResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $todo;

    /**
     * @var todos[]
     */
    public $todos;
    protected $_name = [
        'code' => 'code',
        'message' => 'message',
        'requestId' => 'requestId',
        'todo' => 'todo',
        'todos' => 'todos',
    ];

    public function validate()
    {
        if (\is_array($this->todo)) {
            Model::validateArray($this->todo);
        }
        if (\is_array($this->todos)) {
            Model::validateArray($this->todos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->todo) {
            if (\is_array($this->todo)) {
                $res['todo'] = [];
                foreach ($this->todo as $key1 => $value1) {
                    $res['todo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->todos) {
            if (\is_array($this->todos)) {
                $res['todos'] = [];
                $n1 = 0;
                foreach ($this->todos as $item1) {
                    $res['todos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['todo'])) {
            if (!empty($map['todo'])) {
                $model->todo = [];
                foreach ($map['todo'] as $key1 => $value1) {
                    $model->todo[$key1] = $value1;
                }
            }
        }

        if (isset($map['todos'])) {
            if (!empty($map['todos'])) {
                $model->todos = [];
                $n1 = 0;
                foreach ($map['todos'] as $item1) {
                    $model->todos[$n1] = todos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
