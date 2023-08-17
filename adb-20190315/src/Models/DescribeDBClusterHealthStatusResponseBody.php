<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterHealthStatusResponseBody\CS;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterHealthStatusResponseBody\executor;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterHealthStatusResponseBody\worker;
use AlibabaCloud\Tea\Model;

class DescribeDBClusterHealthStatusResponseBody extends Model
{
    /**
     * @description Health state details of access nodes.
     *
     * @var CS
     */
    public $CS;

    /**
     * @description Health state details of compute node groups.
     *
     * @var executor
     */
    public $executor;

    /**
     * @description The health state of the cluster. Valid values:
     *
     *   **RISK**: risky
     *
     *   **NORMAL**: healthy
     *
     *   **UNAVAILABLE**: unavailable
     *
     * > If the health states of access nodes, compute node groups, and storage node groups are all **healthy** and the cluster is detected to be alive, the health state of the cluster is **healthy**. If the preceding three health states include **risky**, the health state of the cluster is **risky**. If the preceding three health states include **unavailable**, the health state of the cluster is **unavailable**.
     * @example NORMAL
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description The ID of the request.
     *
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Health state details of storage node groups.
     *
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
