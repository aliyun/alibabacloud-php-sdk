<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListMediaProducingJobsRequest extends Model
{
    /**
     * @example 2022-02-02T23:59:59Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example EditingJob
     *
     * @var string
     */
    public $jobType;

    /**
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $keyword;

    /**
     * @example ******8750b54e3c976a47da6f******
     *
     * @var string
     */
    public $masterJobId;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 8EqYpQbZ6Eh7+Zz8DxVYoQ==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @example CreationTime:Desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example 2017-01-11T12:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example Success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'endTime'     => 'EndTime',
        'jobType'     => 'JobType',
        'keyword'     => 'Keyword',
        'masterJobId' => 'MasterJobId',
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
        'projectId'   => 'ProjectId',
        'sortBy'      => 'SortBy',
        'startTime'   => 'StartTime',
        'status'      => 'Status',
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
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->masterJobId) {
            $res['MasterJobId'] = $this->masterJobId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
     * @return ListMediaProducingJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['MasterJobId'])) {
            $model->masterJobId = $map['MasterJobId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
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
