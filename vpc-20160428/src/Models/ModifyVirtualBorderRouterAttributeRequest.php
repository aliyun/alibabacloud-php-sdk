<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyVirtualBorderRouterAttributeRequest extends Model
{
    /**
     * @description The information about the Express Connect circuit associated with the VBR, including the following parameters:
     *
     *   **CircuitCode**: the circuit code provided by the connectivity provider for the Express Connect circuit.
     *   **LocalGatewayIp**: the IP address of the gateway device on the Alibaba Cloud side.
     *   **PeerGatewayIp**: the IP address of the gateway device on the customer side.
     *   **PeeringSubnetMask**: the subnet mask for the IP addresses of gateway devices on the Alibaba Cloud side and the customer side.
     *   **PhysicalConnectionId**: the ID of the Express Connect circuit.
     *
     * @example [   {     "CircuitCode ": "longtel001",     " LocalGatewayIp ": "192.168.XX.XX",     "PeerGatewayIp" : "192.168.XX.XX",     " PeeringSubnetMask ": "255.255.255.252",     " PhysicalConnectionId ": "pc-kojok19****"   } ]
     *
     * @var string
     */
    public $associatedPhysicalConnections;

    /**
     * @description The bandwidth value. Unit: Mbit/s.
     *
     * @example 100
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The circuit code of the Express Connect circuit. The circuit code is provided by the connectivity provider.
     *
     * >  Only the owner of the Express Connect circuit can set this property.
     * @example longtel001
     *
     * @var string
     */
    public $circuitCode;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 02fb3da4-130e-11e9-8e44-00****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the VBR.
     *
     * It must be 2 to 256 characters in length. It must start with a letter but cannot start with `http://` or `https://`.
     * @example desc
     *
     * @var string
     */
    public $description;

    /**
     * @description The maximum number of dropped packets that is allowed by the receiver when the initiator transmits packets. This value can be used to check whether a connection works as expected.
     *
     * Valid values: **3 to 10**.
     * @example 3
     *
     * @var int
     */
    public $detectMultiplier;

    /**
     * @description Specifies whether to enable IPv6. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $enableIpv6;

    /**
     * @description The IP address of the VBR.
     *
     * Only the owner of the VBR can set or modify this parameter.
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
     * @description The time interval to receive BFD packets. Valid values: **200 to 1000**. Unit: milliseconds.
     *
     * @example 300
     *
     * @var int
     */
    public $minRxInterval;

    /**
     * @description The time interval to send BFD packets. Valid values: **200 to 1000**. Unit: milliseconds.
     *
     * @example 300
     *
     * @var int
     */
    public $minTxInterval;

    /**
     * @description The name of the VBR.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, underscores (_), and hyphens (-). The name must start with a letter. It cannot start with `http://` or `https://`.
     * @example VBR
     *
     * @var string
     */
    public $name;

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
     * Only the owner of the VBR can set or modify this parameter.
     * @example 192.168.XX.X
     *
     * @var string
     */
    public $peerGatewayIp;

    /**
     * @description The IPv6 address of the gateway device in the data center.
     *
     *   Only the owner of the VBR can set or modify this property.
     *   This property is required when you create a VBR for the owner of the Express Connect circuit. You can ignore this property when you create a VBR for another Alibaba Cloud account.
     *
     * @example 2001:XXXX:3c4d:0015:0000:0000:0000:2a2b
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
     * @description The subnet mask for the IP addresses of the gateway devices on the Alibaba Cloud side and on the customer side. Only the owner of the VBR can set or modify this parameter.
     *
     * The two IP addresses must fall within the same subnet.
     * @example 255.255.255.252
     *
     * @var string
     */
    public $peeringSubnetMask;

    /**
     * @description The region ID of the VBR.
     *
     * This parameter is required.
     * @example cn-shanghai
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
     * @var bool
     */
    public $sitelinkEnable;

    /**
     * @description The VBR ID.
     *
     * This parameter is required.
     * @example vbr-bp1lhl0taikrte****
     *
     * @var string
     */
    public $vbrId;

    /**
     * @description The VLAN ID of the VBR. Valid values: **0 to 2999**.
     *
     * >  This parameter is available only to Express Connect owners. The VLAN IDs of VBRs on the same Express Connect circuit must be unique.
     * @example 0
     *
     * @var int
     */
    public $vlanId;
    protected $_name = [
        'associatedPhysicalConnections' => 'AssociatedPhysicalConnections',
        'bandwidth'                     => 'Bandwidth',
        'circuitCode'                   => 'CircuitCode',
        'clientToken'                   => 'ClientToken',
        'description'                   => 'Description',
        'detectMultiplier'              => 'DetectMultiplier',
        'enableIpv6'                    => 'EnableIpv6',
        'localGatewayIp'                => 'LocalGatewayIp',
        'localIpv6GatewayIp'            => 'LocalIpv6GatewayIp',
        'minRxInterval'                 => 'MinRxInterval',
        'minTxInterval'                 => 'MinTxInterval',
        'name'                          => 'Name',
        'ownerAccount'                  => 'OwnerAccount',
        'ownerId'                       => 'OwnerId',
        'peerGatewayIp'                 => 'PeerGatewayIp',
        'peerIpv6GatewayIp'             => 'PeerIpv6GatewayIp',
        'peeringIpv6SubnetMask'         => 'PeeringIpv6SubnetMask',
        'peeringSubnetMask'             => 'PeeringSubnetMask',
        'regionId'                      => 'RegionId',
        'resourceOwnerAccount'          => 'ResourceOwnerAccount',
        'resourceOwnerId'               => 'ResourceOwnerId',
        'sitelinkEnable'                => 'SitelinkEnable',
        'vbrId'                         => 'VbrId',
        'vlanId'                        => 'VlanId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associatedPhysicalConnections) {
            $res['AssociatedPhysicalConnections'] = $this->associatedPhysicalConnections;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->circuitCode) {
            $res['CircuitCode'] = $this->circuitCode;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->detectMultiplier) {
            $res['DetectMultiplier'] = $this->detectMultiplier;
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
        if (null !== $this->minRxInterval) {
            $res['MinRxInterval'] = $this->minRxInterval;
        }
        if (null !== $this->minTxInterval) {
            $res['MinTxInterval'] = $this->minTxInterval;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sitelinkEnable) {
            $res['SitelinkEnable'] = $this->sitelinkEnable;
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
     * @return ModifyVirtualBorderRouterAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociatedPhysicalConnections'])) {
            $model->associatedPhysicalConnections = $map['AssociatedPhysicalConnections'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['CircuitCode'])) {
            $model->circuitCode = $map['CircuitCode'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DetectMultiplier'])) {
            $model->detectMultiplier = $map['DetectMultiplier'];
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
        if (isset($map['MinRxInterval'])) {
            $model->minRxInterval = $map['MinRxInterval'];
        }
        if (isset($map['MinTxInterval'])) {
            $model->minTxInterval = $map['MinTxInterval'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SitelinkEnable'])) {
            $model->sitelinkEnable = $map['SitelinkEnable'];
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
