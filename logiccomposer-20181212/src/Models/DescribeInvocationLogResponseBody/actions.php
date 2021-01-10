<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeInvocationLogResponseBody;

use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeInvocationLogResponseBody\actions\error;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeInvocationLogResponseBody\actions\inputsResult;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeInvocationLogResponseBody\actions\outputsResult;
use AlibabaCloud\Tea\Model;

class actions extends Model
{
    /**
     * @var int
     */
    public $loopCount;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $invocationId;

    /**
     * @var string
     */
    public $returnCode;

    /**
     * @var error
     */
    public $error;

    /**
     * @var outputsResult
     */
    public $outputsResult;

    /**
     * @var string
     */
    public $name;

    /**
     * @var inputsResult
     */
    public $inputsResult;
    protected $_name = [
        'loopCount'     => 'LoopCount',
        'endTime'       => 'EndTime',
        'status'        => 'Status',
        'startTime'     => 'StartTime',
        'invocationId'  => 'InvocationId',
        'returnCode'    => 'ReturnCode',
        'error'         => 'Error',
        'outputsResult' => 'OutputsResult',
        'name'          => 'Name',
        'inputsResult'  => 'InputsResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loopCount) {
            $res['LoopCount'] = $this->loopCount;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->invocationId) {
            $res['InvocationId'] = $this->invocationId;
        }
        if (null !== $this->returnCode) {
            $res['ReturnCode'] = $this->returnCode;
        }
        if (null !== $this->error) {
            $res['Error'] = null !== $this->error ? $this->error->toMap() : null;
        }
        if (null !== $this->outputsResult) {
            $res['OutputsResult'] = null !== $this->outputsResult ? $this->outputsResult->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->inputsResult) {
            $res['InputsResult'] = null !== $this->inputsResult ? $this->inputsResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoopCount'])) {
            $model->loopCount = $map['LoopCount'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['InvocationId'])) {
            $model->invocationId = $map['InvocationId'];
        }
        if (isset($map['ReturnCode'])) {
            $model->returnCode = $map['ReturnCode'];
        }
        if (isset($map['Error'])) {
            $model->error = error::fromMap($map['Error']);
        }
        if (isset($map['OutputsResult'])) {
            $model->outputsResult = outputsResult::fromMap($map['OutputsResult']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['InputsResult'])) {
            $model->inputsResult = inputsResult::fromMap($map['InputsResult']);
        }

        return $model;
    }
}
