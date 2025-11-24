<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration;

use AlibabaCloud\Dara\Model;

class accessLogExtraConf extends Model
{
    /**
     * @var bool
     */
    public $gatewayEnabled;

    /**
     * @var int
     */
    public $gatewayLifecycle;

    /**
     * @var bool
     */
    public $sidecarEnabled;

    /**
     * @var int
     */
    public $sidecarLifecycle;
    protected $_name = [
        'gatewayEnabled' => 'GatewayEnabled',
        'gatewayLifecycle' => 'GatewayLifecycle',
        'sidecarEnabled' => 'SidecarEnabled',
        'sidecarLifecycle' => 'SidecarLifecycle',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
