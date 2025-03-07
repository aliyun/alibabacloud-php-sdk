<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListMediaProducingJobsRequest extends Model
{
    /**
     * @description The end of the time range to query. The maximum time range between EndTime and StartTime cannot exceed 30 days. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2022-02-02T23:59:59Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The job type.
     *
     * Valid values:
     *
     *   LiveEditingJob: live editing job.
     *   EditingJob: regular template-based editing job
     *   VETemplateJob: advanced template-based editing job.
     *
     * @example EditingJob
     *
     * @var string
     */
    public $jobType;

    /**
     * @description The search keyword. For example, you can use a job ID as the keyword to search for jobs.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The ID of the quick video production job. If this parameter is specified, the subjobs of the quick video production job are queried.
     *
     * @example ******8750b54e3c976a47da6f******
     *
     * @var string
     */
    public $masterJobId;

    /**
     * @description The maximum number of entries to return.
     *
     * Default value: 10. Valid values: 1 to 100.
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example 8EqYpQbZ6Eh7+Zz8DxVYoQ==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the online editing project.
     *
     * @example ******927cfb53d05b96c1bfe1******
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The sorting parameter. By default, the query results are sorted by creation time in descending order.
     *
     * Valid values:
     *
     *   CreationTime:Asc: sorted by creation time in ascending order.
     *   CreationTime:Desc: sorted by creation time in descending order.
     *
     * @example CreationTime:Desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2017-01-11T12:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The job state.
     *
     * Valid values:
     *
     *   Init: The job is initialized.
     *   Failed: The job failed.
     *   Success: The job is successful.
     *   Processing: The job is in progress.
     *
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
