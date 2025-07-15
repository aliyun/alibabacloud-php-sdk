<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeRequest;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeRequest\tunnelOptionsSpecification\tunnelBgpConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeRequest\tunnelOptionsSpecification\tunnelIkeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeRequest\tunnelOptionsSpecification\tunnelIpsecConfig;
use AlibabaCloud\Tea\Model;

class tunnelOptionsSpecification extends Model
{
    /**
     * @description The ID of the customer gateway that is associated with the tunnel.
     *
     * >  This parameter is only supported in dual-tunnel IPsec-VPN connections.
     *
     * @example cgw-p0w2jemrcj5u61un8****
     *
     * @var string
     */
    public $customerGatewayId;

    /**
     * @description Specifies whether to enable the Dead Peer Detection (DPD) feature for the tunnel. Valid values:
     *
     *   **true**: enables DPD. The initiator of the IPsec-VPN connection sends DPD packets to check the existence and availability of the peer. If no feedback is received from the peer within the specified period of time, the connection fails. In this case, ISAKMP SA and IPsec SA are deleted along with the security tunnel.
     *   **false**: disables DPD. The initiator of the IPsec-VPN connection does not send DPD packets.
     *
     * @example true
     *
     * @var bool
     */
    public $enableDpd;

    /**
     * @description Specifies whether to enable NAT traversal for the tunnel. Valid values:
     *
     *   **true**: enables NAT traversal. After NAT traversal is enabled, the initiator does not check the UDP ports during IKE negotiations and can automatically discover NAT gateway devices along the IPsec-VPN tunnel.
     *   **false**: disables NAT traversal.
     *
     * @example true
     *
     * @var bool
     */
    public $enableNatTraversal;

    /**
     * @description Add BGP configurations for the tunnel.
     *
     * >  If you enable BGP for an IPsec-VPN connection, you must set **EnableTunnelsBgp** parameter to **true**.
     *
     * @var tunnelBgpConfig
     */
    public $tunnelBgpConfig;

    /**
     * @description The tunnel ID.
     *
     * @example tun-0jod7plwf2a0o9lvu****
     *
     * @var string
     */
    public $tunnelId;

    /**
     * @description The configuration of Phase 1 negotiations.
     *
     * @var tunnelIkeConfig
     */
    public $tunnelIkeConfig;

    /**
     * @description The order in which the tunnel was created.
     *
     *   **1**: Tunnel 1.
     *   **2**: Tunnel 2.
     *
     * @example 1
     *
     * @var int
     */
    public $tunnelIndex;

    /**
     * @description The configuration of Phase 2 negotiations.
     *
     * @var tunnelIpsecConfig
     */
    public $tunnelIpsecConfig;
    protected $_name = [
        'customerGatewayId' => 'CustomerGatewayId',
        'enableDpd' => 'EnableDpd',
        'enableNatTraversal' => 'EnableNatTraversal',
        'tunnelBgpConfig' => 'TunnelBgpConfig',
        'tunnelId' => 'TunnelId',
        'tunnelIkeConfig' => 'TunnelIkeConfig',
        'tunnelIndex' => 'TunnelIndex',
        'tunnelIpsecConfig' => 'TunnelIpsecConfig',
    ];

    public function validate() {}

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
        if (null !== $this->tunnelBgpConfig) {
            $res['TunnelBgpConfig'] = null !== $this->tunnelBgpConfig ? $this->tunnelBgpConfig->toMap() : null;
        }
        if (null !== $this->tunnelId) {
            $res['TunnelId'] = $this->tunnelId;
        }
        if (null !== $this->tunnelIkeConfig) {
            $res['TunnelIkeConfig'] = null !== $this->tunnelIkeConfig ? $this->tunnelIkeConfig->toMap() : null;
        }
        if (null !== $this->tunnelIndex) {
            $res['TunnelIndex'] = $this->tunnelIndex;
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
        if (isset($map['TunnelBgpConfig'])) {
            $model->tunnelBgpConfig = tunnelBgpConfig::fromMap($map['TunnelBgpConfig']);
        }
        if (isset($map['TunnelId'])) {
            $model->tunnelId = $map['TunnelId'];
        }
        if (isset($map['TunnelIkeConfig'])) {
            $model->tunnelIkeConfig = tunnelIkeConfig::fromMap($map['TunnelIkeConfig']);
        }
        if (isset($map['TunnelIndex'])) {
            $model->tunnelIndex = $map['TunnelIndex'];
        }
        if (isset($map['TunnelIpsecConfig'])) {
            $model->tunnelIpsecConfig = tunnelIpsecConfig::fromMap($map['TunnelIpsecConfig']);
        }

        return $model;
    }
}
