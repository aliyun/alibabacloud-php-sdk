<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DeleteIstioGatewayDomainsRequest extends Model
{
    /**
     * @description The domain names of the one or more hosts that are exposed by the ASM gateway. Separate multiple domain names with commas (,).
     *
     * @example example.com,demo.com
     *
     * @var string
     */
    public $hosts;

    /**
     * @description The name of the ASM gateway.
     *
     * @example ingressgateway
     *
     * @var string
     */
    public $istioGatewayName;

    /**
     * @description The maximum number of ASM gateways to query.
     *
     * @example 10
     *
     * @var string
     */
    public $limit;

    /**
     * @description The namespace in which the ASM gateway resides.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The name of the port.
     *
     * @example https
     *
     * @var string
     */
    public $portName;

    /**
     * @description The ID of the ASM instance.
     *
     * @example c08ba3fd1e6484b0f8cc1ad8fe10d****
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'hosts'            => 'Hosts',
        'istioGatewayName' => 'IstioGatewayName',
        'limit'            => 'Limit',
        'namespace'        => 'Namespace',
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
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
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
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
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
