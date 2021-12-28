<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeServiceMeshGatewaySLBStatusRequest extends Model
{
    /**
     * @var string
     */
    public $gatewayAddresses;

    /**
     * @var string
     */
    public $gatewayFullName;

    /**
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'gatewayAddresses' => 'GatewayAddresses',
        'gatewayFullName'  => 'GatewayFullName',
        'serviceMeshId'    => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayAddresses) {
            $res['GatewayAddresses'] = $this->gatewayAddresses;
        }
        if (null !== $this->gatewayFullName) {
            $res['GatewayFullName'] = $this->gatewayFullName;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceMeshGatewaySLBStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayAddresses'])) {
            $model->gatewayAddresses = $map['GatewayAddresses'];
        }
        if (isset($map['GatewayFullName'])) {
            $model->gatewayFullName = $map['GatewayFullName'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
