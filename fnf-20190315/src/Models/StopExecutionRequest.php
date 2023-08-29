<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class StopExecutionRequest extends Model
{
    /**
     * @example for test
     *
     * @var string
     */
    public $cause;

    /**
     * @example nill
     *
     * @var string
     */
    public $error;

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
    protected $_name = [
        'cause'         => 'Cause',
        'error'         => 'Error',
        'executionName' => 'ExecutionName',
        'flowName'      => 'FlowName',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cause) {
            $res['Cause'] = $this->cause;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->executionName) {
            $res['ExecutionName'] = $this->executionName;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopExecutionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cause'])) {
            $model->cause = $map['Cause'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['ExecutionName'])) {
            $model->executionName = $map['ExecutionName'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
