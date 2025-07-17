<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class RerunWorkflowInstancesResponseBody extends Model
{
    /**
     * @description The operation ID. You can use this value to query the creation result via the GetRerunWorkflowInstancesResult operation.
     *
     * @example e15ad21c-b0e9-4792-8f55-b037xxxxxxxx
     *
     * @var string
     */
    public $operationId;

    /**
     * @description The request ID. Used for troubleshooting and log tracking.
     *
     * @example 22C97E95-F023-56B5-8852-B1A77A17XXXX
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'operationId' => 'OperationId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RerunWorkflowInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
