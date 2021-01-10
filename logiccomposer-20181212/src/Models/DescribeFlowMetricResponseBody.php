<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeFlowMetricResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $invocationCount;

    /**
     * @var int
     */
    public $invocationErrorCount;

    /**
     * @var float
     */
    public $errorRate;

    /**
     * @var int
     */
    public $costAverage;
    protected $_name = [
        'requestId'            => 'RequestId',
        'invocationCount'      => 'InvocationCount',
        'invocationErrorCount' => 'InvocationErrorCount',
        'errorRate'            => 'ErrorRate',
        'costAverage'          => 'CostAverage',
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
        if (null !== $this->invocationCount) {
            $res['InvocationCount'] = $this->invocationCount;
        }
        if (null !== $this->invocationErrorCount) {
            $res['InvocationErrorCount'] = $this->invocationErrorCount;
        }
        if (null !== $this->errorRate) {
            $res['ErrorRate'] = $this->errorRate;
        }
        if (null !== $this->costAverage) {
            $res['CostAverage'] = $this->costAverage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlowMetricResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InvocationCount'])) {
            $model->invocationCount = $map['InvocationCount'];
        }
        if (isset($map['InvocationErrorCount'])) {
            $model->invocationErrorCount = $map['InvocationErrorCount'];
        }
        if (isset($map['ErrorRate'])) {
            $model->errorRate = $map['ErrorRate'];
        }
        if (isset($map['CostAverage'])) {
            $model->costAverage = $map['CostAverage'];
        }

        return $model;
    }
}
