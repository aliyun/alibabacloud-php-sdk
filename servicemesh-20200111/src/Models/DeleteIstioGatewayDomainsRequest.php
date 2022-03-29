<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DeleteIstioGatewayDomainsRequest extends Model
{
    /**
     * @var string
     */
    public $hosts;

    /**
     * @var string
     */
    public $istioGatewayName;

    /**
     * @var string
     */
    public $portName;

    /**
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'hosts'            => 'Hosts',
        'istioGatewayName' => 'IstioGatewayName',
        'portName'         => 'PortName',
        'serviceMeshId'    => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hosts) {
            $res['Hosts'] = $this->hosts;
        }
        if (null !== $this->istioGatewayName) {
            $res['IstioGatewayName'] = $this->istioGatewayName;
        }
        if (null !== $this->portName) {
            $res['PortName'] = $this->portName;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteIstioGatewayDomainsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hosts'])) {
            $model->hosts = $map['Hosts'];
        }
        if (isset($map['IstioGatewayName'])) {
            $model->istioGatewayName = $map['IstioGatewayName'];
        }
        if (isset($map['PortName'])) {
            $model->portName = $map['PortName'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
