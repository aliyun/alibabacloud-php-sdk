<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponseBody\virtualBorderRouterSet\virtualBorderRouterType\associatedPhysicalConnections;

use AlibabaCloud\Tea\Model;

class associatedPhysicalConnection extends Model
{
    /**
     * @description The circuit code of the Express Connect circuit. The circuit code is provided by the ISP.
     *
     * @example longtel0**
     *
     * @var string
     */
    public $circuitCode;

    /**
     * @description Indicates whether IPv6 is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enableIpv6;

    /**
     * @description The IPv4 address of the gateway device on the Alibaba Cloud side.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $localGatewayIp;

    /**
     * @description The IPv6 address of the gateway device on the Alibaba Cloud side.
     *
     * @example 2001:XXXX:3c4d:0015:0000:0000:0000:1a2b
     *
     * @var string
     */
    public $localIpv6GatewayIp;

    /**
     * @description The IPv4 address of the gateway device on the user side.
     *
     * @example 116.62.XX.XX
     *
     * @var string
     */
    public $peerGatewayIp;

    /**
     * @description The IPv6 address of the gateway device on the user side.
     *
     * @example 2001:XXXX:3c4d:0015:0000:0000:0000:1a2b
     *
     * @var string
     */
    public $peerIpv6GatewayIp;

    /**
     * @description The subnet mask for the IPv6 addresses of the gateway devices on the Alibaba Cloud side and on the user side.
     *
     * The two IPv6 addresses must fall within the same subnet.
     * @example 2408:4004:cc:400::/56
     *
     * @var string
     */
    public $peeringIpv6SubnetMask;

    /**
     * @description The subnet mask for the IPv4 addresses of the gateway devices on the Alibaba Cloud side and on the user side.
     *
     * The two IPv4 addresses must fall within the same subnet.
     * @example 255.255.255.252
     *
     * @var string
     */
    public $peeringSubnetMask;

    /**
     * @description The business status of the Express Connect circuit.
     *
     *   **Normal:** The Express Connect circuit is running as normal.
     *   **FinancialLocked:** The Express Connect circuit is locked due to overdue payments.
     *
     * @example Normal
     *
     * @var string
     */
    public $physicalConnectionBusinessStatus;

    /**
     * @description The ID of the Express Connect circuit.
     *
     * @example pc-119mfjzm7****
     *
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @description The ID of the Alibaba Cloud account to which the Express Connect circuit belongs.
     *
     * @example 12345678****
     *
     * @var string
     */
    public $physicalConnectionOwnerUid;

    /**
     * @description The status of the Express Connect circuit.
     *
     *   **Initial:** The application is under review.
     *   **Approved**: The application is approved.
     *   **Allocating**: The system is allocating resources.
     *   **Allocated**: The Express Connect circuit is under construction.
     *   **Confirmed**: The Express Connect circuit is to be confirmed.
     *   **Enabled**: The Express Connect circuit is enabled.
     *   **Rejected**: The application is rejected.
     *   **Canceled**: The application is canceled.
     *   **Allocation Failed:** The system failed to allocate resources.
     *   **Terminated:** The Express Connect circuit is disabled.
     *
     * @example Enabled
     *
     * @var string
     */
    public $physicalConnectionStatus;

    /**
     * @description The status of the VBR. Valid values:
     *
     *   **unconfirmed**
     *   **active**
     *   **terminating**
     *   **terminated**
     *   **recovering**
     *   **deleting**
     *
     * @example active
     *
     * @var string
     */
    public $status;

    /**
     * @description The VLAN ID of the VBR.
     *
     * @example 0
     *
     * @var string
     */
    public $vlanId;

    /**
     * @description The ID of the VBR interface, which can be used as the next hop of a VBR route.
     *
     * @example ri-kojok19x3j0q6k****
     *
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
