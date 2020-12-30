<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeHealthCheckListResponseBody;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeHealthCheckListResponseBody\listeners\healthCheck;
use AlibabaCloud\Tea\Model;

class listeners extends Model
{
    /**
     * @var int
     */
    public $frontendPort;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var healthCheck
     */
    public $healthCheck;
    protected $_name = [
        'frontendPort' => 'FrontendPort',
        'protocol'     => 'Protocol',
        'instanceId'   => 'InstanceId',
        'healthCheck'  => 'HealthCheck',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frontendPort) {
            $res['FrontendPort'] = $this->frontendPort;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = null !== $this->healthCheck ? $this->healthCheck->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listeners
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FrontendPort'])) {
            $model->frontendPort = $map['FrontendPort'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['HealthCheck'])) {
            $model->healthCheck = healthCheck::fromMap($map['HealthCheck']);
        }

        return $model;
    }
}
