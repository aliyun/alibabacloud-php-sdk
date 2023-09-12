<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class CreateSwimLaneGroupRequest extends Model
{
    /**
     * @description The name of the lane group.
     *
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The name of the ingress gateway.
     *
     * @example ingressgateway
     *
     * @var string
     */
    public $ingressGatewayName;

    /**
     * @description The type of the gateway for ingress traffic. Only ASM ingress gateways are supported.
     *
     * @example ASM
     *
     * @var string
     */
    public $ingressType;

    /**
     * @var bool
     */
    public $isPermissive;

    /**
     * @var string
     */
    public $routeHeader;

    /**
     * @description The ID of the Alibaba Cloud Service Mesh (ASM) instance.
     *
     * @example xxx
     *
     * @var string
     */
    public $serviceMeshId;

    /**
     * @description A list of services associated with the lane group. The value is a JSON array. The format of a service is `$Cluster name/$Cluster ID/$Namespace/$Service name`.
     *
     * @example [\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mocka\",\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockb\",\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockc\"]
     *
     * @var string
     */
    public $servicesList;

    /**
     * @var string
     */
    public $traceHeader;
    protected $_name = [
        'groupName'          => 'GroupName',
        'ingressGatewayName' => 'IngressGatewayName',
        'ingressType'        => 'IngressType',
        'isPermissive'       => 'IsPermissive',
        'routeHeader'        => 'RouteHeader',
        'serviceMeshId'      => 'ServiceMeshId',
        'servicesList'       => 'ServicesList',
        'traceHeader'        => 'TraceHeader',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->ingressGatewayName) {
            $res['IngressGatewayName'] = $this->ingressGatewayName;
        }
        if (null !== $this->ingressType) {
            $res['IngressType'] = $this->ingressType;
        }
        if (null !== $this->isPermissive) {
            $res['IsPermissive'] = $this->isPermissive;
        }
        if (null !== $this->routeHeader) {
            $res['RouteHeader'] = $this->routeHeader;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->servicesList) {
            $res['ServicesList'] = $this->servicesList;
        }
        if (null !== $this->traceHeader) {
            $res['TraceHeader'] = $this->traceHeader;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSwimLaneGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['IngressGatewayName'])) {
            $model->ingressGatewayName = $map['IngressGatewayName'];
        }
        if (isset($map['IngressType'])) {
            $model->ingressType = $map['IngressType'];
        }
        if (isset($map['IsPermissive'])) {
            $model->isPermissive = $map['IsPermissive'];
        }
        if (isset($map['RouteHeader'])) {
            $model->routeHeader = $map['RouteHeader'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['ServicesList'])) {
            $model->servicesList = $map['ServicesList'];
        }
        if (isset($map['TraceHeader'])) {
            $model->traceHeader = $map['TraceHeader'];
        }

        return $model;
    }
}
