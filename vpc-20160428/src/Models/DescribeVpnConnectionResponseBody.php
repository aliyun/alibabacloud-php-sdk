<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionResponseBody\ikeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionResponseBody\ipsecConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionResponseBody\tags;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionResponseBody\tunnelOptionsSpecification;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionResponseBody\vcoHealthCheck;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionResponseBody\vpnBgpConfig;
use AlibabaCloud\Tea\Model;

class DescribeVpnConnectionResponseBody extends Model
{
    /**
     * @description The ID of the CEN instance to which the transit router belongs.
     *
     * @example cen-lxxpbpalc776qz****
     *
     * @var string
     */
    public $attachInstanceId;

    /**
     * @description The type of the resource that is associated with the IPsec-VPN connection. Valid values:
     *
     *   **CEN**: indicates that the IPsec-VPN connection is associated with a transit router of a Cloud Enterprise Network (CEN) instance.
     *   **NO_ASSOCIATED**: indicates that the IPsec-VPN connection is not associated with any resource.
     *   **VPNGW**: indicates that the IPsec-VPN connection is associated with a VPN gateway.
     *
     * @example CEN
     *
     * @var string
     */
    public $attachType;

    /**
     * @description The timestamp generated when the IPsec-VPN connection was established. Unit: milliseconds.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 1492753817000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description Indicates whether the IPsec-VPN connection is associated with a transit router that belongs to another Alibaba Cloud account. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $crossAccountAuthorized;

    /**
     * @description The ID of the customer gateway associated with the IPsec-VPN connection.
     *
     * @example cgw-bp1mvj4g9kogwwcxk****
     *
     * @var string
     */
    public $customerGatewayId;

    /**
     * @description Indicates whether IPsec negotiations immediately start after the configuration takes effect. Valid values:
     *
     *   **true**: Negotiations are reinitiated after the configuration is changed.
     *   **false**: Negotiations are reinitiated after traffic is detected.
     *
     * @example true
     *
     * @var bool
     */
    public $effectImmediately;

    /**
     * @description Indicates whether the dead peer detection (DPD) feature is enabled for the IPsec-VPN connection. Valid values:
     *
     *   **false**
     *   **true**
     *
     * After you enable the DPD feature, the initiator of the IPsec-VPN connection sends DPD packets to check the existence and availability of the peer. If no response is received from the peer within a specified period of time, the connection fails. Then, the ISAKMP security association (SA), IPsec SA, and IPsec tunnel are deleted.
     * @example true
     *
     * @var bool
     */
    public $enableDpd;

    /**
     * @description Indicates whether NAT traversal is enabled for the IPsec-VPN connection. Valid values:
     *
     *   **true**
     *   **false**
     *
     * After NAT traversal is enabled, the initiator does not check the UDP ports during IKE negotiations and can automatically discover NAT gateway devices along the IPsec tunnel.
     * @example true
     *
     * @var bool
     */
    public $enableNatTraversal;

    /**
     * @description Indicates whether BGP is enabled for the tunnel. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enableTunnelsBgp;

    /**
     * @description The configuration of Phase 1 negotiations.
     *
     * @var ikeConfig
     */
    public $ikeConfig;

    /**
     * @description The gateway IP address of the IPsec-VPN connection.
     *
     * @example 47.XX.XX.162
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The configuration of Phase 2 negotiations.
     *
     * @var ipsecConfig
     */
    public $ipsecConfig;

    /**
     * @description The CIDR block on the Alibaba Cloud side.
     *
     * Multiple CIDR blocks are separated by commas (,).
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $localSubnet;

    /**
     * @description The name of the IPsec-VPN connection.
     *
     * @example ipsec1
     *
     * @var string
     */
    public $name;

    /**
     * @description The network type of the IPsec-VPN connection. Valid values:
     *
     *   **public**: an encrypted connection over the Internet
     *   **private**: an encrypted connection over private networks
     *
     * @example public
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The certificate authority (CA) certificate of the peer.
     *
     * @example -----BEGIN CERTIFICATE----- MIIB7zCCAZW****
     *
     * @var string
     */
    public $remoteCaCertificate;

    /**
     * @description The CIDR block on the data center side.
     *
     * Multiple CIDR blocks are separated by commas (,).
     * @example 192.168.0.0/16
     *
     * @var string
     */
    public $remoteSubnet;

    /**
     * @description The request ID.
     *
     * @example F2310D45-BCF6-4E2E-9082-B4503844BA4C
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The bandwidth specification of the IPsec-VPN connection. Unit: **Mbit/s**.
     *
     * @example 1000M
     *
     * @var string
     */
    public $spec;

