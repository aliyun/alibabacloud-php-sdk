<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceResponseBody\networkConfig\privateVpcConnections;

use AlibabaCloud\Tea\Model;

class connectionConfigs extends Model
{
    /**
     * @var int
     */
    public $connectBandwidth;

    /**
     * @description 域名名称。
     *
     * @example ie-569a9be34f5534f6bc6559b5c1xxxxxx.service-51f80502802e48xxxxxx.cn-hangzhou.computenest.aliyuncs.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var string[]
     */
    public $endpointIps;

    /**
     * @example Ready
     *
     * @var string
     */
    public $ingressEndpointStatus;

    /**
     * @example Ready
     *
     * @var string
     */
    public $networkServiceStatus;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $securityGroups;

    /**
     * @var string[]
     */
    public $vSwitches;

    /**
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
