<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowSubTasksResponseBody\dataFlowSubTask;

class DescribeDataFlowSubTasksResponseBody extends Model
{
    /**
     * @var dataFlowSubTask
     */
    public $dataFlowSubTask;
    /**
     * @var string
     */
    public $nextToken;
    /**
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
        if (null !== $this->dataFlowSubTask) {
            $this->dataFlowSubTask->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataFlowSubTask) {
            $res['DataFlowSubTask'] = null !== $this->dataFlowSubTask ? $this->dataFlowSubTask->toArray($noStream) : $this->dataFlowSubTask;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
