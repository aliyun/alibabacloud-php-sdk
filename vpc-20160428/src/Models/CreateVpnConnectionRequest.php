<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnConnectionRequest\tags;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnConnectionRequest\tunnelOptionsSpecification;
use AlibabaCloud\Tea\Model;

class CreateVpnConnectionRequest extends Model
{
    /**
     * @description Specifies whether to automatically configure routes. Valid values:
     *
     *   **true** (default)
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $autoConfigRoute;

    /**
     * @description This parameter is supported when you create an IPsec-VPN connection in single-tunnel mode.
     *
     * BGP configuration:
     *
     *   **BgpConfig.EnableBgp**: specifies whether to enable BGP. Valid values: **true** and **false** (default).
     *
     *   **BgpConfig.LocalAsn:** the autonomous system number (ASN) on the Alibaba Cloud side. Valid values: **1** to **4294967295**. Default value: **45104**.
     *
     * For example, if you enter 123.456, the ASN is 8061384. The ASN is calculated by using the following formula: 123 × 65536 + 456 = 8061384.
     *
     *   **BgpConfig.TunnelCidr**: The CIDR block of the IPsec tunnel. The CIDR block must belong to 169.254.0.0/16 and the subnet mask is 30 bits in length.
     *
     * >The CIDR block of the IPsec tunnel for each IPsec-VPN connection on a VPN gateway must be unique.
     *
     *   **LocalBgpIp**: the BGP address on the Alibaba Cloud side. It must be an IP address that falls within the CIDR block of the IPsec tunnel.
     *
     * > *   Before you add BGP configurations, we recommend that you learn about how BGP works and the limits. For more information, see [VPN Gateway supports BGP dynamic routing](https://help.aliyun.com/document_detail/170235.html).
     * > *   We recommend that you use private ASN to establish BGP connections to Alibaba Cloud. Refer to the relevant documentation for the private ASN range.
     * @example {"EnableBgp":"true","LocalAsn":"45104","TunnelCidr":"169.254.11.0/30","LocalBgpIp":"169.254.11.1"}
     *
     * @var string
     */
    public $bgpConfig;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * > If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 02fb3da4-130e-11e9-8e44-001****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description When you create an IPsec-VPN connection in single-tunnel mode, this parameter is required.
     *
     * The ID of the customer gateway.
     * @example cgw-p0w2jemrcj5u61un8****
     *
     * @var string
     */
    public $customerGatewayId;

    /**
     * @description Specifies whether to immediately start IPsec negotiations. Valid values:
     *
     *   **true**: immediately starts IPsec negotiations.
     *   **false** (default): starts IPsec negotiations when inbound traffic is detected.
     *
     * @example false
     *
     * @var bool
     */
    public $effectImmediately;

    /**
     * @description This parameter is available if you create an IPsec-VPN connection in single-tunnel mode.
     *
     * Specifies whether to enable the dead peer detection (DPD) feature. Valid values:
     *
     *   **true** (default) The initiator of the IPsec-VPN connection sends DPD packets to verify the existence and availability of the peer. If no feedback is received from the peer within a specified period of time, the connection fails. ISAKMP SAs and IPsec SAs are deleted. The IPsec tunnel is also deleted.
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enableDpd;

    /**
     * @description This parameter is available if you create an IPsec-VPN connection in single-tunnel mode.
     *
     * Specifies whether to enable NAT traversal. Valid values:
     *
     *   **true** (default) After NAT traversal is enabled, the initiator does not check the UDP ports during IKE negotiations and can automatically discover NAT gateway devices along the VPN tunnel.
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enableNatTraversal;

    /**
     * @description This parameter is available if you create an IPsec-VPN connection in dual-tunnel mode.
     *
     * Specifies whether to enable the BGP feature for the tunnel. Valid values: **true** and **false**. Default value: false.
     * @example true
     *
     * @var bool
     */
    public $enableTunnelsBgp;

