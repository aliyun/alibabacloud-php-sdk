<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig\ikeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig\ipsecConfig;
use AlibabaCloud\Tea\Model;

class vpnConnectionConfig extends Model
{
    /**
     * @var string
     */
    public $remote;

    /**
     * @var string
     */
    public $local;

    /**
     * @var string
     */
    public $remoteSubnet;

    /**
     * @var ipsecConfig
     */
    public $ipsecConfig;

    /**
     * @var ikeConfig
     */
    public $ikeConfig;

    /**
     * @var string
     */
    public $localSubnet;
    protected $_name = [
        'remote'       => 'Remote',
        'local'        => 'Local',
        'remoteSubnet' => 'RemoteSubnet',
        'ipsecConfig'  => 'IpsecConfig',
        'ikeConfig'    => 'IkeConfig',
        'localSubnet'  => 'LocalSubnet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remote) {
            $res['Remote'] = $this->remote;
        }
        if (null !== $this->local) {
            $res['Local'] = $this->local;
        }
        if (null !== $this->remoteSubnet) {
            $res['RemoteSubnet'] = $this->remoteSubnet;
        }
        if (null !== $this->ipsecConfig) {
            $res['IpsecConfig'] = null !== $this->ipsecConfig ? $this->ipsecConfig->toMap() : null;
        }
        if (null !== $this->ikeConfig) {
            $res['IkeConfig'] = null !== $this->ikeConfig ? $this->ikeConfig->toMap() : null;
        }
        if (null !== $this->localSubnet) {
            $res['LocalSubnet'] = $this->localSubnet;
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
        if (isset($map['Remote'])) {
            $model->remote = $map['Remote'];
        }
        if (isset($map['Local'])) {
            $model->local = $map['Local'];
        }
        if (isset($map['RemoteSubnet'])) {
            $model->remoteSubnet = $map['RemoteSubnet'];
        }
        if (isset($map['IpsecConfig'])) {
            $model->ipsecConfig = ipsecConfig::fromMap($map['IpsecConfig']);
        }
        if (isset($map['IkeConfig'])) {
            $model->ikeConfig = ikeConfig::fromMap($map['IkeConfig']);
        }
        if (isset($map['LocalSubnet'])) {
            $model->localSubnet = $map['LocalSubnet'];
        }

        return $model;
    }
}
