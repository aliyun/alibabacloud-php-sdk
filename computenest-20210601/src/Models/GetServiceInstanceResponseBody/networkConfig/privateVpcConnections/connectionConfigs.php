<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceResponseBody\networkConfig\privateVpcConnections;

use AlibabaCloud\Dara\Model;

class connectionConfigs extends Model
{
    /**
     * @var int
     */
    public $connectBandwidth;

    /**
     * @var string
     */
    public $domainName;

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
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'connectBandwidth' => 'ConnectBandwidth',
        'domainName' => 'DomainName',
        'endpointIps' => 'EndpointIps',
        'ingressEndpointStatus' => 'IngressEndpointStatus',
        'networkServiceStatus' => 'NetworkServiceStatus',
        'regionId' => 'RegionId',
        'securityGroups' => 'SecurityGroups',
        'vSwitches' => 'VSwitches',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->endpointIps)) {
            Model::validateArray($this->endpointIps);
        }
        if (\is_array($this->securityGroups)) {
            Model::validateArray($this->securityGroups);
        }
        if (\is_array($this->vSwitches)) {
            Model::validateArray($this->vSwitches);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectBandwidth) {
            $res['ConnectBandwidth'] = $this->connectBandwidth;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->endpointIps) {
            if (\is_array($this->endpointIps)) {
                $res['EndpointIps'] = [];
                $n1 = 0;
                foreach ($this->endpointIps as $item1) {
                    $res['EndpointIps'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->securityGroups)) {
                $res['SecurityGroups'] = [];
                $n1 = 0;
                foreach ($this->securityGroups as $item1) {
                    $res['SecurityGroups'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->vSwitches) {
            if (\is_array($this->vSwitches)) {
                $res['VSwitches'] = [];
                $n1 = 0;
                foreach ($this->vSwitches as $item1) {
                    $res['VSwitches'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['ConnectBandwidth'])) {
            $model->connectBandwidth = $map['ConnectBandwidth'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['EndpointIps'])) {
            if (!empty($map['EndpointIps'])) {
                $model->endpointIps = [];
                $n1 = 0;
                foreach ($map['EndpointIps'] as $item1) {
                    $model->endpointIps[$n1++] = $item1;
                }
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
                $model->securityGroups = [];
                $n1 = 0;
                foreach ($map['SecurityGroups'] as $item1) {
                    $model->securityGroups[$n1++] = $item1;
                }
            }
        }

        if (isset($map['VSwitches'])) {
            if (!empty($map['VSwitches'])) {
                $model->vSwitches = [];
                $n1 = 0;
                foreach ($map['VSwitches'] as $item1) {
                    $model->vSwitches[$n1++] = $item1;
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
