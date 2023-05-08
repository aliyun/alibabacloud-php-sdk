<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration;

use AlibabaCloud\Tea\Model;

class accessLogExtraConf extends Model
{
    /**
     * @description The retention period for the access logs of the ingress gateway. Unit: day. The logs are collected by using the Log Service. For example, a value of 30 indicates that the logs are retained for 30 days.
     *
     * @example 30
     *
     * @var int
     */
    public $gatewayLifecycle;

    /**
     * @description The retention period for the access logs of sidecar proxies. Unit: day. The logs are collected by using the Log Service. For example, a value of 30 indicates that the logs are retained for 30 days.
     *
     * @example 30
     *
     * @var int
     */
    public $sidecarLifecycle;
    protected $_name = [
        'gatewayLifecycle' => 'GatewayLifecycle',
        'sidecarLifecycle' => 'SidecarLifecycle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayLifecycle) {
            $res['GatewayLifecycle'] = $this->gatewayLifecycle;
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
        if (isset($map['GatewayLifecycle'])) {
            $model->gatewayLifecycle = $map['GatewayLifecycle'];
        }
        if (isset($map['SidecarLifecycle'])) {
            $model->sidecarLifecycle = $map['SidecarLifecycle'];
        }

        return $model;
    }
}
