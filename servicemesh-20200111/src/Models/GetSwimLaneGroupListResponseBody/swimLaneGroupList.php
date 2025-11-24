<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetSwimLaneGroupListResponseBody;

use AlibabaCloud\Dara\Model;

class swimLaneGroupList extends Model
{
    /**
     * @var string
     */
    public $fallbackTarget;

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
    public $ingressRoutingStrategy;

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
    public $serviceLevelFallbackTarget;

    /**
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

    /**
     * @var string
     */
    public $weightedIngressRule;
    protected $_name = [
        'fallbackTarget' => 'FallbackTarget',
        'groupName' => 'GroupName',
        'ingressGatewayName' => 'IngressGatewayName',
        'ingressRoutingStrategy' => 'IngressRoutingStrategy',
        'ingressType' => 'IngressType',
        'isPermissive' => 'IsPermissive',
        'routeHeader' => 'RouteHeader',
        'serviceLevelFallbackTarget' => 'ServiceLevelFallbackTarget',
        'serviceList' => 'ServiceList',
        'swimLaneLabels' => 'SwimLaneLabels',
        'traceHeader' => 'TraceHeader',
        'weightedIngressRule' => 'WeightedIngressRule',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->ingressRoutingStrategy) {
            $res['IngressRoutingStrategy'] = $this->ingressRoutingStrategy;
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

        if (null !== $this->serviceLevelFallbackTarget) {
            $res['ServiceLevelFallbackTarget'] = $this->serviceLevelFallbackTarget;
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

        if (null !== $this->weightedIngressRule) {
            $res['WeightedIngressRule'] = $this->weightedIngressRule;
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
        if (isset($map['FallbackTarget'])) {
            $model->fallbackTarget = $map['FallbackTarget'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['IngressGatewayName'])) {
            $model->ingressGatewayName = $map['IngressGatewayName'];
        }

        if (isset($map['IngressRoutingStrategy'])) {
            $model->ingressRoutingStrategy = $map['IngressRoutingStrategy'];
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

        if (isset($map['ServiceLevelFallbackTarget'])) {
            $model->serviceLevelFallbackTarget = $map['ServiceLevelFallbackTarget'];
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

        if (isset($map['WeightedIngressRule'])) {
            $model->weightedIngressRule = $map['WeightedIngressRule'];
        }

        return $model;
    }
}
