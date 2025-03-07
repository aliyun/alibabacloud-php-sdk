<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListLiveSnapshotJobsRequest extends Model
{
    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     *   By default, EndTime is seven days later than StartTime.
     *   The time range specified by the StartTime and EndTime parameters cannot exceed 30 days.
     *
     * @example 2022-02-02T23:59:59Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The page number. Valid values: [1,n). Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The search keyword. You can use the job ID or name as the keyword to search for jobs. If you search for jobs by name, fuzzy match is supported.
     *
     *   It cannot exceed 128 characters in length.
     *
     * @example ****a046-263c-3560-978a-fb287782****
     *
     * @var string
     */
    public $searchKeyWord;

    /**
     * @description The sorting order. By default, the query results are sorted by creation time in descending order.
     *
     * Valid values:
     *
     *   asc: sorts the query results by creation time in ascending order.
     *   desc: sorts the query results by creation time in descending order.
     *
     * @example desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     *   The default value is seven days ago.
     *   The time range specified by the StartTime and EndTime parameters cannot exceed 30 days.
     *
     * @example 2022-02-02T00:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The job state filter. By default, all jobs are queried.
     *
     * Valid values:
     *
     *   init: The job is not started.
     *   paused: The job is paused.
     *   started: The job is in progress.
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'endTime'       => 'EndTime',
        'pageNo'        => 'PageNo',
        'pageSize'      => 'PageSize',
        'searchKeyWord' => 'SearchKeyWord',
        'sortBy'        => 'SortBy',
        'startTime'     => 'StartTime',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchKeyWord) {
            $res['SearchKeyWord'] = $this->searchKeyWord;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLiveSnapshotJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchKeyWord'])) {
            $model->searchKeyWord = $map['SearchKeyWord'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
