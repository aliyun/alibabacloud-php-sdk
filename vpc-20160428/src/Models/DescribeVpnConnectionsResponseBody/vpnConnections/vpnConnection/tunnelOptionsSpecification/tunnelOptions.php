<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponseBody\vpnConnections\vpnConnection\tunnelOptionsSpecification;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponseBody\vpnConnections\vpnConnection\tunnelOptionsSpecification\tunnelOptions\tunnelBgpConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponseBody\vpnConnections\vpnConnection\tunnelOptionsSpecification\tunnelOptions\tunnelIkeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponseBody\vpnConnections\vpnConnection\tunnelOptionsSpecification\tunnelOptions\tunnelIpsecConfig;
use AlibabaCloud\Tea\Model;

class tunnelOptions extends Model
{
    /**
     * @description 隧道关联的用户网关ID。
     *
     * @example cgw-p0wy363lucf1uyae8****
     *
     * @var string
     */
    public $customerGatewayId;

    /**
     * @description 隧道是否已开启DPD（对等体存活检测）功能。
     * - **false**：未开启。
     * - **true**：已开启。
     * @example true
     *
     * @var string
     */
    public $enableDpd;

    /**
     * @description 隧道是否已开启NAT穿越功能。
     *
     * - **false**：未开启。
     * - **true**：已开启。
     * @example true
     *
     * @var string
     */
    public $enableNatTraversal;

    /**
     * @description 隧道的IP地址。
     *
     * @example 47.21.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description 隧道对端的CA证书。
     *
     * 仅VPN网关实例的类型为国密型时才会返回当前参数。
     * @example -----BEGIN CERTIFICATE----- MIIB7zCCAZW**** -----END CERTIFICATE-----
     *
     * @var string
     */
    public $remoteCaCertificate;

    /**
     * @description 隧道的角色。
     *
     * - **master**：表示当前隧道为主隧道。
     * - **slave**：表示当前隧道为备隧道。
     * @example master
     *
     * @var string
     */
    public $role;

    /**
     * @description IPsec连接与转发路由器实例的绑定状态。
     *
     * - **active**：IPsec连接已与VPN网关实例绑定，状态正常。
     * - **init**：IPsec连接未绑定任何资源，IPsec连接初始化。
     * - **attaching**：IPsec连接与转发路由器实例绑定中。
     * - **attached**：IPsec连接已与转发路由器实例绑定。
     * - **detaching**：IPsec连接与转发路由器实例解绑中。
     * - **financialLocked**：欠费锁定。
     * - **provisioning**：资源准备中。
     * - **updating**：更新中。
     * - **upgrading**：升级中。
     * - **deleted**：已删除。
     * @example active
     *
     * @var string
     */
    public $state;

    /**
     * @description IPsec连接的状态。
     *
     * - **ike_sa_not_established**：第一阶段协商失败。
     *
     * - **ike_sa_established**：第一阶段协商成功。
     *
     * - **ipsec_sa_not_established**：第二阶段协商失败。
     *
     * - **ipsec_sa_established**：第二阶段协商成功。
     * @example ipsec_sa_established
     *
     * @var string
     */
    public $status;

    /**
     * @description 隧道的BGP配置信息。
     *
     * @var tunnelBgpConfig
     */
    public $tunnelBgpConfig;

    /**
     * @description 隧道ID。
     *
     * @example tun-opsqc4d97wni27****
     *
     * @var string
     */
    public $tunnelId;

    /**
     * @description 第一阶段协商的配置。
     *
     * @var tunnelIkeConfig
     */
    public $tunnelIkeConfig;

    /**
     * @description 第二阶段协商的配置。
     *
     * @var tunnelIpsecConfig
     */
    public $tunnelIpsecConfig;

    /**
     * @description 隧道部署的可用区。
     *
     * @example ap-southeast-5a
     *
     * @var string
     */
    public $zoneNo;
    protected $_name = [
        'customerGatewayId'   => 'CustomerGatewayId',
        'enableDpd'           => 'EnableDpd',
        'enableNatTraversal'  => 'EnableNatTraversal',
        'internetIp'          => 'InternetIp',
        'remoteCaCertificate' => 'RemoteCaCertificate',
        'role'                => 'Role',
        'state'               => 'State',
        'status'              => 'Status',
        'tunnelBgpConfig'     => 'TunnelBgpConfig',
        'tunnelId'            => 'TunnelId',
        'tunnelIkeConfig'     => 'TunnelIkeConfig',
        'tunnelIpsecConfig'   => 'TunnelIpsecConfig',
        'zoneNo'              => 'ZoneNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerGatewayId) {
            $res['CustomerGatewayId'] = $this->customerGatewayId;
        }
        if (null !== $this->enableDpd) {
            $res['EnableDpd'] = $this->enableDpd;
        }
        if (null !== $this->enableNatTraversal) {
            $res['EnableNatTraversal'] = $this->enableNatTraversal;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->remoteCaCertificate) {
            $res['RemoteCaCertificate'] = $this->remoteCaCertificate;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tunnelBgpConfig) {
            $res['TunnelBgpConfig'] = null !== $this->tunnelBgpConfig ? $this->tunnelBgpConfig->toMap() : null;
        }
        if (null !== $this->tunnelId) {
            $res['TunnelId'] = $this->tunnelId;
        }
        if (null !== $this->tunnelIkeConfig) {
            $res['TunnelIkeConfig'] = null !== $this->tunnelIkeConfig ? $this->tunnelIkeConfig->toMap() : null;
        }
        if (null !== $this->tunnelIpsecConfig) {
            $res['TunnelIpsecConfig'] = null !== $this->tunnelIpsecConfig ? $this->tunnelIpsecConfig->toMap() : null;
        }
        if (null !== $this->zoneNo) {
            $res['ZoneNo'] = $this->zoneNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tunnelOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomerGatewayId'])) {
            $model->customerGatewayId = $map['CustomerGatewayId'];
        }
        if (isset($map['EnableDpd'])) {
            $model->enableDpd = $map['EnableDpd'];
        }
        if (isset($map['EnableNatTraversal'])) {
            $model->enableNatTraversal = $map['EnableNatTraversal'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['RemoteCaCertificate'])) {
            $model->remoteCaCertificate = $map['RemoteCaCertificate'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TunnelBgpConfig'])) {
            $model->tunnelBgpConfig = tunnelBgpConfig::fromMap($map['TunnelBgpConfig']);
        }
        if (isset($map['TunnelId'])) {
            $model->tunnelId = $map['TunnelId'];
        }
        if (isset($map['TunnelIkeConfig'])) {
            $model->tunnelIkeConfig = tunnelIkeConfig::fromMap($map['TunnelIkeConfig']);
        }
        if (isset($map['TunnelIpsecConfig'])) {
            $model->tunnelIpsecConfig = tunnelIpsecConfig::fromMap($map['TunnelIpsecConfig']);
        }
        if (isset($map['ZoneNo'])) {
            $model->zoneNo = $map['ZoneNo'];
        }

        return $model;
    }
}
