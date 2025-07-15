<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifySslVpnServerRequest extends Model
{
    /**
     * @description The encryption algorithm that is used in the SSL-VPN connection. Valid values:
     *
     *   **AES-128-CBC** (default)
     *   **AES-192-CBC**
     *   **AES-256-CBC**
     *   **none**
     *
     * @example AES-128-CBC
     *
     * @var string
     */
    public $cipher;

    /**
     * @description The client CIDR block.
     *
     * The CIDR block from which an IP address is allocated to the virtual network interface controller (NIC) of the client, rather than the private CIDR block.
     *
     * If the client accesses the SSL server over an SSL-VPN connection, the VPN gateway assigns an IP address from the specified client CIDR block for the client to access cloud resources.
     *
     * Make sure that the number of IP addresses in the client CIDR block is at least four times the maximum number of SSL-VPN connections supported by the VPN gateway.
     *
     * <details>
     * <summary>Click to view the reason.</summary>
     *
     * For example, if you specify 192.168.0.0/24 as the client CIDR block, the system first divides a subnet CIDR block with a subnet mask of 30 from 192.168.0.0/24, such as 192.168.0.4/30. This subnet provides up to four IP addresses. Then, the system allocates an IP address from 192.168.0.4/30 to the client and uses the other three IP addresses to ensure network communication. In this case, one client consumes four IP addresses. Therefore, to ensure that an IP address is assigned to your client, the number of IP addresses in the client CIDR block must be at least four times the maximum number of SSL-VPN connections supported by the VPN gateway with which the SSL server is associated.
     * </details>
     * <details>
     * <summary>Click to view the CIDR blocks that are not supported.</summary>
     *
     *   100.64.0.0~100.127.255.255
     *   127.0.0.0~127.255.255.255
     *   169.254.0.0~169.254.255.255
     *   224.0.0.0~239.255.255.255
     *   255.0.0.0~255.255.255.255
     * </details>
     * <details>
     * <summary>Click to view the recommended client CIDR blocks for different numbers of SSL-VPN connections.</summary>
     *
     *   If the number of SSL-VPN connections is 5, we recommend that you specify a client CIDR block with a subnet mask that is less than or equal to 27 bits in length. Examples: 10.0.0.0/27 and 10.0.0.0/26.
     *   If the number of SSL-VPN connections is 10, we recommend that you specify a client CIDR block with a subnet mask that is less than or equal to 26 bits in length. Examples: 10.0.0.0/26 and 10.0.0.0/25.
     *   If the number of SSL-VPN connections is 20, we recommend that you specify a client CIDR block with a subnet mask that is less than or equal to 25 bits in length. Examples: 10.0.0.0/25 and 10.0.0.0/24.
     *   If the number of SSL-VPN connections is 50, we recommend that you specify a client CIDR block with a subnet mask that is less than or equal to 24 bits in length. Examples: 10.0.0.0/24 and 10.0.0.0/23.
     *   If the number of SSL-VPN connections is 100, we recommend that you specify a client CIDR block with a subnet mask that is less than or equal to 23 bits in length. Examples: 10.0.0.0/23 and 10.0.0.0/22.
     *   If the number of SSL-VPN connections is 200, we recommend that you specify a client CIDR block with a subnet mask that is less than or equal to 22 bits in length. Examples: 10.0.0.0/22 and 10.0.0.0/21.
     *   If the number of SSL-VPN connections is 500, we recommend that you specify a client CIDR block with a subnet mask that is less than or equal to 21 bits in length. Examples: 10.0.0.0/21 and 10.0.0.0/20.
     *   If the number of SSL-VPN connections is 1,000, we recommend that you specify a client CIDR block with a subnet mask that is less than or equal to 20 bits in length. Examples: 10.0.0.0/20 and 10.0.0.0/19.
     * </details>
     *
     * > - The subnet mask of the client CIDR block must be 16 to 29 bits in length.
     * > -  Make sure that the client CIDR block does not overlap with the local CIDR block, the VPC CIDR block, or route CIDR blocks associated with the client.
     * > - We recommend that you use 10.0.0.0/8, 172.16.0.0/12, 192.168.0.0/16, or one of their subnets as the client CIDR block. If you want to specify a public CIDR block as the client CIDR block, you must specify the public CIDR block as the user CIDR block of the virtual private cloud (VPC). This way, the VPC can access the public CIDR block. For more information, see [VPC FAQs](https://help.aliyun.com/document_detail/185311.html).
     * > - After you create an SSL server, the system automatically adds routes that point to the client CIDR block to the VPC route table. Do not manually add routes that point to the client CIDR block. Otherwise, SSL-VPN connections cannot work as expected.
     *
     * @example 10.30.30.0/24
     *
     * @var string
     */
    public $clientIpPool;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The client token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** is different for each request.
     *
     * @example 02fb3da4-130e-11e9-8e44-0016e04115b
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to enable data compression. Valid values:
     *
     *   **true** (default)
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $compress;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @description Specifies whether to enable two-factor authentication. To enable two-factor authentication, you need to specify **IDaaSInstanceId**, **IDaaSRegionId**, and **IDaaSApplicationId**. Valid values:
     *
     *   **true**: enables the feature.
     *   **false**: disables the feature.
     *
     * > -  If you use two-factor authentication for the first time, you must first complete [authorization](https://ram.console.aliyun.com/role/authorization?request=%7B%22Services%22%3A%5B%7B%22Service%22%3A%22VPN%22%2C%22Roles%22%3A%5B%7B%22RoleName%22%3A%22AliyunVpnAccessingIdaasRole%22%2C%22TemplateId%22%3A%22IdaasRole%22%7D%5D%7D%5D%2C%22ReturnUrl%22%3A%22https%3A%2F%2Fvpc.console.aliyun.com%2Fsslvpn%2Fcn-shanghai%2Fvpn-servers%22%7D).
     * > - When you create an SSL server in the UAE (Dubai) region, we recommend that you associate the SSL server with an IDaaS EIAM 2.0 instance in Singapore to reduce latency.
     * > - IDaaS EIAM 1.0 instances are no longer available for purchase. If your Alibaba Cloud account has IDaaS EIAM 1.0 instances, the IDaaS EIAM 1.0 instances can be associated after two-factor authentication is enabled. If your Alibaba Cloud account does not have IDaaS EIAM 1.0 instances, only IDaaS EIAM 2.0 instances can be associated after two-factor authentication is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $enableMultiFactorAuth;

    /**
     * @description The ID of the IDaaS application.
     *
     *   If an IDaaS EIAM 2.0 instance is associated, you need to specify an IDaaS application ID.
     *   If an IDaaS EIAM 1.0 instance is associated, you do not need to specify an IDaaS application ID.
     *
     * @example app_my6g4qmvnwxzj2f****
     *
     * @var string
     */
    public $IDaaSApplicationId;

    /**
     * @description The ID of the IDaaS EIAM instance.
     *
     * @example idaas-cn-hangzhou-****
     *
     * @var string
     */
    public $IDaaSInstanceId;

    /**
     * @description The region ID of the IDaaS EIAM instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $IDaaSRegionId;

    /**
     * @description The local CIDR block.
     *
     * The CIDR block that your client needs to access by using the SSL-VPN connection.
     *
     * This value can be the CIDR block of a VPC, a vSwitch, a data center that is connected to a VPC by using an Express Connect circuit, or an Alibaba Cloud service such as Object Storage Service (OSS).
     *
     * The subnet mask of the specified local CIDR block must be 8 to 32 bits in length. You cannot specify the following CIDR blocks as the local CIDR blocks:
     *
     *   127.0.0.0~127.255.255.255
     *   169.254.0.0~169.254.255.255
     *   224.0.0.0~239.255.255.255
     *   255.0.0.0~255.255.255.255
     *
     * @example 10.20.20.0/24
     *
     * @var string
     */
    public $localSubnet;

    /**
     * @description The name of the SSL server.
     *
     * The name must be 1 to 100 characters in length and cannot start with `http://` or `https://`.
     *
     * @example test
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
     * @description The port that is used by the SSL server. Valid values of port numbers: **1** to **65535**. Default value: **1194**.
     *
     * The following ports are not supported: **22**, **2222**, **22222**, **9000**, **9001**, **9002**, **7505**, **80**, **443**, **53**, **68**, **123**, **4510**, **4560**, **500**, and **4500**.
     *
     * @example 1194
     *
     * @var int
     */
    public $port;

    /**
     * @description The protocol that is used by the SSL server. Valid values:
     *
     *   **TCP** (default)
     *   **UDP**
     *
     * @example UDP
     *
     * @var string
     */
    public $proto;

    /**
     * @description The region ID of the VPN gateway.
     *
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
     *
     * This parameter is required.
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
     * @description The ID of the SSL server.
     *
     * This parameter is required.
     *
     * @example vss-bp18q7hzj6largv4v****
     *
     * @var string
     */
    public $sslVpnServerId;
    protected $_name = [
        'cipher' => 'Cipher',
        'clientIpPool' => 'ClientIpPool',
        'clientToken' => 'ClientToken',
        'compress' => 'Compress',
        'dryRun' => 'DryRun',
        'enableMultiFactorAuth' => 'EnableMultiFactorAuth',
        'IDaaSApplicationId' => 'IDaaSApplicationId',
        'IDaaSInstanceId' => 'IDaaSInstanceId',
        'IDaaSRegionId' => 'IDaaSRegionId',
        'localSubnet' => 'LocalSubnet',
        'name' => 'Name',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'port' => 'Port',
        'proto' => 'Proto',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sslVpnServerId' => 'SslVpnServerId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cipher) {
            $res['Cipher'] = $this->cipher;
        }
        if (null !== $this->clientIpPool) {
            $res['ClientIpPool'] = $this->clientIpPool;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->compress) {
            $res['Compress'] = $this->compress;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->enableMultiFactorAuth) {
            $res['EnableMultiFactorAuth'] = $this->enableMultiFactorAuth;
        }
        if (null !== $this->IDaaSApplicationId) {
            $res['IDaaSApplicationId'] = $this->IDaaSApplicationId;
        }
        if (null !== $this->IDaaSInstanceId) {
            $res['IDaaSInstanceId'] = $this->IDaaSInstanceId;
        }
        if (null !== $this->IDaaSRegionId) {
            $res['IDaaSRegionId'] = $this->IDaaSRegionId;
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
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->proto) {
            $res['Proto'] = $this->proto;
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
        if (null !== $this->sslVpnServerId) {
            $res['SslVpnServerId'] = $this->sslVpnServerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySslVpnServerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cipher'])) {
            $model->cipher = $map['Cipher'];
        }
        if (isset($map['ClientIpPool'])) {
            $model->clientIpPool = $map['ClientIpPool'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Compress'])) {
            $model->compress = $map['Compress'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EnableMultiFactorAuth'])) {
            $model->enableMultiFactorAuth = $map['EnableMultiFactorAuth'];
        }
        if (isset($map['IDaaSApplicationId'])) {
            $model->IDaaSApplicationId = $map['IDaaSApplicationId'];
        }
        if (isset($map['IDaaSInstanceId'])) {
            $model->IDaaSInstanceId = $map['IDaaSInstanceId'];
        }
        if (isset($map['IDaaSRegionId'])) {
            $model->IDaaSRegionId = $map['IDaaSRegionId'];
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
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Proto'])) {
            $model->proto = $map['Proto'];
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
        if (isset($map['SslVpnServerId'])) {
            $model->sslVpnServerId = $map['SslVpnServerId'];
        }

        return $model;
    }
}
