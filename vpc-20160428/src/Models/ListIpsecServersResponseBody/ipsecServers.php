<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListIpsecServersResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListIpsecServersResponseBody\ipsecServers\ikeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListIpsecServersResponseBody\ipsecServers\ipsecConfig;
use AlibabaCloud\Tea\Model;

class ipsecServers extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var int
     */
    public $onlineClientCount;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $IDaaSInstanceId;

    /**
     * @var string
     */
    public $ipsecServerName;

    /**
     * @var bool
     */
    public $effectImmediately;

    /**
     * @var string
     */
    public $vpnGatewayId;

    /**
     * @var ikeConfig
     */
    public $ikeConfig;

    /**
     * @var ipsecConfig
     */
    public $ipsecConfig;

    /**
     * @var string
     */
    public $psk;

    /**
     * @var string
     */
    public $localSubnet;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $pskEnabled;

    /**
     * @var string
     */
    public $ipsecServerId;

    /**
     * @var bool
     */
    public $multiFactorAuthEnabled;

    /**
     * @var int
     */
    public $maxConnections;

    /**
     * @var string
     */
    public $clientIpPool;
    protected $_name = [
        'creationTime'           => 'CreationTime',
        'onlineClientCount'      => 'OnlineClientCount',
        'internetIp'             => 'InternetIp',
        'IDaaSInstanceId'        => 'IDaaSInstanceId',
        'ipsecServerName'        => 'IpsecServerName',
        'effectImmediately'      => 'EffectImmediately',
        'vpnGatewayId'           => 'VpnGatewayId',
        'ikeConfig'              => 'IkeConfig',
        'ipsecConfig'            => 'IpsecConfig',
        'psk'                    => 'Psk',
        'localSubnet'            => 'LocalSubnet',
        'regionId'               => 'RegionId',
        'pskEnabled'             => 'PskEnabled',
        'ipsecServerId'          => 'IpsecServerId',
        'multiFactorAuthEnabled' => 'MultiFactorAuthEnabled',
        'maxConnections'         => 'MaxConnections',
        'clientIpPool'           => 'ClientIpPool',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->onlineClientCount) {
            $res['OnlineClientCount'] = $this->onlineClientCount;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->IDaaSInstanceId) {
            $res['IDaaSInstanceId'] = $this->IDaaSInstanceId;
        }
        if (null !== $this->ipsecServerName) {
            $res['IpsecServerName'] = $this->ipsecServerName;
        }
        if (null !== $this->effectImmediately) {
            $res['EffectImmediately'] = $this->effectImmediately;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }
        if (null !== $this->ikeConfig) {
            $res['IkeConfig'] = null !== $this->ikeConfig ? $this->ikeConfig->toMap() : null;
        }
        if (null !== $this->ipsecConfig) {
            $res['IpsecConfig'] = null !== $this->ipsecConfig ? $this->ipsecConfig->toMap() : null;
        }
        if (null !== $this->psk) {
            $res['Psk'] = $this->psk;
        }
        if (null !== $this->localSubnet) {
            $res['LocalSubnet'] = $this->localSubnet;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->pskEnabled) {
            $res['PskEnabled'] = $this->pskEnabled;
        }
        if (null !== $this->ipsecServerId) {
            $res['IpsecServerId'] = $this->ipsecServerId;
        }
        if (null !== $this->multiFactorAuthEnabled) {
            $res['MultiFactorAuthEnabled'] = $this->multiFactorAuthEnabled;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->clientIpPool) {
            $res['ClientIpPool'] = $this->clientIpPool;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['OnlineClientCount'])) {
            $model->onlineClientCount = $map['OnlineClientCount'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IDaaSInstanceId'])) {
            $model->IDaaSInstanceId = $map['IDaaSInstanceId'];
        }
        if (isset($map['IpsecServerName'])) {
            $model->ipsecServerName = $map['IpsecServerName'];
        }
        if (isset($map['EffectImmediately'])) {
            $model->effectImmediately = $map['EffectImmediately'];
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }
        if (isset($map['IkeConfig'])) {
            $model->ikeConfig = ikeConfig::fromMap($map['IkeConfig']);
        }
        if (isset($map['IpsecConfig'])) {
            $model->ipsecConfig = ipsecConfig::fromMap($map['IpsecConfig']);
        }
        if (isset($map['Psk'])) {
            $model->psk = $map['Psk'];
        }
        if (isset($map['LocalSubnet'])) {
            $model->localSubnet = $map['LocalSubnet'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['PskEnabled'])) {
            $model->pskEnabled = $map['PskEnabled'];
        }
        if (isset($map['IpsecServerId'])) {
            $model->ipsecServerId = $map['IpsecServerId'];
        }
        if (isset($map['MultiFactorAuthEnabled'])) {
            $model->multiFactorAuthEnabled = $map['MultiFactorAuthEnabled'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['ClientIpPool'])) {
            $model->clientIpPool = $map['ClientIpPool'];
        }

        return $model;
    }
}
