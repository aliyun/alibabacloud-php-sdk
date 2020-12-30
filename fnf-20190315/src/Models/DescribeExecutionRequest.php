<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeExecutionRequest extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @var string
     */
    public $executionName;

    /**
     * @var int
     */
    public $waitTimeSeconds;
    protected $_name = [
        'requestId'       => 'RequestId',
        'flowName'        => 'FlowName',
        'executionName'   => 'ExecutionName',
        'waitTimeSeconds' => 'WaitTimeSeconds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->executionName) {
            $res['ExecutionName'] = $this->executionName;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['ExecutionName'])) {
            $model->executionName = $map['ExecutionName'];
        }
        if (isset($map['WaitTimeSeconds'])) {
            $model->waitTimeSeconds = $map['WaitTimeSeconds'];
        }

        return $model;
    }
}
