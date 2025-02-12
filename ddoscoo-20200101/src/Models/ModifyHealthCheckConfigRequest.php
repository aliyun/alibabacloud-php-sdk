<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class ModifyHealthCheckConfigRequest extends Model
{
    /**
     * @var string
     */
    public $forwardProtocol;
    /**
     * @var int
     */
    public $frontendPort;
    /**
     * @var string
     */
    public $healthCheck;
    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'forwardProtocol' => 'ForwardProtocol',
        'frontendPort'    => 'FrontendPort',
        'healthCheck'     => 'HealthCheck',
        'instanceId'      => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forwardProtocol) {
            $res['ForwardProtocol'] = $this->forwardProtocol;
        }

        if (null !== $this->frontendPort) {
            $res['FrontendPort'] = $this->frontendPort;
        }

        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = $this->healthCheck;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['ForwardProtocol'])) {
            $model->forwardProtocol = $map['ForwardProtocol'];
        }

        if (isset($map['FrontendPort'])) {
            $model->frontendPort = $map['FrontendPort'];
        }

        if (isset($map['HealthCheck'])) {
            $model->healthCheck = $map['HealthCheck'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
