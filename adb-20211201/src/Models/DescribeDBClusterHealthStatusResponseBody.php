<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterHealthStatusResponseBody\CS;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterHealthStatusResponseBody\executor;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterHealthStatusResponseBody\worker;
use AlibabaCloud\Tea\Model;

class DescribeDBClusterHealthStatusResponseBody extends Model
{
    /**
     * @var CS
     */
    public $CS;

    /**
     * @var executor
     */
    public $executor;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEA
     *
     * @var string
     */
    public $requestId;

    /**
     * @var worker
     */
    public $worker;
    protected $_name = [
        'CS'             => 'CS',
        'executor'       => 'Executor',
        'instanceStatus' => 'InstanceStatus',
        'requestId'      => 'RequestId',
        'worker'         => 'Worker',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CS) {
            $res['CS'] = null !== $this->CS ? $this->CS->toMap() : null;
        }
        if (null !== $this->executor) {
            $res['Executor'] = null !== $this->executor ? $this->executor->toMap() : null;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->worker) {
            $res['Worker'] = null !== $this->worker ? $this->worker->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterHealthStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CS'])) {
            $model->CS = CS::fromMap($map['CS']);
        }
        if (isset($map['Executor'])) {
            $model->executor = executor::fromMap($map['Executor']);
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Worker'])) {
            $model->worker = worker::fromMap($map['Worker']);
        }

        return $model;
    }
}
