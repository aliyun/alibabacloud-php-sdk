<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowSubTasksResponseBody\dataFlowSubTask;
use AlibabaCloud\Tea\Model;

class DescribeDataFlowSubTasksResponseBody extends Model
{
    /**
     * @description The details about data streaming tasks.
     *
     * @var dataFlowSubTask
     */
    public $dataFlowSubTask;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example pUJaUwAAAABhdGUyNTk1MQ==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 98696EF0-1607-4E9D-B01D-F20930B6****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataFlowSubTask' => 'DataFlowSubTask',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataFlowSubTask) {
            $res['DataFlowSubTask'] = null !== $this->dataFlowSubTask ? $this->dataFlowSubTask->toMap() : null;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataFlowSubTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataFlowSubTask'])) {
            $model->dataFlowSubTask = dataFlowSubTask::fromMap($map['DataFlowSubTask']);
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
