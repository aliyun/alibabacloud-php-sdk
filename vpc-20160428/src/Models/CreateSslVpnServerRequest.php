<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateSslVpnServerRequest extends Model
{
    /**
     * @description The encryption algorithm that is used in the SSL-VPN connection. Valid values:
     *
     *   **AES-128-CBC** (default): AES-128-CBC
     *   **AES-192-CBC**: AES-192-CBC
     *   **AES-256-CBC**: AES-256-CBC
     *   **none**: does not use an encryption algorithm.
     *
     * @example AES-128-CBC
     *
     * @var string
     */
    public $cipher;

    /**
     * @description The client CIDR block.
     *
     * When the client accesses the destination network through an SSL-VPN connection, the VPN gateway allocates an IP address from the client CIDR block to the client.
     *
     * >  This CIDR block cannot conflict with the CIDR block specified by **LocalSubnet**.
     * @example 192.168.1.0/24
     *
     * @var string
     */
    public $clientIpPool;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. ClientToken can contain only ASCII characters.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** may be different for each API request.
     * @example 02fb3da4-130e-11e9-8e44-0016e04115b
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to enable data compression. Valid values:
     *
     *   **true**: yes
     *   **false** (default): no
     *
     * @example false
     *
     * @var bool
     */
    public $compress;

    /**
     * @description Specifies whether to enable two-factor authentication. Valid values:
     *
     *   **true**: yes
     *   **false** (default): no
     *
     * >  To enable two-factor authentication, make sure that the VPN gateway was created after 00:00:00 (UTC+8), March 5, 2020. Otherwise, two-factor authentication is not supported.
     * @example false
     *
     * @var bool
     */
    public $enableMultiFactorAuth;

    /**
     * @description The ID of the IDaaS instance.
     *
     * @example idaas-cn-hangzhou-p****
     *
     * @var string
     */
    public $IDaaSInstanceId;

    /**
     * @description The ID of the region where the IDaaS instance is created.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $IDaaSRegionId;

    /**
     * @description The local CIDR block.
     *
     * This value can be the CIDR block of a virtual private cloud (VPC), a vSwitch, a data center that is connected to a VPC through an Express Connect circuit, or Object Storage Service (OSS).
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $localSubnet;

    /**
     * @description The name of the SSL server.
     *
     * The name must be 1 to 100 characters in length, and cannot start with `http://` or `https://`.
     * @example sslvpnname
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
     * @description The port used by the SSL server. Default value: **1194**. The following ports cannot be used:
     *
     **22, 2222, 22222, 9000, 9001, 9002, 7505, 80, 443, 53, 68, 123, 4510, 4560, 500, and 4500**.
     *
     * @example 1194
     *
     * @var int
     */
    public $port;

    /**
     * @description The protocol that is used by the SSL server. Valid values:
     *
     *   **TCP**: TCP
     *   **UDP** (default): UDP
     *
     * @example UDP
     *
     * @var string
     */
    public $proto;

    /**
     * @description The ID of the region where the VPN gateway is created.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example cn-shanghai
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
     * @description The ID of the VPN gateway.
     *
     * @example vpn-bp1hgim8by0kc9nga****
     *
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'cipher'                => 'Cipher',
        'clientIpPool'          => 'ClientIpPool',
        'clientToken'           => 'ClientToken',
        'compress'              => 'Compress',
        'enableMultiFactorAuth' => 'EnableMultiFactorAuth',
        'IDaaSInstanceId'       => 'IDaaSInstanceId',
        'IDaaSRegionId'         => 'IDaaSRegionId',
        'localSubnet'           => 'LocalSubnet',
        'name'                  => 'Name',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'port'                  => 'Port',
        'proto'                 => 'Proto',
        'regionId'              => 'RegionId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'vpnGatewayId'          => 'VpnGatewayId',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->enableMultiFactorAuth) {
            $res['EnableMultiFactorAuth'] = $this->enableMultiFactorAuth;
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
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSslVpnServerRequest
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
        if (isset($map['EnableMultiFactorAuth'])) {
            $model->enableMultiFactorAuth = $map['EnableMultiFactorAuth'];
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
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }

        return $model;
    }
}
