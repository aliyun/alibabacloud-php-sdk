<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersForPhysicalConnectionResponseBody\virtualBorderRouterForPhysicalConnectionSet;

use AlibabaCloud\Tea\Model;

class virtualBorderRouterForPhysicalConnectionType extends Model
{
    /**
     * @var string
     */
    public $type;

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
    public $circuitCode;

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
    public $localIpv6GatewayIp;

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
    public $bandwidthStatus;

    /**
     * @var int
     */
    public $vbrOwnerUid;

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
    public $eccId;

    /**
     * @var string
     */
    public $bandwidth;

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
    public $PConnVbrBussinessStatus;

    /**
     * @var string
     */
    public $peerGatewayIp;

    /**
     * @var string
     */
    public $peeringIpv6SubnetMask;

    /**
     * @var string
     */
    public $vbrId;

    /**
     * @var string
     */
    public $PConnVbrChargeType;

    /**
     * @var int
     */
    public $vlanId;
    protected $_name = [
        'type'                    => 'Type',
        'creationTime'            => 'CreationTime',
        'status'                  => 'Status',
        'circuitCode'             => 'CircuitCode',
        'peerIpv6GatewayIp'       => 'PeerIpv6GatewayIp',
        'PConnVbrExpireTime'      => 'PConnVbrExpireTime',
        'localIpv6GatewayIp'      => 'LocalIpv6GatewayIp',
        'localGatewayIp'          => 'LocalGatewayIp',
        'activationTime'          => 'ActivationTime',
        'bandwidthStatus'         => 'BandwidthStatus',
        'vbrOwnerUid'             => 'VbrOwnerUid',
        'peeringSubnetMask'       => 'PeeringSubnetMask',
        'enableIpv6'              => 'EnableIpv6',
        'eccId'                   => 'EccId',
        'bandwidth'               => 'Bandwidth',
        'recoveryTime'            => 'RecoveryTime',
        'terminationTime'         => 'TerminationTime',
        'PConnVbrBussinessStatus' => 'PConnVbrBussinessStatus',
        'peerGatewayIp'           => 'PeerGatewayIp',
        'peeringIpv6SubnetMask'   => 'PeeringIpv6SubnetMask',
        'vbrId'                   => 'VbrId',
        'PConnVbrChargeType'      => 'PConnVbrChargeType',
        'vlanId'                  => 'VlanId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->circuitCode) {
            $res['CircuitCode'] = $this->circuitCode;
        }
        if (null !== $this->peerIpv6GatewayIp) {
            $res['PeerIpv6GatewayIp'] = $this->peerIpv6GatewayIp;
        }
        if (null !== $this->PConnVbrExpireTime) {
            $res['PConnVbrExpireTime'] = $this->PConnVbrExpireTime;
        }
        if (null !== $this->localIpv6GatewayIp) {
            $res['LocalIpv6GatewayIp'] = $this->localIpv6GatewayIp;
        }
        if (null !== $this->localGatewayIp) {
            $res['LocalGatewayIp'] = $this->localGatewayIp;
        }
        if (null !== $this->activationTime) {
            $res['ActivationTime'] = $this->activationTime;
        }
        if (null !== $this->bandwidthStatus) {
            $res['BandwidthStatus'] = $this->bandwidthStatus;
        }
        if (null !== $this->vbrOwnerUid) {
            $res['VbrOwnerUid'] = $this->vbrOwnerUid;
        }
        if (null !== $this->peeringSubnetMask) {
            $res['PeeringSubnetMask'] = $this->peeringSubnetMask;
        }
        if (null !== $this->enableIpv6) {
            $res['EnableIpv6'] = $this->enableIpv6;
        }
        if (null !== $this->eccId) {
            $res['EccId'] = $this->eccId;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->recoveryTime) {
            $res['RecoveryTime'] = $this->recoveryTime;
        }
        if (null !== $this->terminationTime) {
            $res['TerminationTime'] = $this->terminationTime;
        }
        if (null !== $this->PConnVbrBussinessStatus) {
            $res['PConnVbrBussinessStatus'] = $this->PConnVbrBussinessStatus;
        }
        if (null !== $this->peerGatewayIp) {
            $res['PeerGatewayIp'] = $this->peerGatewayIp;
        }
        if (null !== $this->peeringIpv6SubnetMask) {
            $res['PeeringIpv6SubnetMask'] = $this->peeringIpv6SubnetMask;
        }
        if (null !== $this->vbrId) {
            $res['VbrId'] = $this->vbrId;
        }
        if (null !== $this->PConnVbrChargeType) {
            $res['PConnVbrChargeType'] = $this->PConnVbrChargeType;
        }
        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return virtualBorderRouterForPhysicalConnectionType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CircuitCode'])) {
            $model->circuitCode = $map['CircuitCode'];
        }
        if (isset($map['PeerIpv6GatewayIp'])) {
            $model->peerIpv6GatewayIp = $map['PeerIpv6GatewayIp'];
        }
        if (isset($map['PConnVbrExpireTime'])) {
            $model->PConnVbrExpireTime = $map['PConnVbrExpireTime'];
        }
        if (isset($map['LocalIpv6GatewayIp'])) {
            $model->localIpv6GatewayIp = $map['LocalIpv6GatewayIp'];
        }
        if (isset($map['LocalGatewayIp'])) {
            $model->localGatewayIp = $map['LocalGatewayIp'];
        }
        if (isset($map['ActivationTime'])) {
            $model->activationTime = $map['ActivationTime'];
        }
        if (isset($map['BandwidthStatus'])) {
            $model->bandwidthStatus = $map['BandwidthStatus'];
        }
        if (isset($map['VbrOwnerUid'])) {
            $model->vbrOwnerUid = $map['VbrOwnerUid'];
        }
        if (isset($map['PeeringSubnetMask'])) {
            $model->peeringSubnetMask = $map['PeeringSubnetMask'];
        }
        if (isset($map['EnableIpv6'])) {
            $model->enableIpv6 = $map['EnableIpv6'];
        }
        if (isset($map['EccId'])) {
            $model->eccId = $map['EccId'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['RecoveryTime'])) {
            $model->recoveryTime = $map['RecoveryTime'];
        }
        if (isset($map['TerminationTime'])) {
            $model->terminationTime = $map['TerminationTime'];
        }
        if (isset($map['PConnVbrBussinessStatus'])) {
            $model->PConnVbrBussinessStatus = $map['PConnVbrBussinessStatus'];
        }
        if (isset($map['PeerGatewayIp'])) {
            $model->peerGatewayIp = $map['PeerGatewayIp'];
        }
        if (isset($map['PeeringIpv6SubnetMask'])) {
            $model->peeringIpv6SubnetMask = $map['PeeringIpv6SubnetMask'];
        }
        if (isset($map['VbrId'])) {
            $model->vbrId = $map['VbrId'];
        }
        if (isset($map['PConnVbrChargeType'])) {
            $model->PConnVbrChargeType = $map['PConnVbrChargeType'];
        }
        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }

        return $model;
    }
}
