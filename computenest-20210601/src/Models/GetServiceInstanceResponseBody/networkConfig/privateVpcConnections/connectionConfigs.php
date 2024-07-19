<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceResponseBody\networkConfig\privateVpcConnections;

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
     * @example ie-569a9be34f5534f6bc6559b5c1xxxxxx.service-51f80502802e48xxxxxx.cn-hangzhou.computenest.aliyuncs.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The IP addresses of the endpoints of the private connections.
     *
     * @var string[]
     */
    public $endpointIps;

    /**
     * @description The state of the ingress endpoint. Valid values:
     *
     *   Ready: The ingress endpoint is connected.
     *   Pending: The ingress endpoint is being connected.
     *   Failed: The ingress endpoint fails to be connected.
     *   Deleted: The ingress endpoint is deleted.
     *   Deleting: The ingress endpoint is being deleted.
     *
     * @example Ready
     *
     * @var string
     */
    public $ingressEndpointStatus;

    /**
     * @description The state of the network service. Valid values:
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
     * @description The region ID of the VPC to which the endpoint of the private connection established based on the private network interconnection mode of Compute Nest belongs.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

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
     * @description The ID of the virtual private cloud (VPC).
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
        'regionId'              => 'RegionId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
