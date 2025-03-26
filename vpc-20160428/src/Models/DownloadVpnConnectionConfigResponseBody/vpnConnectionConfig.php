<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig\ikeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig\ipsecConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig\tunnelsConfig;

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
     * @var string
     */
    public $local;

    /**
     * @var string
     */
    public $localSubnet;

    /**
     * @var string
     */
    public $remote;

    /**
     * @var string
     */
    public $remoteSubnet;

    /**
     * @var tunnelsConfig
     */
    public $tunnelsConfig;
    protected $_name = [
        'ikeConfig' => 'IkeConfig',
        'ipsecConfig' => 'IpsecConfig',
        'local' => 'Local',
        'localSubnet' => 'LocalSubnet',
        'remote' => 'Remote',
        'remoteSubnet' => 'RemoteSubnet',
        'tunnelsConfig' => 'TunnelsConfig',
    ];

    public function validate()
    {
        if (null !== $this->ikeConfig) {
            $this->ikeConfig->validate();
        }
        if (null !== $this->ipsecConfig) {
            $this->ipsecConfig->validate();
        }
        if (null !== $this->tunnelsConfig) {
            $this->tunnelsConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ikeConfig) {
            $res['IkeConfig'] = null !== $this->ikeConfig ? $this->ikeConfig->toArray($noStream) : $this->ikeConfig;
        }

        if (null !== $this->ipsecConfig) {
            $res['IpsecConfig'] = null !== $this->ipsecConfig ? $this->ipsecConfig->toArray($noStream) : $this->ipsecConfig;
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
            $res['TunnelsConfig'] = null !== $this->tunnelsConfig ? $this->tunnelsConfig->toArray($noStream) : $this->tunnelsConfig;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['TunnelsConfig'])) {
            $model->tunnelsConfig = tunnelsConfig::fromMap($map['TunnelsConfig']);
        }

        return $model;
    }
}
