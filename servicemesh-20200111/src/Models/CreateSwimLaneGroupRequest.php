<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class CreateSwimLaneGroupRequest extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $ingressGatewayName;

    /**
     * @var string
     */
    public $ingressGatewayNamespace;

    /**
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
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var string
     */
    public $servicesList;

    /**
     * @var string
     */
    public $traceHeader;
    protected $_name = [
        'groupName' => 'GroupName',
        'ingressGatewayName' => 'IngressGatewayName',
        'ingressGatewayNamespace' => 'IngressGatewayNamespace',
        'ingressType' => 'IngressType',
        'isPermissive' => 'IsPermissive',
        'routeHeader' => 'RouteHeader',
        'serviceMeshId' => 'ServiceMeshId',
        'servicesList' => 'ServicesList',
        'traceHeader' => 'TraceHeader',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->ingressGatewayName) {
            $res['IngressGatewayName'] = $this->ingressGatewayName;
        }

        if (null !== $this->ingressGatewayNamespace) {
            $res['IngressGatewayNamespace'] = $this->ingressGatewayNamespace;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['IngressGatewayName'])) {
            $model->ingressGatewayName = $map['IngressGatewayName'];
        }

        if (isset($map['IngressGatewayNamespace'])) {
            $model->ingressGatewayNamespace = $map['IngressGatewayNamespace'];
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
