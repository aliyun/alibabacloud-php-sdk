<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody\tunnelOptionsSpecification\tunnelBgpConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody\tunnelOptionsSpecification\tunnelIkeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody\tunnelOptionsSpecification\tunnelIpsecConfig;
use AlibabaCloud\Tea\Model;

class tunnelOptionsSpecification extends Model
{
    /**
     * @description The ID of the customer gateway that is associated with the tunnel.
     *
     * @example cgw-p0w2jemrcj5u61un8****
     *
     * @var string
     */
    public $customerGatewayId;

    /**
     * @description Whether the DPD feature is enabled for the tunnel.
     *
     *   **true**: The feature is enabled.
     *   **false**: The feature is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enableDpd;

    /**
     * @description Indicates whether traversal feature is enabled for the tunnel. Valid values:
     *
     *   **true**: The feature is enabled.
     *   **false**: The feature is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enableNatTraversal;

    /**
     * @description The IP address on the Alibaba Cloud side.
     *
     * @example 47.XX.XX.66
     *
     * @var string
     */
    public $internetIp;

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
     * @description The status of the tunnel. Valid values:
     *
     *   **active**: The tunnel is active.
     *   **updating**: The tunnel is being updated.
     *   **deleting:** The tunnel is being deleted.
     *
     * @example active
     *
     * @var string
     */
    public $state;

    /**
     * @description BGP configuration.
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
     * @description The configurations of Phase 1 negotiations.
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
     * @description The configurations of Phase 2 negotiations.
     *
     * @var tunnelIpsecConfig
     */
    public $tunnelIpsecConfig;
    protected $_name = [
        'customerGatewayId' => 'CustomerGatewayId',
        'enableDpd' => 'EnableDpd',
        'enableNatTraversal' => 'EnableNatTraversal',
        'internetIp' => 'InternetIp',
        'role' => 'Role',
        'state' => 'State',
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
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
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
