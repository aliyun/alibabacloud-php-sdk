<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnServersResponseBody\sslVpnServers;

use AlibabaCloud\Tea\Model;

class sslVpnServer extends Model
{
    /**
     * @var string
     */
    public $cipher;

    /**
     * @var string
     */
    public $clientIpPool;

    /**
     * @var bool
     */
    public $compress;

    /**
     * @var int
     */
    public $connections;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $enableMultiFactorAuth;

    /**
     * @var string
     */
    public $IDaaSInstanceId;

    /**
     * @var string
     */
    public $IDaaSRegionId;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $localSubnet;

    /**
     * @var int
     */
    public $maxConnections;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $proto;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sslVpnServerId;

    /**
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'cipher'                => 'Cipher',
        'clientIpPool'          => 'ClientIpPool',
        'compress'              => 'Compress',
        'connections'           => 'Connections',
        'createTime'            => 'CreateTime',
        'enableMultiFactorAuth' => 'EnableMultiFactorAuth',
        'IDaaSInstanceId'       => 'IDaaSInstanceId',
        'IDaaSRegionId'         => 'IDaaSRegionId',
        'internetIp'            => 'InternetIp',
        'localSubnet'           => 'LocalSubnet',
        'maxConnections'        => 'MaxConnections',
        'name'                  => 'Name',
        'port'                  => 'Port',
        'proto'                 => 'Proto',
        'regionId'              => 'RegionId',
        'sslVpnServerId'        => 'SslVpnServerId',
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
        if (null !== $this->IDaaSInstanceId) {
            $res['IDaaSInstanceId'] = $this->IDaaSInstanceId;
        }
        if (null !== $this->IDaaSRegionId) {
            $res['IDaaSRegionId'] = $this->IDaaSRegionId;
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
     * @return sslVpnServer
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
        if (isset($map['IDaaSInstanceId'])) {
            $model->IDaaSInstanceId = $map['IDaaSInstanceId'];
        }
        if (isset($map['IDaaSRegionId'])) {
            $model->IDaaSRegionId = $map['IDaaSRegionId'];
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
        if (isset($map['SslVpnServerId'])) {
            $model->sslVpnServerId = $map['SslVpnServerId'];
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }

        return $model;
    }
}
