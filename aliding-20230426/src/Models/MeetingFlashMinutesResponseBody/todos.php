<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\MeetingFlashMinutesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\MeetingFlashMinutesResponseBody\todos\dingtalkTodoList;

class todos extends Model
{
    /**
     * @var string[]
     */
    public $actions;

    /**
     * @var dingtalkTodoList[]
     */
    public $dingtalkTodoList;
    protected $_name = [
        'actions' => 'actions',
        'dingtalkTodoList' => 'dingtalkTodoList',
    ];

    public function validate()
    {
        if (\is_array($this->actions)) {
            Model::validateArray($this->actions);
        }
        if (\is_array($this->dingtalkTodoList)) {
            Model::validateArray($this->dingtalkTodoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actions) {
            if (\is_array($this->actions)) {
                $res['actions'] = [];
                $n1 = 0;
                foreach ($this->actions as $item1) {
                    $res['actions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dingtalkTodoList) {
            if (\is_array($this->dingtalkTodoList)) {
                $res['dingtalkTodoList'] = [];
                $n1 = 0;
                foreach ($this->dingtalkTodoList as $item1) {
                    $res['dingtalkTodoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['actions'])) {
            if (!empty($map['actions'])) {
                $model->actions = [];
                $n1 = 0;
                foreach ($map['actions'] as $item1) {
                    $model->actions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['dingtalkTodoList'])) {
            if (!empty($map['dingtalkTodoList'])) {
                $model->dingtalkTodoList = [];
                $n1 = 0;
                foreach ($map['dingtalkTodoList'] as $item1) {
                    $model->dingtalkTodoList[$n1] = dingtalkTodoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
