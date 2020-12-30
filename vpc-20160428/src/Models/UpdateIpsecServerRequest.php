<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class UpdateIpsecServerRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ipsecServerId;

    /**
     * @var string
     */
    public $localSubnet;

    /**
     * @var string
     */
    public $clientIpPool;

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
    public $ikeConfig;

    /**
     * @var string
     */
    public $ipsecConfig;

    /**
     * @var bool
     */
    public $pskEnabled;

    /**
     * @var string
     */
    public $psk;

    /**
     * @var bool
     */
    public $multiFactorAuthEnabled;

    /**
     * @var string
     */
    public $IDaaSInstanceId;

    /**
     * @var string
     */
    public $callerBid;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $dryRun;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'regionId'               => 'RegionId',
        'ipsecServerId'          => 'IpsecServerId',
        'localSubnet'            => 'LocalSubnet',
        'clientIpPool'           => 'ClientIpPool',
        'ipsecServerName'        => 'IpsecServerName',
        'effectImmediately'      => 'EffectImmediately',
        'ikeConfig'              => 'IkeConfig',
        'ipsecConfig'            => 'IpsecConfig',
        'pskEnabled'             => 'PskEnabled',
        'psk'                    => 'Psk',
        'multiFactorAuthEnabled' => 'MultiFactorAuthEnabled',
        'IDaaSInstanceId'        => 'IDaaSInstanceId',
        'callerBid'              => 'callerBid',
        'clientToken'            => 'ClientToken',
        'dryRun'                 => 'DryRun',
        'resourceOwnerId'        => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ipsecServerId) {
            $res['IpsecServerId'] = $this->ipsecServerId;
        }
        if (null !== $this->localSubnet) {
            $res['LocalSubnet'] = $this->localSubnet;
        }
        if (null !== $this->clientIpPool) {
            $res['ClientIpPool'] = $this->clientIpPool;
        }
        if (null !== $this->ipsecServerName) {
            $res['IpsecServerName'] = $this->ipsecServerName;
        }
        if (null !== $this->effectImmediately) {
            $res['EffectImmediately'] = $this->effectImmediately;
        }
        if (null !== $this->ikeConfig) {
            $res['IkeConfig'] = $this->ikeConfig;
        }
        if (null !== $this->ipsecConfig) {
            $res['IpsecConfig'] = $this->ipsecConfig;
        }
        if (null !== $this->pskEnabled) {
            $res['PskEnabled'] = $this->pskEnabled;
        }
        if (null !== $this->psk) {
            $res['Psk'] = $this->psk;
        }
        if (null !== $this->multiFactorAuthEnabled) {
            $res['MultiFactorAuthEnabled'] = $this->multiFactorAuthEnabled;
        }
        if (null !== $this->IDaaSInstanceId) {
            $res['IDaaSInstanceId'] = $this->IDaaSInstanceId;
        }
        if (null !== $this->callerBid) {
            $res['callerBid'] = $this->callerBid;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateIpsecServerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['IpsecServerId'])) {
            $model->ipsecServerId = $map['IpsecServerId'];
        }
        if (isset($map['LocalSubnet'])) {
            $model->localSubnet = $map['LocalSubnet'];
        }
        if (isset($map['ClientIpPool'])) {
            $model->clientIpPool = $map['ClientIpPool'];
        }
        if (isset($map['IpsecServerName'])) {
            $model->ipsecServerName = $map['IpsecServerName'];
        }
        if (isset($map['EffectImmediately'])) {
            $model->effectImmediately = $map['EffectImmediately'];
        }
        if (isset($map['IkeConfig'])) {
            $model->ikeConfig = $map['IkeConfig'];
        }
        if (isset($map['IpsecConfig'])) {
            $model->ipsecConfig = $map['IpsecConfig'];
        }
        if (isset($map['PskEnabled'])) {
            $model->pskEnabled = $map['PskEnabled'];
        }
        if (isset($map['Psk'])) {
            $model->psk = $map['Psk'];
        }
        if (isset($map['MultiFactorAuthEnabled'])) {
            $model->multiFactorAuthEnabled = $map['MultiFactorAuthEnabled'];
        }
        if (isset($map['IDaaSInstanceId'])) {
            $model->IDaaSInstanceId = $map['IDaaSInstanceId'];
        }
        if (isset($map['callerBid'])) {
            $model->callerBid = $map['callerBid'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
