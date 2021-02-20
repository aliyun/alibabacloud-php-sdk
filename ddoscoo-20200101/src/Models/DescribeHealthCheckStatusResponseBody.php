<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHealthCheckStatusResponseBody\healthCheckStatus;
use AlibabaCloud\Tea\Model;

class DescribeHealthCheckStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var healthCheckStatus[]
     */
    public $healthCheckStatus;
    protected $_name = [
        'requestId'         => 'RequestId',
        'healthCheckStatus' => 'HealthCheckStatus',
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
        if (null !== $this->healthCheckStatus) {
            $res['HealthCheckStatus'] = [];
            if (null !== $this->healthCheckStatus && \is_array($this->healthCheckStatus)) {
                $n = 0;
                foreach ($this->healthCheckStatus as $item) {
                    $res['HealthCheckStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HealthCheckStatus'])) {
            if (!empty($map['HealthCheckStatus'])) {
                $model->healthCheckStatus = [];
                $n                        = 0;
                foreach ($map['HealthCheckStatus'] as $item) {
                    $model->healthCheckStatus[$n++] = null !== $item ? healthCheckStatus::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
