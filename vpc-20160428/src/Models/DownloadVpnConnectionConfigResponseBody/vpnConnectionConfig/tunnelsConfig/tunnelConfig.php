<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig\tunnelsConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig\tunnelsConfig\tunnelConfig\ikeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig\tunnelsConfig\tunnelConfig\ipsecConfig;

class tunnelConfig extends Model
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
    public $remote;
    /**
     * @var string
     */
    public $tunnelId;
    protected $_name = [
        'ikeConfig'   => 'IkeConfig',
        'ipsecConfig' => 'IpsecConfig',
        'local'       => 'Local',
        'remote'      => 'Remote',
        'tunnelId'    => 'TunnelId',
    ];

    public function validate()
    {
        if (null !== $this->ikeConfig) {
            $this->ikeConfig->validate();
        }
        if (null !== $this->ipsecConfig) {
            $this->ipsecConfig->validate();
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

        if (null !== $this->remote) {
            $res['Remote'] = $this->remote;
        }

        if (null !== $this->tunnelId) {
            $res['TunnelId'] = $this->tunnelId;
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

        if (isset($map['Remote'])) {
            $model->remote = $map['Remote'];
        }

        if (isset($map['TunnelId'])) {
            $model->tunnelId = $map['TunnelId'];
        }

        return $model;
    }
}
