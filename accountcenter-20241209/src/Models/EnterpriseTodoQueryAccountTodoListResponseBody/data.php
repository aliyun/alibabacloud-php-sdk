<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseTodoQueryAccountTodoListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseTodoQueryAccountTodoListResponseBody\data\todoList;

class data extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var todoList[]
     */
    public $todoList;
    protected $_name = [
        'count' => 'Count',
        'todoList' => 'TodoList',
    ];

    public function validate()
    {
        if (\is_array($this->todoList)) {
            Model::validateArray($this->todoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->todoList) {
            if (\is_array($this->todoList)) {
                $res['TodoList'] = [];
                $n1 = 0;
                foreach ($this->todoList as $item1) {
                    $res['TodoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['TodoList'])) {
            if (!empty($map['TodoList'])) {
                $model->todoList = [];
                $n1 = 0;
                foreach ($map['TodoList'] as $item1) {
                    $model->todoList[$n1] = todoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
