<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionResponseBody\tunnelOptionsSpecification;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionResponseBody\tunnelOptionsSpecification\tunnelOptions\tunnelBgpConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionResponseBody\tunnelOptionsSpecification\tunnelOptions\tunnelIkeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionResponseBody\tunnelOptionsSpecification\tunnelOptions\tunnelIpsecConfig;
use AlibabaCloud\Tea\Model;

class tunnelOptions extends Model
{
    /**
     * @description The ID of the customer gateway associated with the tunnel.
     *
     * @example cgw-p0wy363lucf1uyae8****
     *
     * @var string
     */
    public $customerGatewayId;

    /**
     * @description Indicates whether the DPD feature is enabled for the tunnel. Valid values:
     *
     *   **false**
     *   **true**
     *
     * @example true
     *
     * @var string
     */
    public $enableDpd;

    /**
     * @description Indicates whether NAT traversal is enabled for the tunnel. Valid values:
     *
     *   **false**
     *   **true**
     *
     * @example true
     *
     * @var string
     */
    public $enableNatTraversal;

    /**
     * @description The tunnel IP address.
     *
     * @example 47.21.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The CA certificate of the tunnel peer.
     *
     * This parameter is returned only if the VPN gateway is of the ShangMi (SM) type.
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
     * @description The tunnel status. Valid values:
     *
     *   **active**
     *   **updating**
     *   **deleting**
     *
     * @example active
     *
     * @var string
     */
    public $state;

    /**
     * @description The state of the IPsec-VPN connection. Valid values:
     *
     *   **ike_sa_not_established**: Phase 1 negotiations failed.
     *   **ike_sa_established**: Phase 1 negotiations succeeded.
     *   **ipsec_sa_not_established**: Phase 2 negotiations failed.
     *   **ipsec_sa_established**: Phase 2 negotiations succeeded.
     *
     * @example ipsec_sa_established
     *
     * @var string
     */
    public $status;

    /**
     * @description The BGP configurations.
     *
     * @var tunnelBgpConfig
     */
    public $tunnelBgpConfig;

    /**
     * @description The tunnel ID.
     *
     * @example tun-opsqc4d97wni27****
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
     * @var int
     */
    public $tunnelIndex;

    /**
     * @description The configurations of Phase 2 negotiations.
     *
     * @var tunnelIpsecConfig
     */
    public $tunnelIpsecConfig;

    /**
     * @description The zone where the tunnel is deployed.
     *
     * You can call [DescribeZones](https://help.aliyun.com/document_detail/36064.html) to query zone IDs.
     * @example cn-hangzhou-i
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
        'tunnelIndex'         => 'TunnelIndex',
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
        if (null !== $this->tunnelIndex) {
            $res['TunnelIndex'] = $this->tunnelIndex;
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
        if (isset($map['TunnelIndex'])) {
            $model->tunnelIndex = $map['TunnelIndex'];
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