    /**
     * @description The association state of the IPsec-VPN connection. Valid values:
     *
     *   **active**: The IPsec-VPN connection is associated with a VPN gateway.
     *   **init**: The IPsec-VPN connection is not associated with any resource and is being initialized.
     *   **attaching**: The IPsec-VPN connection is being associated with a transit router.
     *   **attached**: The IPsec-VPN connection is associated with a transit router.
     *   **detaching**: The IPsec-VPN connection is being disassociated from a transit router.
     *   **financialLocked**: The IPsec-VPN connection is locked due to overdue payments.
     *   **provisioning**: The IPsec-VPN connection is being prepared.
     *   **updating**: The IPsec-VPN connection is being updated.
     *   **Upgrading**: The IPsec-VPN connection is being upgraded.
     *   **deleted**: The IPsec-VPN connection is deleted.
     *
     * @example attached
     *
     * @var string
     */
    public $state;

    /**
     * @description The state of the IPsec-VPN connection. Valid values:
     *
     *   **ike_sa_not_established**: Phase 1 negotiations failed.
     *   **ike_sa_established**: Phase 1 negotiations succeeded.
     *   **ipsec_sa_not_established**: Phase 2 negotiations failed.
     *   **ipsec_sa_established**: Phase 2 negotiations succeeded.
     *
     * @example ike_sa_not_established
     *
     * @var string
     */
    public $status;

    /**
     * @description The list of tags added to the IPsec-VPN connection.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The ID of the transit router with which the IPsec-VPN connection is associated.
     *
     * @example tr-p0we2edef9qr44a85****
     *
     * @var string
     */
    public $transitRouterId;

    /**
     * @description The name of the transit router.
     *
     * @example nametest
     *
     * @var string
     */
    public $transitRouterName;

    /**
     * @description The tunnel configuration of the IPsec-VPN connection.
     *
     * Parameters in **TunnelOptionsSpecification** are returned only if you query IPsec-VPN connections in dual-tunnel mode.
     * @var tunnelOptionsSpecification
     */
    public $tunnelOptionsSpecification;

    /**
     * @description The health check information about the IPsec-VPN connection.
     *
     * @var vcoHealthCheck
     */
    public $vcoHealthCheck;

    /**
     * @description The Border Gateway Protocol (BGP) configuration of the IPsec-VPN connection.
     *
     * @var vpnBgpConfig
     */
    public $vpnBgpConfig;

    /**
     * @description The ID of the IPsec-VPN connection.
     *
     * @example vco-bp1bbi27hojx80nck****
     *
     * @var string
     */
    public $vpnConnectionId;

    /**
     * @description The ID of the VPN gateway.
     *
     * @example vpn-bp1q8bgx4xnkm2ogj****
     *
     * @var string
     */
    public $vpnGatewayId;

