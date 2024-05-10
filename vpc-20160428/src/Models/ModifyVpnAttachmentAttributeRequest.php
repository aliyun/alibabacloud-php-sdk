<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyVpnAttachmentAttributeRequest extends Model
{
    /**
     * @description Specifies whether to automatically configure routes. Valid values:
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
     * @description The Border Gateway Protocol (BGP) configuration:
     *
     *   **BgpConfig.EnableBgp**: specifies whether to enable BGP. Valid values:
     *
     *   **true**
     *   **false**
     *
     *   **BgpConfig.LocalAsn**: the autonomous system number (ASN) on the Alibaba Cloud side. Valid values: **1** to **4294967295**.
     *
     * For example, if you enter 123.456, the ASN is: 123 × 65536 + 456 = 8061384.
     *
     *   **BgpConfig.TunnelCidr:** the CIDR block of the IPsec tunnel. The CIDR block falls within 169.254.0.0/16. The subnet mask of the CIDR block must be 30 bits in length.
     *
     *   **LocalBgpIp:** the BGP IP address on the Alibaba Cloud side. This IP address must fall within the CIDR block of the IPsec tunnel.
     *
     * > - We recommend that you use a private ASN to establish a connection with Alibaba Cloud over BGP. Refer to the relevant documentation for the private ASN range.
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
     * >  If you do not specify this parameter, the system automatically uses the value of **RequestId** as the value of **ClientToken**. The **request ID** may be different for each request.
     * @example 123e4567-e89b-12d3-a456-4266****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The customer gateway associated with the IPsec-VPN connection.
     *
     * @example cgw-p0w2jemrcj5u61un8****
     *
     * @var string
     */
    public $customerGatewayId;

    /**
     * @description Specifies whether to immediately start IPsec negotiations after the configuration takes effect. Valid values:
     *
     *   **true**: immediately starts IPsec negotiations after the configuration is complete.
     *   **false**: starts IPsec negotiations when inbound traffic is detected.
     *
     * @example false
     *
     * @var bool
     */
    public $effectImmediately;

    /**
     * @description Specifies whether to enable the dead peer detection (DPD) feature. Valid values:
     *
     *   **true**: enables the DPD feature. The initiator of the IPsec-VPN connection sends DPD packets to check the existence and availability of the peer. If no feedback is received from the peer within a specific period of time, the connection fails. Then, the ISAKMP SA, IPsec SA, and IPsec tunnel are deleted.
     *   **false**: disables the DPD feature. The initiator of the IPsec-VPN connection does not send DPD packets.
     *
     * @example true
     *
     * @var bool
     */
    public $enableDpd;

    /**
     * @description Specifies whether to enable NAT traversal. Valid values:
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
     * @description The health check configurations:
     *
     *   **HealthCheckConfig.enable**: specifies whether to enable the health check feature. Valid values:
     *
     *   **true**
     *   **false**
     *
     *   **HealthCheckConfig.dip**: the destination IP address that is used for health checks. Enter the IP address on the data center side that the VPC can communicate with through the IPsec-VPN connection.
     *
     *   **HealthCheckConfig.sip**: the source IP address that is used for health checks. Enter the IP address on the VPC side that the data center can communicate with through the IPsec-VPN connection.
     *
     *   **HealthCheckConfig.interval**: the interval between two consecutive health checks. Unit: seconds.
     *
     *   **HealthCheckConfig.retry:** the maximum number of health check retries.
     *
     *   **HealthCheckConfig.Policy**: specifies whether to withdraw advertised routes when health checks fail. Valid values:
     *
     *   **revoke_route**
     *   **reserve_route**
     *
     * @example {"enable":"true","dip":"192.168.1.1","sip":"10.1.1.1","interval":"3","retry":"3","Policy": "revoke_route"}
     *
     * @var string
     */
    public $healthCheckConfig;

    /**
     * @description The configuration of Phase 1 negotiations:
     *
     *   **IkeConfig.Psk**: The pre-shared key that is used for authentication between the VPN gateway and the data center.
     *
     *   The pre-shared key must be 1 to 100 characters in length and can contain letters, digits, and the following characters: ``~ ! ` @ # $ % ^ & * () _ - + = {} [] | ; : \\" , . < > / ?``
     *   If you do not specify a pre-shared key, the system generates a random 16-character string as the pre-shared key. You can call the [DescribeVpnConnection](https://help.aliyun.com/document_detail/120374.html) operation to query the pre-shared key that is generated by the system.
     *
     * >The pre-shared key of the IPsec-VPN connection must be the same as the authentication key of the data center. Otherwise, you cannot establish a connection between the data center and the VPN gateway.
     *
     *   **IkeConfig.IkeVersion**: the Internet Key Exchange (IKE) version. Valid values: **ikev1** and **ikev2**.
     *
     *   **IkeConfig.IkeMode**: the negotiation mode. Valid values: **main** and **aggressive**.
     *
     *   **IkeConfig.IkeEncAlg**: the encryption algorithm that is used in Phase 1 negotiations. Valid values: **aes**, **aes192**, **aes256**, **des**, and **3des**.
     *
     *   **IkeConfig.IkeAuthAlg**: the authentication algorithm that is used in Phase 1 negotiations. Valid values: **md5**, **sha1**, **sha256**, **sha384**, and **sha512**.
     *
     *   **IkeConfig.IkePfs**: the Diffie-Hellman (DH) key exchange algorithm that is used in Phase 1 negotiations. Valid values: **group1**, **group2**, **group5**, and **group14**.
     *
     *   **IkeConfig.IkeLifetime**: the security association (SA) lifetime determined by Phase 1 negotiations. Unit: seconds. Valid values: **0** to **86400**.
     *
     *   **IkeConfig.LocalIdIPsec**: the identifier of the IPsec-VPN connection on the Alibaba Cloud side. The identifier can be up to 100 characters in length.
     *
     *   **IkeConfig.RemoteId**: the identifier of the IPsec-VPN connection on the data center side. The identifier can be up to 100 characters in length.
     *
     * @example {"Psk":"1234****","IkeVersion":"ikev1","IkeMode":"main","IkeEncAlg":"aes","IkeAuthAlg":"sha1","IkePfs":"group2","IkeLifetime":86400,"LocalId":"47.XX.XX.1","RemoteId":"47.XX.XX.2"}
     *
     * @var string
     */
    public $ikeConfig;

    /**
     * @description The configuration of Phase 2 negotiations:
     *
     *   **IpsecConfig.IpsecEncAlg:** the encryption algorithm that is used in Phase 2 negotiations. Valid values: **aes**, **aes192**, **aes256**, **des**, and **3des**.
     *   **IpsecConfig. IpsecAuthAlg:** the authentication algorithm that is used in Phase 2 negotiations. Valid values: **md5**, **sha1**, **sha256**, **sha384**, and **sha512**.
     *   **IpsecConfig. IpsecPfs:** the DH key exchange algorithm that is used in Phase 2 negotiations. Valid values: **disabled**, **group1**, **group2**, **group5**, and **group14**.
     *   **IpsecConfig. IpsecLifetime**: the SA lifetime determined by Phase 2 negotiations. Unit: seconds. Valid values: **0** to **86400**.
     *
     * @example {"IpsecEncAlg":"aes","IpsecAuthAlg":"sha1","IpsecPfs":"group2","IpsecLifetime":86400}
     *
     * @var string
     */
    public $ipsecConfig;

    /**
     * @description The CIDR block of the virtual private cloud (VPC) that communicates with the data center. The CIDR block is used in Phase 2 negotiations.
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
     * @var string
     */
    public $ownerAccount;

    /**
     * @description The ID of the region in which the IPsec-VPN connection is established.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The peer CA certificate when a ShangMi (SM) VPN gateway is used to create the IPsec-VPN connection.
     *
     * @example c20ycDI1NnYxIENBIChURVNUIFN****
     *
     * @var string
     */
    public $remoteCaCert;

    /**
     * @description The CIDR block of the data center that communicates with the VPC. This CIDR block is used in Phase 2 negotiations.
     *
     * The following routing modes are supported:
     *
     *   If you set **LocalSubnet** and **RemoteSubnet** to 0.0.0.0/0, the routing mode of the IPsec-VPN connection is set to Destination Routing Mode.
     *   If you set **LocalSubnet** and **RemoteSubnet** to specific CIDR blocks, the routing mode of the IPsec-VPN connection is set to Protected Data Flows.
     *
     * @example 10.1.3.0/24,10.1.4.0/24
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
     * @description The ID of the IPsec-VPN connection.
     *
     * This parameter is required.
     * @example vco-p0w5112fgnl2ihlmf****
     *
     * @var string
     */
    public $vpnConnectionId;
    protected $_name = [
        'autoConfigRoute'      => 'AutoConfigRoute',
        'bgpConfig'            => 'BgpConfig',
        'clientToken'          => 'ClientToken',
        'customerGatewayId'    => 'CustomerGatewayId',
        'effectImmediately'    => 'EffectImmediately',
        'enableDpd'            => 'EnableDpd',
        'enableNatTraversal'   => 'EnableNatTraversal',
        'healthCheckConfig'    => 'HealthCheckConfig',
        'ikeConfig'            => 'IkeConfig',
        'ipsecConfig'          => 'IpsecConfig',
        'localSubnet'          => 'LocalSubnet',
        'name'                 => 'Name',
        'networkType'          => 'NetworkType',
        'ownerAccount'         => 'OwnerAccount',
        'regionId'             => 'RegionId',
        'remoteCaCert'         => 'RemoteCaCert',
        'remoteSubnet'         => 'RemoteSubnet',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'vpnConnectionId'      => 'VpnConnectionId',
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
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->remoteCaCert) {
            $res['RemoteCaCert'] = $this->remoteCaCert;
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
        if (null !== $this->vpnConnectionId) {
            $res['VpnConnectionId'] = $this->vpnConnectionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVpnAttachmentAttributeRequest
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
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RemoteCaCert'])) {
            $model->remoteCaCert = $map['RemoteCaCert'];
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
        if (isset($map['VpnConnectionId'])) {
            $model->vpnConnectionId = $map['VpnConnectionId'];
        }

        return $model;
    }
}
