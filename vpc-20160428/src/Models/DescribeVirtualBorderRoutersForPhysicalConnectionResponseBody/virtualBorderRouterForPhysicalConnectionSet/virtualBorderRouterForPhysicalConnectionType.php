<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersForPhysicalConnectionResponseBody\virtualBorderRouterForPhysicalConnectionSet;

use AlibabaCloud\Tea\Model;

class virtualBorderRouterForPhysicalConnectionType extends Model
{
    /**
     * @description The time when the VBR was first activated.
     *
     * @example 2021-06-08T12:20:55
     *
     * @var string
     */
    public $activationTime;

    /**
     * @description The bandwidth of the VBR that is associated with the Express Connect circuit. Unit: Mbit/s.
     *
     * @example 10
     *
     * @var string
     */
    public $bandwidth;

    /**
     * @description The status of the bandwidth. Valid values:
     *
     *   **Active**
     *   **Inactive**
     *
     * @example Active
     *
     * @var string
     */
    public $bandwidthStatus;

    /**
     * @description The circuit code of the Express Connect circuit. The circuit code is provided by the connectivity provider.
     *
     * @example longtel0**
     *
     * @var string
     */
    public $circuitCode;

    /**
     * @description The time when the VBR was created.
     *
     * @example 2021-06-08T12:20:55
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the ECC instance.
     *
     * @example ecc-sjghe****
     *
     * @var string
     */
    public $eccId;

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
     * @example 192.168.XX.X
     *
     * @var string
     */
    public $localGatewayIp;

    /**
     * @description The IPv6 address of the gateway device on the Alibaba Cloud side.
     *
     * @example ipv6bw-uf6hcyzu65v98v3du****
     *
     * @var string
     */
    public $localIpv6GatewayIp;

    /**
     * @description The status of the VBR associated with the Express Connect circuit. Valid values:
     *
     *   **Normal**
     *   **FinancialLocked**
     *
     * @example Normal
     *
     * @var string
     */
    public $PConnVbrBussinessStatus;

    /**
     * @description The billing method of the VBR. Valid values:
     *
     *   **PrePaid**: subscription. If you choose this billing method, make sure that your Apsara Stack account supports balance payments or credit payments.
     *   **PostPaid**: pay-as-you-go.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $PConnVbrChargeType;

    /**
     * @description The time when the VBR associated with the Express Connect circuit expires.
     *
     * @example 2021-06-10T12:20:55
     *
     * @var string
     */
    public $PConnVbrExpireTime;

    /**
     * @description The IPv4 address of the gateway device on the user side.
     *
     * @example 162.62.XX.XX
     *
     * @var string
     */
    public $peerGatewayIp;

    /**
     * @description The IPv6 address of the gateway device on the user side.
     *
     * This parameter is required when you create a VBR for the owner of the Express Connect circuit. You can ignore this parameter when you create a VBR for another Alibaba Cloud account.
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
     *
     * @example 2408:4004:cc:400::/56
     *
     * @var string
     */
    public $peeringIpv6SubnetMask;

    /**
     * @description The subnet mask of the IPv4 addresses configured on the user side and Alibaba Cloud side.
     *
     * The two IPv4 addresses must fall within the same subnet.
     *
     * @example 255.255.255.0
     *
     * @var string
     */
    public $peeringSubnetMask;

    /**
     * @description The last time when the status of the VBR changed from Terminated to Active.
     *
     * @example 2021-06-08T12:20:55
     *
     * @var string
     */
    public $recoveryTime;

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
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The last time when the VBR was disabled.
     *
     * @example 2021-06-07T12:20:55
     *
     * @var string
     */
    public $terminationTime;

    /**
     * @description The VBR type.
     *
     * @example pconnVBR
     *
     * @var string
     */
    public $type;

    /**
     * @description The VBR ID.
     *
     * @example vbr-bp16ksp61j7e0tk****
     *
     * @var string
     */
    public $vbrId;

    /**
     * @description The ID of the Alibaba Cloud account to which the VBR belongs.
     *
     * If the owner of the VBR is the same as that of the Express Connect circuit, this parameter is empty.
     *
     * @example 253460731706911258
     *
     * @var int
     */
    public $vbrOwnerUid;

    /**
     * @description The VLAN ID of the VBR.
     *
     * @example 1678
     *
     * @var int
     */
    public $vlanId;
    protected $_name = [
        'activationTime' => 'ActivationTime',
        'bandwidth' => 'Bandwidth',
        'bandwidthStatus' => 'BandwidthStatus',
        'circuitCode' => 'CircuitCode',
        'creationTime' => 'CreationTime',
        'eccId' => 'EccId',
        'enableIpv6' => 'EnableIpv6',
        'localGatewayIp' => 'LocalGatewayIp',
        'localIpv6GatewayIp' => 'LocalIpv6GatewayIp',
        'PConnVbrBussinessStatus' => 'PConnVbrBussinessStatus',
        'PConnVbrChargeType' => 'PConnVbrChargeType',
        'PConnVbrExpireTime' => 'PConnVbrExpireTime',
        'peerGatewayIp' => 'PeerGatewayIp',
        'peerIpv6GatewayIp' => 'PeerIpv6GatewayIp',
        'peeringIpv6SubnetMask' => 'PeeringIpv6SubnetMask',
        'peeringSubnetMask' => 'PeeringSubnetMask',
        'recoveryTime' => 'RecoveryTime',
        'status' => 'Status',
        'terminationTime' => 'TerminationTime',
        'type' => 'Type',
        'vbrId' => 'VbrId',
        'vbrOwnerUid' => 'VbrOwnerUid',
        'vlanId' => 'VlanId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->activationTime) {
            $res['ActivationTime'] = $this->activationTime;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->bandwidthStatus) {
            $res['BandwidthStatus'] = $this->bandwidthStatus;
        }
        if (null !== $this->circuitCode) {
            $res['CircuitCode'] = $this->circuitCode;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
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
        if (null !== $this->PConnVbrBussinessStatus) {
            $res['PConnVbrBussinessStatus'] = $this->PConnVbrBussinessStatus;
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
        if (null !== $this->recoveryTime) {
            $res['RecoveryTime'] = $this->recoveryTime;
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
        if (null !== $this->vbrOwnerUid) {
            $res['VbrOwnerUid'] = $this->vbrOwnerUid;
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
        if (isset($map['ActivationTime'])) {
            $model->activationTime = $map['ActivationTime'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BandwidthStatus'])) {
            $model->bandwidthStatus = $map['BandwidthStatus'];
        }
        if (isset($map['CircuitCode'])) {
            $model->circuitCode = $map['CircuitCode'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
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
        if (isset($map['PConnVbrBussinessStatus'])) {
            $model->PConnVbrBussinessStatus = $map['PConnVbrBussinessStatus'];
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
        if (isset($map['RecoveryTime'])) {
            $model->recoveryTime = $map['RecoveryTime'];
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
        if (isset($map['VbrOwnerUid'])) {
            $model->vbrOwnerUid = $map['VbrOwnerUid'];
        }
        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }

        return $model;
    }
}
