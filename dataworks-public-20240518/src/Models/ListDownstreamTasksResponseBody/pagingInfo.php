<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDownstreamTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDownstreamTasksResponseBody\pagingInfo\downstreamTasks;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDownstreamTasksResponseBody\pagingInfo\tasks;

class pagingInfo extends Model
{
    /**
     * @var downstreamTasks[]
     */
    public $downstreamTasks;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var tasks[]
     */
    public $tasks;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'downstreamTasks' => 'DownstreamTasks',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'tasks' => 'Tasks',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->downstreamTasks)) {
            Model::validateArray($this->downstreamTasks);
        }
        if (\is_array($this->tasks)) {
            Model::validateArray($this->tasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downstreamTasks) {
            if (\is_array($this->downstreamTasks)) {
                $res['DownstreamTasks'] = [];
                $n1 = 0;
                foreach ($this->downstreamTasks as $item1) {
                    $res['DownstreamTasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->tasks) {
            if (\is_array($this->tasks)) {
                $res['Tasks'] = [];
                $n1 = 0;
                foreach ($this->tasks as $item1) {
                    $res['Tasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['DownstreamTasks'])) {
            if (!empty($map['DownstreamTasks'])) {
                $model->downstreamTasks = [];
                $n1 = 0;
                foreach ($map['DownstreamTasks'] as $item1) {
                    $model->downstreamTasks[$n1] = downstreamTasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Tasks'])) {
            if (!empty($map['Tasks'])) {
                $model->tasks = [];
                $n1 = 0;
                foreach ($map['Tasks'] as $item1) {
                    $model->tasks[$n1] = tasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
