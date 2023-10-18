<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnConnectionAttributeRequest\tunnelOptionsSpecification;
use AlibabaCloud\Tea\Model;

class ModifyVpnConnectionAttributeRequest extends Model
{
    /**
     * @description Specifies whether to automatically advertise routes. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $autoConfigRoute;

    /**
     * @description You can specify this parameter if you modify the configuration of a single-tunnel IPsec-VPN connection.
     *
     * The Border Gateway Protocol (BGP) configuration:
     *
     *   **BgpConfig.EnableBgp:** specifies whether to enable BGP. Valid values: **true** and **false**.
     *
     *   **BgpConfig.LocalAsn**: the autonomous system number (ASN) on the Alibaba Cloud side. Valid values: **1** to **4294967295**.
     *
     *   **BgpConfig.TunnelCidr:** the CIDR block of the IPsec tunnel. The CIDR block falls within 169.254.0.0/16. The subnet mask of the CIDR block must be 30 bits in length.
     *
     * >The CIDR block of the IPsec tunnel of each IPsec-VPN connection must be unique on a VPN gateway.
     *
     *   **LocalBgpIp**: the BGP IP address on the Alibaba Cloud side. This IP address must fall within the CIDR block of the IPsec tunnel.
     *
     * > *   This parameter is required when the VPN gateway has dynamic BGP enabled.
     * >*   Before you configure BGP, we recommend that you learn how BGP dynamic routing works and the limits of using BGP dynamic routing. For more information, see [VPN Gateway supports BGP dynamic routing](~~170235~~).
     * >*   We recommend that you use a private ASN to establish a connection with Alibaba Cloud over BGP. Refer to the relevant documentation for the private ASN range.
     * @example {"EnableBgp":"true","LocalAsn":"65530","TunnelCidr":"169.254.11.0/30","LocalBgpIp":"169.254.11.1"}
     *
     * @var string
     */
    public $bgpConfig;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the value of **RequestId** as the value of **ClientToken**. The **request ID** may be different for each request.
     * @example 02fb3da4-130e-11e9-8e44-0016e04115b
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to immediately start IPsec negotiations after the configuration takes effect. Valid values:
     *
     *   **true**: immediately starts IPsec negotiations after the configuration takes effect.
     *   **false**: IPsec negotiations start when inbound traffic is detected.
     *
     * @example false
     *
     * @var bool
     */
    public $effectImmediately;

    /**
     * @description You can specify this parameter if you modify the configuration of a single-tunnel IPsec-VPN connection.
     *
     * Specifies whether to enable the dead peer detection (DPD) feature. Valid values:
     *
     *   **true:**: enables the DPD feature. The initiator of the IPsec-VPN connection sends DPD packets to check the existence and availability of the peer. If no feedback is received from the peer within a specific period of time, the connection fails. Then, the ISAKMP SA, IPsec SA, and IPsec tunnel are deleted.
     *   **false**: disables the DPD feature. The initiator of the IPsec-VPN connection does not send DPD packets.
     *
     * @example true
     *
     * @var bool
     */
    public $enableDpd;

    /**
     * @description You can specify this parameter if you modify the configuration of a single-tunnel IPsec-VPN connection.
     *
     * Specifies whether to enable NAT traversal. Valid values:
     *
     *   **true** After NAT traversal is enabled, the initiator does not check the UDP ports during IKE negotiations and can automatically discover NAT gateway devices along the IPsec tunnel.
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enableNatTraversal;

    /**
     * @description You can specify this parameter if you modify the configuration of a dual-tunnel IPsec-VPN connection.
     *
     * Specifies whether to enable BGP for the tunnel. Valid values: **true** and **false**.
     * @example true
     *
     * @var bool
     */
    public $enableTunnelsBgp;

    /**
     * @description You can specify this parameter if you modify the configuration of a single-tunnel IPsec-VPN connection.
     *
     * The health check configuration:
     *
     *   **HealthCheckConfig.enable**: specifies whether to enable health checks. Valid values: **true** and **false**.
     *   **HealthCheckConfig.dip**: the destination IP address that is used for health checks.
     *   **HealthCheckConfig.sip**: the source IP address that is used for health checks.
     *   **HealthCheckConfig.interval**: the interval between two consecutive health checks. Unit: seconds.
     *   **HealthCheckConfig.retry**: the maximum number of health check retries.
     *
     * @example {"enable":"true","dip":"192.168.1.1","sip":"10.1.1.1","interval":"3","retry":"3"}
     *
     * @var string
     */
    public $healthCheckConfig;

