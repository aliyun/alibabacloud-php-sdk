<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterHealthStatusResponseBody\CS;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterHealthStatusResponseBody\executor;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterHealthStatusResponseBody\worker;

class DescribeDBClusterHealthStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;
    /**
     * @var CS
     */
    public $CS;
    /**
     * @var executor
     */
    public $executor;
    /**
     * @var string
     */
    public $instanceStatus;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var worker
     */
    public $worker;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'CS'                 => 'CS',
        'executor'           => 'Executor',
        'instanceStatus'     => 'InstanceStatus',
        'requestId'          => 'RequestId',
        'worker'             => 'Worker',
    ];

    public function validate()
    {
        if (null !== $this->CS) {
            $this->CS->validate();
        }
        if (null !== $this->executor) {
            $this->executor->validate();
        }
        if (null !== $this->worker) {
            $this->worker->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }

        if (null !== $this->CS) {
            $res['CS'] = null !== $this->CS ? $this->CS->toArray($noStream) : $this->CS;
        }

        if (null !== $this->executor) {
            $res['Executor'] = null !== $this->executor ? $this->executor->toArray($noStream) : $this->executor;
        }

        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->worker) {
            $res['Worker'] = null !== $this->worker ? $this->worker->toArray($noStream) : $this->worker;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }

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
