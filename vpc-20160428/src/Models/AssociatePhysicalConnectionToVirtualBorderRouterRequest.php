<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AssociatePhysicalConnectionToVirtualBorderRouterRequest extends Model
{
    /**
     * @description The circuit code of the Express Connect circuit. The circuit code is provided by the connectivity provider.
     *
     * >  Only the owner of the Express Connect circuit can set this parameter.
     * @example longtel001
     *
     * @var string
     */
    public $circuitCode;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * >  If you do not set this parameter, the system automatically uses **RequestId** as **ClientToken**. **RequestId** may be different for each API request.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to enable IPv6. Valid values:
     *
     *   **true**: enables IPv6
     *   **false** (default): disables IPv6
     *
     * @example false
     *
     * @var string
     */
    public $enableIpv6;

    /**
     * @description The IP address of the VBR.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $localGatewayIp;

    /**
     * @description The IPv6 address of the VBR.
     *
     * @example 2001:XXXX:3c4d:0015:0000:0000:0000:1a2b
     *
     * @var string
     */
    public $localIpv6GatewayIp;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The IP address of the gateway device in the data center.
     *
     *   Only the owner of the VBR can set or modify this parameter.
     *   When you create a VBR for the owner of the Express Connect circuit, this parameter is required.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $peerGatewayIp;

    /**
     * @description The IPv6 address of the gateway device in the data center.
     *
     *   Only the owner of the VBR can set or modify this parameter.
     *   When you create a VBR for the owner of the Express Connect circuit, this parameter is required.
     *
     * @example 2001:XXXX:4:4:4:4:4:4
     *
     * @var string
     */
    public $peerIpv6GatewayIp;

    /**
     * @description The subnet mask of the IPv6 addresses of the VBR and the gateway device in the data center.
     *
     * The two IPv6 addresses must fall within the same subnet.
     * @example 2408:4004:cc:400::/56
     *
     * @var string
     */
    public $peeringIpv6SubnetMask;

    /**
     * @description The subnet mask of the IP addresses of the VBR and the gateway device in the data center.
     *
     * The two IP addresses must fall within the same subnet.
     * @example 255.255.255.0
     *
     * @var string
     */
    public $peeringSubnetMask;

    /**
     * @description The ID of the Express Connect circuit.
     *
     * @example pc-bp1qrb3044eqixog****
     *
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @description The ID of the region where the Express Connect circuit is deployed.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the VBR.
     *
     * @example vbr-bp186tnz6rijyhj******
     *
     * @var string
     */
    public $vbrId;

    /**
     * @description The VLAN ID of the VBR. Valid values: **0 to 2999**.
     *
     * >  Only the owner of the Express Connect circuit can set this parameter. The VLAN IDs of two VBRs of the same the Express Connect circuit must be different.
     * @example 123
     *
     * @var string
     */
    public $vlanId;
    protected $_name = [
        'circuitCode'           => 'CircuitCode',
        'clientToken'           => 'ClientToken',
        'enableIpv6'            => 'EnableIpv6',
        'localGatewayIp'        => 'LocalGatewayIp',
        'localIpv6GatewayIp'    => 'LocalIpv6GatewayIp',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'peerGatewayIp'         => 'PeerGatewayIp',
        'peerIpv6GatewayIp'     => 'PeerIpv6GatewayIp',
        'peeringIpv6SubnetMask' => 'PeeringIpv6SubnetMask',
        'peeringSubnetMask'     => 'PeeringSubnetMask',
        'physicalConnectionId'  => 'PhysicalConnectionId',
        'regionId'              => 'RegionId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'vbrId'                 => 'VbrId',
        'vlanId'                => 'VlanId',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->physicalConnectionId) {
            $res['PhysicalConnectionId'] = $this->physicalConnectionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->vbrId) {
            $res['VbrId'] = $this->vbrId;
        }
        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociatePhysicalConnectionToVirtualBorderRouterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CircuitCode'])) {
            $model->circuitCode = $map['CircuitCode'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['PhysicalConnectionId'])) {
            $model->physicalConnectionId = $map['PhysicalConnectionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['VbrId'])) {
            $model->vbrId = $map['VbrId'];
        }
        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }

        return $model;
    }
}
