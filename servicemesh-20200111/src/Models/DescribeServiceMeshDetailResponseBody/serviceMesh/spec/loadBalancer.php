<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec;

use AlibabaCloud\Dara\Model;

class loadBalancer extends Model
{
    /**
     * @var string
     */
    public $apiServerLoadbalancerId;

    /**
     * @var bool
     */
    public $apiServerPublicEip;

    /**
     * @var string
     */
    public $apiServerPublicEipId;

    /**
     * @var string
     */
    public $canaryPilotLoadBalancerId;

    /**
     * @var string
     */
    public $canaryPilotPublicEipId;

    /**
     * @var bool
     */
    public $pilotPublicEip;

    /**
     * @var string
     */
    public $pilotPublicEipId;

    /**
     * @var string
     */
    public $pilotPublicLoadbalancerId;
    protected $_name = [
        'apiServerLoadbalancerId' => 'ApiServerLoadbalancerId',
        'apiServerPublicEip' => 'ApiServerPublicEip',
        'apiServerPublicEipId' => 'ApiServerPublicEipId',
        'canaryPilotLoadBalancerId' => 'CanaryPilotLoadBalancerId',
        'canaryPilotPublicEipId' => 'CanaryPilotPublicEipId',
        'pilotPublicEip' => 'PilotPublicEip',
        'pilotPublicEipId' => 'PilotPublicEipId',
        'pilotPublicLoadbalancerId' => 'PilotPublicLoadbalancerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiServerLoadbalancerId) {
            $res['ApiServerLoadbalancerId'] = $this->apiServerLoadbalancerId;
        }

        if (null !== $this->apiServerPublicEip) {
            $res['ApiServerPublicEip'] = $this->apiServerPublicEip;
        }

        if (null !== $this->apiServerPublicEipId) {
            $res['ApiServerPublicEipId'] = $this->apiServerPublicEipId;
        }

        if (null !== $this->canaryPilotLoadBalancerId) {
            $res['CanaryPilotLoadBalancerId'] = $this->canaryPilotLoadBalancerId;
        }

        if (null !== $this->canaryPilotPublicEipId) {
            $res['CanaryPilotPublicEipId'] = $this->canaryPilotPublicEipId;
        }

        if (null !== $this->pilotPublicEip) {
            $res['PilotPublicEip'] = $this->pilotPublicEip;
        }

        if (null !== $this->pilotPublicEipId) {
            $res['PilotPublicEipId'] = $this->pilotPublicEipId;
        }

        if (null !== $this->pilotPublicLoadbalancerId) {
            $res['PilotPublicLoadbalancerId'] = $this->pilotPublicLoadbalancerId;
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
        if (isset($map['ApiServerLoadbalancerId'])) {
            $model->apiServerLoadbalancerId = $map['ApiServerLoadbalancerId'];
        }

        if (isset($map['ApiServerPublicEip'])) {
            $model->apiServerPublicEip = $map['ApiServerPublicEip'];
        }

        if (isset($map['ApiServerPublicEipId'])) {
            $model->apiServerPublicEipId = $map['ApiServerPublicEipId'];
        }

        if (isset($map['CanaryPilotLoadBalancerId'])) {
            $model->canaryPilotLoadBalancerId = $map['CanaryPilotLoadBalancerId'];
        }

        if (isset($map['CanaryPilotPublicEipId'])) {
            $model->canaryPilotPublicEipId = $map['CanaryPilotPublicEipId'];
        }

        if (isset($map['PilotPublicEip'])) {
            $model->pilotPublicEip = $map['PilotPublicEip'];
        }

        if (isset($map['PilotPublicEipId'])) {
            $model->pilotPublicEipId = $map['PilotPublicEipId'];
        }

        if (isset($map['PilotPublicLoadbalancerId'])) {
            $model->pilotPublicLoadbalancerId = $map['PilotPublicLoadbalancerId'];
        }

        return $model;
    }
}
