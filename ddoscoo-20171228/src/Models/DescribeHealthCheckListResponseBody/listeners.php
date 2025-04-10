<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeHealthCheckListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeHealthCheckListResponseBody\listeners\healthCheck;

class listeners extends Model
{
    /**
     * @var int
     */
    public $frontendPort;

    /**
     * @var healthCheck
     */
    public $healthCheck;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $protocol;
    protected $_name = [
        'frontendPort' => 'FrontendPort',
        'healthCheck' => 'HealthCheck',
        'instanceId' => 'InstanceId',
        'protocol' => 'Protocol',
    ];

    public function validate()
    {
        if (null !== $this->healthCheck) {
            $this->healthCheck->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->frontendPort) {
            $res['FrontendPort'] = $this->frontendPort;
        }

        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = null !== $this->healthCheck ? $this->healthCheck->toArray($noStream) : $this->healthCheck;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
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
        if (isset($map['FrontendPort'])) {
            $model->frontendPort = $map['FrontendPort'];
        }

        if (isset($map['HealthCheck'])) {
            $model->healthCheck = healthCheck::fromMap($map['HealthCheck']);
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
