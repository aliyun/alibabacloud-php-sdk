<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class UpdateSwimLaneGroupRequest extends Model
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
    public $ingressRoutingStrategy;

    /**
     * @var string
     */
    public $serviceLevelFallbackTarget;

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
    public $weightedIngressRule;
    protected $_name = [
        'fallbackTarget' => 'FallbackTarget',
        'groupName' => 'GroupName',
        'ingressRoutingStrategy' => 'IngressRoutingStrategy',
        'serviceLevelFallbackTarget' => 'ServiceLevelFallbackTarget',
        'serviceMeshId' => 'ServiceMeshId',
        'servicesList' => 'ServicesList',
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

        if (null !== $this->ingressRoutingStrategy) {
            $res['IngressRoutingStrategy'] = $this->ingressRoutingStrategy;
        }

        if (null !== $this->serviceLevelFallbackTarget) {
            $res['ServiceLevelFallbackTarget'] = $this->serviceLevelFallbackTarget;
        }

        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        if (null !== $this->servicesList) {
            $res['ServicesList'] = $this->servicesList;
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

        if (isset($map['IngressRoutingStrategy'])) {
            $model->ingressRoutingStrategy = $map['IngressRoutingStrategy'];
        }

        if (isset($map['ServiceLevelFallbackTarget'])) {
            $model->serviceLevelFallbackTarget = $map['ServiceLevelFallbackTarget'];
        }

        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        if (isset($map['ServicesList'])) {
            $model->servicesList = $map['ServicesList'];
        }

        if (isset($map['WeightedIngressRule'])) {
            $model->weightedIngressRule = $map['WeightedIngressRule'];
        }

        return $model;
    }
}
