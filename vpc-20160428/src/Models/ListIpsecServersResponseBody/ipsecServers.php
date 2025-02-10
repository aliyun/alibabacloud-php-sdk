<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListIpsecServersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListIpsecServersResponseBody\ipsecServers\ikeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListIpsecServersResponseBody\ipsecServers\ipsecConfig;

class ipsecServers extends Model
{
    /**
     * @var string
     */
    public $clientIpPool;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var bool
     */
    public $effectImmediately;
    /**
     * @var string
     */
    public $IDaaSInstanceId;
    /**
     * @var ikeConfig
     */
    public $ikeConfig;
    /**
     * @var string
     */
    public $internetIp;
    /**
     * @var ipsecConfig
     */
    public $ipsecConfig;
    /**
     * @var string
     */
    public $ipsecServerId;
    /**
     * @var string
     */
    public $ipsecServerName;
    /**
     * @var string
     */
    public $localSubnet;
    /**
     * @var int
     */
    public $maxConnections;
    /**
     * @var bool
     */
    public $multiFactorAuthEnabled;
    /**
     * @var int
     */
    public $onlineClientCount;
    /**
     * @var string
     */
    public $psk;
    /**
     * @var bool
     */
    public $pskEnabled;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
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
        'resourceGroupId'        => 'ResourceGroupId',
        'vpnGatewayId'           => 'VpnGatewayId',
    ];

    public function validate()
    {
        if (null !== $this->ikeConfig) {
            $this->ikeConfig->validate();
        }
        if (null !== $this->ipsecConfig) {
            $this->ipsecConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['IkeConfig'] = null !== $this->ikeConfig ? $this->ikeConfig->toArray($noStream) : $this->ikeConfig;
        }

        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }

        if (null !== $this->ipsecConfig) {
            $res['IpsecConfig'] = null !== $this->ipsecConfig ? $this->ipsecConfig->toArray($noStream) : $this->ipsecConfig;
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

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }

        return $model;
    }
}
