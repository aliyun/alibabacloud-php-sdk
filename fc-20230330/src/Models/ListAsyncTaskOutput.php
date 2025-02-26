<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ListAsyncTaskOutput extends Model
{
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var AsyncTask[]
     */
    public $tasks;
    protected $_name = [
        'nextToken' => 'nextToken',
        'tasks'     => 'tasks',
    ];

    public function validate()
    {
        if (\is_array($this->tasks)) {
            Model::validateArray($this->tasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->tasks) {
            if (\is_array($this->tasks)) {
                $res['tasks'] = [];
                $n1           = 0;
                foreach ($this->tasks as $item1) {
                    $res['tasks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['tasks'])) {
            if (!empty($map['tasks'])) {
                $model->tasks = [];
                $n1           = 0;
                foreach ($map['tasks'] as $item1) {
                    $model->tasks[$n1++] = AsyncTask::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
