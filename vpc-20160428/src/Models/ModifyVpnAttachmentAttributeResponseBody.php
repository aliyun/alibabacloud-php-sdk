<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody\ikeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody\ipsecConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody\tunnelOptionsSpecification;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody\vcoHealthCheck;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody\vpnBgpConfig;
use AlibabaCloud\Tea\Model;

class ModifyVpnAttachmentAttributeResponseBody extends Model
{
    /**
     * @description The ID of the Cloud Enterprise Network (CEN) instance to which the transit router associated with the IPsec-VPN connection belongs.
     *
     * @example cen-c2r3m3zxkumoqz****
     *
     * @var string
     */
    public $attachInstanceId;

    /**
     * @description The type of the resource that is associated with the IPsec-VPN connection. Valid values:
     *
     *   **CEN**: The IPsec-VPN connection is associated with a transit router.
     *   **VPNGW**: The IPsec-VPN connection is associated with a VPN gateway.
     *   **NO_ASSOCIATED**: The IPsec-VPN connection is not associated with any resource.
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
     *
     * @example 1658201810000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the customer gateway associated with the IPsec-VPN connection.
     *
     * This parameter is returned only for single-tunnel IPsec-VPN connections.
     *
     * @example cgw-p0w2jemrcj5u61un8****
     *
     * @var string
     */
    public $customerGatewayId;

    /**
     * @description The description of the IPsec-VPN connection.
     *
     * @example desctest
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether IPsec negotiations immediately start after the configuration takes effect. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $effectImmediately;

    /**
     * @description Indicates whether the DPD feature is enabled for the IPsec-VPN connection.
     *
     *   **true**: The feature is enabled.
     *   **false**: The feature is disabled.
     *
     * This parameter is returned only for single-tunnel IPsec-VPN connections.
     *
     * @example true
     *
     * @var bool
     */
    public $enableDpd;

    /**
     * @description Specifies whether to enable NAT traversal for the IPsec-VPN connection.
     *
     *   **true**: The feature is enabled.
     *   **false**: The feature is disabled.
     *
     * This parameter is returned only for single-tunnel IPsec-VPN connections.
     *
     * @example true
     *
     * @var bool
     */
    public $enableNatTraversal;

    /**
     * @description Specifies whether to enable Border Gateway Protocol (BGP) for tunnels.
     *
     *   **true**: The feature is enabled.
     *   **false**: The feature is disabled.
     *
     * This parameter is returned only by dual-tunnel IPsec-VPN connections.
     *
     * @example false
     *
     * @var bool
     */
    public $enableTunnelsBgp;

    /**
     * @description The configuration of Phase 1 negotiations.
     *
     **IkeConfig** parameters are returned only for single-tunnel IPsec-VPN connections.
     *
     * @var ikeConfig
     */
    public $ikeConfig;

    /**
     * @description The configuration of Phase 2 negotiations.
     *
     **IpsecConfig** parameters are returned only for single-tunnel IPsec-VPN connections.
     *
     * @var ipsecConfig
     */
    public $ipsecConfig;

    /**
     * @description The CIDR block on the Alibaba Cloud side that communicates with the on-premises data center is required, such as CIDR blocks of VPCs.
     *
     * @example 10.1.1.0/24,10.1.2.0/24
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
     *   **public**: an encrypted connection over the Internet
     *   **private**: an encrypted connection over private networks
     *
     * @example public
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The CIDR block of the on-premises data center that communicates with Alibaba Cloud is required.
     *
     * @example 10.1.3.0/24,10.1.4.0/24
     *
     * @var string
     */
    public $remoteSubnet;

    /**
     * @description The request ID.
     *
     * @example 35822A84-867F-3936-A2E6-A4C4E3ED11C0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group to which the IPsec-VPN connection belongs.
     *
     * You can call the [ListResourceGroups](https://help.aliyun.com/document_detail/158855.html) operation to query resource groups.
     *
     * @example rg-acfmzs372yg****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The bandwidth specification of the IPsec-VPN connection.
     *
     * A value of **M** in the response indicates **Mbit/s**.
     *
     * @example 1000M
     *
     * @var string
     */
    public $spec;

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
     * @description The tunnel configurations of the IPsec-VPN connection.
     *
     **TunnelOptionsSpecification** parameters are returned only for dual-tunnel IPsec-VPN connections.
     *
     * @var tunnelOptionsSpecification[]
     */
    public $tunnelOptionsSpecification;

    /**
     * @description The health check configurations of the IPsec-VPN connection.
     *
     **VcoHealthCheck** parameters are returned only for single-tunnel IPsec-VPC connections.
     *
     * @var vcoHealthCheck
     */
    public $vcoHealthCheck;

    /**
     * @description The BGP configurations of the IPsec-VPN connection.
     *
     **VpnBgpConfig** parameters are returned only for single-tunnel IPsec-VPN connections.
     *
     * @var vpnBgpConfig
     */
    public $vpnBgpConfig;

    /**
     * @description The ID of the IPsec-VPN connection.
     *
     * @example vco-p0w5112fgnl2ihlmf****
     *
     * @var string
     */
    public $vpnConnectionId;

    /**
     * @description The ID of the VPN gateway that is associated with the IPsec-VPN connection.
     *
     **vpn-not-exist**: The IPsec-VPN connection is not associated with a VPN Gateway.
     *
     * @example vpn-p0wa1c1018pmeb6cu****
     *
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'attachInstanceId' => 'AttachInstanceId',
        'attachType' => 'AttachType',
        'createTime' => 'CreateTime',
        'customerGatewayId' => 'CustomerGatewayId',
        'description' => 'Description',
        'effectImmediately' => 'EffectImmediately',
        'enableDpd' => 'EnableDpd',
        'enableNatTraversal' => 'EnableNatTraversal',
        'enableTunnelsBgp' => 'EnableTunnelsBgp',
        'ikeConfig' => 'IkeConfig',
        'ipsecConfig' => 'IpsecConfig',
        'localSubnet' => 'LocalSubnet',
        'name' => 'Name',
        'networkType' => 'NetworkType',
        'remoteSubnet' => 'RemoteSubnet',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'spec' => 'Spec',
        'status' => 'Status',
        'tunnelOptionsSpecification' => 'TunnelOptionsSpecification',
        'vcoHealthCheck' => 'VcoHealthCheck',
        'vpnBgpConfig' => 'VpnBgpConfig',
        'vpnConnectionId' => 'VpnConnectionId',
        'vpnGatewayId' => 'VpnGatewayId',
    ];

    public function validate() {}

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
        if (null !== $this->customerGatewayId) {
            $res['CustomerGatewayId'] = $this->customerGatewayId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tunnelOptionsSpecification) {
            $res['TunnelOptionsSpecification'] = [];
            if (null !== $this->tunnelOptionsSpecification && \is_array($this->tunnelOptionsSpecification)) {
                $n = 0;
                foreach ($this->tunnelOptionsSpecification as $item) {
                    $res['TunnelOptionsSpecification'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ModifyVpnAttachmentAttributeResponseBody
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
        if (isset($map['CustomerGatewayId'])) {
            $model->customerGatewayId = $map['CustomerGatewayId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TunnelOptionsSpecification'])) {
            if (!empty($map['TunnelOptionsSpecification'])) {
                $model->tunnelOptionsSpecification = [];
                $n = 0;
                foreach ($map['TunnelOptionsSpecification'] as $item) {
                    $model->tunnelOptionsSpecification[$n++] = null !== $item ? tunnelOptionsSpecification::fromMap($item) : $item;
                }
            }
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
