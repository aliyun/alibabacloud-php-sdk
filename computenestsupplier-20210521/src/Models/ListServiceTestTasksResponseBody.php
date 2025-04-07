<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceTestTasksResponseBody\serviceTestTasks;
use AlibabaCloud\Tea\Model;

class ListServiceTestTasksResponseBody extends Model
{
    /**
     * @description The total number of entries returned.
     *
     * @example 9
     *
     * @var int
     */
    public $count;

    /**
     * @description The number of items to return per page when paginating results. The maximum is 100, and the default is 20.
     *
     * @example 1
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example AAAAAfu+XtuBE55iRLHEYYuojI4=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 51945B04-6AA6-410D-93BA-236E0248B104
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The service test tasks.
     *
     * @var serviceTestTasks[]
     */
    public $serviceTestTasks;
    protected $_name = [
        'count' => 'Count',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'serviceTestTasks' => 'ServiceTestTasks',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
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
        if (null !== $this->serviceTestTasks) {
            $res['ServiceTestTasks'] = [];
            if (null !== $this->serviceTestTasks && \is_array($this->serviceTestTasks)) {
                $n = 0;
                foreach ($this->serviceTestTasks as $item) {
                    $res['ServiceTestTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceTestTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
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
        if (isset($map['ServiceTestTasks'])) {
            if (!empty($map['ServiceTestTasks'])) {
                $model->serviceTestTasks = [];
                $n = 0;
                foreach ($map['ServiceTestTasks'] as $item) {
                    $model->serviceTestTasks[$n++] = null !== $item ? serviceTestTasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
