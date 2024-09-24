<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowSubTasksResponseBody\dataFlowSubTask;
use AlibabaCloud\Tea\Model;

class DescribeDataFlowSubTasksResponseBody extends Model
{
    /**
     * @var dataFlowSubTask
     */
    public $dataFlowSubTask;

    /**
     * @example pUJaUwAAAABhdGUyNTk1MQ==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 98696EF0-1607-4E9D-B01D-F20930B6****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataFlowSubTask' => 'DataFlowSubTask',
        'nextToken'       => 'NextToken',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

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