    /**
     * @description This parameter is available if you create an IPsec-VPN connection in single-tunnel mode.
     *
     * The health check configuration:
     *
     *   **HealthCheckConfig.enable**: specifies whether to enable health checks. Valid values: **true** and **false**. Default value: false.
     *   **HealthCheckConfig.dip**: the destination IP address configured for health checks.
     *   **HealthCheckConfig.sip:** the source IP address that is used for health checks.
     *   **HealthCheckConfig.interval**: the time interval of health check retries. Unit: seconds. Default value: **3**.
     *   **HealthCheckConfig.retry**: the maximum number of health check retries. Default value: **3**.
     *
     * @example {"enable":"true","dip":"192.168.10.1","sip":"10.10.1.1","interval":"3","retry":"3"}
     *
     * @var string
     */
    public $healthCheckConfig;

    /**
     * @description This parameter is available if you create an IPsec-VPN connection in single-tunnel mode.
     *
     * The configurations of Phase 1 negotiations:
     *
     *   **IkeConfig.Psk**: The pre-shared key that is used for authentication between the VPN gateway and the on-premises database.
     *
     *   The key must be 1 to 100 characters in length and can contain digits, letters, and the following characters: ``~!\\`@#$%^&*()_-+={}[]|;:\\",.<>/?``
     *
     *   If you do not specify a pre-shared key, the system generates a random 16-character string as the pre-shared key. You can call the [DescribeVpnConnection](https://help.aliyun.com/document_detail/2526951.html) operation to query the pre-shared key that is generated by the system.
     *
     * >The pre-shared key of the IPsec-VPN connection must be the same as the authentication key of the on-premises database. Otherwise, the on-premises database and the VPN gateway cannot establish a connection.
     *
     *   **IkeConfig.IkeVersion**: the version of the Internet Key Exchange (IKE) protocol. Valid values: **ikev1** and **ikev2**. Default value: **ikev1**.
     *
     * Compared with IKEv1, IKEv2 simplifies the security association (SA) negotiation process and is more suitable for scenarios in which multiple CIDR blocks are used.
     *
     *   **IkeConfig.IkeMode**: the negotiation mode of IKE. Valid values: **main** and **aggressive**. Default value: **main**.
     *
     *   **main:** This mode offers higher security during negotiations.
     *   **aggressive:** This mode is faster and has a higher success rate.
     *
     *   **IkeConfig.IkeEncAlg**: the encryption algorithm that is used in Phase 1 negotiations.
     *
     * Valid values: **aes**, **aes192**, **aes256**, **des**, and **3des**. Default value: **aes**.
     *
     *   **IkeConfig.IkeAuthAlg**: the authentication algorithm that is used in Phase 1 negotiations.
     *
     * Valid values: **md5**, **sha1**, **sha256**, **sha384**, and **sha512**. Default value: **md5**.
     *
     *   **IkeConfig.IkePfs**: the Diffie-Hellman (DH) key exchange algorithm that is used in Phase 1 negotiations. Valid values: **group1**, **group2**, **group5**, and **group14**. Default value: **group2**.
     *
     *   **IkeConfig.IkeLifetime**: the SA lifetime determined by Phase 1 negotiations. Unit: seconds. Valid values: **0** to **86400**. Default value: **86400**.
     *
     *   **IkeConfig.LocalId**: the identifier of the VPN gateway. The value can be up to 100 characters in length. The default value is the IP address of the VPN gateway.
     *
     *   **IkeConfig.RemoteId**: the identifier of the customer gateway. The value can be up to 100 characters in length. The default value is the IP address of the customer gateway.
     *
     * @example {"Psk":"1234****","IkeVersion":"ikev1","IkeMode":"main","IkeEncAlg":"aes","IkeAuthAlg":"sha1","IkePfs":"group2","IkeLifetime":86400,"LocalId":"47.XX.XX.1","RemoteId":"47.XX.XX.2"}
     *
     * @var string
     */
    public $ikeConfig;

