<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceResponseBody\networkConfig\privateVpcConnections;

use AlibabaCloud\Tea\Model;

class connectionConfigs extends Model
{
    /**
     * @description The bandwidth limit for the private connection established based on the private network interconnection mode of Compute Nest.
     *
     * @example 1536Mbps
     *
     * @var int
     */
    public $connectBandwidth;

    /**
     * @description The domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The IP addresses of the endpoints for private connections.
     *
     * @var string[]
     */
    public $endpointIps;

    /**
     * @description The status of the Ingress endpoint. Valid values:
     *
     *   Ready: The Ingress endpoint is connected.
     *   Pending: The Ingress endpoint is being connected.
     *   Failed: The Ingress endpoint fails to be connected.
     *   Deleted: The Ingress endpoint is deleted.
     *   Deleting: The Ingress endpoint is being deleted.
     *
     * @example Ready
     *
     * @var string
     */
    public $ingressEndpointStatus;

    /**
     * @description The status of the network service. Valid values:
     *
     *   Ready: The network service is connected.
     *   Pending: The network service is being connected.
     *   Failed: The network service fails to be connected.
     *   Deleted: The network service is deleted.
     *   Deleting: The network service is being deleted.
     *
     * @example Ready
     *
     * @var string
     */
    public $networkServiceStatus;

    /**
     * @description The names of the security groups.
     *
     * @var string[]
     */
    public $securityGroups;

    /**
     * @description The names of the vSwitches.
     *
     * @var string[]
     */
    public $vSwitches;

    /**
     * @description The virtual private cloud (VPC) ID.
     *
     * @example vpc-bp1vwnn14rqpyiczj****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'connectBandwidth'      => 'ConnectBandwidth',
        'domainName'            => 'DomainName',
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
        if (null !== $this->connectBandwidth) {
            $res['ConnectBandwidth'] = $this->connectBandwidth;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
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
        if (isset($map['ConnectBandwidth'])) {
            $model->connectBandwidth = $map['ConnectBandwidth'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
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
