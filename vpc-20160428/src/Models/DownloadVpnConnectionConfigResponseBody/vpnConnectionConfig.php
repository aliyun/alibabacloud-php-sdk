<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig\bgpConfigs;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig\ikeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig\ipsecConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig\tunnelsConfig;
use AlibabaCloud\Tea\Model;

class vpnConnectionConfig extends Model
{
    /**
     * @var bgpConfigs
     */
    public $bgpConfigs;

    /**
     * @description The configurations of Phase 1 negotiations.
     *
     * @var ikeConfig
     */
    public $ikeConfig;

    /**
     * @description The configurations of Phase 2 negotiations.
     *
     * @var ipsecConfig
     */
    public $ipsecConfig;

    /**
     * @description The identifier of the customer gateway.
     *
     * @example 139.196.XX.XX
     *
     * @var string
     */
    public $local;

    /**
     * @description The CIDR block on the data center side.
     *
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $localSubnet;

    /**
     * @description The identifier of the VPN gateway.
     *
     * @example 116.62.XX.XX
     *
     * @var string
     */
    public $remote;

    /**
     * @description The CIDR block on the virtual private cloud (VPC) side.
     *
     * @example 192.168.0.0/16
     *
     * @var string
     */
    public $remoteSubnet;

    /**
     * @description The tunnel configurations of the peer gateway device.
     *
     * The parameters in **TunnelsConfig** are returned only when the IPsec-VPN connection supports the dual-tunnel mode.
     *
     * @var tunnelsConfig
     */
    public $tunnelsConfig;
    protected $_name = [
        'bgpConfigs' => 'BgpConfigs',
        'ikeConfig' => 'IkeConfig',
        'ipsecConfig' => 'IpsecConfig',
        'local' => 'Local',
        'localSubnet' => 'LocalSubnet',
        'remote' => 'Remote',
        'remoteSubnet' => 'RemoteSubnet',
        'tunnelsConfig' => 'TunnelsConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bgpConfigs) {
            $res['BgpConfigs'] = null !== $this->bgpConfigs ? $this->bgpConfigs->toMap() : null;
        }
        if (null !== $this->ikeConfig) {
            $res['IkeConfig'] = null !== $this->ikeConfig ? $this->ikeConfig->toMap() : null;
        }
        if (null !== $this->ipsecConfig) {
            $res['IpsecConfig'] = null !== $this->ipsecConfig ? $this->ipsecConfig->toMap() : null;
        }
        if (null !== $this->local) {
            $res['Local'] = $this->local;
        }
        if (null !== $this->localSubnet) {
            $res['LocalSubnet'] = $this->localSubnet;
        }
        if (null !== $this->remote) {
            $res['Remote'] = $this->remote;
        }
        if (null !== $this->remoteSubnet) {
            $res['RemoteSubnet'] = $this->remoteSubnet;
        }
        if (null !== $this->tunnelsConfig) {
            $res['TunnelsConfig'] = null !== $this->tunnelsConfig ? $this->tunnelsConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpnConnectionConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BgpConfigs'])) {
            $model->bgpConfigs = bgpConfigs::fromMap($map['BgpConfigs']);
        }
        if (isset($map['IkeConfig'])) {
            $model->ikeConfig = ikeConfig::fromMap($map['IkeConfig']);
        }
        if (isset($map['IpsecConfig'])) {
            $model->ipsecConfig = ipsecConfig::fromMap($map['IpsecConfig']);
        }
        if (isset($map['Local'])) {
            $model->local = $map['Local'];
        }
        if (isset($map['LocalSubnet'])) {
            $model->localSubnet = $map['LocalSubnet'];
        }
        if (isset($map['Remote'])) {
            $model->remote = $map['Remote'];
        }
        if (isset($map['RemoteSubnet'])) {
            $model->remoteSubnet = $map['RemoteSubnet'];
        }
        if (isset($map['TunnelsConfig'])) {
            $model->tunnelsConfig = tunnelsConfig::fromMap($map['TunnelsConfig']);
        }

        return $model;
    }
}
