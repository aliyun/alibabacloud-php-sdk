<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListTimingSyntheticTasksRequest;

use AlibabaCloud\Tea\Model;

class search extends Model
{
    /**
     * @description The task name.
     *
     * @example AlibabaCloud DNS Task
     *
     * @var string
     */
    public $name;

    /**
     * @description The order by which tasks are sorted. 1: ascending order. -1: descending order.
     *
     * @example 1
     *
     * @var int
     */
    public $order;

    /**
     * @description The condition by which tasks are sorted. You can sort tasks by gmtCreate, gmtModified, status, or monitorCount.
     *
     * @example status
     *
     * @var string
     */
    public $orderField;

    /**
     * @description The page number. This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The number of entries per page. This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The task status. CREATING: The task is being created. RUNNING: The task is running. PARTIAL_RUNNING: The task is partially running. STOP: The task is stopped. LIMIT_STOP: The task is stopped due to quota limit. EXCEPTION: The task is abnormal. DELETE: The task is deleted. DELETE_EXCEPTION: An exception occurs while deleting the task.
     *
     * @example CREATING
     *
     * @var string
     */
    public $status;

    /**
     * @description The task IDs.
     *
     * @var string[]
     */
    public $taskIds;

    /**
     * @description The task types.
     *
     * @var int[]
     */
    public $taskTypes;
    protected $_name = [
        'name'       => 'Name',
        'order'      => 'Order',
        'orderField' => 'OrderField',
        'page'       => 'Page',
        'pageSize'   => 'PageSize',
        'status'     => 'Status',
        'taskIds'    => 'TaskIds',
        'taskTypes'  => 'TaskTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->orderField) {
            $res['OrderField'] = $this->orderField;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskIds) {
            $res['TaskIds'] = $this->taskIds;
        }
        if (null !== $this->taskTypes) {
            $res['TaskTypes'] = $this->taskTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return search
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['OrderField'])) {
            $model->orderField = $map['OrderField'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskIds'])) {
            if (!empty($map['TaskIds'])) {
                $model->taskIds = $map['TaskIds'];
            }
        }
        if (isset($map['TaskTypes'])) {
            if (!empty($map['TaskTypes'])) {
                $model->taskTypes = $map['TaskTypes'];
            }
        }

        return $model;
    }
}
