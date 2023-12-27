<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeHistoryTasksStatResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The task status. Valid values:
     *
     *   Scheduled: The task is waiting to be executed.
     *   Running: The task is running.
     *   Succeed: The task is successful.
     *   Failed: The task failed.
     *   Cancelling: The task is being terminated.
     *   Canceled: The task has been terminated.
     *   Waiting: The task is waiting for scheduled time.
     *
     * @example Succeed
     *
     * @var string
     */
    public $status;

    /**
     * @description The number of tasks in a specified state.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'status'     => 'Status',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
