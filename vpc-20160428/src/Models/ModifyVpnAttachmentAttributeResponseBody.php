<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody\ikeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody\ipsecConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody\vcoHealthCheck;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody\vpnBgpConfig;
use AlibabaCloud\Tea\Model;

class ModifyVpnAttachmentAttributeResponseBody extends Model
{
    /**
     * @example cen-c2r3m3zxkumoqz****
     *
     * @var string
     */
    public $attachInstanceId;

    /**
     * @example CEN
     *
     * @var string
     */
    public $attachType;

    /**
     * @example 1658201810000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example cgw-p0w2jemrcj5u61un8****
     *
     * @var string
     */
    public $customerGatewayId;

    /**
     * @example desctest
     *
     * @var string
     */
    public $description;

    /**
     * @example false
     *
     * @var bool
     */
    public $effectImmediately;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableDpd;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableNatTraversal;

    /**
     * @var ikeConfig
     */
    public $ikeConfig;

    /**
     * @var ipsecConfig
     */
    public $ipsecConfig;

    /**
     * @example 10.1.1.0/24,10.1.2.0/24
     *
     * @var string
     */
    public $localSubnet;

    /**
     * @example nametest
     *
     * @var string
     */
    public $name;

    /**
     * @example public
     *
     * @var string
     */
    public $networkType;

    /**
     * @example 10.1.3.0/24,10.1.4.0/24
     *
     * @var string
     */
    public $remoteSubnet;

    /**
     * @example 35822A84-867F-3936-A2E6-A4C4E3ED11C0
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1000M
     *
     * @var string
     */
    public $spec;

    /**
     * @example ike_sa_not_established
     *
     * @var string
     */
    public $status;

    /**
     * @var vcoHealthCheck
     */
    public $vcoHealthCheck;

    /**
     * @var vpnBgpConfig
     */
    public $vpnBgpConfig;

    /**
     * @example vco-p0w5112fgnl2ihlmf****
     *
     * @var string
     */
    public $vpnConnectionId;

    /**
     * @example vpn-p0wa1c1018pmeb6cu****
     *
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'attachInstanceId'   => 'AttachInstanceId',
        'attachType'         => 'AttachType',
        'createTime'         => 'CreateTime',
        'customerGatewayId'  => 'CustomerGatewayId',
        'description'        => 'Description',
        'effectImmediately'  => 'EffectImmediately',
        'enableDpd'          => 'EnableDpd',
        'enableNatTraversal' => 'EnableNatTraversal',
        'ikeConfig'          => 'IkeConfig',
        'ipsecConfig'        => 'IpsecConfig',
        'localSubnet'        => 'LocalSubnet',
        'name'               => 'Name',
        'networkType'        => 'NetworkType',
        'remoteSubnet'       => 'RemoteSubnet',
        'requestId'          => 'RequestId',
        'spec'               => 'Spec',
        'status'             => 'Status',
        'vcoHealthCheck'     => 'VcoHealthCheck',
        'vpnBgpConfig'       => 'VpnBgpConfig',
        'vpnConnectionId'    => 'VpnConnectionId',
        'vpnGatewayId'       => 'VpnGatewayId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachInstanceId) {
            $res['AttachInstanceId'] = $this->attachInstanceId;
        }
        if (null !== $this->attachType) {
            $res['AttachType'] = $this->attachType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->customerGatewayId) {
            $res['CustomerGatewayId'] = $this->customerGatewayId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->effectImmediately) {
            $res['EffectImmediately'] = $this->effectImmediately;
        }
        if (null !== $this->enableDpd) {
            $res['EnableDpd'] = $this->enableDpd;
        }
        if (null !== $this->enableNatTraversal) {
            $res['EnableNatTraversal'] = $this->enableNatTraversal;
        }
        if (null !== $this->ikeConfig) {
            $res['IkeConfig'] = null !== $this->ikeConfig ? $this->ikeConfig->toMap() : null;
        }
        if (null !== $this->ipsecConfig) {
            $res['IpsecConfig'] = null !== $this->ipsecConfig ? $this->ipsecConfig->toMap() : null;
        }
        if (null !== $this->localSubnet) {
            $res['LocalSubnet'] = $this->localSubnet;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->remoteSubnet) {
            $res['RemoteSubnet'] = $this->remoteSubnet;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vcoHealthCheck) {
            $res['VcoHealthCheck'] = null !== $this->vcoHealthCheck ? $this->vcoHealthCheck->toMap() : null;
        }
        if (null !== $this->vpnBgpConfig) {
            $res['VpnBgpConfig'] = null !== $this->vpnBgpConfig ? $this->vpnBgpConfig->toMap() : null;
        }
        if (null !== $this->vpnConnectionId) {
            $res['VpnConnectionId'] = $this->vpnConnectionId;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVpnAttachmentAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachInstanceId'])) {
            $model->attachInstanceId = $map['AttachInstanceId'];
        }
        if (isset($map['AttachType'])) {
            $model->attachType = $map['AttachType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CustomerGatewayId'])) {
            $model->customerGatewayId = $map['CustomerGatewayId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EffectImmediately'])) {
            $model->effectImmediately = $map['EffectImmediately'];
        }
        if (isset($map['EnableDpd'])) {
            $model->enableDpd = $map['EnableDpd'];
        }
        if (isset($map['EnableNatTraversal'])) {
            $model->enableNatTraversal = $map['EnableNatTraversal'];
        }
        if (isset($map['IkeConfig'])) {
            $model->ikeConfig = ikeConfig::fromMap($map['IkeConfig']);
        }
        if (isset($map['IpsecConfig'])) {
            $model->ipsecConfig = ipsecConfig::fromMap($map['IpsecConfig']);
        }
        if (isset($map['LocalSubnet'])) {
            $model->localSubnet = $map['LocalSubnet'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['RemoteSubnet'])) {
            $model->remoteSubnet = $map['RemoteSubnet'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VcoHealthCheck'])) {
            $model->vcoHealthCheck = vcoHealthCheck::fromMap($map['VcoHealthCheck']);
        }
        if (isset($map['VpnBgpConfig'])) {
            $model->vpnBgpConfig = vpnBgpConfig::fromMap($map['VpnBgpConfig']);
        }
        if (isset($map['VpnConnectionId'])) {
            $model->vpnConnectionId = $map['VpnConnectionId'];
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }

        return $model;
    }
}
