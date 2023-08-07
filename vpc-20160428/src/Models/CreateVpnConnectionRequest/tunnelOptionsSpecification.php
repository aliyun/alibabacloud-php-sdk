<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnConnectionRequest;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnConnectionRequest\tunnelOptionsSpecification\tunnelBgpConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnConnectionRequest\tunnelOptionsSpecification\tunnelIkeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnConnectionRequest\tunnelOptionsSpecification\tunnelIpsecConfig;
use AlibabaCloud\Tea\Model;

class tunnelOptionsSpecification extends Model
{
    /**
     * @description 隧道关联的用户网关ID。
     *
     * > - 在VPN网关实例支持创建双隧道模式的IPsec-VPN连接的场景下，本参数必填。
     * - 如果当前VPN网关实例支持创建双隧道模式的IPsec-VPN连接，您必须同时为IPsec-VPN连接添加主隧道和备隧道的配置（即配置**TunnelOptionsSpecification**数组下的参数）。一个IPsec-VPN连接仅支持添加主备两条隧道。
     * @example cgw-p0wy363lucf1uyae8****
     *
     * @var string
     */
    public $customerGatewayId;

    /**
     * @description 是否为隧道开启DPD（对等体存活检测）功能。取值：
     *
     * - **true**（默认值）：开启DPD功能。IPsec发起端会发送DPD报文用来检测对端的设备是否存活，如果在设定时间内未收到正确回应则认为对端已经断线，IPsec将删除ISAKMP SA和相应的IPsec SA，安全隧道同样也会被删除。
     *
     * - **false**：不开启DPD功能，IPsec发起端不会发送DPD探测报文。
     * @example true
     *
     * @var bool
     */
    public $enableDpd;

    /**
     * @description 是否为隧道开启NAT穿越功能。取值：
     *
     * - **true**（默认值）：开启NAT穿越功能。开启后，IKE协商过程会删除对UDP端口号的验证过程，同时实现对隧道中NAT网关设备的发现功能。
     *
     * - **false**：不开启NAT穿越功能。
     * @example true
     *
     * @var bool
     */
    public $enableNatTraversal;

    /**
     * @description 如果当前VPN网关实例为国密型VPN网关，您需要为隧道配置对端的CA证书。
     *
     * - 对于普通型VPN网关，此项需要为空。
     * @example -----BEGIN CERTIFICATE----- MIIB7zCCAZW**** -----END CERTIFICATE-----
     *
     * @var string
     */
    public $remoteCaCertificate;

    /**
     * @description 隧道的角色。取值：
     *
     * - **master**：表示当前隧道为主隧道。
     * - **slave**：表示当前隧道为备隧道。
     * @example master
     *
     * @var string
     */
    public $role;

    /**
     * @description 为隧道添加BGP配置。
     *
     * @var tunnelBgpConfig
     */
    public $tunnelBgpConfig;

    /**
     * @description 第一阶段协商的配置信息。
     *
     * @var tunnelIkeConfig
     */
    public $tunnelIkeConfig;

    /**
     * @description 第二阶段协商的配置信息。
     *
     * @var tunnelIpsecConfig
     */
    public $tunnelIpsecConfig;
    protected $_name = [
        'customerGatewayId'   => 'CustomerGatewayId',
        'enableDpd'           => 'EnableDpd',
        'enableNatTraversal'  => 'EnableNatTraversal',
        'remoteCaCertificate' => 'RemoteCaCertificate',
        'role'                => 'Role',
        'tunnelBgpConfig'     => 'TunnelBgpConfig',
        'tunnelIkeConfig'     => 'TunnelIkeConfig',
        'tunnelIpsecConfig'   => 'TunnelIpsecConfig',
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
        if (null !== $this->remoteCaCertificate) {
            $res['RemoteCaCertificate'] = $this->remoteCaCertificate;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->tunnelBgpConfig) {
            $res['TunnelBgpConfig'] = null !== $this->tunnelBgpConfig ? $this->tunnelBgpConfig->toMap() : null;
        }
        if (null !== $this->tunnelIkeConfig) {
            $res['TunnelIkeConfig'] = null !== $this->tunnelIkeConfig ? $this->tunnelIkeConfig->toMap() : null;
        }
        if (null !== $this->tunnelIpsecConfig) {
            $res['TunnelIpsecConfig'] = null !== $this->tunnelIpsecConfig ? $this->tunnelIpsecConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tunnelOptionsSpecification
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
        if (isset($map['RemoteCaCertificate'])) {
            $model->remoteCaCertificate = $map['RemoteCaCertificate'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['TunnelBgpConfig'])) {
            $model->tunnelBgpConfig = tunnelBgpConfig::fromMap($map['TunnelBgpConfig']);
        }
        if (isset($map['TunnelIkeConfig'])) {
            $model->tunnelIkeConfig = tunnelIkeConfig::fromMap($map['TunnelIkeConfig']);
        }
        if (isset($map['TunnelIpsecConfig'])) {
            $model->tunnelIpsecConfig = tunnelIpsecConfig::fromMap($map['TunnelIpsecConfig']);
        }

        return $model;
    }
}
