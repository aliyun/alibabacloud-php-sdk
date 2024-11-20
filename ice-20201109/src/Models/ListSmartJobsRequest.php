<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListSmartJobsRequest extends Model
{
    /**
     * @description The job state.
     *
     * Valid values:
     *
     *   Finished: The job is complete.
     *   Failed: The job failed.
     *   Executing: The job is in progress.
     *   Created: The job is created.
     *
     * @example Finished
     *
     * @var string
     */
    public $jobState;

    /**
     * @description The job type.
     *
     * Valid values:
     *
     *   ASR: automatic speech recognition(job) job.
     *   DynamicChart: dynamic chart job.
     *   VideoTranslation: video translation job.
     *   TextToSpeech: intelligent audio production job.
     *
     * @example ASR
     *
     * @var string
     */
    public $jobType;

    /**
     * @description The maximum number of entries to return.
     *
     * Default value: 10. Valid values: 1 to 100.
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example ****73f33c91-d59383e8280b****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 10. Valid values: 1 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

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
    protected $_name = [
        'jobState'   => 'JobState',
        'jobType'    => 'JobType',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'pageNo'     => 'PageNo',
        'pageSize'   => 'PageSize',
        'sortBy'     => 'SortBy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobState) {
            $res['JobState'] = $this->jobState;
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
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSmartJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobState'])) {
            $model->jobState = $map['JobState'];
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
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        return $model;
    }
}
