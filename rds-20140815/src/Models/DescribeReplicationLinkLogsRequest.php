<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeReplicationLinkLogsRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example pgm-bp1trqb4p1xd****
     *
     * @var string
     */
    public $DBInstanceId;

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
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The task ID. You must set this parameter to the ID of the task that you create by calling the **CreateReplicationLink** operation for the disaster recovery instance.
     *
     * @example 8413252
     *
     * @var int
     */
    public $taskId;

    /**
     * @description The task name. You must set this parameter to the name of the task that you create by calling the **CreateReplicationLink** operation for the disaster recovery instance.
     *
     * @example test01
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The type of the task. Valid values:
     *
     *   **create**: creates a synchronization link.
     *   **create-dryrun**: performs a precheck before a synchronization link is created.
     *
     * Valid values:
     *
     *   create: creates a replication link.
     *   create-dryrun: performs a precheck before a replication link is created.
     *
     * This parameter is required.
     * @example create
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'taskId'       => 'TaskId',
        'taskName'     => 'TaskName',
        'taskType'     => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReplicationLinkLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
