<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponseBody\virtualBorderRouterSet;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponseBody\virtualBorderRouterSet\virtualBorderRouterType\associatedCens;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponseBody\virtualBorderRouterSet\virtualBorderRouterType\associatedPhysicalConnections;
use AlibabaCloud\Tea\Model;

class virtualBorderRouterType extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $minTxInterval;

    /**
     * @var associatedCens
     */
    public $associatedCens;

    /**
     * @var string
     */
    public $peerIpv6GatewayIp;

    /**
     * @var string
     */
    public $PConnVbrExpireTime;

    /**
     * @var string
     */
    public $physicalConnectionOwnerUid;

    /**
     * @var string
     */
    public $activationTime;

    /**
     * @var string
     */
    public $physicalConnectionBusinessStatus;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $terminationTime;

    /**
     * @var string
     */
    public $peerGatewayIp;

    /**
     * @var int
     */
    public $minRxInterval;

    /**
     * @var string
     */
    public $name;

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

    /**
     * @var string
     */
    public $circuitCode;

    /**
     * @var string
     */
    public $localIpv6GatewayIp;

    /**
     * @var associatedPhysicalConnections
     */
    public $associatedPhysicalConnections;

    /**
     * @var string
     */
    public $localGatewayIp;

    /**
     * @var string
     */
    public $peeringSubnetMask;

    /**
     * @var bool
     */
    public $enableIpv6;

    /**
     * @var string
     */
    public $routeTableId;

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
    public $recoveryTime;

    /**
     * @var string
     */
    public $physicalConnectionStatus;

    /**
     * @var string
     */
    public $peeringIpv6SubnetMask;

    /**
     * @var string
     */
    public $accessPointId;

    /**
     * @var string
     */
    public $physicalConnectionId;
    protected $_name = [
        'creationTime'                     => 'CreationTime',
        'status'                           => 'Status',
        'type'                             => 'Type',
        'minTxInterval'                    => 'MinTxInterval',
        'associatedCens'                   => 'AssociatedCens',
        'peerIpv6GatewayIp'                => 'PeerIpv6GatewayIp',
        'PConnVbrExpireTime'               => 'PConnVbrExpireTime',
        'physicalConnectionOwnerUid'       => 'PhysicalConnectionOwnerUid',
        'activationTime'                   => 'ActivationTime',
        'physicalConnectionBusinessStatus' => 'PhysicalConnectionBusinessStatus',
        'description'                      => 'Description',
        'terminationTime'                  => 'TerminationTime',
        'peerGatewayIp'                    => 'PeerGatewayIp',
        'minRxInterval'                    => 'MinRxInterval',
        'name'                             => 'Name',
        'vbrId'                            => 'VbrId',
        'vlanId'                           => 'VlanId',
        'vlanInterfaceId'                  => 'VlanInterfaceId',
        'circuitCode'                      => 'CircuitCode',
        'localIpv6GatewayIp'               => 'LocalIpv6GatewayIp',
        'associatedPhysicalConnections'    => 'AssociatedPhysicalConnections',
        'localGatewayIp'                   => 'LocalGatewayIp',
        'peeringSubnetMask'                => 'PeeringSubnetMask',
        'enableIpv6'                       => 'EnableIpv6',
        'routeTableId'                     => 'RouteTableId',
        'detectMultiplier'                 => 'DetectMultiplier',
        'eccId'                            => 'EccId',
        'recoveryTime'                     => 'RecoveryTime',
        'physicalConnectionStatus'         => 'PhysicalConnectionStatus',
        'peeringIpv6SubnetMask'            => 'PeeringIpv6SubnetMask',
        'accessPointId'                    => 'AccessPointId',
        'physicalConnectionId'             => 'PhysicalConnectionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->minTxInterval) {
            $res['MinTxInterval'] = $this->minTxInterval;
        }
        if (null !== $this->associatedCens) {
            $res['AssociatedCens'] = null !== $this->associatedCens ? $this->associatedCens->toMap() : null;
        }
        if (null !== $this->peerIpv6GatewayIp) {
            $res['PeerIpv6GatewayIp'] = $this->peerIpv6GatewayIp;
        }
        if (null !== $this->PConnVbrExpireTime) {
            $res['PConnVbrExpireTime'] = $this->PConnVbrExpireTime;
        }
        if (null !== $this->physicalConnectionOwnerUid) {
            $res['PhysicalConnectionOwnerUid'] = $this->physicalConnectionOwnerUid;
        }
        if (null !== $this->activationTime) {
            $res['ActivationTime'] = $this->activationTime;
        }
        if (null !== $this->physicalConnectionBusinessStatus) {
            $res['PhysicalConnectionBusinessStatus'] = $this->physicalConnectionBusinessStatus;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->terminationTime) {
            $res['TerminationTime'] = $this->terminationTime;
        }
        if (null !== $this->peerGatewayIp) {
            $res['PeerGatewayIp'] = $this->peerGatewayIp;
        }
        if (null !== $this->minRxInterval) {
            $res['MinRxInterval'] = $this->minRxInterval;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->circuitCode) {
            $res['CircuitCode'] = $this->circuitCode;
        }
        if (null !== $this->localIpv6GatewayIp) {
            $res['LocalIpv6GatewayIp'] = $this->localIpv6GatewayIp;
        }
        if (null !== $this->associatedPhysicalConnections) {
            $res['AssociatedPhysicalConnections'] = null !== $this->associatedPhysicalConnections ? $this->associatedPhysicalConnections->toMap() : null;
        }
        if (null !== $this->localGatewayIp) {
            $res['LocalGatewayIp'] = $this->localGatewayIp;
        }
        if (null !== $this->peeringSubnetMask) {
            $res['PeeringSubnetMask'] = $this->peeringSubnetMask;
        }
        if (null !== $this->enableIpv6) {
            $res['EnableIpv6'] = $this->enableIpv6;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }
        if (null !== $this->detectMultiplier) {
            $res['DetectMultiplier'] = $this->detectMultiplier;
        }
        if (null !== $this->eccId) {
            $res['EccId'] = $this->eccId;
        }
        if (null !== $this->recoveryTime) {
            $res['RecoveryTime'] = $this->recoveryTime;
        }
        if (null !== $this->physicalConnectionStatus) {
            $res['PhysicalConnectionStatus'] = $this->physicalConnectionStatus;
        }
        if (null !== $this->peeringIpv6SubnetMask) {
            $res['PeeringIpv6SubnetMask'] = $this->peeringIpv6SubnetMask;
        }
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->physicalConnectionId) {
            $res['PhysicalConnectionId'] = $this->physicalConnectionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return virtualBorderRouterType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['MinTxInterval'])) {
            $model->minTxInterval = $map['MinTxInterval'];
        }
        if (isset($map['AssociatedCens'])) {
            $model->associatedCens = associatedCens::fromMap($map['AssociatedCens']);
        }
        if (isset($map['PeerIpv6GatewayIp'])) {
            $model->peerIpv6GatewayIp = $map['PeerIpv6GatewayIp'];
        }
        if (isset($map['PConnVbrExpireTime'])) {
            $model->PConnVbrExpireTime = $map['PConnVbrExpireTime'];
        }
        if (isset($map['PhysicalConnectionOwnerUid'])) {
            $model->physicalConnectionOwnerUid = $map['PhysicalConnectionOwnerUid'];
        }
        if (isset($map['ActivationTime'])) {
            $model->activationTime = $map['ActivationTime'];
        }
        if (isset($map['PhysicalConnectionBusinessStatus'])) {
            $model->physicalConnectionBusinessStatus = $map['PhysicalConnectionBusinessStatus'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['TerminationTime'])) {
            $model->terminationTime = $map['TerminationTime'];
        }
        if (isset($map['PeerGatewayIp'])) {
            $model->peerGatewayIp = $map['PeerGatewayIp'];
        }
        if (isset($map['MinRxInterval'])) {
            $model->minRxInterval = $map['MinRxInterval'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['CircuitCode'])) {
            $model->circuitCode = $map['CircuitCode'];
        }
        if (isset($map['LocalIpv6GatewayIp'])) {
            $model->localIpv6GatewayIp = $map['LocalIpv6GatewayIp'];
        }
        if (isset($map['AssociatedPhysicalConnections'])) {
            $model->associatedPhysicalConnections = associatedPhysicalConnections::fromMap($map['AssociatedPhysicalConnections']);
        }
        if (isset($map['LocalGatewayIp'])) {
            $model->localGatewayIp = $map['LocalGatewayIp'];
        }
        if (isset($map['PeeringSubnetMask'])) {
            $model->peeringSubnetMask = $map['PeeringSubnetMask'];
        }
        if (isset($map['EnableIpv6'])) {
            $model->enableIpv6 = $map['EnableIpv6'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }
        if (isset($map['DetectMultiplier'])) {
            $model->detectMultiplier = $map['DetectMultiplier'];
        }
        if (isset($map['EccId'])) {
            $model->eccId = $map['EccId'];
        }
        if (isset($map['RecoveryTime'])) {
            $model->recoveryTime = $map['RecoveryTime'];
        }
        if (isset($map['PhysicalConnectionStatus'])) {
            $model->physicalConnectionStatus = $map['PhysicalConnectionStatus'];
        }
        if (isset($map['PeeringIpv6SubnetMask'])) {
            $model->peeringIpv6SubnetMask = $map['PeeringIpv6SubnetMask'];
        }
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['PhysicalConnectionId'])) {
            $model->physicalConnectionId = $map['PhysicalConnectionId'];
        }

        return $model;
    }
}
