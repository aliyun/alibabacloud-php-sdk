<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponseBody\vpnConnections;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponseBody\vpnConnections\vpnConnection\ikeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponseBody\vpnConnections\vpnConnection\ipsecConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponseBody\vpnConnections\vpnConnection\vcoHealthCheck;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponseBody\vpnConnections\vpnConnection\vpnBgpConfig;
use AlibabaCloud\Tea\Model;

class vpnConnection extends Model
{
    /**
     * @example cen-lxxpbpalc776qz****
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
     * @example 1492753817000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $crossAccountAuthorized;

    /**
     * @example cgw-bp1mvj4g9kogw****
     *
     * @var string
     */
    public $customerGatewayId;

    /**
     * @example true
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
     * @example 10.XX.XX.10
     *
     * @var string
     */
    public $internetIp;

    /**
     * @var ipsecConfig
     */
    public $ipsecConfig;

    /**
     * @example 192.168.0.0/16,172.17.0.0/16
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
     * @example -----BEGIN CERTIFICATE----- MIIB7zCCAZW**** -----END CERTIFICATE-----
     *
     * @var string
     */
    public $remoteCaCertificate;

    /**
     * @example 10.0.0.0/8,172.16.0.0/16
     *
     * @var string
     */
    public $remoteSubnet;

    /**
     * @example 1000M
     *
     * @var string
     */
    public $spec;

    /**
     * @example attached
     *
     * @var string
     */
    public $state;

    /**
     * @example ipsec_sa_established
     *
     * @var string
     */
    public $status;

    /**
     * @example tr-p0we2edef9qr44a85****
     *
     * @var string
     */
    public $transitRouterId;

    /**
     * @example nametest
     *
     * @var string
     */
    public $transitRouterName;

    /**
     * @var vcoHealthCheck
     */
    public $vcoHealthCheck;

    /**
     * @var vpnBgpConfig
     */
    public $vpnBgpConfig;

    /**
     * @example vco-bp10lz7aejumd****
     *
     * @var string
     */
    public $vpnConnectionId;

    /**
     * @example vpn-bp1q8bgx4xnkm****
     *
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'attachInstanceId'       => 'AttachInstanceId',
        'attachType'             => 'AttachType',
        'createTime'             => 'CreateTime',
        'crossAccountAuthorized' => 'CrossAccountAuthorized',
        'customerGatewayId'      => 'CustomerGatewayId',
        'effectImmediately'      => 'EffectImmediately',
        'enableDpd'              => 'EnableDpd',
        'enableNatTraversal'     => 'EnableNatTraversal',
        'ikeConfig'              => 'IkeConfig',
        'internetIp'             => 'InternetIp',
        'ipsecConfig'            => 'IpsecConfig',
        'localSubnet'            => 'LocalSubnet',
        'name'                   => 'Name',
        'networkType'            => 'NetworkType',
        'remoteCaCertificate'    => 'RemoteCaCertificate',
        'remoteSubnet'           => 'RemoteSubnet',
        'spec'                   => 'Spec',
        'state'                  => 'State',
        'status'                 => 'Status',
        'transitRouterId'        => 'TransitRouterId',
        'transitRouterName'      => 'TransitRouterName',
        'vcoHealthCheck'         => 'VcoHealthCheck',
        'vpnBgpConfig'           => 'VpnBgpConfig',
        'vpnConnectionId'        => 'VpnConnectionId',
        'vpnGatewayId'           => 'VpnGatewayId',
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
        if (null !== $this->crossAccountAuthorized) {
            $res['CrossAccountAuthorized'] = $this->crossAccountAuthorized;
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
        if (null !== $this->ikeConfig) {
            $res['IkeConfig'] = null !== $this->ikeConfig ? $this->ikeConfig->toMap() : null;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
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
        if (null !== $this->remoteCaCertificate) {
            $res['RemoteCaCertificate'] = $this->remoteCaCertificate;
        }
        if (null !== $this->remoteSubnet) {
            $res['RemoteSubnet'] = $this->remoteSubnet;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }
        if (null !== $this->transitRouterName) {
            $res['TransitRouterName'] = $this->transitRouterName;
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
     * @return vpnConnection
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
        if (isset($map['CrossAccountAuthorized'])) {
            $model->crossAccountAuthorized = $map['CrossAccountAuthorized'];
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
        if (isset($map['IkeConfig'])) {
            $model->ikeConfig = ikeConfig::fromMap($map['IkeConfig']);
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
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
        if (isset($map['RemoteCaCertificate'])) {
            $model->remoteCaCertificate = $map['RemoteCaCertificate'];
        }
        if (isset($map['RemoteSubnet'])) {
            $model->remoteSubnet = $map['RemoteSubnet'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }
        if (isset($map['TransitRouterName'])) {
            $model->transitRouterName = $map['TransitRouterName'];
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
