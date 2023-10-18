<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyTunnelAttributeResponseBody\tunnelBgpConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyTunnelAttributeResponseBody\tunnelIkeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyTunnelAttributeResponseBody\tunnelIpsecConfig;
use AlibabaCloud\Tea\Model;

class ModifyTunnelAttributeResponseBody extends Model
{
    /**
     * @description The ID of the customer gateway associated with the customer gateway.
     *
     * @example cgw-p0wx48ayhrygitm80****
     *
     * @var string
     */
    public $customerGatewayId;

    /**
     * @description Indicates whether DPD is enabled. Valid values:
     *
     *   **false**
     *   **true**
     *
     * @example true
     *
     * @var bool
     */
    public $enableDpd;

    /**
     * @description Indicates whether NAT traversal is enabled. Valid values:
     *
     *   **false**
     *   **true**
     *
     * @example true
     *
     * @var bool
     */
    public $enableNatTraversal;

    /**
     * @description The tunnel IP address.
     *
     * @example 47.XX.XX.87
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The peer CA certificate when a VPN gateway that uses an SM certificate is used to create the IPsec connection.
     *
     * @example -----BEGIN CERTIFICATE----- MIIB7zCCAZW**** -----END CERTIFICATE-----
     *
     * @var string
     */
    public $remoteCaCertificate;

    /**
     * @description The request ID.
     *
     * @example E6F36FF0-9544-3AEE-8673-A4647D50064C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The tunnel role. Valid values:
     *
     *   **master**
     *   **slave**
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
     * @description The BGP configuration.
     *
     * @var tunnelBgpConfig
     */
    public $tunnelBgpConfig;

    /**
     * @description The tunnel ID.
     *
     * @example tun-gbyz2e070xzo93****
     *
     * @var string
     */
    public $tunnelId;

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

    /**
     * @description The tunnel zone.
     *
     * @example ap-southeast-2b
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
        'requestId'           => 'RequestId',
        'role'                => 'Role',
        'state'               => 'State',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return ModifyTunnelAttributeResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['TunnelIpsecConfig'])) {
            $model->tunnelIpsecConfig = tunnelIpsecConfig::fromMap($map['TunnelIpsecConfig']);
        }
        if (isset($map['ZoneNo'])) {
            $model->zoneNo = $map['ZoneNo'];
        }

        return $model;
    }
}
