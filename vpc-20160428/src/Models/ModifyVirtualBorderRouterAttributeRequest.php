<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyVirtualBorderRouterAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vbrId;

    /**
     * @var int
     */
    public $vlanId;

    /**
     * @var string
     */
    public $circuitCode;

    /**
     * @var string
     */
    public $localGatewayIp;

    /**
     * @var string
     */
    public $peerGatewayIp;

    /**
     * @var string
     */
    public $peeringSubnetMask;

    /**
     * @var int
     */
    public $minTxInterval;

    /**
     * @var int
     */
    public $minRxInterval;

    /**
     * @var int
     */
    public $detectMultiplier;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $associatedPhysicalConnections;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $localIpv6GatewayIp;

    /**
     * @var string
     */
    public $peerIpv6GatewayIp;

    /**
     * @var string
     */
    public $peeringIpv6SubnetMask;

    /**
     * @var bool
     */
    public $enableIpv6;

    /**
     * @var int
     */
    public $bandwidth;
    protected $_name = [
        'regionId'                      => 'RegionId',
        'vbrId'                         => 'VbrId',
        'vlanId'                        => 'VlanId',
        'circuitCode'                   => 'CircuitCode',
        'localGatewayIp'                => 'LocalGatewayIp',
        'peerGatewayIp'                 => 'PeerGatewayIp',
        'peeringSubnetMask'             => 'PeeringSubnetMask',
        'minTxInterval'                 => 'MinTxInterval',
        'minRxInterval'                 => 'MinRxInterval',
        'detectMultiplier'              => 'DetectMultiplier',
        'description'                   => 'Description',
        'name'                          => 'Name',
        'associatedPhysicalConnections' => 'AssociatedPhysicalConnections',
        'ownerId'                       => 'OwnerId',
        'resourceOwnerAccount'          => 'ResourceOwnerAccount',
        'resourceOwnerId'               => 'ResourceOwnerId',
        'clientToken'                   => 'ClientToken',
        'ownerAccount'                  => 'OwnerAccount',
        'localIpv6GatewayIp'            => 'LocalIpv6GatewayIp',
        'peerIpv6GatewayIp'             => 'PeerIpv6GatewayIp',
        'peeringIpv6SubnetMask'         => 'PeeringIpv6SubnetMask',
        'enableIpv6'                    => 'EnableIpv6',
        'bandwidth'                     => 'Bandwidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vbrId) {
            $res['VbrId'] = $this->vbrId;
        }
        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
        }
        if (null !== $this->circuitCode) {
            $res['CircuitCode'] = $this->circuitCode;
        }
        if (null !== $this->localGatewayIp) {
            $res['LocalGatewayIp'] = $this->localGatewayIp;
        }
        if (null !== $this->peerGatewayIp) {
            $res['PeerGatewayIp'] = $this->peerGatewayIp;
        }
        if (null !== $this->peeringSubnetMask) {
            $res['PeeringSubnetMask'] = $this->peeringSubnetMask;
        }
        if (null !== $this->minTxInterval) {
            $res['MinTxInterval'] = $this->minTxInterval;
        }
        if (null !== $this->minRxInterval) {
            $res['MinRxInterval'] = $this->minRxInterval;
        }
        if (null !== $this->detectMultiplier) {
            $res['DetectMultiplier'] = $this->detectMultiplier;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->associatedPhysicalConnections) {
            $res['AssociatedPhysicalConnections'] = $this->associatedPhysicalConnections;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->localIpv6GatewayIp) {
            $res['LocalIpv6GatewayIp'] = $this->localIpv6GatewayIp;
        }
        if (null !== $this->peerIpv6GatewayIp) {
            $res['PeerIpv6GatewayIp'] = $this->peerIpv6GatewayIp;
        }
        if (null !== $this->peeringIpv6SubnetMask) {
            $res['PeeringIpv6SubnetMask'] = $this->peeringIpv6SubnetMask;
        }
        if (null !== $this->enableIpv6) {
            $res['EnableIpv6'] = $this->enableIpv6;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VbrId'])) {
            $model->vbrId = $map['VbrId'];
        }
        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }
        if (isset($map['CircuitCode'])) {
            $model->circuitCode = $map['CircuitCode'];
        }
        if (isset($map['LocalGatewayIp'])) {
            $model->localGatewayIp = $map['LocalGatewayIp'];
        }
        if (isset($map['PeerGatewayIp'])) {
            $model->peerGatewayIp = $map['PeerGatewayIp'];
        }
        if (isset($map['PeeringSubnetMask'])) {
            $model->peeringSubnetMask = $map['PeeringSubnetMask'];
        }
        if (isset($map['MinTxInterval'])) {
            $model->minTxInterval = $map['MinTxInterval'];
        }
        if (isset($map['MinRxInterval'])) {
            $model->minRxInterval = $map['MinRxInterval'];
        }
        if (isset($map['DetectMultiplier'])) {
            $model->detectMultiplier = $map['DetectMultiplier'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['AssociatedPhysicalConnections'])) {
            $model->associatedPhysicalConnections = $map['AssociatedPhysicalConnections'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['LocalIpv6GatewayIp'])) {
            $model->localIpv6GatewayIp = $map['LocalIpv6GatewayIp'];
        }
        if (isset($map['PeerIpv6GatewayIp'])) {
            $model->peerIpv6GatewayIp = $map['PeerIpv6GatewayIp'];
        }
        if (isset($map['PeeringIpv6SubnetMask'])) {
            $model->peeringIpv6SubnetMask = $map['PeeringIpv6SubnetMask'];
        }
        if (isset($map['EnableIpv6'])) {
            $model->enableIpv6 = $map['EnableIpv6'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        return $model;
    }
}
