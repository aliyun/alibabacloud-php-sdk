<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BindApplicationToEdgeInstanceRequest extends Model
{
    /**
     * @example 361368ba5a094da9bf5625d092******
     *
     * @var string
     */
    public $applicationId;

    /**
     * @example 3.7
     *
     * @var string
     */
    public $applicationVersion;

    /**
     * @example Tb4r9k3GWHJFWv******
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'applicationId'      => 'ApplicationId',
        'applicationVersion' => 'ApplicationVersion',
        'instanceId'         => 'InstanceId',
        'iotInstanceId'      => 'IotInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->applicationVersion) {
            $res['ApplicationVersion'] = $this->applicationVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindApplicationToEdgeInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['ApplicationVersion'])) {
            $model->applicationVersion = $map['ApplicationVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
