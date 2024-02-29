<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVirtualBorderRouterRequest\tags;
use AlibabaCloud\Tea\Model;

class CreateVirtualBorderRouterRequest extends Model
{
    /**
     * @description The bandwidth of the VBR. Unit: Mbit/s.
     *
     *   When you create a VBR for a dedicated connection, valid values are **50**, **100**, **200**, **300**, **400**, **500**, **1000**, **2048**, **5120**, **8192**, **10240**, **20480**, **40960**, **50120**, **61440**, and **102400**.
     *   You do not need to set this parameter when you create a VBR for a hosted connection. The bandwidth is already configured when the hosted connection is created.
     *
     * @example 100
     *
     * @var int
     */
    public $bandwidth;

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
     * You can use the client to generate the value, but you must make sure that it is unique among different requests.
     *
     * >  If you do not set this parameter, the system automatically sets **ClientToken** to the value of **RequestId**. The value of **RequestId** may be different for each API request.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the VBR.
     *
     * The description must be 2 to 256 characters in length. The description must start with a letter but cannot start with `http://` or `https://`.
     * @example desc
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to enable IPv6. Valid values:
     *
     *   **true**: enables IPv6.
     *   **false** (default): disables IPv6.
     *
     * @example true
     *
     * @var bool
     */
    public $enableIpv6;

    /**
     * @description The IP address of the VBR. Only the owner of the VBR can set or modify this parameter.
     *
     * When you create a VBR for the owner of the Express Connect circuit, this parameter is required.
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $localGatewayIp;

    /**
     * @description The IPv6 address of the VBR. Only the owner of the VBR can set or modify this parameter.
     *
     * When you create a VBR for the owner of the Express Connect circuit, this parameter is required.
     * @example 2001:XXXX:3c4d:0015:0000:0000:0000:1a2b
     *
     * @var string
     */
    public $localIpv6GatewayIp;

    /**
     * @description The name of the VBR.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, underscores (\_), and hyphens (-). The name must start with a letter.
     * @example test
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
     * @description The IP address of the gateway device in the data center. Only the owner of the VBR can set or modify this parameter.
     *
     * When you create a VBR for the owner of the Express Connect circuit, this parameter is required.
     * @example 116.62.XX.XX
     *
     * @var string
     */
    public $peerGatewayIp;

    /**
     * @description The IPv6 address of the gateway device in the data center. Only the owner of the VBR can set or modify this parameter.
     *
     * When you create a VBR for the owner of the Express Connect circuit, this parameter is required.
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
     * @example 255.255.255.252
     *
     * @var string
     */
    public $peeringSubnetMask;

    /**
     * @description The ID of the Express Connect circuit.
     *
     * You can create a VBR for a dedicated connection or a hosted connection.
     * @example pc-2zextbehcx****
     *
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @description The region ID of the Express Connect circuit.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * For more information about resource group, see [What is Resource Management?](~~94475~~)
     * @example rg-acfmxazb4ph6aiy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The account ID of the VBR owner.
     *
     * The default value is the ID of the current Alibaba Cloud account.
     * @example 168811111****
     *
     * @var int
     */
    public $vbrOwnerId;

    /**
     * @description The VLAN ID of the VBR. Valid values: **0 to 2999**.
     *
     * >  Only the owner of the Express Connect circuit can set this parameter. The VLAN IDs of two VBRs of the same the Express Connect circuit must be different.
     * @example 0
     *
     * @var int
     */
    public $vlanId;
    protected $_name = [
        'bandwidth'             => 'Bandwidth',
        'circuitCode'           => 'CircuitCode',
        'clientToken'           => 'ClientToken',
        'description'           => 'Description',
        'enableIpv6'            => 'EnableIpv6',
        'localGatewayIp'        => 'LocalGatewayIp',
        'localIpv6GatewayIp'    => 'LocalIpv6GatewayIp',
        'name'                  => 'Name',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'peerGatewayIp'         => 'PeerGatewayIp',
        'peerIpv6GatewayIp'     => 'PeerIpv6GatewayIp',
        'peeringIpv6SubnetMask' => 'PeeringIpv6SubnetMask',
        'peeringSubnetMask'     => 'PeeringSubnetMask',
        'physicalConnectionId'  => 'PhysicalConnectionId',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'tags'                  => 'Tags',
        'vbrOwnerId'            => 'VbrOwnerId',
        'vlanId'                => 'VlanId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->enableIpv6) {
            $res['EnableIpv6'] = $this->enableIpv6;
        }
        if (null !== $this->localGatewayIp) {
            $res['LocalGatewayIp'] = $this->localGatewayIp;
        }
        if (null !== $this->localIpv6GatewayIp) {
            $res['LocalIpv6GatewayIp'] = $this->localIpv6GatewayIp;
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
        if (null !== $this->physicalConnectionId) {
            $res['PhysicalConnectionId'] = $this->physicalConnectionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vbrOwnerId) {
            $res['VbrOwnerId'] = $this->vbrOwnerId;
        }
        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVirtualBorderRouterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['EnableIpv6'])) {
            $model->enableIpv6 = $map['EnableIpv6'];
        }
        if (isset($map['LocalGatewayIp'])) {
            $model->localGatewayIp = $map['LocalGatewayIp'];
        }
        if (isset($map['LocalIpv6GatewayIp'])) {
            $model->localIpv6GatewayIp = $map['LocalIpv6GatewayIp'];
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
        if (isset($map['PhysicalConnectionId'])) {
            $model->physicalConnectionId = $map['PhysicalConnectionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VbrOwnerId'])) {
            $model->vbrOwnerId = $map['VbrOwnerId'];
        }
        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }

        return $model;
    }
}
