<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponseBody\virtualBorderRouterSet\virtualBorderRouterType\associatedPhysicalConnections;

use AlibabaCloud\Tea\Model;

class associatedPhysicalConnection extends Model
{
    /**
     * @var string
     */
    public $circuitCode;

    /**
     * @var bool
     */
    public $enableIpv6;

    /**
     * @var string
     */
    public $localGatewayIp;

    /**
     * @var string
     */
    public $localIpv6GatewayIp;

    /**
     * @var string
     */
    public $peerGatewayIp;

    /**
     * @var string
     */
    public $peerIpv6GatewayIp;

    /**
     * @var string
     */
    public $peeringIpv6SubnetMask;

    /**
     * @var string
     */
    public $peeringSubnetMask;

    /**
     * @var string
     */
    public $physicalConnectionBusinessStatus;

    /**
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @var string
     */
    public $physicalConnectionOwnerUid;

    /**
     * @var string
     */
    public $physicalConnectionStatus;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vlanId;

    /**
     * @var string
     */
    public $vlanInterfaceId;
    protected $_name = [
        'circuitCode'                      => 'CircuitCode',
        'enableIpv6'                       => 'EnableIpv6',
        'localGatewayIp'                   => 'LocalGatewayIp',
        'localIpv6GatewayIp'               => 'LocalIpv6GatewayIp',
        'peerGatewayIp'                    => 'PeerGatewayIp',
        'peerIpv6GatewayIp'                => 'PeerIpv6GatewayIp',
        'peeringIpv6SubnetMask'            => 'PeeringIpv6SubnetMask',
        'peeringSubnetMask'                => 'PeeringSubnetMask',
        'physicalConnectionBusinessStatus' => 'PhysicalConnectionBusinessStatus',
        'physicalConnectionId'             => 'PhysicalConnectionId',
        'physicalConnectionOwnerUid'       => 'PhysicalConnectionOwnerUid',
        'physicalConnectionStatus'         => 'PhysicalConnectionStatus',
        'status'                           => 'Status',
        'vlanId'                           => 'VlanId',
        'vlanInterfaceId'                  => 'VlanInterfaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->circuitCode) {
            $res['CircuitCode'] = $this->circuitCode;
        }
        if (null !== $this->enableIpv6) {
            $res['EnableIpv6'] = $this->enableIpv6;
        }
        if (null !== $this->localGatewayIp) {
            $res['LocalGatewayIp'] = $this->localGatewayIp;
        }
        if (null !== $this->localIpv6GatewayIp) {
            $res['LocalIpv6GatewayIp'] = $this->localIpv6GatewayIp;
        }
        if (null !== $this->peerGatewayIp) {
            $res['PeerGatewayIp'] = $this->peerGatewayIp;
        }
        if (null !== $this->peerIpv6GatewayIp) {
            $res['PeerIpv6GatewayIp'] = $this->peerIpv6GatewayIp;
        }
        if (null !== $this->peeringIpv6SubnetMask) {
            $res['PeeringIpv6SubnetMask'] = $this->peeringIpv6SubnetMask;
        }
        if (null !== $this->peeringSubnetMask) {
            $res['PeeringSubnetMask'] = $this->peeringSubnetMask;
        }
        if (null !== $this->physicalConnectionBusinessStatus) {
            $res['PhysicalConnectionBusinessStatus'] = $this->physicalConnectionBusinessStatus;
        }
        if (null !== $this->physicalConnectionId) {
            $res['PhysicalConnectionId'] = $this->physicalConnectionId;
        }
        if (null !== $this->physicalConnectionOwnerUid) {
            $res['PhysicalConnectionOwnerUid'] = $this->physicalConnectionOwnerUid;
        }
        if (null !== $this->physicalConnectionStatus) {
            $res['PhysicalConnectionStatus'] = $this->physicalConnectionStatus;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
        }
        if (null !== $this->vlanInterfaceId) {
            $res['VlanInterfaceId'] = $this->vlanInterfaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associatedPhysicalConnection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CircuitCode'])) {
            $model->circuitCode = $map['CircuitCode'];
        }
        if (isset($map['EnableIpv6'])) {
            $model->enableIpv6 = $map['EnableIpv6'];
        }
        if (isset($map['LocalGatewayIp'])) {
            $model->localGatewayIp = $map['LocalGatewayIp'];
        }
        if (isset($map['LocalIpv6GatewayIp'])) {
            $model->localIpv6GatewayIp = $map['LocalIpv6GatewayIp'];
        }
        if (isset($map['PeerGatewayIp'])) {
            $model->peerGatewayIp = $map['PeerGatewayIp'];
        }
        if (isset($map['PeerIpv6GatewayIp'])) {
            $model->peerIpv6GatewayIp = $map['PeerIpv6GatewayIp'];
        }
        if (isset($map['PeeringIpv6SubnetMask'])) {
            $model->peeringIpv6SubnetMask = $map['PeeringIpv6SubnetMask'];
        }
        if (isset($map['PeeringSubnetMask'])) {
            $model->peeringSubnetMask = $map['PeeringSubnetMask'];
        }
        if (isset($map['PhysicalConnectionBusinessStatus'])) {
            $model->physicalConnectionBusinessStatus = $map['PhysicalConnectionBusinessStatus'];
        }
        if (isset($map['PhysicalConnectionId'])) {
            $model->physicalConnectionId = $map['PhysicalConnectionId'];
        }
        if (isset($map['PhysicalConnectionOwnerUid'])) {
            $model->physicalConnectionOwnerUid = $map['PhysicalConnectionOwnerUid'];
        }
        if (isset($map['PhysicalConnectionStatus'])) {
            $model->physicalConnectionStatus = $map['PhysicalConnectionStatus'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }
        if (isset($map['VlanInterfaceId'])) {
            $model->vlanInterfaceId = $map['VlanInterfaceId'];
        }

        return $model;
    }
}
