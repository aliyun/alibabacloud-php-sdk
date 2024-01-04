<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnConnectionAttributeRequest;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnConnectionAttributeRequest\tunnelOptionsSpecification\tunnelBgpConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnConnectionAttributeRequest\tunnelOptionsSpecification\tunnelIkeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnConnectionAttributeRequest\tunnelOptionsSpecification\tunnelIpsecConfig;
use AlibabaCloud\Tea\Model;

class tunnelOptionsSpecification extends Model
{
    /**
     * @description Specifies whether to enable the Dead Peer Detection (DPD) feature for the tunnel. Valid values:
     *
     *   **true** The initiator of the IPsec-VPN connection sends DPD packets to check the existence and availability of the peer. If no feedback is received from the peer within a specified period of time, the connection fails. ISAKMP SA and IPsec SA are deleted. The security tunnel is also deleted.
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enableDpd;

    /**
     * @description Specifies whether to enable NAT traversal for the tunnel. Valid values:
     *
     *   **true** After NAT traversal is enabled, the initiator does not check the UDP ports during Internet Key Exchange (IKE) negotiations and can automatically discover NAT gateway devices along the IPsec-VPN tunnel.
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enableNatTraversal;

    /**
     * @description If the VPN gateway uses an SM certificate, you can modify the CA certificate used by the IPsec peer.
     *
     * If the VPN gateway does not use an SM certificate, this parameter is not supported.
     * @example -----BEGIN CERTIFICATE----- MIIB7zCCAZW**** -----END CERTIFICATE-----
     *
     * @var string
     */
    public $remoteCaCertificate;

    /**
     * @description The tunnel role. Valid values:
     *
     *   **master**: The tunnel is an active tunnel.
     *   **slave**: The tunnel is a standby tunnel.
     *
     * @example master
     *
     * @var string
     */
    public $role;

    /**
     * @description The Border Gateway Protocol (BGP) configurations of the tunnel.
     *
     * @var tunnelBgpConfig
     */
    public $tunnelBgpConfig;

    /**
     * @description **TunnelOptionsSpecification** parameters are supported by dual-tunnel IPsec-VPN gateways. You can modify both the active and standby tunnels of the IPsec-VPN connection.
     *
     * The tunnel ID.
     * @example tun-opsqc4d97wni27****
     *
     * @var string
     */
    public $tunnelId;

    /**
     * @description The configurations of Phase 1 negotiations.
     *
     * @var tunnelIkeConfig
     */
    public $tunnelIkeConfig;

    /**
     * @description The configurations of Phase 2 negotiations.
     *
     * @var tunnelIpsecConfig
     */
    public $tunnelIpsecConfig;
    protected $_name = [
        'enableDpd'           => 'EnableDpd',
        'enableNatTraversal'  => 'EnableNatTraversal',
        'remoteCaCertificate' => 'RemoteCaCertificate',
        'role'                => 'Role',
        'tunnelBgpConfig'     => 'TunnelBgpConfig',
        'tunnelId'            => 'TunnelId',
        'tunnelIkeConfig'     => 'TunnelIkeConfig',
        'tunnelIpsecConfig'   => 'TunnelIpsecConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->tunnelId) {
            $res['TunnelId'] = $this->tunnelId;
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
        if (isset($map['TunnelId'])) {
            $model->tunnelId = $map['TunnelId'];
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
