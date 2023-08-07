<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig\tunnelsConfig;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig\tunnelsConfig\tunnelConfig\ikeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig\tunnelsConfig\tunnelConfig\ipsecConfig;
use AlibabaCloud\Tea\Model;

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
        if (null !== $this->remote) {
            $res['Remote'] = $this->remote;
        }
        if (null !== $this->tunnelId) {
            $res['TunnelId'] = $this->tunnelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tunnelConfig
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
        if (isset($map['Remote'])) {
            $model->remote = $map['Remote'];
        }
        if (isset($map['TunnelId'])) {
            $model->tunnelId = $map['TunnelId'];
        }

        return $model;
    }
}
