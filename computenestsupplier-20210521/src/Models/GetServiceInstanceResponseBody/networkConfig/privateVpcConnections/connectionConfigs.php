<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceResponseBody\networkConfig\privateVpcConnections;

use AlibabaCloud\Tea\Model;

class connectionConfigs extends Model
{
    /**
     * @var string[]
     */
    public $endpointIps;

    /**
     * @var string
     */
    public $ingressEndpointStatus;

    /**
     * @var string
     */
    public $networkServiceStatus;

    /**
     * @var string[]
     */
    public $securityGroups;

    /**
     * @var string[]
     */
    public $vSwitches;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'endpointIps'           => 'EndpointIps',
        'ingressEndpointStatus' => 'IngressEndpointStatus',
        'networkServiceStatus'  => 'NetworkServiceStatus',
        'securityGroups'        => 'SecurityGroups',
        'vSwitches'             => 'VSwitches',
        'vpcId'                 => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointIps) {
            $res['EndpointIps'] = $this->endpointIps;
        }
        if (null !== $this->ingressEndpointStatus) {
            $res['IngressEndpointStatus'] = $this->ingressEndpointStatus;
        }
        if (null !== $this->networkServiceStatus) {
            $res['NetworkServiceStatus'] = $this->networkServiceStatus;
        }
        if (null !== $this->securityGroups) {
            $res['SecurityGroups'] = $this->securityGroups;
        }
        if (null !== $this->vSwitches) {
            $res['VSwitches'] = $this->vSwitches;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connectionConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndpointIps'])) {
            if (!empty($map['EndpointIps'])) {
                $model->endpointIps = $map['EndpointIps'];
            }
        }
        if (isset($map['IngressEndpointStatus'])) {
            $model->ingressEndpointStatus = $map['IngressEndpointStatus'];
        }
        if (isset($map['NetworkServiceStatus'])) {
            $model->networkServiceStatus = $map['NetworkServiceStatus'];
        }
        if (isset($map['SecurityGroups'])) {
            if (!empty($map['SecurityGroups'])) {
                $model->securityGroups = $map['SecurityGroups'];
            }
        }
        if (isset($map['VSwitches'])) {
            if (!empty($map['VSwitches'])) {
                $model->vSwitches = $map['VSwitches'];
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
