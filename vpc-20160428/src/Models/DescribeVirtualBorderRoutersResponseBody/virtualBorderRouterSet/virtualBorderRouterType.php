<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponseBody\virtualBorderRouterSet;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponseBody\virtualBorderRouterSet\virtualBorderRouterType\associatedCens;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponseBody\virtualBorderRouterSet\virtualBorderRouterType\associatedPhysicalConnections;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponseBody\virtualBorderRouterSet\virtualBorderRouterType\tags;

class virtualBorderRouterType extends Model
{
    /**
     * @var string
     */
    public $accessPointId;

    /**
     * @var string
     */
    public $activationTime;

    /**
     * @var associatedCens
     */
    public $associatedCens;

    /**
     * @var associatedPhysicalConnections
     */
    public $associatedPhysicalConnections;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $circuitCode;

    /**
     * @var string
     */
    public $cloudBoxInstanceId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $detectMultiplier;

    /**
     * @var string
     */
    public $eccId;

    /**
     * @var string
     */
    public $ecrAttatchStatus;

    /**
     * @var string
     */
    public $ecrId;

    /**
     * @var string
     */
    public $ecrOwnerId;

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
     * @var int
     */
    public $minRxInterval;

    /**
     * @var int
     */
    public $minTxInterval;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $PConnVbrChargeType;

    /**
     * @var string
     */
    public $PConnVbrExpireTime;

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
    public $recoveryTime;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $routeTableId;

    /**
     * @var bool
     */
    public $sitelinkEnable;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $terminationTime;

    /**
     * @var string
     */
    public $type;

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
    public $vlanInterfaceId;
    protected $_name = [
        'accessPointId' => 'AccessPointId',
        'activationTime' => 'ActivationTime',
        'associatedCens' => 'AssociatedCens',
        'associatedPhysicalConnections' => 'AssociatedPhysicalConnections',
        'bandwidth' => 'Bandwidth',
        'circuitCode' => 'CircuitCode',
        'cloudBoxInstanceId' => 'CloudBoxInstanceId',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'detectMultiplier' => 'DetectMultiplier',
        'eccId' => 'EccId',
        'ecrAttatchStatus' => 'EcrAttatchStatus',
        'ecrId' => 'EcrId',
        'ecrOwnerId' => 'EcrOwnerId',
        'enableIpv6' => 'EnableIpv6',
        'localGatewayIp' => 'LocalGatewayIp',
        'localIpv6GatewayIp' => 'LocalIpv6GatewayIp',
        'minRxInterval' => 'MinRxInterval',
        'minTxInterval' => 'MinTxInterval',
        'name' => 'Name',
        'PConnVbrChargeType' => 'PConnVbrChargeType',
        'PConnVbrExpireTime' => 'PConnVbrExpireTime',
        'peerGatewayIp' => 'PeerGatewayIp',
        'peerIpv6GatewayIp' => 'PeerIpv6GatewayIp',
        'peeringIpv6SubnetMask' => 'PeeringIpv6SubnetMask',
        'peeringSubnetMask' => 'PeeringSubnetMask',
        'physicalConnectionBusinessStatus' => 'PhysicalConnectionBusinessStatus',
        'physicalConnectionId' => 'PhysicalConnectionId',
        'physicalConnectionOwnerUid' => 'PhysicalConnectionOwnerUid',
        'physicalConnectionStatus' => 'PhysicalConnectionStatus',
        'recoveryTime' => 'RecoveryTime',
        'resourceGroupId' => 'ResourceGroupId',
        'routeTableId' => 'RouteTableId',
        'sitelinkEnable' => 'SitelinkEnable',
        'status' => 'Status',
        'tags' => 'Tags',
        'terminationTime' => 'TerminationTime',
        'type' => 'Type',
        'vbrId' => 'VbrId',
        'vlanId' => 'VlanId',
        'vlanInterfaceId' => 'VlanInterfaceId',
    ];

