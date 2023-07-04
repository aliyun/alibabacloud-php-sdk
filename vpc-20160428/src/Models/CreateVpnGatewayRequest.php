<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateVpnGatewayRequest extends Model
{
    /**
     * @description Specifies whether to enable the IPsec-VPN feature. Valid values:
     *
     *   **true** (default): yes
     *   **false**: no
     *
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Specifies whether to enable the SSL-VPN feature for the VPN gateway. Valid values:
     *
     *   **true**: yes
     *   **false** (default): no
     *
     * @example 5
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The ID of the VPN gateway.
     *
     * @example 02fb3da4****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $disasterRecoveryVSwitchId;

    /**
     * @description The maximum number of clients that can be connected at the same time. Valid values: **5** (default), **10**, **20**, **50**, **100**, **200**, **500**, and **1000**.
     *
     * @example true
     *
     * @var bool
     */
    public $enableIpsec;

    /**
     * @description The ID of the vSwitch to which the VPN gateway belongs.
     *
     * @example false
     *
     * @var bool
     */
    public $enableSsl;

    /**
     * @description Specifies whether to enable automatic payment for the VPN gateway. Valid values:
     *
     *   **true**: yes
     *   **false** (default): no
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The billing method of the VPN gateway. Set the value to **POSTPAY**, which specifies the pay-as-you-go billing method.
     *
     * @example MYVPN
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the request.
     *
     * @example public
     *
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The maximum bandwidth of the VPN gateway. Unit: Mbit/s.
     *
     *   If you want to create a public VPN gateway, valid values are **10**, **100**, **200**, **500**, and **1000**.
     *   If you want to create a private VPN gateway, valid values are **200** and **1000**.
     *
     * >  In some regions, the maximum bandwidth supported by a VPN gateway is 200 Mbit/s. For more information, see [Limits on VPN gateways](~~65290~~).
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The ID of the virtual private cloud (VPC) where you want to create the VPN gateway.
     *
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
     * @description The type of the VPN gateway. Valid values:
     *
     *   **Normal** (default): standard
     *
     * @example 5
     *
     * @var int
     */
    public $sslConnections;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not set this parameter, the system sets **ClientToken** to the value of **RequestId**. The value of **RequestId** may be different for each API request.
     * @example vsw-bp1j5miw2bae9s2vt****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The subscription duration. Unit: months. Valid values: **1** to **9**, **12**, **24**, and **36**.
     *
     * @example vpc-bp1ub1yt9cvakoelj****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The network type of the VPN gateway. Valid values:
     *
     *   **public** (default): public VPN gateway
     *   **private**: private VPN gateway
     *
     * @example Normal
     *
     * @var string
     */
    public $vpnType;
    protected $_name = [
        'autoPay'                   => 'AutoPay',
        'bandwidth'                 => 'Bandwidth',
        'clientToken'               => 'ClientToken',
        'disasterRecoveryVSwitchId' => 'DisasterRecoveryVSwitchId',
        'enableIpsec'               => 'EnableIpsec',
        'enableSsl'                 => 'EnableSsl',
        'instanceChargeType'        => 'InstanceChargeType',
        'name'                      => 'Name',
        'networkType'               => 'NetworkType',
        'ownerAccount'              => 'OwnerAccount',
        'ownerId'                   => 'OwnerId',
        'period'                    => 'Period',
        'regionId'                  => 'RegionId',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
        'sslConnections'            => 'SslConnections',
        'vSwitchId'                 => 'VSwitchId',
        'vpcId'                     => 'VpcId',
        'vpnType'                   => 'VpnType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->disasterRecoveryVSwitchId) {
            $res['DisasterRecoveryVSwitchId'] = $this->disasterRecoveryVSwitchId;
        }
        if (null !== $this->enableIpsec) {
            $res['EnableIpsec'] = $this->enableIpsec;
        }
        if (null !== $this->enableSsl) {
            $res['EnableSsl'] = $this->enableSsl;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
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
        if (null !== $this->sslConnections) {
            $res['SslConnections'] = $this->sslConnections;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpnType) {
            $res['VpnType'] = $this->vpnType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpnGatewayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DisasterRecoveryVSwitchId'])) {
            $model->disasterRecoveryVSwitchId = $map['DisasterRecoveryVSwitchId'];
        }
        if (isset($map['EnableIpsec'])) {
            $model->enableIpsec = $map['EnableIpsec'];
        }
        if (isset($map['EnableSsl'])) {
            $model->enableSsl = $map['EnableSsl'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
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
        if (isset($map['SslConnections'])) {
            $model->sslConnections = $map['SslConnections'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpnType'])) {
            $model->vpnType = $map['VpnType'];
        }

        return $model;
    }
}