    /**
     * @description This parameter is available if you create an IPsec-VPN connection in single-tunnel mode.
     *
     * The configurations of Phase 2 negotiations:
     *
     *   **IpsecConfig.IpsecEncAlg**: the encryption algorithm that is used in Phase 2 negotiations.
     *
     * Valid values: **aes**, **aes192**, **aes256**, **des**, and **3des**. Default value: **aes**.
     *
     *   **IpsecConfig. IpsecAuthAlg**: the authentication algorithm that is used in Phase 2 negotiations.
     *
     * Valid values: **md5**, **sha1**, **sha256**, **sha384**, and **sha512**. Default value: **md5**.
     *
     *   **IpsecConfig. IpsecPfs**: the DH key exchange algorithm that is used in Phase 2 negotiations. Valid values: **disabled**, **group1**, **group2**, **group5**, and **group14**. Default value: **group2**.
     *
     *   **IpsecConfig. IpsecLifetime**: the SA lifetime that is determined by Phase 2 negotiations. Unit: seconds. Valid values: **0** to **86400**. Default value: **86400**.
     *
     * @example {"IpsecEncAlg":"aes","IpsecAuthAlg":"sha1","IpsecPfs":"group2","IpsecLifetime":86400}
     *
     * @var string
     */
    public $ipsecConfig;

    /**
     * @description The CIDR block of the virtual private cloud (VPC) that needs to communicate with the on-premises database. The CIDR block is used in Phase 2 negotiations.
     *
     * The following routing modes are supported:
     *
     *   If you set **LocalSubnet** and **RemoteSubnet** to 0.0.0.0/0, the routing mode of the IPsec-VPN connection is set to Destination Routing Mode.
     *   If you set **LocalSubnet** and **RemoteSubnet** to specific CIDR blocks, the routing mode of the IPsec-VPN connection is set to Protected Data Flows.
     *
     * This parameter is required.
     * @example 10.10.1.0/24,10.10.2.0/24
     *
     * @var string
     */
    public $localSubnet;

    /**
     * @description The name of the IPsec-VPN connection.
     *
     * The name must be 1 to 100 characters in length and cannot start with `http://` or `https://`.
     * @example IPsec
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region where the IPsec-VPN connection is created. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is available if you create an IPsec-VPN connection in single-tunnel mode.
     *
     * The certificate authority (CA) certificate. If the VPN gateway is of the ShangMi (SM) type, you need to configure a CA certificate for the peer gateway device.
     *
     *   If an SM VPN gateway is used to create the IPsec-VPN connection, this parameter is required.
     *   If a standard VPN gateway is used to create the IPsec-VPN connection, leave this parameter empty.
     *
     * @example -----BEGIN CERTIFICATE----- MIIB7zCCAZW**** -----END CERTIFICATE-----
     *
     * @var string
     */
    public $remoteCaCertificate;

    /**
     * @description The CIDR block of the on-premises database that needs to communicate with the VPC. The CIDR block is used in Phase 2 negotiations.
     *
     * The following routing modes are supported:
     *
     *   If you set **LocalSubnet** and **RemoteSubnet** to 0.0.0.0/0, the routing mode of the IPsec-VPN connection is set to Destination Routing Mode.
     *   If you set **LocalSubnet** and **RemoteSubnet** to specific CIDR blocks, the routing mode of the IPsec-VPN connection is set to Protected Data Flows.
     *
     * This parameter is required.
     * @example 10.10.3.0/24,10.10.4.0/24
     *
     * @var string
     */
    public $remoteSubnet;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The tag value.
     *
     * Each tag key corresponds to one tag value. You can specify up to 20 tag values in each call.
     * @var tags[]
     */
    public $tags;

    /**
     * @description The tunnel configurations.
     *
     *   You can specify the parameters in the **TunnelOptionsSpecification** array if you create an IPsec-VPN connection in dual-tunnel mode.
     *   If you create an IPsec-VPN connection in dual-tunnel mode, you need to configure an active tunnel and a standby tunnel. Each IPsec-VPN connection supports only one active tunnel and one standby tunnel.
     *
     * @var tunnelOptionsSpecification[]
     */
    public $tunnelOptionsSpecification;