    /**
     * @description You can specify this parameter if you modify the configuration of a single-tunnel IPsec-VPN connection.
     *
     * The configuration of Phase 1 negotiations:
     *
     *   **IkeConfig.Psk**: The pre-shared key that is used for authentication between the VPN gateway and the data center.
     *
     *   The pre-shared key must be 1 to 100 characters in length and can contain letters, digits, and the following characters: ``~!`@#$%^&*()_-+={}[]|;:\",.<>/?``
     *   If you do not specify a pre-shared key, the system generates a random 16-character string as the pre-shared key. You can call the [DescribeVpnConnection](~~120374~~) operation to query the pre-shared key that is generated by the system.
     *
     * >The pre-shared key of the IPsec-VPN connection must be the same as the authentication key of the data center. Otherwise, you cannot establish a connection between the data center and the VPN gateway.
     *
     *   **IkeConfig.IkeVersion**: the version of the IKE protocol. Valid values: **ikev1** and **ikev2**.
     *
     * Compared with IKEv1, IKEv2 simplifies the security association (SA) negotiation process and is more suitable for scenarios in which multiple CIDR blocks are used.
     *
     *   **IkeConfig.IkeMode**: the negotiation mode of IKE. Valid values: **main** and **aggressive**.
     *
     *   **main**: This mode offers higher security during negotiations.
     *   **aggressive**: This mode is faster and has a higher success rate.
     *
     *   **IkeConfig.IkeEncAlg**: the encryption algorithm that is used in Phase 1 negotiations.
     *
     * Valid values: **aes**, **aes192**, **aes256**, **des**, and **3des**.
     *
     *   **IkeConfig.IkeAuthAlg**: the authentication algorithm that is used in Phase 1 negotiations.
     *
     * Valid values: **md5**, **sha1**, **sha256**, **sha384**, and **sha512**.
     *
     *   **IkeConfig.IkePfs**: The Diffie-Hellman (DH) key exchange algorithm that is used in Phase 1 negotiations. Valid values: **group1**, **group2**, **group5**, and **group14**.
     *
     *   **IkeConfig.IkeLifetime**: the SA lifetime that is determined by Phase 1 negotiations. Unit: seconds. Valid values: **0 to 86400**.
     *
     *   **IkeConfig.LocalId**: the identifier of the VPN gateway. The identifier can be up to 100 characters in length. The default value is the IP address of the VPN gateway.
     *
     *   **IkeConfig.RemoteId**: the identifier of the customer gateway. The identifier can be up to 100 characters in length. The default value is the IP address of the customer gateway.
     *
     * @example {"Psk":"pgw6dy7d1i8i****","IkeVersion":"ikev1","IkeMode":"main","IkeEncAlg":"aes","IkeAuthAlg":"sha1","IkePfs":"group2","IkeLifetime":86400,"LocalId":"116.64.XX.XX","RemoteId":"139.18.XX.XX"}
     *
     * @var string
     */
    public $ikeConfig;

    /**
     * @description You can specify this parameter if you modify the configuration of a single-tunnel IPsec-VPN connection.
     *
     * The configuration of Phase 2 negotiations:
     *
     *   **IpsecConfig.IpsecEncAlg**: the encryption algorithm that is used in Phase 2 negotiations.
     *
     * Valid values: **aes**, **aes192**, **aes256**, **des**, and **3des**.
     *
     *   **IpsecConfig. IpsecAuthAlg**: the authentication algorithm that is used in Phase 2 negotiations.
     *
     * Valid values: **md5**, **sha1**, **sha256**, **sha384**, and **sha512**.
     *
     *   **IpsecConfig. IpsecPfs**: the DH key exchange algorithm that is used in Phase 1 negotiations. If you specify this parameter, packets of all protocols are forwarded. Valid values: **disabled**, **group1**, **group2**, **group5**, and **group14**.
     *
     *   **IpsecConfig. IpsecLifetime:** the SA lifetime that is determined by Phase 2 negotiations. Unit: seconds. Valid values: **0 to 86400**.
     *
     * @example {"IpsecEncAlg":"aes","IpsecAuthAlg":"sha1","IpsecPfs":"group2","IpsecLifetime":86400}
     *
     * @var string
     */
    public $ipsecConfig;

