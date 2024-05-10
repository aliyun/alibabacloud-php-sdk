<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateVpnGatewayRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic payment for the VPN gateway. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * >  We recommend that you enable automatic payment. If you disable automatic payment, you must manually pay the bill for creating the VPN gateway.
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The maximum bandwidth of the VPN gateway. Unit: Mbit/s.
     *
     *   If you want to create a public VPN gateway, valid values are **10**, **100**, **200**, **500**, and **1000**.
     *   If you want to create a private VPN gateway, valid values are **200** and **1000**.
     *
     * This parameter is required.
     * @example 5
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate a value, and you must make sure that each request has a unique token value. The client token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the value of **RequestId** as the value of **ClientToken**. The value of **RequestId** for each API request is different.
     * @example 02fb3da4****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The second vSwitch with which you want to associate the VPN gateway.
     *
     *   If you call this operation in a region that supports the IPsec-VPN connections in dual-tunnel mode, this parameter is required.
     *   You need to specify two vSwitches in different zones in the virtual private cloud (VPC) that is associated with the VPN gateway to implement disaster recovery across zones.
     *   For a region that supports only one zone, disaster recovery across zones is not supported. We recommend that you specify two vSwitches in the zone to implement high availability. You can specify the same vSwitch.
     *
     * For more information about the regions and zones that support the IPsec-VPN connections in dual-tunnel mode, see [IPsec-VPN connections support the dual-tunnel mode](https://help.aliyun.com/document_detail/2358946.html).
     * @example vsw-p0wiz7obm0tbimu4r****
     *
     * @var string
     */
    public $disasterRecoveryVSwitchId;

    /**
     * @description Specifies whether to enable the IPsec-VPN feature. Valid values:
     *
     *   **true** (default)
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enableIpsec;

    /**
     * @description Specifies whether to enable the SSL-VPN feature for the VPN gateway. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $enableSsl;

    /**
     * @description The billing method of the VPN gateway. Set the value to **POSTPAY**, which specifies the pay-as-you-go billing method.
     *
     * @example Example value for the Alibaba Cloud China site: PREPAY. Example value for the Alibaba Cloud International site: POSTPAY.
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The name of the VPN gateway. The default value is the ID of the VPN gateway.
     *
     * The name must be 2 to 100 characters in length and cannot start with `http://` or `https://`. It must start with a letter and can contain letters, digits, underscores (_), hyphens (-), and periods (.). Other special characters are not supported.
     * @example MYVPN
     *
     * @var string
     */
    public $name;

    /**
     * @description The network type of the VPN gateway. Valid values:
     *
     *   **public** (default)
     *   **private**
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
     * @description The subscription duration. Unit: month. Valid values: **1** to **9**, **12**, **24**, and **36**.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The region ID of the VPN gateway. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the VPN gateway belongs.
     *
     *   You can call the [ListResourceGroups](https://help.aliyun.com/document_detail/158855.html) operation to query resource group IDs.
     *
     *   If you do not specify a resource group ID, the VPN gateway belongs to the default resource group.
     *
     *   After the VPN gateway is created, the following resources also belong to the resource group and you cannot change the resource group: SSL servers, SSL client certificates, IPsec servers, and IPsec-VPN connections.
     *
     * If you move the VPN gateway to a new resource group, the preceding resources are also moved to the new resource group.
     * @example rg-acfmzs372yg****
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
     * @description The maximum number of clients that can be connected at the same time. Valid values: **5** (default), **10**, **20**, **50**, **100**, **200**, **500**, and **1000**.
     *
     * @example 5
     *
     * @var int
     */
    public $sslConnections;

    /**
     * @description The vSwitch with which you want to associate the VPN gateway.
     *
     *   If you call this operation in a region that supports the IPsec-VPN connections in dual-tunnel mode, this parameter is required. You must specify a vSwitch and specify **DisasterRecoveryVSwitchId**.
     *   If you call this operation in a region that supports the IPsec-VPN connections in single-tunnel mode and do not specify a vSwitch, the system automatically specifies a vSwitch.
     *
     * @example vsw-bp1j5miw2bae9s2vt****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC) where you want to create the VPN gateway.
     *
     * This parameter is required.
     * @example vpc-bp1ub1yt9cvakoelj****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The type of the VPN gateway. Valid values:
     *
     * Set the value to **Normal** (default), which specifies a standard NAT gateway.
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
        'resourceGroupId'           => 'ResourceGroupId',
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
