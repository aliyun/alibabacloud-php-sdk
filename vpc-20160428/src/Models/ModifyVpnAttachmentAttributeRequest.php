<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeRequest\tunnelOptionsSpecification;

class ModifyVpnAttachmentAttributeRequest extends Model
{
    /**
     * @var bool
     */
    public $autoConfigRoute;
    /**
     * @var string
     */
    public $bgpConfig;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $customerGatewayId;
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
     * @var string
     */
    public $healthCheckConfig;
    /**
     * @var string
     */
    public $ikeConfig;
    /**
     * @var string
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
    public $ownerAccount;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $remoteCaCert;
    /**
     * @var string
     */
    public $remoteSubnet;
    /**
     * @var string
     */
    public $resourceOwnerAccount;
    /**
     * @var int
     */
    public $resourceOwnerId;
    /**
     * @var tunnelOptionsSpecification[]
     */
    public $tunnelOptionsSpecification;
    /**
     * @var string
     */
    public $vpnConnectionId;
    protected $_name = [
        'autoConfigRoute'            => 'AutoConfigRoute',
        'bgpConfig'                  => 'BgpConfig',
        'clientToken'                => 'ClientToken',
        'customerGatewayId'          => 'CustomerGatewayId',
        'effectImmediately'          => 'EffectImmediately',
        'enableDpd'                  => 'EnableDpd',
        'enableNatTraversal'         => 'EnableNatTraversal',
        'enableTunnelsBgp'           => 'EnableTunnelsBgp',
        'healthCheckConfig'          => 'HealthCheckConfig',
        'ikeConfig'                  => 'IkeConfig',
        'ipsecConfig'                => 'IpsecConfig',
        'localSubnet'                => 'LocalSubnet',
        'name'                       => 'Name',
        'networkType'                => 'NetworkType',
        'ownerAccount'               => 'OwnerAccount',
        'regionId'                   => 'RegionId',
        'remoteCaCert'               => 'RemoteCaCert',
        'remoteSubnet'               => 'RemoteSubnet',
        'resourceOwnerAccount'       => 'ResourceOwnerAccount',
        'resourceOwnerId'            => 'ResourceOwnerId',
        'tunnelOptionsSpecification' => 'TunnelOptionsSpecification',
        'vpnConnectionId'            => 'VpnConnectionId',
    ];

    public function validate()
    {
        if (\is_array($this->tunnelOptionsSpecification)) {
            Model::validateArray($this->tunnelOptionsSpecification);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoConfigRoute) {
            $res['AutoConfigRoute'] = $this->autoConfigRoute;
        }

        if (null !== $this->bgpConfig) {
            $res['BgpConfig'] = $this->bgpConfig;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->customerGatewayId) {
            $res['CustomerGatewayId'] = $this->customerGatewayId;
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

        if (null !== $this->healthCheckConfig) {
            $res['HealthCheckConfig'] = $this->healthCheckConfig;
        }

        if (null !== $this->ikeConfig) {
            $res['IkeConfig'] = $this->ikeConfig;
        }

        if (null !== $this->ipsecConfig) {
            $res['IpsecConfig'] = $this->ipsecConfig;
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

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->remoteCaCert) {
            $res['RemoteCaCert'] = $this->remoteCaCert;
        }

        if (null !== $this->remoteSubnet) {
            $res['RemoteSubnet'] = $this->remoteSubnet;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->tunnelOptionsSpecification) {
            if (\is_array($this->tunnelOptionsSpecification)) {
                $res['TunnelOptionsSpecification'] = [];
                $n1                                = 0;
                foreach ($this->tunnelOptionsSpecification as $item1) {
                    $res['TunnelOptionsSpecification'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vpnConnectionId) {
            $res['VpnConnectionId'] = $this->vpnConnectionId;
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
        if (isset($map['AutoConfigRoute'])) {
            $model->autoConfigRoute = $map['AutoConfigRoute'];
        }

        if (isset($map['BgpConfig'])) {
            $model->bgpConfig = $map['BgpConfig'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CustomerGatewayId'])) {
            $model->customerGatewayId = $map['CustomerGatewayId'];
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

        if (isset($map['HealthCheckConfig'])) {
            $model->healthCheckConfig = $map['HealthCheckConfig'];
        }

        if (isset($map['IkeConfig'])) {
            $model->ikeConfig = $map['IkeConfig'];
        }

        if (isset($map['IpsecConfig'])) {
            $model->ipsecConfig = $map['IpsecConfig'];
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

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RemoteCaCert'])) {
            $model->remoteCaCert = $map['RemoteCaCert'];
        }

        if (isset($map['RemoteSubnet'])) {
            $model->remoteSubnet = $map['RemoteSubnet'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['TunnelOptionsSpecification'])) {
            if (!empty($map['TunnelOptionsSpecification'])) {
                $model->tunnelOptionsSpecification = [];
                $n1                                = 0;
                foreach ($map['TunnelOptionsSpecification'] as $item1) {
                    $model->tunnelOptionsSpecification[$n1++] = tunnelOptionsSpecification::fromMap($item1);
                }
            }
        }

        if (isset($map['VpnConnectionId'])) {
            $model->vpnConnectionId = $map['VpnConnectionId'];
        }

        return $model;
    }
}
