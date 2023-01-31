<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateIpsecServerRequest extends Model
{
    /**
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $clientIpPool;

    /**
     * @example d7d24a21-f4ba-4454-9173-b38****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example false
     *
     * @var string
     */
    public $dryRun;

    /**
     * @example true
     *
     * @var bool
     */
    public $effectImmediately;

    /**
     * @example {"IkeVersion":"ikev2","IkeMode":"main","IkeEncAlg":"aes","IkeAuthAlg":"sha1","IkePfs":"group2","IkeLifetime":86400}
     *
     * @var string
     */
    public $ikeConfig;

    /**
     * @example test
     *
     * @var string
     */
    public $ipSecServerName;

    /**
     * @example {"IpsecEncAlg":"aes","IpsecAuthAlg":"sha1","IpsecPfs":"group2","IpsecLifetime":86400}
     *
     * @var string
     */
    public $ipsecConfig;

    /**
     * @example 192.168.0.0/24
     *
     * @var string
     */
    public $localSubnet;

    /**
     * @example Cfd123****
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
     * @example vpn-bp17lofy9fd0dnvzv****
     *
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'clientIpPool'      => 'ClientIpPool',
        'clientToken'       => 'ClientToken',
        'dryRun'            => 'DryRun',
        'effectImmediately' => 'EffectImmediately',
        'ikeConfig'         => 'IkeConfig',
        'ipSecServerName'   => 'IpSecServerName',
        'ipsecConfig'       => 'IpsecConfig',
        'localSubnet'       => 'LocalSubnet',
        'psk'               => 'Psk',
        'pskEnabled'        => 'PskEnabled',
        'regionId'          => 'RegionId',
        'vpnGatewayId'      => 'VpnGatewayId',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->effectImmediately) {
            $res['EffectImmediately'] = $this->effectImmediately;
        }
        if (null !== $this->ikeConfig) {
            $res['IkeConfig'] = $this->ikeConfig;
        }
        if (null !== $this->ipSecServerName) {
            $res['IpSecServerName'] = $this->ipSecServerName;
        }
        if (null !== $this->ipsecConfig) {
            $res['IpsecConfig'] = $this->ipsecConfig;
        }
        if (null !== $this->localSubnet) {
            $res['LocalSubnet'] = $this->localSubnet;
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
     * @return CreateIpsecServerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIpPool'])) {
            $model->clientIpPool = $map['ClientIpPool'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EffectImmediately'])) {
            $model->effectImmediately = $map['EffectImmediately'];
        }
        if (isset($map['IkeConfig'])) {
            $model->ikeConfig = $map['IkeConfig'];
        }
        if (isset($map['IpSecServerName'])) {
            $model->ipSecServerName = $map['IpSecServerName'];
        }
        if (isset($map['IpsecConfig'])) {
            $model->ipsecConfig = $map['IpsecConfig'];
        }
        if (isset($map['LocalSubnet'])) {
            $model->localSubnet = $map['LocalSubnet'];
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
