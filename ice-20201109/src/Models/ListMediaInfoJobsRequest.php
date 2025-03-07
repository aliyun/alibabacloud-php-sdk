<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListMediaInfoJobsRequest extends Model
{
    /**
     * @description The end of the time range during which the jobs to be queried were created. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2022-07-15T00:00:00Z
     *
     * @var string
     */
    public $endOfCreateTime;

    /**
     * @description The job ID.
     *
     * @example 7b38a5d86f1e47838927b6e7ccb11cbe
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request.
     *
     * @example ab4802364a2e49208c99efab82dfa8e8
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @description The order that you use to sort the query results. Valid values:
     *
     *   CreateTimeDesc: sorts the query results by creation time in descending order.
     *   CreateTimeAsc: sorts the query results by creation time in ascending order.
     *
     * @example CreateTimeDesc
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The number of entries per page. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The beginning of the time range during which the jobs to be queried were created. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2022-07-01T00:00:00Z
     *
     * @var string
     */
    public $startOfCreateTime;

    /**
     * @description The state of the job. Valid values:
     *
     *   Init: The job is submitted.
     *   Success: The job is successful.
     *   Fail: The job failed.
     *
     * @example Success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'endOfCreateTime'   => 'EndOfCreateTime',
        'jobId'             => 'JobId',
        'nextPageToken'     => 'NextPageToken',
        'orderBy'           => 'OrderBy',
        'pageSize'          => 'PageSize',
        'startOfCreateTime' => 'StartOfCreateTime',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endOfCreateTime) {
            $res['EndOfCreateTime'] = $this->endOfCreateTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startOfCreateTime) {
            $res['StartOfCreateTime'] = $this->startOfCreateTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMediaInfoJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndOfCreateTime'])) {
            $model->endOfCreateTime = $map['EndOfCreateTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartOfCreateTime'])) {
            $model->startOfCreateTime = $map['StartOfCreateTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
