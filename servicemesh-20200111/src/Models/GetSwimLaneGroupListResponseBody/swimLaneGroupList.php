<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetSwimLaneGroupListResponseBody;

use AlibabaCloud\Tea\Model;

class swimLaneGroupList extends Model
{
    /**
     * @var string
     */
    public $fallbackTarget;

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
     * @description The ingress type. Traffic routing rules can be configured only in an ingress gateway.
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
     * @description A list of services associated with the lane group.
     *
     * @example ["sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mocka","sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockb","sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockc"]
     *
     * @var string
     */
    public $serviceList;

    /**
     * @var string
     */
    public $swimLaneLabels;

    /**
     * @var string
     */
    public $traceHeader;
    protected $_name = [
        'fallbackTarget'     => 'FallbackTarget',
        'groupName'          => 'GroupName',
        'ingressGatewayName' => 'IngressGatewayName',
        'ingressType'        => 'IngressType',
        'isPermissive'       => 'IsPermissive',
        'routeHeader'        => 'RouteHeader',
        'serviceList'        => 'ServiceList',
        'swimLaneLabels'     => 'SwimLaneLabels',
        'traceHeader'        => 'TraceHeader',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fallbackTarget) {
            $res['FallbackTarget'] = $this->fallbackTarget;
        }
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
        if (null !== $this->serviceList) {
            $res['ServiceList'] = $this->serviceList;
        }
        if (null !== $this->swimLaneLabels) {
            $res['SwimLaneLabels'] = $this->swimLaneLabels;
        }
        if (null !== $this->traceHeader) {
            $res['TraceHeader'] = $this->traceHeader;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return swimLaneGroupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FallbackTarget'])) {
            $model->fallbackTarget = $map['FallbackTarget'];
        }
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
        if (isset($map['ServiceList'])) {
            $model->serviceList = $map['ServiceList'];
        }
        if (isset($map['SwimLaneLabels'])) {
            $model->swimLaneLabels = $map['SwimLaneLabels'];
        }
        if (isset($map['TraceHeader'])) {
            $model->traceHeader = $map['TraceHeader'];
        }

        return $model;
    }
}
