<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeFailoverTestJobsResponseBody\failoverTestJobList;

class DescribeFailoverTestJobsResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;
    /**
     * @var failoverTestJobList[]
     */
    public $failoverTestJobList;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (\is_array($this->failoverTestJobList)) {
            Model::validateArray($this->failoverTestJobList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->failoverTestJobList) {
            if (\is_array($this->failoverTestJobList)) {
                $res['FailoverTestJobList'] = [];
                $n1                         = 0;
                foreach ($this->failoverTestJobList as $item1) {
                    $res['FailoverTestJobList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['FailoverTestJobList'])) {
            if (!empty($map['FailoverTestJobList'])) {
                $model->failoverTestJobList = [];
                $n1                         = 0;
                foreach ($map['FailoverTestJobList'] as $item1) {
                    $model->failoverTestJobList[$n1++] = failoverTestJobList::fromMap($item1);
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
