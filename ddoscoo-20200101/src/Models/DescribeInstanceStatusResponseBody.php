<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceStatusResponseBody extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example ddoscoo-cn-6ja1y6p5****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The status of the instance. Valid values:
     *
     *   **1**: normal
     *   **2**: expired
     *   **3**: overdue
     *   **4**: released
     *
     * @example 1
     *
     * @var int
     */
    public $instanceStatus;

    /**
     * @description The ID of the request.
     *
     * @example 112777CC-2AD6-46FC-A263-00B931406FCD
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'instanceStatus' => 'InstanceStatus',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
