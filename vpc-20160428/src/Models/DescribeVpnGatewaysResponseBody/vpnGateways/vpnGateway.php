<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewaysResponseBody\vpnGateways;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewaysResponseBody\vpnGateways\vpnGateway\eniInstanceIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewaysResponseBody\vpnGateways\vpnGateway\reservationData;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewaysResponseBody\vpnGateways\vpnGateway\tags;
use AlibabaCloud\Tea\Model;

class vpnGateway extends Model
{
    /**
     * @description Indicates whether BGP routes are automatically advertised to the VPC. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $autoPropagate;

    /**
     * @description The payment status of the VPN gateway.
     *
     *   **Normal**
     *   **FinancialLocked**
     *
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description The billing method of the VPN gateway.
     *
     * The value is fixed as **POSTPAY**, which indicates the pay-as-you-go billing method.
     * @example Example value for the China site (aliyun.com): Prepay. Example value for the International site (alibabacloud.com): POSTPAY.
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The timestamp when the VPN gateway was created. Unit: millisecond.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 1515383700000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The description of the VPN gateway.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The second IP address assigned by the system to create an IPsec-VPN connection.
     *
     * This parameter is returned only when the VPN gateway supports the dual-tunnel mode.
     * @example 47.91.XX.XX
     *
     * @var string
     */
    public $disasterRecoveryInternetIp;

    /**
     * @description The ID of the second vSwitch associated with the VPN gateway.
     *
     * This parameter is returned only when the VPN gateway supports the dual-tunnel mode.
     * @example vsw-p0w95ql6tmr2ludkt****
     *
     * @var string
     */
    public $disasterRecoveryVSwitchId;

    /**
     * @description The BGP status of the VPN gateway.
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enableBgp;

    /**
     * @description The timestamp when the VPN gateway expires. Unit: millisecond.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     * @example 1518105600000
     *
     * @var int
     */
    public $endTime;

    /**
     * @var eniInstanceIds
     */
    public $eniInstanceIds;

    /**
     * @description *   If the VPN gateway supports IPsec-VPN connections in single-tunnel mode, the address is the IP address of the VPN gateway and can be used to create an IPsec-VPN connection or an SSL-VPN connection.
     *
     *   If the VPN gateway supports IPsec-VPN connections in dual-tunnel mode, the address is the first IP address used to create an IPsec-VPN connection. The address cannot be used to create an SSL-VPN connection.
     *
     * If the VPN gateway supports IPsec-VPN connections in dual-tunnel mode, the system assigns two IP addresses to the VPN gateway to create two encrypted tunnels.
     * @example 47.12.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description Indicates whether IPsec-VPN is enabled for the VPN gateway.
     *
     *   **enable**
     *   **disable**
     *
     * @example enable
     *
     * @var string
     */
    public $ipsecVpn;

    /**
     * @description The name of the VPN gateway.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The network type of the VPN gateway.
     *
     *   **public**
     *   **private**
     *
     * @example public
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The information about pending orders.
     *
     * >  This parameter is returned only when **IncludeReservationData** is set to **true**.
     * @var reservationData
     */
    public $reservationData;

    /**
     * @description The ID of the resource group to which the VPN gateway belongs.
     *
     * You can call the [ListResourceGroups](~~158855~~) operation to query the resource group information.
     * @example rg-acfmzs372yg****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The maximum bandwidth of the VPN gateway. **M** indicates Mbit/s.
     *
     * @example 5M
     *
     * @var string
     */
    public $spec;

    /**
     * @description The number of SSL-VPN connections supported by the VPN gateway.
     *
     * @example 5
     *
     * @var int
     */
    public $sslMaxConnections;

    /**
     * @description Indicates whether SSL-VPN is enabled for the VPN gateway.
     *
     *   **enable**
     *   **disable**
     *
     * @example enable
     *
     * @var string
     */
    public $sslVpn;

    /**
     * @description The IP address of the SSL-VPN connection.
     *
     * This parameter is returned only when the VPN gateway is a public VPN gateway and supports only the single-tunnel mode. In addition, the VPN gateway must have the SSL-VPN feature enabled.
     * @example 47.74.XX.XX
     *
     * @var string
     */
    public $sslVpnInternetIp;

    /**
     * @description The status of the VPN gateway. Valid values:
     *
     *   **init**
     *   **provisioning**
     *   **active**
     *   **updating**
     *   **deleting**
     *
     * @example active
     *
     * @var string
     */
    public $status;

    /**
     * @description The automatically generated tag of the VPN gateway.
     *
     *   **VpnEnableBgp**: indicates whether the VPN gateway supports BGP. Valid values:
     *
     *   **true**
     *   **false**
     *
     *   **VisuallySsl**: indicates whether the VPN gateway allows you to view information about connected SSL clients.
     *
     *   **true**
     *   **false**
     *
     *   **PbrPriority**: indicates whether the VPN gateway allows you to configure priorities for policy-based routes.
     *
     *   **true**
     *   **false**
     *
     *   **VpnNewImage**: indicates whether the VPN gateway is upgraded.
     *
     *   **true**
     *   **false**
     *
     *   **description**: the description of the VPN gateway. This parameter is for internal system use only.
     *
     *   **VpnVersion**: the version of the VPN gateway.
     *
     * @example {\"VpnEnableBgp\":\"true\",\"VisuallySsl\":\"true\",\"PbrPriority\":\"true\",\"VpnNewImage\":\"true\",\"description\":\"forwarding1.3.7\",\"VpnVersion\":\"v1.2.4\"}
     *
     * @var string
     */
    public $tag;

