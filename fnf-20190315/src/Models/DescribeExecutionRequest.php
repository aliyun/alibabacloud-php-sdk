<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeExecutionRequest extends Model
{
    /**
     * @example exec
     *
     * @var string
     */
    public $executionName;

    /**
     * @example flow
     *
     * @var string
     */
    public $flowName;

    /**
     * @example testRequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 20
     *
     * @var int
     */
    public $waitTimeSeconds;
    protected $_name = [
        'executionName'   => 'ExecutionName',
        'flowName'        => 'FlowName',
        'requestId'       => 'RequestId',
        'waitTimeSeconds' => 'WaitTimeSeconds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionName) {
            $res['ExecutionName'] = $this->executionName;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->waitTimeSeconds) {
            $res['WaitTimeSeconds'] = $this->waitTimeSeconds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExecutionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutionName'])) {
            $model->executionName = $map['ExecutionName'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WaitTimeSeconds'])) {
            $model->waitTimeSeconds = $map['WaitTimeSeconds'];
        }

        return $model;
    }
}
