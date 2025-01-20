<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListCallDetailRecordsV2ResponseBody\data\list_;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCallDetailRecordsV2ResponseBody\data\list_\analyticsReport\emotion;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCallDetailRecordsV2ResponseBody\data\list_\analyticsReport\problemSolving;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCallDetailRecordsV2ResponseBody\data\list_\analyticsReport\satisfaction;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCallDetailRecordsV2ResponseBody\data\list_\analyticsReport\todoList;

class analyticsReport extends Model
{
    /**
     * @var emotion
     */
    public $emotion;
    /**
     * @var problemSolving
     */
    public $problemSolving;
    /**
     * @var satisfaction
     */
    public $satisfaction;
    /**
     * @var todoList
     */
    public $todoList;
    protected $_name = [
        'emotion'        => 'Emotion',
        'problemSolving' => 'ProblemSolving',
        'satisfaction'   => 'Satisfaction',
        'todoList'       => 'TodoList',
    ];

    public function validate()
    {
        if (null !== $this->emotion) {
            $this->emotion->validate();
        }
        if (null !== $this->problemSolving) {
            $this->problemSolving->validate();
        }
        if (null !== $this->satisfaction) {
            $this->satisfaction->validate();
        }
        if (null !== $this->todoList) {
            $this->todoList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->emotion) {
            $res['Emotion'] = null !== $this->emotion ? $this->emotion->toArray($noStream) : $this->emotion;
        }

        if (null !== $this->problemSolving) {
            $res['ProblemSolving'] = null !== $this->problemSolving ? $this->problemSolving->toArray($noStream) : $this->problemSolving;
        }

        if (null !== $this->satisfaction) {
            $res['Satisfaction'] = null !== $this->satisfaction ? $this->satisfaction->toArray($noStream) : $this->satisfaction;
        }

        if (null !== $this->todoList) {
            $res['TodoList'] = null !== $this->todoList ? $this->todoList->toArray($noStream) : $this->todoList;
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
        if (isset($map['Emotion'])) {
            $model->emotion = emotion::fromMap($map['Emotion']);
        }

        if (isset($map['ProblemSolving'])) {
            $model->problemSolving = problemSolving::fromMap($map['ProblemSolving']);
        }

        if (isset($map['Satisfaction'])) {
            $model->satisfaction = satisfaction::fromMap($map['Satisfaction']);
        }

        if (isset($map['TodoList'])) {
            $model->todoList = todoList::fromMap($map['TodoList']);
        }

        return $model;
    }
}
