<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHealthCheckStatusResponseBody\healthCheckStatus;
use AlibabaCloud\Tea\Model;

class DescribeHealthCheckStatusResponseBody extends Model
{
    /**
     * @description An array that consists of the details of the health status of the origin server.
     *
     * @var healthCheckStatus[]
     */
    public $healthCheckStatus;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example DE9FF9E1-569C-4B6C-AB6A-0F6D927BB27C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'healthCheckStatus' => 'HealthCheckStatus',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthCheckStatus) {
            $res['HealthCheckStatus'] = [];
            if (null !== $this->healthCheckStatus && \is_array($this->healthCheckStatus)) {
                $n = 0;
                foreach ($this->healthCheckStatus as $item) {
                    $res['HealthCheckStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHealthCheckStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthCheckStatus'])) {
            if (!empty($map['HealthCheckStatus'])) {
                $model->healthCheckStatus = [];
                $n                        = 0;
                foreach ($map['HealthCheckStatus'] as $item) {
                    $model->healthCheckStatus[$n++] = null !== $item ? healthCheckStatus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
