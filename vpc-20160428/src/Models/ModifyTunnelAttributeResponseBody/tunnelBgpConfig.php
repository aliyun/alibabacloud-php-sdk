<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyTunnelAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class tunnelBgpConfig extends Model
{
    /**
     * @description Indicates whether the BGP feature is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enableBgp;

    /**
     * @description The local ASN.
     *
     * @example 65530
     *
     * @var int
     */
    public $localAsn;

    /**
     * @description The BGP IP address of the tunnel.
     *
     * @example 169.254.11.1
     *
     * @var string
     */
    public $localBgpIp;

    /**
     * @description The peer ASN.
     *
     * @example 65531
     *
     * @var int
     */
    public $peerAsn;

    /**
     * @description The BGP IP address of the peer.
     *
     * @example 169.254.11.2
     *
     * @var string
     */
    public $peerBgpIp;

    /**
     * @description The CIDR block to which the tunnel BGP IP address belongs.
     *
     * @example 169.254.11.0/30
     *
     * @var string
     */
    public $tunnelCidr;
    protected $_name = [
        'enableBgp' => 'EnableBgp',
        'localAsn' => 'LocalAsn',
        'localBgpIp' => 'LocalBgpIp',
        'peerAsn' => 'PeerAsn',
        'peerBgpIp' => 'PeerBgpIp',
        'tunnelCidr' => 'TunnelCidr',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableBgp) {
            $res['EnableBgp'] = $this->enableBgp;
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tunnelBgpConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableBgp'])) {
            $model->enableBgp = $map['EnableBgp'];
        }
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

        return $model;
    }
}
