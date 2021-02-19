<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScheduledTasksResponseBody\scheduledTasks;
use AlibabaCloud\Tea\Model;

class DescribeScheduledTasksResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var scheduledTasks
     */
    public $scheduledTasks;
    protected $_name = [
        'totalCount'     => 'TotalCount',
        'requestId'      => 'RequestId',
        'pageSize'       => 'PageSize',
        'pageNumber'     => 'PageNumber',
        'scheduledTasks' => 'ScheduledTasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->scheduledTasks) {
            $res['ScheduledTasks'] = null !== $this->scheduledTasks ? $this->scheduledTasks->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScheduledTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['ScheduledTasks'])) {
            $model->scheduledTasks = scheduledTasks::fromMap($map['ScheduledTasks']);
        }

        return $model;
    }
}
