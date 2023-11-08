<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration;

use AlibabaCloud\Tea\Model;

class accessLogExtraConf extends Model
{
    /**
     * @var bool
     */
    public $gatewayEnabled;

    /**
     * @description The retention period for the access logs of the ingress gateway. Unit: day. The logs are collected by using Simple Log Service. For example, the value 30 indicates that the logs are retained for 30 days.
     *
     * @example 30
     *
     * @var int
     */
    public $gatewayLifecycle;

    /**
     * @var bool
     */
    public $sidecarEnabled;

    /**
     * @description The retention period for the access logs of sidecar proxies. Unit: day. The logs are collected by using Simple Log Service. For example, the value 30 indicates that the logs are retained for 30 days.
     *
     * @example 30
     *
     * @var int
     */
    public $sidecarLifecycle;
    protected $_name = [
        'gatewayEnabled'   => 'GatewayEnabled',
        'gatewayLifecycle' => 'GatewayLifecycle',
        'sidecarEnabled'   => 'SidecarEnabled',
        'sidecarLifecycle' => 'SidecarLifecycle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayEnabled) {
            $res['GatewayEnabled'] = $this->gatewayEnabled;
        }
        if (null !== $this->gatewayLifecycle) {
            $res['GatewayLifecycle'] = $this->gatewayLifecycle;
        }
        if (null !== $this->sidecarEnabled) {
            $res['SidecarEnabled'] = $this->sidecarEnabled;
        }
        if (null !== $this->sidecarLifecycle) {
            $res['SidecarLifecycle'] = $this->sidecarLifecycle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessLogExtraConf
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayEnabled'])) {
            $model->gatewayEnabled = $map['GatewayEnabled'];
        }
        if (isset($map['GatewayLifecycle'])) {
            $model->gatewayLifecycle = $map['GatewayLifecycle'];
        }
        if (isset($map['SidecarEnabled'])) {
            $model->sidecarEnabled = $map['SidecarEnabled'];
        }
        if (isset($map['SidecarLifecycle'])) {
            $model->sidecarLifecycle = $map['SidecarLifecycle'];
        }

        return $model;
    }
}
