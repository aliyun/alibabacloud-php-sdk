<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyTunnelAttributeRequest;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyTunnelAttributeRequest\tunnelOptionsSpecification\tunnelBgpConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyTunnelAttributeRequest\tunnelOptionsSpecification\tunnelIkeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyTunnelAttributeRequest\tunnelOptionsSpecification\tunnelIpsecConfig;
use AlibabaCloud\Tea\Model;

class tunnelOptionsSpecification extends Model
{
    /**
     * @description Specifies whether to enable the dead peer detection (DPD) feature. Valid values:
     *
     *   **true**: DPD is enabled. The IPsec initiator sends DPD packets to verify the existence and availability of the IPsec peer. If no response is received from the peer within a specified period of time, the IPsec peer is considered disconnected. Then, the ISAKMP SA, IPsec SA, and IPsec tunnel are deleted.
     *   **false**: DPD is disabled. The IPsec initiator does not send DPD packets.
     *
     * @example true
     *
     * @var bool
     */
    public $enableDpd;

    /**
     * @description Specifies whether to enable NAT traversal. Valid values:
     *
     *   **true**: NAT traversal is enabled. After NAT traversal is enabled, the initiator does not check the UDP ports during Internet Key Exchange (IKE) negotiations and can automatically discover NAT gateway devices along the IPsec-VPN tunnel.
     *   **false**: NAT traversal is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enableNatTraversal;

    /**
     * @description The peer certificate authority (CA) certificate when you want to attach the IPsec connection to a virtual private network (VPN) gateway that uses a ShangMi (SM) certificate.
     *
     * @example -----BEGIN CERTIFICATE----- MIIB7zCCAZW**** -----END CERTIFICATE-----
     *
     * @var string
     */
    public $remoteCaCertificate;

    /**
     * @description The Border Gateway Protocol (BGP) configurations of the tunnel.
     *
     * If the BGP feature is not enabled for the tunnel, you must call the [ModifyVpnConnectionAttribute](https://help.aliyun.com/document_detail/120381.html) operation to enable the BGP feature for the tunnel and configure BGP.
     * @var tunnelBgpConfig
     */
    public $tunnelBgpConfig;

    /**
     * @description The configurations of IKE Phase 1.
     *
     * @var tunnelIkeConfig
     */
    public $tunnelIkeConfig;

    /**
     * @description The configurations of IPsec Phase 2.
     *
     * @var tunnelIpsecConfig
     */
    public $tunnelIpsecConfig;
    protected $_name = [
        'enableDpd'           => 'EnableDpd',
        'enableNatTraversal'  => 'EnableNatTraversal',
        'remoteCaCertificate' => 'RemoteCaCertificate',
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
        if (null !== $this->enableDpd) {
            $res['EnableDpd'] = $this->enableDpd;
        }
        if (null !== $this->enableNatTraversal) {
            $res['EnableNatTraversal'] = $this->enableNatTraversal;
        }
        if (null !== $this->remoteCaCertificate) {
            $res['RemoteCaCertificate'] = $this->remoteCaCertificate;
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
        if (isset($map['EnableDpd'])) {
            $model->enableDpd = $map['EnableDpd'];
        }
        if (isset($map['EnableNatTraversal'])) {
            $model->enableNatTraversal = $map['EnableNatTraversal'];
        }
        if (isset($map['RemoteCaCertificate'])) {
            $model->remoteCaCertificate = $map['RemoteCaCertificate'];
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
