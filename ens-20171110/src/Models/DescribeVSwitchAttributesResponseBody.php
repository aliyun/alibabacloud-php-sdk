<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeVSwitchAttributesResponseBody\haVipIds;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeVSwitchAttributesResponseBody\instanceIds;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeVSwitchAttributesResponseBody\loadBalancerIds;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeVSwitchAttributesResponseBody\natGatewayIds;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeVSwitchAttributesResponseBody\networkInterfaceIds;

class DescribeVSwitchAttributesResponseBody extends Model
{
    /**
     * @var int
     */
    public $availableIpAddressCount;

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
    public $networkId;

    /**
     * @var networkInterfaceIds
     */
    public $networkInterfaceIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vSwitchName;
    protected $_name = [
        'availableIpAddressCount' => 'AvailableIpAddressCount',
        'cidrBlock' => 'CidrBlock',
        'createdTime' => 'CreatedTime',
        'description' => 'Description',
        'ensRegionId' => 'EnsRegionId',
        'haVipIds' => 'HaVipIds',
        'instanceIds' => 'InstanceIds',
        'loadBalancerIds' => 'LoadBalancerIds',
        'natGatewayIds' => 'NatGatewayIds',
        'networkId' => 'NetworkId',
        'networkInterfaceIds' => 'NetworkInterfaceIds',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'vSwitchId' => 'VSwitchId',
        'vSwitchName' => 'VSwitchName',
    ];

    public function validate()
    {
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableIpAddressCount) {
            $res['AvailableIpAddressCount'] = $this->availableIpAddressCount;
        }

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

        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }

        if (null !== $this->networkInterfaceIds) {
            $res['NetworkInterfaceIds'] = null !== $this->networkInterfaceIds ? $this->networkInterfaceIds->toArray($noStream) : $this->networkInterfaceIds;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vSwitchName) {
            $res['VSwitchName'] = $this->vSwitchName;
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
        if (isset($map['AvailableIpAddressCount'])) {
            $model->availableIpAddressCount = $map['AvailableIpAddressCount'];
        }

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

        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }

        if (isset($map['NetworkInterfaceIds'])) {
            $model->networkInterfaceIds = networkInterfaceIds::fromMap($map['NetworkInterfaceIds']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VSwitchName'])) {
            $model->vSwitchName = $map['VSwitchName'];
        }

        return $model;
    }
}
