<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListIpsecServersResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListIpsecServersResponseBody\ipsecServers\ikeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListIpsecServersResponseBody\ipsecServers\ipsecConfig;
use AlibabaCloud\Tea\Model;

class ipsecServers extends Model
{
    /**
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $clientIpPool;

    /**
     * @example 2018-12-03T10:11:55Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $effectImmediately;

    /**
     * @example idaas-cn-hangzhou-****
     *
     * @var string
     */
    public $IDaaSInstanceId;

    /**
     * @var ikeConfig
     */
    public $ikeConfig;

    /**
     * @example 47.22.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @var ipsecConfig
     */
    public $ipsecConfig;

    /**
     * @example iss-bp1bo3xuvcxo7ixll****
     *
     * @var string
     */
    public $ipsecServerId;

    /**
     * @example test
     *
     * @var string
     */
    public $ipsecServerName;

    /**
     * @example 192.168.0.0/16,172.17.0.0/16
     *
     * @var string
     */
    public $localSubnet;

    /**
     * @example 5
     *
     * @var int
     */
    public $maxConnections;

    /**
     * @example true
     *
     * @var bool
     */
    public $multiFactorAuthEnabled;

    /**
     * @example 1
     *
     * @var int
     */
    public $onlineClientCount;

    /**
     * @example pgw6dy7d****
     *
     * @var string
     */
    public $psk;

    /**
     * @example true
     *
     * @var bool
     */
    public $pskEnabled;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example vpn-bp1q8bgx4xnkm2ogj****
     *
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'clientIpPool'           => 'ClientIpPool',
        'creationTime'           => 'CreationTime',
        'effectImmediately'      => 'EffectImmediately',
        'IDaaSInstanceId'        => 'IDaaSInstanceId',
        'ikeConfig'              => 'IkeConfig',
        'internetIp'             => 'InternetIp',
        'ipsecConfig'            => 'IpsecConfig',
        'ipsecServerId'          => 'IpsecServerId',
        'ipsecServerName'        => 'IpsecServerName',
        'localSubnet'            => 'LocalSubnet',
        'maxConnections'         => 'MaxConnections',
        'multiFactorAuthEnabled' => 'MultiFactorAuthEnabled',
        'onlineClientCount'      => 'OnlineClientCount',
        'psk'                    => 'Psk',
        'pskEnabled'             => 'PskEnabled',
        'regionId'               => 'RegionId',
        'vpnGatewayId'           => 'VpnGatewayId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIpPool) {
            $res['ClientIpPool'] = $this->clientIpPool;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->effectImmediately) {
            $res['EffectImmediately'] = $this->effectImmediately;
        }
        if (null !== $this->IDaaSInstanceId) {
            $res['IDaaSInstanceId'] = $this->IDaaSInstanceId;
        }
        if (null !== $this->ikeConfig) {
            $res['IkeConfig'] = null !== $this->ikeConfig ? $this->ikeConfig->toMap() : null;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->ipsecConfig) {
            $res['IpsecConfig'] = null !== $this->ipsecConfig ? $this->ipsecConfig->toMap() : null;
        }
        if (null !== $this->ipsecServerId) {
            $res['IpsecServerId'] = $this->ipsecServerId;
        }
        if (null !== $this->ipsecServerName) {
            $res['IpsecServerName'] = $this->ipsecServerName;
        }
        if (null !== $this->localSubnet) {
            $res['LocalSubnet'] = $this->localSubnet;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->multiFactorAuthEnabled) {
            $res['MultiFactorAuthEnabled'] = $this->multiFactorAuthEnabled;
        }
        if (null !== $this->onlineClientCount) {
            $res['OnlineClientCount'] = $this->onlineClientCount;
        }
        if (null !== $this->psk) {
            $res['Psk'] = $this->psk;
        }
        if (null !== $this->pskEnabled) {
            $res['PskEnabled'] = $this->pskEnabled;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipsecServers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIpPool'])) {
            $model->clientIpPool = $map['ClientIpPool'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['EffectImmediately'])) {
            $model->effectImmediately = $map['EffectImmediately'];
        }
        if (isset($map['IDaaSInstanceId'])) {
            $model->IDaaSInstanceId = $map['IDaaSInstanceId'];
        }
        if (isset($map['IkeConfig'])) {
            $model->ikeConfig = ikeConfig::fromMap($map['IkeConfig']);
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IpsecConfig'])) {
            $model->ipsecConfig = ipsecConfig::fromMap($map['IpsecConfig']);
        }
        if (isset($map['IpsecServerId'])) {
            $model->ipsecServerId = $map['IpsecServerId'];
        }
        if (isset($map['IpsecServerName'])) {
            $model->ipsecServerName = $map['IpsecServerName'];
        }
        if (isset($map['LocalSubnet'])) {
            $model->localSubnet = $map['LocalSubnet'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['MultiFactorAuthEnabled'])) {
            $model->multiFactorAuthEnabled = $map['MultiFactorAuthEnabled'];
        }
        if (isset($map['OnlineClientCount'])) {
            $model->onlineClientCount = $map['OnlineClientCount'];
        }
        if (isset($map['Psk'])) {
            $model->psk = $map['Psk'];
        }
        if (isset($map['PskEnabled'])) {
            $model->pskEnabled = $map['PskEnabled'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }

        return $model;
    }
}