    /**
     * @description The tags to be added to the VPN gateway.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The ID of the vSwitch to which the VPN gateway belongs.
     *
     * @example vsw-bp15lbk8sgtr6r5b0****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the VPN gateway belongs.
     *
     * @example vpc-bp1m3i0kn1nd4wiw9****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the VPN gateway.
     *
     * @example vpn-bp17lofy9fd0dnvzv****
     *
     * @var string
     */
    public $vpnGatewayId;

    /**
     * @description The type of the VPN gateway.
     *
     * Only **Normal** may be returned, which indicates a standard NAT gateway.
     * @example Normal
     *
     * @var string
     */
    public $vpnType;
    protected $_name = [
        'autoPropagate'              => 'AutoPropagate',
        'businessStatus'             => 'BusinessStatus',
        'chargeType'                 => 'ChargeType',
        'createTime'                 => 'CreateTime',
        'description'                => 'Description',
        'disasterRecoveryInternetIp' => 'DisasterRecoveryInternetIp',
        'disasterRecoveryVSwitchId'  => 'DisasterRecoveryVSwitchId',
        'enableBgp'                  => 'EnableBgp',
        'endTime'                    => 'EndTime',
        'eniInstanceIds'             => 'EniInstanceIds',
        'internetIp'                 => 'InternetIp',
        'ipsecVpn'                   => 'IpsecVpn',
        'name'                       => 'Name',
        'networkType'                => 'NetworkType',
        'reservationData'            => 'ReservationData',
        'resourceGroupId'            => 'ResourceGroupId',
        'spec'                       => 'Spec',
        'sslMaxConnections'          => 'SslMaxConnections',
        'sslVpn'                     => 'SslVpn',
        'sslVpnInternetIp'           => 'SslVpnInternetIp',
        'status'                     => 'Status',
        'tag'                        => 'Tag',
        'tags'                       => 'Tags',
        'vSwitchId'                  => 'VSwitchId',
        'vpcId'                      => 'VpcId',
        'vpnGatewayId'               => 'VpnGatewayId',
        'vpnType'                    => 'VpnType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPropagate) {
            $res['AutoPropagate'] = $this->autoPropagate;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->disasterRecoveryInternetIp) {
            $res['DisasterRecoveryInternetIp'] = $this->disasterRecoveryInternetIp;
        }
        if (null !== $this->disasterRecoveryVSwitchId) {
            $res['DisasterRecoveryVSwitchId'] = $this->disasterRecoveryVSwitchId;
        }
        if (null !== $this->enableBgp) {
            $res['EnableBgp'] = $this->enableBgp;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->eniInstanceIds) {
            $res['EniInstanceIds'] = null !== $this->eniInstanceIds ? $this->eniInstanceIds->toMap() : null;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->ipsecVpn) {
            $res['IpsecVpn'] = $this->ipsecVpn;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->reservationData) {
            $res['ReservationData'] = null !== $this->reservationData ? $this->reservationData->toMap() : null;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->sslMaxConnections) {
            $res['SslMaxConnections'] = $this->sslMaxConnections;
        }
        if (null !== $this->sslVpn) {
            $res['SslVpn'] = $this->sslVpn;
        }
        if (null !== $this->sslVpnInternetIp) {
            $res['SslVpnInternetIp'] = $this->sslVpnInternetIp;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }
        if (null !== $this->vpnType) {
            $res['VpnType'] = $this->vpnType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpnGateway
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPropagate'])) {
            $model->autoPropagate = $map['AutoPropagate'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisasterRecoveryInternetIp'])) {
            $model->disasterRecoveryInternetIp = $map['DisasterRecoveryInternetIp'];
        }
        if (isset($map['DisasterRecoveryVSwitchId'])) {
            $model->disasterRecoveryVSwitchId = $map['DisasterRecoveryVSwitchId'];
        }
        if (isset($map['EnableBgp'])) {
            $model->enableBgp = $map['EnableBgp'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EniInstanceIds'])) {
            $model->eniInstanceIds = eniInstanceIds::fromMap($map['EniInstanceIds']);
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IpsecVpn'])) {
            $model->ipsecVpn = $map['IpsecVpn'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['ReservationData'])) {
            $model->reservationData = reservationData::fromMap($map['ReservationData']);
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['SslMaxConnections'])) {
            $model->sslMaxConnections = $map['SslMaxConnections'];
        }
        if (isset($map['SslVpn'])) {
            $model->sslVpn = $map['SslVpn'];
        }
        if (isset($map['SslVpnInternetIp'])) {
            $model->sslVpnInternetIp = $map['SslVpnInternetIp'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }
        if (isset($map['VpnType'])) {
            $model->vpnType = $map['VpnType'];
        }

        return $model;
    }
}
