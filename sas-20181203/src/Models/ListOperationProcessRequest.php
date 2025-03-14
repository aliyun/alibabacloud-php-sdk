<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListOperationProcessRequest extends Model
{
    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The end of the time range to query. Unit: milliseconds.
     *
     * @example 1635575219000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The beginning of the time range to query. Unit: milliseconds.
     *
     * @example 1680919232000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The task status codes.
     *
     * @var int[]
     */
    public $statusCodes;

    /**
     * @description The task IDs.
     *
     * @var string[]
     */
    public $taskIds;

    /**
     * @description The task types. Valid values:
     *
     *   CHECK_ALL: full check.
     *   CHECK_POLICY: policy-based check for which check items are configured.
     *   CHECK_SCHEDULE: scheduled check.
     *   CHECK_ITEM: specific check item-based check.
     *   CHECK_INSTANCE: specific check item-based check on specific instances.
     *
     * @var string[]
     */
    public $taskTypes;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'endTime' => 'EndTime',
        'pageSize' => 'PageSize',
        'startTime' => 'StartTime',
        'statusCodes' => 'StatusCodes',
        'taskIds' => 'TaskIds',
        'taskTypes' => 'TaskTypes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->statusCodes) {
            $res['StatusCodes'] = $this->statusCodes;
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
     * @return ListOperationProcessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StatusCodes'])) {
            if (!empty($map['StatusCodes'])) {
                $model->statusCodes = $map['StatusCodes'];
            }
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
