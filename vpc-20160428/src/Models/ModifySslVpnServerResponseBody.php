<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifySslVpnServerResponseBody extends Model
{
    /**
     * @description The encryption algorithm.
     *
     * @example AES-128-CBC
     *
     * @var string
     */
    public $cipher;

    /**
     * @description The client CIDR block.
     *
     * @example 10.30.30.0/24
     *
     * @var string
     */
    public $clientIpPool;

    /**
     * @description Indicates whether data compression is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $compress;

    /**
     * @description The total number of current connections.
     *
     * @example 0
     *
     * @var int
     */
    public $connections;

    /**
     * @description The time when the SSL server was created.
     *
     * @example 1492753580000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description Indicates whether two-factor authentication is enabled.
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $enableMultiFactorAuth;

    /**
     * @description The ID of the IDaaS application.
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
     * @description The version of the IDaaS EIAM instance.
     *
     *   This parameter is returned only if the SSL server is associated with an IDaaS EIAM 2.0 instance. Only **EIAM 2.0** is returned.
     *   If the SSL server is associated with an IDaaS EIAM 1.0 instance, no value is returned.
     *
     * @example EIAM 2.0
     *
     * @var string
     */
    public $IDaaSInstanceVersion;

    /**
     * @description The public IP address.
     *
     * @example 47.98.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The local CIDR block.
     *
     * @example 10.20.20.0/24
     *
     * @var string
     */
    public $localSubnet;

    /**
     * @description The maximum number of connections.
     *
     * @example 5
     *
     * @var int
     */
    public $maxConnections;

    /**
     * @description The name of the SSL server.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The port that is used by the SSL server.
     *
     * @example 1194
     *
     * @var int
     */
    public $port;

    /**
     * @description The protocol that is used by the SSL server.
     *
     * @example UDP
     *
     * @var string
     */
    public $proto;

    /**
     * @description The ID of the region where the SSL server is created.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The request ID.
     *
     * @example DF11D6F6-E35A-41C3-9B20-6FC8A901FE65
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group to which the SSL server belongs.
     *
     * The SSL server and the VPN gateway associated with the SSL server belong to the same resource group. You can call the [ListResourceGroups](https://help.aliyun.com/document_detail/158855.html) operation to query resource groups.
     *
     * @example rg-acfmzs372yg****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the SSL server.
     *
     * @example vss-bp18q7hzj6largv4v****
     *
     * @var string
     */
    public $sslVpnServerId;

    /**
     * @description The ID of the VPN gateway.
     *
     * @example vpn-bp1q8bgx4xnkm2ogj****
     *
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'cipher' => 'Cipher',
        'clientIpPool' => 'ClientIpPool',
        'compress' => 'Compress',
        'connections' => 'Connections',
        'createTime' => 'CreateTime',
        'enableMultiFactorAuth' => 'EnableMultiFactorAuth',
        'IDaaSApplicationId' => 'IDaaSApplicationId',
        'IDaaSInstanceId' => 'IDaaSInstanceId',
        'IDaaSInstanceVersion' => 'IDaaSInstanceVersion',
        'internetIp' => 'InternetIp',
        'localSubnet' => 'LocalSubnet',
        'maxConnections' => 'MaxConnections',
        'name' => 'Name',
        'port' => 'Port',
        'proto' => 'Proto',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'sslVpnServerId' => 'SslVpnServerId',
        'vpnGatewayId' => 'VpnGatewayId',
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
        if (null !== $this->compress) {
            $res['Compress'] = $this->compress;
        }
        if (null !== $this->connections) {
            $res['Connections'] = $this->connections;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->IDaaSInstanceVersion) {
            $res['IDaaSInstanceVersion'] = $this->IDaaSInstanceVersion;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->localSubnet) {
            $res['LocalSubnet'] = $this->localSubnet;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sslVpnServerId) {
            $res['SslVpnServerId'] = $this->sslVpnServerId;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySslVpnServerResponseBody
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
        if (isset($map['Compress'])) {
            $model->compress = $map['Compress'];
        }
        if (isset($map['Connections'])) {
            $model->connections = $map['Connections'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['IDaaSInstanceVersion'])) {
            $model->IDaaSInstanceVersion = $map['IDaaSInstanceVersion'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['LocalSubnet'])) {
            $model->localSubnet = $map['LocalSubnet'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SslVpnServerId'])) {
            $model->sslVpnServerId = $map['SslVpnServerId'];
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }

        return $model;
    }
}
