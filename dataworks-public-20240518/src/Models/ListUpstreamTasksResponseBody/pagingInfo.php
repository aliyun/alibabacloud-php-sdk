<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListUpstreamTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListUpstreamTasksResponseBody\pagingInfo\tasks;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListUpstreamTasksResponseBody\pagingInfo\upstreamTasks;

class pagingInfo extends Model
{
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

    /**
     * @var upstreamTasks[]
     */
    public $upstreamTasks;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'tasks' => 'Tasks',
        'totalCount' => 'TotalCount',
        'upstreamTasks' => 'UpstreamTasks',
    ];

    public function validate()
    {
        if (\is_array($this->tasks)) {
            Model::validateArray($this->tasks);
        }
        if (\is_array($this->upstreamTasks)) {
            Model::validateArray($this->upstreamTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
                    $res['Tasks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->upstreamTasks) {
            if (\is_array($this->upstreamTasks)) {
                $res['UpstreamTasks'] = [];
                $n1 = 0;
                foreach ($this->upstreamTasks as $item1) {
                    $res['UpstreamTasks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                    $model->tasks[$n1++] = tasks::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['UpstreamTasks'])) {
            if (!empty($map['UpstreamTasks'])) {
                $model->upstreamTasks = [];
                $n1 = 0;
                foreach ($map['UpstreamTasks'] as $item1) {
                    $model->upstreamTasks[$n1++] = upstreamTasks::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
