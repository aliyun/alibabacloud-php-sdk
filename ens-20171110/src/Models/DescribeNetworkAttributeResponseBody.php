<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeResponseBody\cloudResources;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeResponseBody\haVipIds;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeResponseBody\instanceIds;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeResponseBody\loadBalancerIds;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeResponseBody\natGatewayIds;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeResponseBody\networkInterfaceIds;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeResponseBody\routeTableIds;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeResponseBody\secondaryCidrBlocks;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeResponseBody\vSwitchIds;

class DescribeNetworkAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var cloudResources
     */
    public $cloudResources;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $gatewayRouteTableId;

    /**
     * @var haVipIds
     */
    public $haVipIds;

    /**
     * @var instanceIds
     */
    public $instanceIds;

    /**
     * @var loadBalancerIds
     */
    public $loadBalancerIds;

    /**
     * @var natGatewayIds
     */
    public $natGatewayIds;

    /**
     * @var string
     */
    public $networkAclId;

    /**
     * @var string
     */
    public $networkId;

    /**
     * @var networkInterfaceIds
     */
    public $networkInterfaceIds;

    /**
     * @var string
     */
    public $networkName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $routeTableId;

    /**
     * @var routeTableIds
     */
    public $routeTableIds;

    /**
     * @var string
     */
    public $routerTableId;

    /**
     * @var secondaryCidrBlocks
     */
    public $secondaryCidrBlocks;

    /**
     * @var string
     */
    public $status;

    /**
     * @var vSwitchIds
     */
    public $vSwitchIds;
    protected $_name = [
        'cidrBlock' => 'CidrBlock',
        'cloudResources' => 'CloudResources',
        'createdTime' => 'CreatedTime',
        'description' => 'Description',
        'ensRegionId' => 'EnsRegionId',
        'gatewayRouteTableId' => 'GatewayRouteTableId',
        'haVipIds' => 'HaVipIds',
        'instanceIds' => 'InstanceIds',
        'loadBalancerIds' => 'LoadBalancerIds',
        'natGatewayIds' => 'NatGatewayIds',
        'networkAclId' => 'NetworkAclId',
        'networkId' => 'NetworkId',
        'networkInterfaceIds' => 'NetworkInterfaceIds',
        'networkName' => 'NetworkName',
        'requestId' => 'RequestId',
        'routeTableId' => 'RouteTableId',
        'routeTableIds' => 'RouteTableIds',
        'routerTableId' => 'RouterTableId',
        'secondaryCidrBlocks' => 'SecondaryCidrBlocks',
        'status' => 'Status',
        'vSwitchIds' => 'VSwitchIds',
    ];

    public function validate()
    {
        if (null !== $this->cloudResources) {
            $this->cloudResources->validate();
        }
        if (null !== $this->haVipIds) {
            $this->haVipIds->validate();
        }
        if (null !== $this->instanceIds) {
            $this->instanceIds->validate();
        }
        if (null !== $this->loadBalancerIds) {
            $this->loadBalancerIds->validate();
        }
        if (null !== $this->natGatewayIds) {
            $this->natGatewayIds->validate();
        }
        if (null !== $this->networkInterfaceIds) {
            $this->networkInterfaceIds->validate();
        }
        if (null !== $this->routeTableIds) {
            $this->routeTableIds->validate();
        }
        if (null !== $this->secondaryCidrBlocks) {
            $this->secondaryCidrBlocks->validate();
        }
        if (null !== $this->vSwitchIds) {
            $this->vSwitchIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }

        if (null !== $this->cloudResources) {
            $res['CloudResources'] = null !== $this->cloudResources ? $this->cloudResources->toArray($noStream) : $this->cloudResources;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->gatewayRouteTableId) {
            $res['GatewayRouteTableId'] = $this->gatewayRouteTableId;
        }

        if (null !== $this->haVipIds) {
            $res['HaVipIds'] = null !== $this->haVipIds ? $this->haVipIds->toArray($noStream) : $this->haVipIds;
        }

        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = null !== $this->instanceIds ? $this->instanceIds->toArray($noStream) : $this->instanceIds;
        }

        if (null !== $this->loadBalancerIds) {
            $res['LoadBalancerIds'] = null !== $this->loadBalancerIds ? $this->loadBalancerIds->toArray($noStream) : $this->loadBalancerIds;
        }

        if (null !== $this->natGatewayIds) {
            $res['NatGatewayIds'] = null !== $this->natGatewayIds ? $this->natGatewayIds->toArray($noStream) : $this->natGatewayIds;
        }

        if (null !== $this->networkAclId) {
            $res['NetworkAclId'] = $this->networkAclId;
        }

        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }

        if (null !== $this->networkInterfaceIds) {
            $res['NetworkInterfaceIds'] = null !== $this->networkInterfaceIds ? $this->networkInterfaceIds->toArray($noStream) : $this->networkInterfaceIds;
        }

        if (null !== $this->networkName) {
            $res['NetworkName'] = $this->networkName;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }

        if (null !== $this->routeTableIds) {
            $res['RouteTableIds'] = null !== $this->routeTableIds ? $this->routeTableIds->toArray($noStream) : $this->routeTableIds;
        }

        if (null !== $this->routerTableId) {
            $res['RouterTableId'] = $this->routerTableId;
        }

        if (null !== $this->secondaryCidrBlocks) {
            $res['SecondaryCidrBlocks'] = null !== $this->secondaryCidrBlocks ? $this->secondaryCidrBlocks->toArray($noStream) : $this->secondaryCidrBlocks;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = null !== $this->vSwitchIds ? $this->vSwitchIds->toArray($noStream) : $this->vSwitchIds;
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
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }

        if (isset($map['CloudResources'])) {
            $model->cloudResources = cloudResources::fromMap($map['CloudResources']);
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['GatewayRouteTableId'])) {
            $model->gatewayRouteTableId = $map['GatewayRouteTableId'];
        }

        if (isset($map['HaVipIds'])) {
            $model->haVipIds = haVipIds::fromMap($map['HaVipIds']);
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIds = instanceIds::fromMap($map['InstanceIds']);
        }

        if (isset($map['LoadBalancerIds'])) {
            $model->loadBalancerIds = loadBalancerIds::fromMap($map['LoadBalancerIds']);
        }

        if (isset($map['NatGatewayIds'])) {
            $model->natGatewayIds = natGatewayIds::fromMap($map['NatGatewayIds']);
        }

        if (isset($map['NetworkAclId'])) {
            $model->networkAclId = $map['NetworkAclId'];
        }

        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }

        if (isset($map['NetworkInterfaceIds'])) {
            $model->networkInterfaceIds = networkInterfaceIds::fromMap($map['NetworkInterfaceIds']);
        }

        if (isset($map['NetworkName'])) {
            $model->networkName = $map['NetworkName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        if (isset($map['RouteTableIds'])) {
            $model->routeTableIds = routeTableIds::fromMap($map['RouteTableIds']);
        }

        if (isset($map['RouterTableId'])) {
            $model->routerTableId = $map['RouterTableId'];
        }

        if (isset($map['SecondaryCidrBlocks'])) {
            $model->secondaryCidrBlocks = secondaryCidrBlocks::fromMap($map['SecondaryCidrBlocks']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = vSwitchIds::fromMap($map['VSwitchIds']);
        }

        return $model;
    }
}
