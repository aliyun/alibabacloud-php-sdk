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
     * @description The client IP address pool.
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
     * @description Specifies whether to enable two-factor authentication. If you enable two-factor authentication, you must also specify an IDaaS instance ID. Valid values:
     *
     *   **true**
     *   **false**
     *
     * > *   Two-factor authentication supports only IDaaS instances of earlier versions. If you do not have and cannot create IDaaS instances of earlier versions, you cannot enable two-factor authentication.
     * > *   For existing SSL servers, if two-factor authentication is already enabled, you can continue to use two-factor authentication.
     * @example false
     *
     * @var bool
     */
    public $enableMultiFactorAuth;

    /**
     * @var string
     */
    public $IDaaSApplicationId;

    /**
     * @description The ID of the Identity as a Service (IDaaS) instance.
     *
     * @example idaas-cn-hangzhou-****
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
     * @description The CIDR block of the client.
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
     * This parameter is required.
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
     * @example vss-bp18q7hzj6largv4v****
     *
     * @var string
     */
    public $sslVpnServerId;
    protected $_name = [
        'cipher'                => 'Cipher',
        'clientIpPool'          => 'ClientIpPool',
        'clientToken'           => 'ClientToken',
        'compress'              => 'Compress',
        'enableMultiFactorAuth' => 'EnableMultiFactorAuth',
        'IDaaSApplicationId'    => 'IDaaSApplicationId',
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
        'sslVpnServerId'        => 'SslVpnServerId',
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