    /**
     * @description The ID of the VPN gateway.
     *
     * This parameter is required.
     * @example vpn-bp1q8bgx4xnkm****
     *
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'autoConfigRoute'            => 'AutoConfigRoute',
        'bgpConfig'                  => 'BgpConfig',
        'clientToken'                => 'ClientToken',
        'customerGatewayId'          => 'CustomerGatewayId',
        'effectImmediately'          => 'EffectImmediately',
        'enableDpd'                  => 'EnableDpd',
        'enableNatTraversal'         => 'EnableNatTraversal',
        'enableTunnelsBgp'           => 'EnableTunnelsBgp',
        'healthCheckConfig'          => 'HealthCheckConfig',
        'ikeConfig'                  => 'IkeConfig',
        'ipsecConfig'                => 'IpsecConfig',
        'localSubnet'                => 'LocalSubnet',
        'name'                       => 'Name',
        'ownerAccount'               => 'OwnerAccount',
        'ownerId'                    => 'OwnerId',
        'regionId'                   => 'RegionId',
        'remoteCaCertificate'        => 'RemoteCaCertificate',
        'remoteSubnet'               => 'RemoteSubnet',
        'resourceOwnerAccount'       => 'ResourceOwnerAccount',
        'resourceOwnerId'            => 'ResourceOwnerId',
        'tags'                       => 'Tags',
        'tunnelOptionsSpecification' => 'TunnelOptionsSpecification',
        'vpnGatewayId'               => 'VpnGatewayId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoConfigRoute) {
            $res['AutoConfigRoute'] = $this->autoConfigRoute;
        }
        if (null !== $this->bgpConfig) {
            $res['BgpConfig'] = $this->bgpConfig;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (null !== $this->healthCheckConfig) {
            $res['HealthCheckConfig'] = $this->healthCheckConfig;
        }
        if (null !== $this->ikeConfig) {
            $res['IkeConfig'] = $this->ikeConfig;
        }
        if (null !== $this->ipsecConfig) {
            $res['IpsecConfig'] = $this->ipsecConfig;
        }
        if (null !== $this->localSubnet) {
            $res['LocalSubnet'] = $this->localSubnet;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->remoteCaCertificate) {
            $res['RemoteCaCertificate'] = $this->remoteCaCertificate;
        }
        if (null !== $this->remoteSubnet) {
            $res['RemoteSubnet'] = $this->remoteSubnet;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpnConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoConfigRoute'])) {
            $model->autoConfigRoute = $map['AutoConfigRoute'];
        }
        if (isset($map['BgpConfig'])) {
            $model->bgpConfig = $map['BgpConfig'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
        if (isset($map['HealthCheckConfig'])) {
            $model->healthCheckConfig = $map['HealthCheckConfig'];
        }
        if (isset($map['IkeConfig'])) {
            $model->ikeConfig = $map['IkeConfig'];
        }
        if (isset($map['IpsecConfig'])) {
            $model->ipsecConfig = $map['IpsecConfig'];
        }
        if (isset($map['LocalSubnet'])) {
            $model->localSubnet = $map['LocalSubnet'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RemoteCaCertificate'])) {
            $model->remoteCaCertificate = $map['RemoteCaCertificate'];
        }
        if (isset($map['RemoteSubnet'])) {
            $model->remoteSubnet = $map['RemoteSubnet'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TunnelOptionsSpecification'])) {
            if (!empty($map['TunnelOptionsSpecification'])) {
                $model->tunnelOptionsSpecification = [];
                $n                                 = 0;
                foreach ($map['TunnelOptionsSpecification'] as $item) {
                    $model->tunnelOptionsSpecification[$n++] = null !== $item ? tunnelOptionsSpecification::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }

        return $model;
    }
}
