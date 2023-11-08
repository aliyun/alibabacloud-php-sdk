<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\Tea\Model;

class k8sNewAPIsSupport extends Model
{
    /**
     * @description Indicates whether Gateway API is enabled. Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example false
     *
     * @var bool
     */
    public $gatewayAPIEnabled;
    protected $_name = [
        'gatewayAPIEnabled' => 'GatewayAPIEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayAPIEnabled) {
            $res['GatewayAPIEnabled'] = $this->gatewayAPIEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return k8sNewAPIsSupport
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayAPIEnabled'])) {
            $model->gatewayAPIEnabled = $map['GatewayAPIEnabled'];
        }

        return $model;
    }
}
