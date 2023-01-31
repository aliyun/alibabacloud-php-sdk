<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig\ikeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig\ipsecConfig;
use AlibabaCloud\Tea\Model;

class vpnConnectionConfig extends Model
{
    /**
     * @var ikeConfig
     */
    public $ikeConfig;

    /**
     * @var ipsecConfig
     */
    public $ipsecConfig;

    /**
     * @example 139.196.XX.XX
     *
     * @var string
     */
    public $local;

    /**
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $localSubnet;

    /**
     * @example 116.62.XX.XX
     *
     * @var string
     */
    public $remote;

    /**
     * @example 192.168.0.0/16
     *
     * @var string
     */
    public $remoteSubnet;
    protected $_name = [
        'ikeConfig'    => 'IkeConfig',
        'ipsecConfig'  => 'IpsecConfig',
        'local'        => 'Local',
        'localSubnet'  => 'LocalSubnet',
        'remote'       => 'Remote',
        'remoteSubnet' => 'RemoteSubnet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

        return $model;
    }
}