    public function validate()
    {
        if (null !== $this->associatedCens) {
            $this->associatedCens->validate();
        }
        if (null !== $this->associatedPhysicalConnections) {
            $this->associatedPhysicalConnections->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }

        if (null !== $this->activationTime) {
            $res['ActivationTime'] = $this->activationTime;
        }

        if (null !== $this->associatedCens) {
            $res['AssociatedCens'] = null !== $this->associatedCens ? $this->associatedCens->toArray($noStream) : $this->associatedCens;
        }

        if (null !== $this->associatedPhysicalConnections) {
            $res['AssociatedPhysicalConnections'] = null !== $this->associatedPhysicalConnections ? $this->associatedPhysicalConnections->toArray($noStream) : $this->associatedPhysicalConnections;
        }

        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->circuitCode) {
            $res['CircuitCode'] = $this->circuitCode;
        }

        if (null !== $this->cloudBoxInstanceId) {
            $res['CloudBoxInstanceId'] = $this->cloudBoxInstanceId;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->detectMultiplier) {
            $res['DetectMultiplier'] = $this->detectMultiplier;
        }

        if (null !== $this->eccId) {
            $res['EccId'] = $this->eccId;
        }

        if (null !== $this->ecrAttatchStatus) {
            $res['EcrAttatchStatus'] = $this->ecrAttatchStatus;
        }

        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
        }

        if (null !== $this->ecrOwnerId) {
            $res['EcrOwnerId'] = $this->ecrOwnerId;
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

        if (null !== $this->PConnVbrChargeType) {
            $res['PConnVbrChargeType'] = $this->PConnVbrChargeType;
        }

        if (null !== $this->PConnVbrExpireTime) {
            $res['PConnVbrExpireTime'] = $this->PConnVbrExpireTime;
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

        if (null !== $this->recoveryTime) {
            $res['RecoveryTime'] = $this->recoveryTime;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }

        if (null !== $this->sitelinkEnable) {
            $res['SitelinkEnable'] = $this->sitelinkEnable;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->terminationTime) {
            $res['TerminationTime'] = $this->terminationTime;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->vbrId) {
            $res['VbrId'] = $this->vbrId;
        }

        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
        }

        if (null !== $this->vlanInterfaceId) {
            $res['VlanInterfaceId'] = $this->vlanInterfaceId;
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
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }

        if (isset($map['ActivationTime'])) {
            $model->activationTime = $map['ActivationTime'];
        }

        if (isset($map['AssociatedCens'])) {
            $model->associatedCens = associatedCens::fromMap($map['AssociatedCens']);
        }

        if (isset($map['AssociatedPhysicalConnections'])) {
            $model->associatedPhysicalConnections = associatedPhysicalConnections::fromMap($map['AssociatedPhysicalConnections']);
        }

        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['CircuitCode'])) {
            $model->circuitCode = $map['CircuitCode'];
        }

        if (isset($map['CloudBoxInstanceId'])) {
            $model->cloudBoxInstanceId = $map['CloudBoxInstanceId'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DetectMultiplier'])) {
            $model->detectMultiplier = $map['DetectMultiplier'];
        }

        if (isset($map['EccId'])) {
            $model->eccId = $map['EccId'];
        }

        if (isset($map['EcrAttatchStatus'])) {
            $model->ecrAttatchStatus = $map['EcrAttatchStatus'];
        }

        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }

        if (isset($map['EcrOwnerId'])) {
            $model->ecrOwnerId = $map['EcrOwnerId'];
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

        if (isset($map['PConnVbrChargeType'])) {
            $model->PConnVbrChargeType = $map['PConnVbrChargeType'];
        }

        if (isset($map['PConnVbrExpireTime'])) {
            $model->PConnVbrExpireTime = $map['PConnVbrExpireTime'];
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

        if (isset($map['RecoveryTime'])) {
            $model->recoveryTime = $map['RecoveryTime'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        if (isset($map['SitelinkEnable'])) {
            $model->sitelinkEnable = $map['SitelinkEnable'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['TerminationTime'])) {
            $model->terminationTime = $map['TerminationTime'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VbrId'])) {
            $model->vbrId = $map['VbrId'];
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
