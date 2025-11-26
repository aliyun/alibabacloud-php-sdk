<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworksResponseBody\networks;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworksResponseBody\networks\network\routeTableIds;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworksResponseBody\networks\network\secondaryCidrBlocks;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworksResponseBody\networks\network\tags;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworksResponseBody\networks\network\vSwitchIds;

class network extends Model
{
    /**
     * @var string
     */
    public $cidrBlock;

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
     * @var string
     */
    public $networkAclId;

    /**
     * @var string
     */
    public $networkId;

    /**
     * @var string
     */
    public $networkName;

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
     * @var tags
     */
    public $tags;

    /**
     * @var vSwitchIds
     */
    public $vSwitchIds;
    protected $_name = [
        'cidrBlock' => 'CidrBlock',
        'createdTime' => 'CreatedTime',
        'description' => 'Description',
        'ensRegionId' => 'EnsRegionId',
        'gatewayRouteTableId' => 'GatewayRouteTableId',
        'networkAclId' => 'NetworkAclId',
        'networkId' => 'NetworkId',
        'networkName' => 'NetworkName',
        'routeTableId' => 'RouteTableId',
        'routeTableIds' => 'RouteTableIds',
        'routerTableId' => 'RouterTableId',
        'secondaryCidrBlocks' => 'SecondaryCidrBlocks',
        'status' => 'Status',
        'tags' => 'Tags',
        'vSwitchIds' => 'VSwitchIds',
    ];

    public function validate()
    {
        if (null !== $this->routeTableIds) {
            $this->routeTableIds->validate();
        }
        if (null !== $this->secondaryCidrBlocks) {
            $this->secondaryCidrBlocks->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
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

        if (null !== $this->networkAclId) {
            $res['NetworkAclId'] = $this->networkAclId;
        }

        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }

        if (null !== $this->networkName) {
            $res['NetworkName'] = $this->networkName;
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

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
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

        if (isset($map['NetworkAclId'])) {
            $model->networkAclId = $map['NetworkAclId'];
        }

        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }

        if (isset($map['NetworkName'])) {
            $model->networkName = $map['NetworkName'];
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

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = vSwitchIds::fromMap($map['VSwitchIds']);
        }

        return $model;
    }
}
