<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $internetAccess;

    /**
     * @var LogConfig
     */
    public $logConfig;

    /**
     * @var NASConfig
     */
    public $nasConfig;

    /**
     * @var OSSMountConfig
     */
    public $ossMountConfig;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var TracingConfig
     */
    public $tracingConfig;

    /**
     * @var VPCConfig
     */
    public $vpcConfig;
    protected $_name = [
        'description'    => 'description',
        'internetAccess' => 'internetAccess',
        'logConfig'      => 'logConfig',
        'nasConfig'      => 'nasConfig',
        'ossMountConfig' => 'ossMountConfig',
        'role'           => 'role',
        'serviceName'    => 'serviceName',
        'tracingConfig'  => 'tracingConfig',
        'vpcConfig'      => 'vpcConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->internetAccess) {
            $res['internetAccess'] = $this->internetAccess;
        }
        if (null !== $this->logConfig) {
            $res['logConfig'] = null !== $this->logConfig ? $this->logConfig->toMap() : null;
        }
        if (null !== $this->nasConfig) {
            $res['nasConfig'] = null !== $this->nasConfig ? $this->nasConfig->toMap() : null;
        }
        if (null !== $this->ossMountConfig) {
            $res['ossMountConfig'] = null !== $this->ossMountConfig ? $this->ossMountConfig->toMap() : null;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }
        if (null !== $this->tracingConfig) {
            $res['tracingConfig'] = null !== $this->tracingConfig ? $this->tracingConfig->toMap() : null;
        }
        if (null !== $this->vpcConfig) {
            $res['vpcConfig'] = null !== $this->vpcConfig ? $this->vpcConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['internetAccess'])) {
            $model->internetAccess = $map['internetAccess'];
        }
        if (isset($map['logConfig'])) {
            $model->logConfig = LogConfig::fromMap($map['logConfig']);
        }
        if (isset($map['nasConfig'])) {
            $model->nasConfig = NASConfig::fromMap($map['nasConfig']);
        }
        if (isset($map['ossMountConfig'])) {
            $model->ossMountConfig = OSSMountConfig::fromMap($map['ossMountConfig']);
        }
        if (isset($map['role'])) {
            $model->role = $map['role'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }
        if (isset($map['tracingConfig'])) {
            $model->tracingConfig = TracingConfig::fromMap($map['tracingConfig']);
        }
        if (isset($map['vpcConfig'])) {
            $model->vpcConfig = VPCConfig::fromMap($map['vpcConfig']);
        }

        return $model;
    }
}
