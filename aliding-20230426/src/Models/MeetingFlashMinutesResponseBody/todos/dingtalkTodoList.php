<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\MeetingFlashMinutesResponseBody\todos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\MeetingFlashMinutesResponseBody\todos\dingtalkTodoList\executorList;

class dingtalkTodoList extends Model
{
    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $creatorUnionId;

    /**
     * @var string
     */
    public $deadline;

    /**
     * @var string
     */
    public $dingtalkTodoId;

    /**
     * @var executorList[]
     */
    public $executorList;

    /**
     * @var bool
     */
    public $isDone;

    /**
     * @var string
     */
    public $minutesTodoId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'createdTime' => 'createdTime',
        'creatorUnionId' => 'creatorUnionId',
        'deadline' => 'deadline',
        'dingtalkTodoId' => 'dingtalkTodoId',
        'executorList' => 'executorList',
        'isDone' => 'isDone',
        'minutesTodoId' => 'minutesTodoId',
        'title' => 'title',
    ];

    public function validate()
    {
        if (\is_array($this->executorList)) {
            Model::validateArray($this->executorList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }

        if (null !== $this->creatorUnionId) {
            $res['creatorUnionId'] = $this->creatorUnionId;
        }

        if (null !== $this->deadline) {
            $res['deadline'] = $this->deadline;
        }

        if (null !== $this->dingtalkTodoId) {
            $res['dingtalkTodoId'] = $this->dingtalkTodoId;
        }

        if (null !== $this->executorList) {
            if (\is_array($this->executorList)) {
                $res['executorList'] = [];
                $n1 = 0;
                foreach ($this->executorList as $item1) {
                    $res['executorList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->isDone) {
            $res['isDone'] = $this->isDone;
        }

        if (null !== $this->minutesTodoId) {
            $res['minutesTodoId'] = $this->minutesTodoId;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }

        if (isset($map['creatorUnionId'])) {
            $model->creatorUnionId = $map['creatorUnionId'];
        }

        if (isset($map['deadline'])) {
            $model->deadline = $map['deadline'];
        }

        if (isset($map['dingtalkTodoId'])) {
            $model->dingtalkTodoId = $map['dingtalkTodoId'];
        }

        if (isset($map['executorList'])) {
            if (!empty($map['executorList'])) {
                $model->executorList = [];
                $n1 = 0;
                foreach ($map['executorList'] as $item1) {
                    $model->executorList[$n1] = executorList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['isDone'])) {
            $model->isDone = $map['isDone'];
        }

        if (isset($map['minutesTodoId'])) {
            $model->minutesTodoId = $map['minutesTodoId'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
