<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class CustomContainerConfig extends Model
{
    /**
     * @var AccelerationInfo
     */
    public $accelerationInfo;

    /**
     * @example deprecated
     *
     * @var string
     */
    public $accelerationType;

    /**
     * @example deprecated
     *
     * @var string
     */
    public $acrInstanceId;

    /**
     * @var string[]
     */
    public $command;

    /**
     * @var string[]
     */
    public $entrypoint;

    /**
     * @var CustomHealthCheckConfig
     */
    public $healthCheckConfig;

    /**
     * @example registry-vpc.cn-hangzhou.aliyuncs.com/fc-demo/helloworld:v1
     *
     * @var string
     */
    public $image;

    /**
     * @example 9000
     *
     * @var int
     */
    public $port;

    /**
     * @example stand-sh-registry-vpc.cn-shanghai.cr.aliyuncs.com/fc-demo2/springboot-helloworld@sha256:68d1****0d64d6
     *
     * @var string
     */
    public $resolvedImageUri;
    protected $_name = [
        'accelerationInfo'  => 'accelerationInfo',
        'accelerationType'  => 'accelerationType',
        'acrInstanceId'     => 'acrInstanceId',
        'command'           => 'command',
        'entrypoint'        => 'entrypoint',
        'healthCheckConfig' => 'healthCheckConfig',
        'image'             => 'image',
        'port'              => 'port',
        'resolvedImageUri'  => 'resolvedImageUri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerationInfo) {
            $res['accelerationInfo'] = null !== $this->accelerationInfo ? $this->accelerationInfo->toMap() : null;
        }
        if (null !== $this->accelerationType) {
            $res['accelerationType'] = $this->accelerationType;
        }
        if (null !== $this->acrInstanceId) {
            $res['acrInstanceId'] = $this->acrInstanceId;
        }
        if (null !== $this->command) {
            $res['command'] = $this->command;
        }
        if (null !== $this->entrypoint) {
            $res['entrypoint'] = $this->entrypoint;
        }
        if (null !== $this->healthCheckConfig) {
            $res['healthCheckConfig'] = null !== $this->healthCheckConfig ? $this->healthCheckConfig->toMap() : null;
        }
        if (null !== $this->image) {
            $res['image'] = $this->image;
        }
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }
        if (null !== $this->resolvedImageUri) {
            $res['resolvedImageUri'] = $this->resolvedImageUri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CustomContainerConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accelerationInfo'])) {
            $model->accelerationInfo = AccelerationInfo::fromMap($map['accelerationInfo']);
        }
        if (isset($map['accelerationType'])) {
            $model->accelerationType = $map['accelerationType'];
        }
        if (isset($map['acrInstanceId'])) {
            $model->acrInstanceId = $map['acrInstanceId'];
        }
        if (isset($map['command'])) {
            if (!empty($map['command'])) {
                $model->command = $map['command'];
            }
        }
        if (isset($map['entrypoint'])) {
            if (!empty($map['entrypoint'])) {
                $model->entrypoint = $map['entrypoint'];
            }
        }
        if (isset($map['healthCheckConfig'])) {
            $model->healthCheckConfig = CustomHealthCheckConfig::fromMap($map['healthCheckConfig']);
        }
        if (isset($map['image'])) {
            $model->image = $map['image'];
        }
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }
        if (isset($map['resolvedImageUri'])) {
            $model->resolvedImageUri = $map['resolvedImageUri'];
        }

        return $model;
    }
}
