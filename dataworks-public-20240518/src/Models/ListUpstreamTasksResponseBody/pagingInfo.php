<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListUpstreamTasksResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListUpstreamTasksResponseBody\pagingInfo\tasks;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListUpstreamTasksResponseBody\pagingInfo\upstreamTasks;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The tasks.
     *
     * @var tasks[]
     */
    public $tasks;

    /**
     * @description The total number of entries returned.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;

    /**
     * @var upstreamTasks[]
     */
    public $upstreamTasks;
    protected $_name = [
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'tasks'         => 'Tasks',
        'totalCount'    => 'TotalCount',
        'upstreamTasks' => 'UpstreamTasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->tasks) {
            $res['Tasks'] = [];
            if (null !== $this->tasks && \is_array($this->tasks)) {
                $n = 0;
                foreach ($this->tasks as $item) {
                    $res['Tasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->upstreamTasks) {
            $res['UpstreamTasks'] = [];
            if (null !== $this->upstreamTasks && \is_array($this->upstreamTasks)) {
                $n = 0;
                foreach ($this->upstreamTasks as $item) {
                    $res['UpstreamTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pagingInfo
     */
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
                $n            = 0;
                foreach ($map['Tasks'] as $item) {
                    $model->tasks[$n++] = null !== $item ? tasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['UpstreamTasks'])) {
            if (!empty($map['UpstreamTasks'])) {
                $model->upstreamTasks = [];
                $n                    = 0;
                foreach ($map['UpstreamTasks'] as $item) {
                    $model->upstreamTasks[$n++] = null !== $item ? upstreamTasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
