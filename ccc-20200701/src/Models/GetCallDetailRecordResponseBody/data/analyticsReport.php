<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data;

use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\analyticsReport\emotion;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\analyticsReport\problemSolving;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\analyticsReport\satisfaction;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\analyticsReport\todoList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->emotion) {
            $res['Emotion'] = null !== $this->emotion ? $this->emotion->toMap() : null;
        }
        if (null !== $this->problemSolving) {
            $res['ProblemSolving'] = null !== $this->problemSolving ? $this->problemSolving->toMap() : null;
        }
        if (null !== $this->satisfaction) {
            $res['Satisfaction'] = null !== $this->satisfaction ? $this->satisfaction->toMap() : null;
        }
        if (null !== $this->todoList) {
            $res['TodoList'] = null !== $this->todoList ? $this->todoList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return analyticsReport
     */
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
