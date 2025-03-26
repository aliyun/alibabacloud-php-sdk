<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody\ikeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody\ipsecConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody\tunnelOptionsSpecification;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody\vcoHealthCheck;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody\vpnBgpConfig;

class ModifyVpnAttachmentAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $attachInstanceId;

    /**
     * @var string
     */
    public $attachType;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $customerGatewayId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $effectImmediately;

    /**
     * @var bool
     */
    public $enableDpd;

    /**
     * @var bool
     */
    public $enableNatTraversal;

    /**
     * @var bool
     */
    public $enableTunnelsBgp;

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
    public $localSubnet;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $remoteSubnet;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tunnelOptionsSpecification[]
     */
    public $tunnelOptionsSpecification;

    /**
     * @var vcoHealthCheck
     */
    public $vcoHealthCheck;

    /**
     * @var vpnBgpConfig
     */
    public $vpnBgpConfig;

    /**
     * @var string
     */
    public $vpnConnectionId;

    /**
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'attachInstanceId' => 'AttachInstanceId',
        'attachType' => 'AttachType',
        'createTime' => 'CreateTime',
        'customerGatewayId' => 'CustomerGatewayId',
        'description' => 'Description',
        'effectImmediately' => 'EffectImmediately',
        'enableDpd' => 'EnableDpd',
        'enableNatTraversal' => 'EnableNatTraversal',
        'enableTunnelsBgp' => 'EnableTunnelsBgp',
        'ikeConfig' => 'IkeConfig',
        'ipsecConfig' => 'IpsecConfig',
        'localSubnet' => 'LocalSubnet',
        'name' => 'Name',
        'networkType' => 'NetworkType',
        'remoteSubnet' => 'RemoteSubnet',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'spec' => 'Spec',
        'status' => 'Status',
        'tunnelOptionsSpecification' => 'TunnelOptionsSpecification',
        'vcoHealthCheck' => 'VcoHealthCheck',
        'vpnBgpConfig' => 'VpnBgpConfig',
        'vpnConnectionId' => 'VpnConnectionId',
        'vpnGatewayId' => 'VpnGatewayId',
    ];

    public function validate()
    {
        if (null !== $this->ikeConfig) {
            $this->ikeConfig->validate();
        }
        if (null !== $this->ipsecConfig) {
            $this->ipsecConfig->validate();
        }
        if (\is_array($this->tunnelOptionsSpecification)) {
            Model::validateArray($this->tunnelOptionsSpecification);
        }
        if (null !== $this->vcoHealthCheck) {
            $this->vcoHealthCheck->validate();
        }
        if (null !== $this->vpnBgpConfig) {
            $this->vpnBgpConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->enableTunnelsBgp) {
            $res['EnableTunnelsBgp'] = $this->enableTunnelsBgp;
        }

        if (null !== $this->ikeConfig) {
            $res['IkeConfig'] = null !== $this->ikeConfig ? $this->ikeConfig->toArray($noStream) : $this->ikeConfig;
        }

        if (null !== $this->ipsecConfig) {
            $res['IpsecConfig'] = null !== $this->ipsecConfig ? $this->ipsecConfig->toArray($noStream) : $this->ipsecConfig;
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

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tunnelOptionsSpecification) {
            if (\is_array($this->tunnelOptionsSpecification)) {
                $res['TunnelOptionsSpecification'] = [];
                $n1 = 0;
                foreach ($this->tunnelOptionsSpecification as $item1) {
                    $res['TunnelOptionsSpecification'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vcoHealthCheck) {
            $res['VcoHealthCheck'] = null !== $this->vcoHealthCheck ? $this->vcoHealthCheck->toArray($noStream) : $this->vcoHealthCheck;
        }

        if (null !== $this->vpnBgpConfig) {
            $res['VpnBgpConfig'] = null !== $this->vpnBgpConfig ? $this->vpnBgpConfig->toArray($noStream) : $this->vpnBgpConfig;
        }

        if (null !== $this->vpnConnectionId) {
            $res['VpnConnectionId'] = $this->vpnConnectionId;
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

        if (isset($map['EnableTunnelsBgp'])) {
            $model->enableTunnelsBgp = $map['EnableTunnelsBgp'];
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

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TunnelOptionsSpecification'])) {
            if (!empty($map['TunnelOptionsSpecification'])) {
                $model->tunnelOptionsSpecification = [];
                $n1 = 0;
                foreach ($map['TunnelOptionsSpecification'] as $item1) {
                    $model->tunnelOptionsSpecification[$n1++] = tunnelOptionsSpecification::fromMap($item1);
                }
            }
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
