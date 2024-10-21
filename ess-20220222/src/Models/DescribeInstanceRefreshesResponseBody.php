<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeInstanceRefreshesResponseBody\instanceRefreshTasks;
use AlibabaCloud\Tea\Model;

class DescribeInstanceRefreshesResponseBody extends Model
{
    /**
     * @description The instance refresh tasks.
     *
     * @var instanceRefreshTasks[]
     */
    public $instanceRefreshTasks;

    /**
     * @description The maximum number of entries per page.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. If NextToken is empty, no next page exists.
     *
     * @example caeba0bbb2be03f84eb48b699f****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of instance refresh tasks.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'instanceRefreshTasks' => 'InstanceRefreshTasks',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
        'requestId'            => 'RequestId',
        'totalCount'           => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceRefreshTasks) {
            $res['InstanceRefreshTasks'] = [];
            if (null !== $this->instanceRefreshTasks && \is_array($this->instanceRefreshTasks)) {
                $n = 0;
                foreach ($this->instanceRefreshTasks as $item) {
                    $res['InstanceRefreshTasks'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeInstanceRefreshesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceRefreshTasks'])) {
            if (!empty($map['InstanceRefreshTasks'])) {
                $model->instanceRefreshTasks = [];
                $n                           = 0;
                foreach ($map['InstanceRefreshTasks'] as $item) {
                    $model->instanceRefreshTasks[$n++] = null !== $item ? instanceRefreshTasks::fromMap($item) : $item;
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
