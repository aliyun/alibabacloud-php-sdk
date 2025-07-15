<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig\bgpConfigs;

use AlibabaCloud\Tea\Model;

class bgpConfig extends Model
{
    /**
     * @var string
     */
    public $localAsn;

    /**
     * @var string
     */
    public $localBgpIp;

    /**
     * @var string
     */
    public $peerAsn;

    /**
     * @var string
     */
    public $peerBgpIp;

    /**
     * @var string
     */
    public $tunnelCidr;

    /**
     * @var string
     */
    public $tunnelId;
    protected $_name = [
        'localAsn' => 'LocalAsn',
        'localBgpIp' => 'LocalBgpIp',
        'peerAsn' => 'PeerAsn',
        'peerBgpIp' => 'PeerBgpIp',
        'tunnelCidr' => 'TunnelCidr',
        'tunnelId' => 'TunnelId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->localAsn) {
            $res['LocalAsn'] = $this->localAsn;
        }
        if (null !== $this->localBgpIp) {
            $res['LocalBgpIp'] = $this->localBgpIp;
        }
        if (null !== $this->peerAsn) {
            $res['PeerAsn'] = $this->peerAsn;
        }
        if (null !== $this->peerBgpIp) {
            $res['PeerBgpIp'] = $this->peerBgpIp;
        }
        if (null !== $this->tunnelCidr) {
            $res['TunnelCidr'] = $this->tunnelCidr;
        }
        if (null !== $this->tunnelId) {
            $res['TunnelId'] = $this->tunnelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bgpConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocalAsn'])) {
            $model->localAsn = $map['LocalAsn'];
        }
        if (isset($map['LocalBgpIp'])) {
            $model->localBgpIp = $map['LocalBgpIp'];
        }
        if (isset($map['PeerAsn'])) {
            $model->peerAsn = $map['PeerAsn'];
        }
        if (isset($map['PeerBgpIp'])) {
            $model->peerBgpIp = $map['PeerBgpIp'];
        }
        if (isset($map['TunnelCidr'])) {
            $model->tunnelCidr = $map['TunnelCidr'];
        }
        if (isset($map['TunnelId'])) {
            $model->tunnelId = $map['TunnelId'];
        }

        return $model;
    }
}
