<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class DescribeRatePlanInstanceStatusResponseBody extends Model
{
    /**
     * @description The instance ID.
     *
     * @example xcdn-91fknmb80f0g***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance status. Valid values:
     *
     *   running: The instance is running.
     *   renewing: The instance is being renewed.
     *   upgrading: The configuration of the instance is being upgraded.
     *   releasePrepaidService: The instance is released due to expiration.
     *   creating: The instance is being created.
     *   downgrading: The configuration of the instance is being downgraded.
     *   ceasePrepaidService: The instance has expired.
     *
     * @example running
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description The request ID.
     *
     * @example 60423A7F-A83D-1E24-B80E-86DD25790759
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'instanceStatus' => 'InstanceStatus',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

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
     * @return DescribeRatePlanInstanceStatusResponseBody
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
