<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListBatchMediaProducingJobsRequest extends Model
{
    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2023-06-05T15:59:59Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the quick video production job.
     *
     * @example ****d80e4e4044975745c14b****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The job type.
     *
     * Valid values:
     *
     *   Script: script-based editing job that mixes media assets.
     *   Smart_Mix: intelligent editing job that mixes media assets.
     *
     * @example Script
     *
     * @var string
     */
    public $jobType;

    /**
     * @description The maximum number of entries to return.
     *
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example mRZkKAovub0xWVfH14he4Q==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The sorting parameter. Valid values:
     *
     *   desc (default): sorted by creation time in descending order.
     *   asc: sorted by creation time in ascending order.
     *
     * <!---->
     * @example desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2022-02-02T00:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The job state.
     *
     * Valid values:
     *
     *   Finished
     *   Init
     *   Failed
     *   Processing
     *
     * @example Finished
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'endTime'    => 'EndTime',
        'jobId'      => 'JobId',
        'jobType'    => 'JobType',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'sortBy'     => 'SortBy',
        'startTime'  => 'StartTime',
        'status'     => 'Status',
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
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
     * @return ListBatchMediaProducingJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
