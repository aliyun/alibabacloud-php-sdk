<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifySslVpnServerResponseBody extends Model
{
    /**
     * @var bool
     */
    public $compress;

    /**
     * @var string
     */
    public $localSubnet;

    /**
     * @var int
     */
    public $connections;

    /**
     * @var string
     */
    public $clientIpPool;

    /**
     * @var string
     */
    public $IDaaSInstanceId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $maxConnections;

    /**
     * @var bool
     */
    public $enableMultiFactorAuth;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $sslVpnServerId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $proto;

    /**
     * @var string
     */
    public $vpnGatewayId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $cipher;
    protected $_name = [
        'compress'              => 'Compress',
        'localSubnet'           => 'LocalSubnet',
        'connections'           => 'Connections',
        'clientIpPool'          => 'ClientIpPool',
        'IDaaSInstanceId'       => 'IDaaSInstanceId',
        'requestId'             => 'RequestId',
        'maxConnections'        => 'MaxConnections',
        'enableMultiFactorAuth' => 'EnableMultiFactorAuth',
        'createTime'            => 'CreateTime',
        'port'                  => 'Port',
        'sslVpnServerId'        => 'SslVpnServerId',
        'name'                  => 'Name',
        'internetIp'            => 'InternetIp',
        'proto'                 => 'Proto',
        'vpnGatewayId'          => 'VpnGatewayId',
        'regionId'              => 'RegionId',
        'cipher'                => 'Cipher',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compress) {
            $res['Compress'] = $this->compress;
        }
        if (null !== $this->localSubnet) {
            $res['LocalSubnet'] = $this->localSubnet;
        }
        if (null !== $this->connections) {
            $res['Connections'] = $this->connections;
        }
        if (null !== $this->clientIpPool) {
            $res['ClientIpPool'] = $this->clientIpPool;
        }
        if (null !== $this->IDaaSInstanceId) {
            $res['IDaaSInstanceId'] = $this->IDaaSInstanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->enableMultiFactorAuth) {
            $res['EnableMultiFactorAuth'] = $this->enableMultiFactorAuth;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->sslVpnServerId) {
            $res['SslVpnServerId'] = $this->sslVpnServerId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->proto) {
            $res['Proto'] = $this->proto;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->cipher) {
            $res['Cipher'] = $this->cipher;
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
        if (isset($map['Compress'])) {
            $model->compress = $map['Compress'];
        }
        if (isset($map['LocalSubnet'])) {
            $model->localSubnet = $map['LocalSubnet'];
        }
        if (isset($map['Connections'])) {
            $model->connections = $map['Connections'];
        }
        if (isset($map['ClientIpPool'])) {
            $model->clientIpPool = $map['ClientIpPool'];
        }
        if (isset($map['IDaaSInstanceId'])) {
            $model->IDaaSInstanceId = $map['IDaaSInstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['EnableMultiFactorAuth'])) {
            $model->enableMultiFactorAuth = $map['EnableMultiFactorAuth'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['SslVpnServerId'])) {
            $model->sslVpnServerId = $map['SslVpnServerId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['Proto'])) {
            $model->proto = $map['Proto'];
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Cipher'])) {
            $model->cipher = $map['Cipher'];
        }

        return $model;
    }
}