    /**
     * @description The ID of the zone where the IPsec-VPN connection is deployed.
     *
     * You can call [DescribeZones](~~36064~~) to query zone IDs and mapping between zone IDs and zone names.
     * @example ap-southeast-2b
     *
     * @var string
     */
    public $zoneNo;
    protected $_name = [
        'attachInstanceId'           => 'AttachInstanceId',
        'attachType'                 => 'AttachType',
        'createTime'                 => 'CreateTime',
        'crossAccountAuthorized'     => 'CrossAccountAuthorized',
        'customerGatewayId'          => 'CustomerGatewayId',
        'effectImmediately'          => 'EffectImmediately',
        'enableDpd'                  => 'EnableDpd',
        'enableNatTraversal'         => 'EnableNatTraversal',
        'enableTunnelsBgp'           => 'EnableTunnelsBgp',
        'ikeConfig'                  => 'IkeConfig',
        'internetIp'                 => 'InternetIp',
        'ipsecConfig'                => 'IpsecConfig',
        'localSubnet'                => 'LocalSubnet',
        'name'                       => 'Name',
        'networkType'                => 'NetworkType',
        'remoteCaCertificate'        => 'RemoteCaCertificate',
        'remoteSubnet'               => 'RemoteSubnet',
        'requestId'                  => 'RequestId',
        'resourceGroupId'            => 'ResourceGroupId',
        'spec'                       => 'Spec',
        'state'                      => 'State',
        'status'                     => 'Status',
        'tags'                       => 'Tags',
        'transitRouterId'            => 'TransitRouterId',
        'transitRouterName'          => 'TransitRouterName',
        'tunnelOptionsSpecification' => 'TunnelOptionsSpecification',
        'vcoHealthCheck'             => 'VcoHealthCheck',
        'vpnBgpConfig'               => 'VpnBgpConfig',
        'vpnConnectionId'            => 'VpnConnectionId',
        'vpnGatewayId'               => 'VpnGatewayId',
        'zoneNo'                     => 'ZoneNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachInstanceId) {
            $res['AttachInstanceId'] = $this->attachInstanceId;
        }
        if (null !== $this->attachType) {
            $res['AttachType'] = $this->attachType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->crossAccountAuthorized) {
            $res['CrossAccountAuthorized'] = $this->crossAccountAuthorized;
        }
        if (null !== $this->customerGatewayId) {
            $res['CustomerGatewayId'] = $this->customerGatewayId;
        }
        if (null !== $this->effectImmediately) {
            $res['EffectImmediately'] = $this->effectImmediately;
        }
        if (null !== $this->enableDpd) {
            $res['EnableDpd'] = $this->enableDpd;
        }
        if (null !== $this->enableNatTraversal) {
            $res['EnableNatTraversal'] = $this->enableNatTraversal;
        }
        if (null !== $this->enableTunnelsBgp) {
            $res['EnableTunnelsBgp'] = $this->enableTunnelsBgp;
        }
        if (null !== $this->ikeConfig) {
            $res['IkeConfig'] = null !== $this->ikeConfig ? $this->ikeConfig->toMap() : null;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->ipsecConfig) {
            $res['IpsecConfig'] = null !== $this->ipsecConfig ? $this->ipsecConfig->toMap() : null;
        }
        if (null !== $this->localSubnet) {
            $res['LocalSubnet'] = $this->localSubnet;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->remoteCaCertificate) {
            $res['RemoteCaCertificate'] = $this->remoteCaCertificate;
        }
        if (null !== $this->remoteSubnet) {
            $res['RemoteSubnet'] = $this->remoteSubnet;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }
        if (null !== $this->transitRouterName) {
            $res['TransitRouterName'] = $this->transitRouterName;
        }
        if (null !== $this->tunnelOptionsSpecification) {
            $res['TunnelOptionsSpecification'] = null !== $this->tunnelOptionsSpecification ? $this->tunnelOptionsSpecification->toMap() : null;
        }
        if (null !== $this->vcoHealthCheck) {
            $res['VcoHealthCheck'] = null !== $this->vcoHealthCheck ? $this->vcoHealthCheck->toMap() : null;
        }
        if (null !== $this->vpnBgpConfig) {
            $res['VpnBgpConfig'] = null !== $this->vpnBgpConfig ? $this->vpnBgpConfig->toMap() : null;
        }
        if (null !== $this->vpnConnectionId) {
            $res['VpnConnectionId'] = $this->vpnConnectionId;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }
        if (null !== $this->zoneNo) {
            $res['ZoneNo'] = $this->zoneNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpnConnectionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachInstanceId'])) {
            $model->attachInstanceId = $map['AttachInstanceId'];
        }
        if (isset($map['AttachType'])) {
            $model->attachType = $map['AttachType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CrossAccountAuthorized'])) {
            $model->crossAccountAuthorized = $map['CrossAccountAuthorized'];
        }
        if (isset($map['CustomerGatewayId'])) {
            $model->customerGatewayId = $map['CustomerGatewayId'];
        }
        if (isset($map['EffectImmediately'])) {
            $model->effectImmediately = $map['EffectImmediately'];
        }
        if (isset($map['EnableDpd'])) {
            $model->enableDpd = $map['EnableDpd'];
        }
        if (isset($map['EnableNatTraversal'])) {
            $model->enableNatTraversal = $map['EnableNatTraversal'];
        }
        if (isset($map['EnableTunnelsBgp'])) {
            $model->enableTunnelsBgp = $map['EnableTunnelsBgp'];
        }
        if (isset($map['IkeConfig'])) {
            $model->ikeConfig = ikeConfig::fromMap($map['IkeConfig']);
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IpsecConfig'])) {
            $model->ipsecConfig = ipsecConfig::fromMap($map['IpsecConfig']);
        }
        if (isset($map['LocalSubnet'])) {
            $model->localSubnet = $map['LocalSubnet'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['RemoteCaCertificate'])) {
            $model->remoteCaCertificate = $map['RemoteCaCertificate'];
        }
        if (isset($map['RemoteSubnet'])) {
            $model->remoteSubnet = $map['RemoteSubnet'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }
        if (isset($map['TransitRouterName'])) {
            $model->transitRouterName = $map['TransitRouterName'];
        }
        if (isset($map['TunnelOptionsSpecification'])) {
            $model->tunnelOptionsSpecification = tunnelOptionsSpecification::fromMap($map['TunnelOptionsSpecification']);
        }
        if (isset($map['VcoHealthCheck'])) {
            $model->vcoHealthCheck = vcoHealthCheck::fromMap($map['VcoHealthCheck']);
        }
        if (isset($map['VpnBgpConfig'])) {
            $model->vpnBgpConfig = vpnBgpConfig::fromMap($map['VpnBgpConfig']);
        }
        if (isset($map['VpnConnectionId'])) {
            $model->vpnConnectionId = $map['VpnConnectionId'];
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }
        if (isset($map['ZoneNo'])) {
            $model->zoneNo = $map['ZoneNo'];
        }

        return $model;
    }
}
