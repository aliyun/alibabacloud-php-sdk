<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnConnectionAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class vpnBgpConfig extends Model
{
    /**
     * @var string
     */
    public $status;

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
    public $enableBgp;

    /**
     * @var string
     */
    public $localBgpIp;

    /**
     * @var int
     */
    public $peerAsn;

    /**
     * @var int
     */
    public $localAsn;
    protected $_name = [
        'status'     => 'Status',
        'peerBgpIp'  => 'PeerBgpIp',
        'tunnelCidr' => 'TunnelCidr',
        'enableBgp'  => 'EnableBgp',
        'localBgpIp' => 'LocalBgpIp',
        'peerAsn'    => 'PeerAsn',
        'localAsn'   => 'LocalAsn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->peerBgpIp) {
            $res['PeerBgpIp'] = $this->peerBgpIp;
        }
        if (null !== $this->tunnelCidr) {
            $res['TunnelCidr'] = $this->tunnelCidr;
        }
        if (null !== $this->enableBgp) {
            $res['EnableBgp'] = $this->enableBgp;
        }
        if (null !== $this->localBgpIp) {
            $res['LocalBgpIp'] = $this->localBgpIp;
        }
        if (null !== $this->peerAsn) {
            $res['PeerAsn'] = $this->peerAsn;
        }
        if (null !== $this->localAsn) {
            $res['LocalAsn'] = $this->localAsn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpnBgpConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PeerBgpIp'])) {
            $model->peerBgpIp = $map['PeerBgpIp'];
        }
        if (isset($map['TunnelCidr'])) {
            $model->tunnelCidr = $map['TunnelCidr'];
        }
        if (isset($map['EnableBgp'])) {
            $model->enableBgp = $map['EnableBgp'];
        }
        if (isset($map['LocalBgpIp'])) {
            $model->localBgpIp = $map['LocalBgpIp'];
        }
        if (isset($map['PeerAsn'])) {
            $model->peerAsn = $map['PeerAsn'];
        }
        if (isset($map['LocalAsn'])) {
            $model->localAsn = $map['LocalAsn'];
        }

        return $model;
    }
}
