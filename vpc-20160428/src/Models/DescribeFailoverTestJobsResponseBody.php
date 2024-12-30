<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeFailoverTestJobsResponseBody\failoverTestJobList;
use AlibabaCloud\Tea\Model;

class DescribeFailoverTestJobsResponseBody extends Model
{
    /**
     * @description The number of entries on the current page.
     *
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @description The list of failover tests.
     *
     * @var failoverTestJobList[]
     */
    public $failoverTestJobList;

    /**
     * @description The number of entries per page. Valid values: **1 to 100**. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. Valid values:
     *
     *   If no value is returned for **NextToken**, no next queries are sent.
     *   If a value is returned for **NextToken**, the value is used to retrieve a new page of results.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of entries returned.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'count'               => 'Count',
        'failoverTestJobList' => 'FailoverTestJobList',
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'requestId'           => 'RequestId',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->failoverTestJobList) {
            $res['FailoverTestJobList'] = [];
            if (null !== $this->failoverTestJobList && \is_array($this->failoverTestJobList)) {
                $n = 0;
                foreach ($this->failoverTestJobList as $item) {
                    $res['FailoverTestJobList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFailoverTestJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['FailoverTestJobList'])) {
            if (!empty($map['FailoverTestJobList'])) {
                $model->failoverTestJobList = [];
                $n                          = 0;
                foreach ($map['FailoverTestJobList'] as $item) {
                    $model->failoverTestJobList[$n++] = null !== $item ? failoverTestJobList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
