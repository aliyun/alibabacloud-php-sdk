<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListBatchMediaProducingJobsRequest extends Model
{
    /**
     * @example 2023-06-05T15:59:59Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example ****d80e4e4044975745c14b****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example Script
     *
     * @var string
     */
    public $jobType;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example mRZkKAovub0xWVfH14he4Q==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example 2022-02-02T00:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
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