    /**
     * @description The CIDR block used to connect the virtual private cloud (VPC) to the data center. The CIDR block is used in Phase 2 negotiations.
     *
     * The following routing modes are supported:
     *
     *   If you set **LocalSubnet** and **RemoteSubnet** to 0.0.0.0/0, the routing mode of the IPsec-VPN connection is set to Destination Routing Mode.
     *   If you set **LocalSubnet** and **RemoteSubnet** to specific CIDR blocks, the routing mode of the IPsec-VPN connection is set to Protected Data Flows.
     *
     * @example 10.1.1.0/24,10.1.2.0/24
     *
     * @var string
     */
    public $localSubnet;

    /**
     * @description The name of the IPsec-VPN connection.
     *
     * The name must be 1 to 100 characters in length and cannot start with `http://` or `https://`.
     * @example nametest
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
     * @description The ID of the region in which the IPsec-VPN connection is created.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description You can specify this parameter if you modify the configuration of a single-tunnel IPsec-VPN connection.
     *
     * If the VPN gateway does not use an SM certificate, you cannot specify this parameter.
     * @example -----BEGIN CERTIFICATE----- MIIB7zCCAZW**** -----END CERTIFICATE-----
     *
     * @var string
     */
    public $remoteCaCertificate;

    /**
     * @description The CIDR block on the data center side. This CIDR block is used in Phase 2 negotiations.
     *
     * The following routing modes are supported:
     *
     *   If you set **LocalSubnet** and **RemoteSubnet** to 0.0.0.0/0, the routing mode of the IPsec-VPN connection is set to Destination Routing Mode.
     *   If you set **LocalSubnet** and **RemoteSubnet** to specific CIDR blocks, the routing mode of the IPsec-VPN connection is set to Protected Data Flows.
     *
     * @example 10.2.1.0/24,10.2.2.0/24
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
     * @description The IPsec tunnel configuration to be modified.
     *
     * You can specify **TunnelOptionsSpecification** parameters if you modify the configuration of a dual-tunnel IPsec-VPN connection. You can modify both the active and standby tunnels of the IPsec-VPN connection.
     * @var tunnelOptionsSpecification[]
     */
    public $tunnelOptionsSpecification;

    /**
     * @description The ID of the IPsec-VPN connection.
     *
     * @example vco-bp1bbi27hojx80nck****
     *
     * @var string
     */
    public $vpnConnectionId;
    protected $_name = [
        'autoConfigRoute'            => 'AutoConfigRoute',
        'bgpConfig'                  => 'BgpConfig',
        'clientToken'                => 'ClientToken',
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
        'tunnelOptionsSpecification' => 'TunnelOptionsSpecification',
        'vpnConnectionId'            => 'VpnConnectionId',
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
        if (null !== $this->tunnelOptionsSpecification) {
            $res['TunnelOptionsSpecification'] = [];
            if (null !== $this->tunnelOptionsSpecification && \is_array($this->tunnelOptionsSpecification)) {
                $n = 0;
                foreach ($this->tunnelOptionsSpecification as $item) {
                    $res['TunnelOptionsSpecification'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpnConnectionId) {
            $res['VpnConnectionId'] = $this->vpnConnectionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVpnConnectionAttributeRequest
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
        if (isset($map['TunnelOptionsSpecification'])) {
            if (!empty($map['TunnelOptionsSpecification'])) {
                $model->tunnelOptionsSpecification = [];
                $n                                 = 0;
                foreach ($map['TunnelOptionsSpecification'] as $item) {
                    $model->tunnelOptionsSpecification[$n++] = null !== $item ? tunnelOptionsSpecification::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpnConnectionId'])) {
            $model->vpnConnectionId = $map['VpnConnectionId'];
        }

        return $model;
    }
}
