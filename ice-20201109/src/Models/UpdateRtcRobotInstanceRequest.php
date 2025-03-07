<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateRtcRobotInstanceRequest\config;
use AlibabaCloud\Tea\Model;

class UpdateRtcRobotInstanceRequest extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @description This parameter is required.
     *
     * @example 727dc0e296014bb58670940a3da95592
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'config'     => 'Config',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRtcRobotInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
