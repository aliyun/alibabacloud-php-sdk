<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponseBody\vpnConnections;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponseBody\vpnConnections\vpnConnection\ikeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponseBody\vpnConnections\vpnConnection\ipsecConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponseBody\vpnConnections\vpnConnection\tag;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponseBody\vpnConnections\vpnConnection\tunnelOptionsSpecification;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponseBody\vpnConnections\vpnConnection\vcoHealthCheck;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponseBody\vpnConnections\vpnConnection\vpnBgpConfig;
use AlibabaCloud\Tea\Model;

class vpnConnection extends Model
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
     * @description The type of resource that is associated with the IPsec-VPN connection. Valid values:
     *
     *   **CEN**: indicates that the IPsec-VPN connection is associated with a transit router of a Cloud Enterprise Network (CEN) instance.
     *   **NO_ASSOCIATED**: indicates that the IPsec-VPN connection is not associated with a resource.
     *   **VPNGW**: indicates that the IPsec-VPN connection is associated with a VPN gateway.
     *
     * @example CEN
     *
     * @var string
     */
    public $attachType;

    /**
     * @description The timestamp that indicates the time when the IPsec-VPN connection was established. Unit: milliseconds.
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
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var bool
     */
    public $crossAccountAuthorized;

    /**
     * @description The ID of the customer gateway.
     *
     * @example cgw-bp1mvj4g9kogw****
     *
     * @var string
     */
    public $customerGatewayId;

    /**
     * @description Indicates whether IPsec negotiations immediately start.
     *
     *   **true**: Negotiations are re-initiated after the configuration is changed.
     *   **false**: Negotiations are re-initiated when traffic is detected.
     *
     * @example true
     *
     * @var bool
     */
    public $effectImmediately;

    /**
     * @description Indicates whether dead peer detection (DPD) is enabled. Valid values:
     *
     *   **true**: enabled.
     *
     * The initiator of the IPsec-VPN connection sends DPD packets to verify the existence and availability of the peer. If no feedback is received from the peer within a specified period of time, the connection fails. ISAKMP SA and IPsec SA are deleted. The security tunnel is also deleted.
     *
     *   **false**: disabled. The IPsec initiator does not send DPD packets.
     *
     * @example true
     *
     * @var bool
     */
    public $enableDpd;

    /**
     * @description Indicates whether NAT traversal is enabled. Valid values:
     *
     *   **true**: enabled
     *
     * After NAT traversal is enabled, the initiator does not check the UDP ports during IKE negotiations and can automatically discover NAT gateway devices along the IPsec tunnel.
     *
     *   **false**: disabled
     *
     * @example true
     *
     * @var bool
     */
    public $enableNatTraversal;

    /**
     * @var bool
     */
    public $enableTunnelsBgp;

    /**
     * @description The configurations of phase 1 negotiations.
     *
     * @var ikeConfig
     */
    public $ikeConfig;

    /**
     * @description The gateway IP address of the IPsec-VPN connection.
     *
     * >  This parameter is returned only when the IPsec-VPN connection is associated with a transit router.
     * @example 10.XX.XX.10
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The configuration of phase 2 negotiations.
     *
     * @var ipsecConfig
     */
    public $ipsecConfig;

    /**
     * @description The CIDR block on the Alibaba Cloud side.
     *
     * CIDR blocks are separated by commas (,).
     * @example 192.168.0.0/16,172.17.0.0/16
     *
     * @var string
     */
    public $localSubnet;

    /**
     * @description The name of the IPsec-VPN connection.
     *
     * @example nametest
     *
     * @var string
     */
    public $name;

    /**
     * @description The network type of the IPsec-VPN connection. Valid values:
     *
     *   **public**: an encrypted connection over the Internet.
     *   **private**: an encrypted connection over private networks.
     *
     * @example public
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The CA certificate of the peer.
     *
     * @example -----BEGIN CERTIFICATE----- MIIB7zCCAZW**** -----END CERTIFICATE-----
     *
     * @var string
     */
    public $remoteCaCertificate;

    /**
     * @description The CIDR block on the data center side.
     *
     * CIDR blocks are separated by commas (,).
     * @example 10.0.0.0/8,172.16.0.0/16
     *
     * @var string
     */
    public $remoteSubnet;

    /**
     * @description The bandwidth specification of the IPsec-VPN connection. Unit: **Mbit/s**.
     *
     * @example 1000M
     *
     * @var string
     */
    public $spec;

    /**
     * @description The status of the IPsec-VPN connection. Valid values:
     *
     *   **active**: The IPsec-VPN connection is associated with a VPN gateway.
     *   **init**: The IPsec-VPN connection is not associated with a resource and is being initialized.
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
     * @description The status of the IPsec-VPN connection. Valid values:
     *
     *   **ike_sa_not_established**: Phase 1 negotiations failed.
     *   **ike_sa_established**: Phase 1 negotiations succeeded.
     *   **ipsec_sa_not_established**: Phase 2 negotiations failed.
     *   **ipsec_sa_established**: Phase 2 negotiations succeeded.
     *
     * @example ipsec_sa_established
     *
     * @var string
     */
    public $status;

    /**
     * @description The list of tags added to the IPsec-VPN connection.
     *
     * @var tag
     */
    public $tag;

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
     * @var tunnelOptionsSpecification
     */
    public $tunnelOptionsSpecification;

    /**
     * @description The health check configurations.
     *
     * @var vcoHealthCheck
     */
    public $vcoHealthCheck;

    /**
     * @description The configurations of the BGP routing protocol.
     *
     * @var vpnBgpConfig
     */
    public $vpnBgpConfig;

    /**
     * @description The ID of the IPsec-VPN connection.
     *
     * @example vco-bp10lz7aejumd****
     *
     * @var string
     */
    public $vpnConnectionId;

    /**
     * @description The ID of the VPN gateway.
     *
     * @example vpn-bp1q8bgx4xnkm****
     *
     * @var string
     */
    public $vpnGatewayId;
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
        'spec'                       => 'Spec',
        'state'                      => 'State',
        'status'                     => 'Status',
        'tag'                        => 'Tag',
        'transitRouterId'            => 'TransitRouterId',
        'transitRouterName'          => 'TransitRouterName',
        'tunnelOptionsSpecification' => 'TunnelOptionsSpecification',
        'vcoHealthCheck'             => 'VcoHealthCheck',
        'vpnBgpConfig'               => 'VpnBgpConfig',
        'vpnConnectionId'            => 'VpnConnectionId',
        'vpnGatewayId'               => 'VpnGatewayId',
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
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = null !== $this->tag ? $this->tag->toMap() : null;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpnConnection
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
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            $model->tag = tag::fromMap($map['Tag']);
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

        return $model;
    }
}
