<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class vpnBgpConfig extends Model
{
    /**
     * @description Indicates whether BGP is enabled for the IPsec-VPN connection.
     *
     *   **true:** BGP is enabled.
     *   **false:** BGP is disabled.
     *
     * @example true
     *
     * @var string
     */
    public $enableBgp;

    /**
     * @description The ASN on the Alibaba Cloud side.
     *
     * @example 45104
     *
     * @var int
     */
    public $localAsn;

    /**
     * @description The BGP IP address on the Alibaba Cloud side.
     *
     * @example 169.254.11.1
     *
     * @var string
     */
    public $localBgpIp;

    /**
     * @description The ASN on the data center side.
     *
     * @example 65535
     *
     * @var int
     */
    public $peerAsn;

    /**
     * @description The BGP IP address on the data center side.
     *
     * @example 169.254.11.2
     *
     * @var string
     */
    public $peerBgpIp;

    /**
     * @description The negotiation status of BGP.
     *
     *   **success:** normal.
     *   **false:** abnormal.
     *
     * @example false
     *
     * @var string
     */
    public $status;

    /**
     * @description The CIDR block of the IPsec tunnel.
     *
     * @example 169.254.11.0/30
     *
     * @var string
     */
    public $tunnelCidr;
    protected $_name = [
        'enableBgp'  => 'EnableBgp',
        'localAsn'   => 'LocalAsn',
        'localBgpIp' => 'LocalBgpIp',
        'peerAsn'    => 'PeerAsn',
        'peerBgpIp'  => 'PeerBgpIp',
        'status'     => 'Status',
        'tunnelCidr' => 'TunnelCidr',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tunnelCidr) {
            $res['TunnelCidr'] = $this->tunnelCidr;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TunnelCidr'])) {
            $model->tunnelCidr = $map['TunnelCidr'];
        }

        return $model;
    }
}
