<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVirtualBorderRoutersResponseBody\virtualBorderRouterSet;

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
    public $vlanInterfaceId;

    /**
     * @var string
     */
    public $circuitCode;

    /**
     * @var string
     */
    public $physicalConnectionOwnerUid;

    /**
     * @var string
     */
    public $localGatewayIp;

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
    public $peeringSubnetMask;

    /**
     * @var string
     */
    public $routeTableId;

    /**
     * @var string
     */
    public $description;

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
    public $terminationTime;

    /**
     * @var string
     */
    public $peerGatewayIp;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $accessPointId;

    /**
     * @var string
     */
    public $vbrId;

    /**
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @var int
     */
    public $vlanId;
    protected $_name = [
        'creationTime'                     => 'CreationTime',
        'status'                           => 'Status',
        'vlanInterfaceId'                  => 'VlanInterfaceId',
        'circuitCode'                      => 'CircuitCode',
        'physicalConnectionOwnerUid'       => 'PhysicalConnectionOwnerUid',
        'localGatewayIp'                   => 'LocalGatewayIp',
        'activationTime'                   => 'ActivationTime',
        'physicalConnectionBusinessStatus' => 'PhysicalConnectionBusinessStatus',
        'peeringSubnetMask'                => 'PeeringSubnetMask',
        'routeTableId'                     => 'RouteTableId',
        'description'                      => 'Description',
        'physicalConnectionStatus'         => 'PhysicalConnectionStatus',
        'recoveryTime'                     => 'RecoveryTime',
        'terminationTime'                  => 'TerminationTime',
        'peerGatewayIp'                    => 'PeerGatewayIp',
        'name'                             => 'Name',
        'accessPointId'                    => 'AccessPointId',
        'vbrId'                            => 'VbrId',
        'physicalConnectionId'             => 'PhysicalConnectionId',
        'vlanId'                           => 'VlanId',
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
        if (null !== $this->vlanInterfaceId) {
            $res['VlanInterfaceId'] = $this->vlanInterfaceId;
        }
        if (null !== $this->circuitCode) {
            $res['CircuitCode'] = $this->circuitCode;
        }
        if (null !== $this->physicalConnectionOwnerUid) {
            $res['PhysicalConnectionOwnerUid'] = $this->physicalConnectionOwnerUid;
        }
        if (null !== $this->localGatewayIp) {
            $res['LocalGatewayIp'] = $this->localGatewayIp;
        }
        if (null !== $this->activationTime) {
            $res['ActivationTime'] = $this->activationTime;
        }
        if (null !== $this->physicalConnectionBusinessStatus) {
            $res['PhysicalConnectionBusinessStatus'] = $this->physicalConnectionBusinessStatus;
        }
        if (null !== $this->peeringSubnetMask) {
            $res['PeeringSubnetMask'] = $this->peeringSubnetMask;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->physicalConnectionStatus) {
            $res['PhysicalConnectionStatus'] = $this->physicalConnectionStatus;
        }
        if (null !== $this->recoveryTime) {
            $res['RecoveryTime'] = $this->recoveryTime;
        }
        if (null !== $this->terminationTime) {
            $res['TerminationTime'] = $this->terminationTime;
        }
        if (null !== $this->peerGatewayIp) {
            $res['PeerGatewayIp'] = $this->peerGatewayIp;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->vbrId) {
            $res['VbrId'] = $this->vbrId;
        }
        if (null !== $this->physicalConnectionId) {
            $res['PhysicalConnectionId'] = $this->physicalConnectionId;
        }
        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
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
        if (isset($map['VlanInterfaceId'])) {
            $model->vlanInterfaceId = $map['VlanInterfaceId'];
        }
        if (isset($map['CircuitCode'])) {
            $model->circuitCode = $map['CircuitCode'];
        }
        if (isset($map['PhysicalConnectionOwnerUid'])) {
            $model->physicalConnectionOwnerUid = $map['PhysicalConnectionOwnerUid'];
        }
        if (isset($map['LocalGatewayIp'])) {
            $model->localGatewayIp = $map['LocalGatewayIp'];
        }
        if (isset($map['ActivationTime'])) {
            $model->activationTime = $map['ActivationTime'];
        }
        if (isset($map['PhysicalConnectionBusinessStatus'])) {
            $model->physicalConnectionBusinessStatus = $map['PhysicalConnectionBusinessStatus'];
        }
        if (isset($map['PeeringSubnetMask'])) {
            $model->peeringSubnetMask = $map['PeeringSubnetMask'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PhysicalConnectionStatus'])) {
            $model->physicalConnectionStatus = $map['PhysicalConnectionStatus'];
        }
        if (isset($map['RecoveryTime'])) {
            $model->recoveryTime = $map['RecoveryTime'];
        }
        if (isset($map['TerminationTime'])) {
            $model->terminationTime = $map['TerminationTime'];
        }
        if (isset($map['PeerGatewayIp'])) {
            $model->peerGatewayIp = $map['PeerGatewayIp'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['VbrId'])) {
            $model->vbrId = $map['VbrId'];
        }
        if (isset($map['PhysicalConnectionId'])) {
            $model->physicalConnectionId = $map['PhysicalConnectionId'];
        }
        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }

        return $model;
    }
}
