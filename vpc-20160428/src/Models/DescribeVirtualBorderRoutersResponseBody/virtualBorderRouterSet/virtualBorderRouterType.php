<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponseBody\virtualBorderRouterSet;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponseBody\virtualBorderRouterSet\virtualBorderRouterType\associatedCens;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponseBody\virtualBorderRouterSet\virtualBorderRouterType\associatedPhysicalConnections;
use AlibabaCloud\Tea\Model;

class virtualBorderRouterType extends Model
{
    /**
     * @example ap-cn-kojok1x****
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @example 2021-06-08T12:20:55
     *
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
     * @example longtel0****
     *
     * @var string
     */
    public $circuitCode;

    /**
     * @example cb-****
     *
     * @var string
     */
    public $cloudBoxInstanceId;

    /**
     * @example 2020-06-08T12:20:55
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example desc
     *
     * @var string
     */
    public $description;

    /**
     * @example 3
     *
     * @var int
     */
    public $detectMultiplier;

    /**
     * @example ecc-h****
     *
     * @var string
     */
    public $eccId;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableIpv6;

    /**
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $localGatewayIp;

    /**
     * @example 2001:XXXX:3c4d:0015:0000:0000:0000:1a2b
     *
     * @var string
     */
    public $localIpv6GatewayIp;

    /**
     * @example 300
     *
     * @var int
     */
    public $minRxInterval;

    /**
     * @example 300
     *
     * @var int
     */
    public $minTxInterval;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example PrePaid
     *
     * @var string
     */
    public $PConnVbrChargeType;

    /**
     * @example 2021-06-08T12:20:55
     *
     * @var string
     */
    public $PConnVbrExpireTime;

    /**
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $peerGatewayIp;

    /**
     * @example 2001:XXXX:3c4d:0015:0000:0000:0000:1a2b
     *
     * @var string
     */
    public $peerIpv6GatewayIp;

    /**
     * @example 2000:1234:0:a000::/55
     *
     * @var string
     */
    public $peeringIpv6SubnetMask;

    /**
     * @example 255.255.255.252
     *
     * @var string
     */
    public $peeringSubnetMask;

    /**
     * @example Normal
     *
     * @var string
     */
    public $physicalConnectionBusinessStatus;

    /**
     * @example pc-119mfjzm7x****
     *
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @example 1688000000000****
     *
     * @var string
     */
    public $physicalConnectionOwnerUid;

    /**
     * @example Normal
     *
     * @var string
     */
    public $physicalConnectionStatus;

    /**
     * @example 2021-05-08T12:20:55
     *
     * @var string
     */
    public $recoveryTime;

    /**
     * @example rtb-bp1****
     *
     * @var string
     */
    public $routeTableId;

    /**
     * @example active
     *
     * @var string
     */
    public $status;

    /**
     * @example 2021-06-08T12:20:55
     *
     * @var string
     */
    public $terminationTime;

    /**
     * @example pconnVBR
     *
     * @var string
     */
    public $type;

    /**
     * @example vbr-bp1jcg5cmxjbl9xgc****
     *
     * @var string
     */
    public $vbrId;

    /**
     * @example 10
     *
     * @var int
     */
    public $vlanId;

    /**
     * @example ri-2zeo3xzyf38r4xx****
     *
     * @var string
     */
    public $vlanInterfaceId;
    protected $_name = [
        'accessPointId'                    => 'AccessPointId',
        'activationTime'                   => 'ActivationTime',
        'associatedCens'                   => 'AssociatedCens',
        'associatedPhysicalConnections'    => 'AssociatedPhysicalConnections',
        'bandwidth'                        => 'Bandwidth',
        'circuitCode'                      => 'CircuitCode',
        'cloudBoxInstanceId'               => 'CloudBoxInstanceId',
        'creationTime'                     => 'CreationTime',
        'description'                      => 'Description',
        'detectMultiplier'                 => 'DetectMultiplier',
        'eccId'                            => 'EccId',
        'enableIpv6'                       => 'EnableIpv6',
        'localGatewayIp'                   => 'LocalGatewayIp',
        'localIpv6GatewayIp'               => 'LocalIpv6GatewayIp',
        'minRxInterval'                    => 'MinRxInterval',
        'minTxInterval'                    => 'MinTxInterval',
        'name'                             => 'Name',
        'PConnVbrChargeType'               => 'PConnVbrChargeType',
        'PConnVbrExpireTime'               => 'PConnVbrExpireTime',
        'peerGatewayIp'                    => 'PeerGatewayIp',
        'peerIpv6GatewayIp'                => 'PeerIpv6GatewayIp',
        'peeringIpv6SubnetMask'            => 'PeeringIpv6SubnetMask',
        'peeringSubnetMask'                => 'PeeringSubnetMask',
        'physicalConnectionBusinessStatus' => 'PhysicalConnectionBusinessStatus',
        'physicalConnectionId'             => 'PhysicalConnectionId',
        'physicalConnectionOwnerUid'       => 'PhysicalConnectionOwnerUid',
        'physicalConnectionStatus'         => 'PhysicalConnectionStatus',
        'recoveryTime'                     => 'RecoveryTime',
        'routeTableId'                     => 'RouteTableId',
        'status'                           => 'Status',
        'terminationTime'                  => 'TerminationTime',
        'type'                             => 'Type',
        'vbrId'                            => 'VbrId',
        'vlanId'                           => 'VlanId',
        'vlanInterfaceId'                  => 'VlanInterfaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->activationTime) {
            $res['ActivationTime'] = $this->activationTime;
        }
        if (null !== $this->associatedCens) {
            $res['AssociatedCens'] = null !== $this->associatedCens ? $this->associatedCens->toMap() : null;
        }
        if (null !== $this->associatedPhysicalConnections) {
            $res['AssociatedPhysicalConnections'] = null !== $this->associatedPhysicalConnections ? $this->associatedPhysicalConnections->toMap() : null;
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
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

    /**
     * @param array $map
     *
     * @return virtualBorderRouterType
     */
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
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
