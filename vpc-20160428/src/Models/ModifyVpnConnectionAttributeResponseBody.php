<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnConnectionAttributeResponseBody\ikeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnConnectionAttributeResponseBody\ipsecConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnConnectionAttributeResponseBody\vcoHealthCheck;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnConnectionAttributeResponseBody\vpnBgpConfig;
use AlibabaCloud\Tea\Model;

class ModifyVpnConnectionAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $localSubnet;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $customerGatewayId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $effectImmediately;

    /**
     * @var string
     */
    public $remoteSubnet;

    /**
     * @var vcoHealthCheck
     */
    public $vcoHealthCheck;

    /**
     * @var string
     */
    public $vpnGatewayId;

    /**
     * @var ipsecConfig
     */
    public $ipsecConfig;

    /**
     * @var string
     */
    public $vpnConnectionId;

    /**
     * @var bool
     */
    public $enableNatTraversal;

    /**
     * @var bool
     */
    public $enableDpd;

    /**
     * @var ikeConfig
     */
    public $ikeConfig;

    /**
     * @var vpnBgpConfig
     */
    public $vpnBgpConfig;
    protected $_name = [
        'localSubnet'        => 'LocalSubnet',
        'description'        => 'Description',
        'requestId'          => 'RequestId',
        'customerGatewayId'  => 'CustomerGatewayId',
        'createTime'         => 'CreateTime',
        'name'               => 'Name',
        'effectImmediately'  => 'EffectImmediately',
        'remoteSubnet'       => 'RemoteSubnet',
        'vcoHealthCheck'     => 'VcoHealthCheck',
        'vpnGatewayId'       => 'VpnGatewayId',
        'ipsecConfig'        => 'IpsecConfig',
        'vpnConnectionId'    => 'VpnConnectionId',
        'enableNatTraversal' => 'EnableNatTraversal',
        'enableDpd'          => 'EnableDpd',
        'ikeConfig'          => 'IkeConfig',
        'vpnBgpConfig'       => 'VpnBgpConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->localSubnet) {
            $res['LocalSubnet'] = $this->localSubnet;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->customerGatewayId) {
            $res['CustomerGatewayId'] = $this->customerGatewayId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->effectImmediately) {
            $res['EffectImmediately'] = $this->effectImmediately;
        }
        if (null !== $this->remoteSubnet) {
            $res['RemoteSubnet'] = $this->remoteSubnet;
        }
        if (null !== $this->vcoHealthCheck) {
            $res['VcoHealthCheck'] = null !== $this->vcoHealthCheck ? $this->vcoHealthCheck->toMap() : null;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }
        if (null !== $this->ipsecConfig) {
            $res['IpsecConfig'] = null !== $this->ipsecConfig ? $this->ipsecConfig->toMap() : null;
        }
        if (null !== $this->vpnConnectionId) {
            $res['VpnConnectionId'] = $this->vpnConnectionId;
        }
        if (null !== $this->enableNatTraversal) {
            $res['EnableNatTraversal'] = $this->enableNatTraversal;
        }
        if (null !== $this->enableDpd) {
            $res['EnableDpd'] = $this->enableDpd;
        }
        if (null !== $this->ikeConfig) {
            $res['IkeConfig'] = null !== $this->ikeConfig ? $this->ikeConfig->toMap() : null;
        }
        if (null !== $this->vpnBgpConfig) {
            $res['VpnBgpConfig'] = null !== $this->vpnBgpConfig ? $this->vpnBgpConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVpnConnectionAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocalSubnet'])) {
            $model->localSubnet = $map['LocalSubnet'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CustomerGatewayId'])) {
            $model->customerGatewayId = $map['CustomerGatewayId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['EffectImmediately'])) {
            $model->effectImmediately = $map['EffectImmediately'];
        }
        if (isset($map['RemoteSubnet'])) {
            $model->remoteSubnet = $map['RemoteSubnet'];
        }
        if (isset($map['VcoHealthCheck'])) {
            $model->vcoHealthCheck = vcoHealthCheck::fromMap($map['VcoHealthCheck']);
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }
        if (isset($map['IpsecConfig'])) {
            $model->ipsecConfig = ipsecConfig::fromMap($map['IpsecConfig']);
        }
        if (isset($map['VpnConnectionId'])) {
            $model->vpnConnectionId = $map['VpnConnectionId'];
        }
        if (isset($map['EnableNatTraversal'])) {
            $model->enableNatTraversal = $map['EnableNatTraversal'];
        }
        if (isset($map['EnableDpd'])) {
            $model->enableDpd = $map['EnableDpd'];
        }
        if (isset($map['IkeConfig'])) {
            $model->ikeConfig = ikeConfig::fromMap($map['IkeConfig']);
        }
        if (isset($map['VpnBgpConfig'])) {
            $model->vpnBgpConfig = vpnBgpConfig::fromMap($map['VpnBgpConfig']);
        }

        return $model;
    }
}
