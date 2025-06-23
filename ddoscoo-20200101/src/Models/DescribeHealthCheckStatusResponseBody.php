<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHealthCheckStatusResponseBody\healthCheckStatus;

class DescribeHealthCheckStatusResponseBody extends Model
{
    /**
     * @var healthCheckStatus[]
     */
    public $healthCheckStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'healthCheckStatus' => 'HealthCheckStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->healthCheckStatus)) {
            Model::validateArray($this->healthCheckStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->healthCheckStatus) {
            if (\is_array($this->healthCheckStatus)) {
                $res['HealthCheckStatus'] = [];
                $n1 = 0;
                foreach ($this->healthCheckStatus as $item1) {
                    $res['HealthCheckStatus'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['HealthCheckStatus'])) {
            if (!empty($map['HealthCheckStatus'])) {
                $model->healthCheckStatus = [];
                $n1 = 0;
                foreach ($map['HealthCheckStatus'] as $item1) {
                    $model->healthCheckStatus[$n1] = healthCheckStatus::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
