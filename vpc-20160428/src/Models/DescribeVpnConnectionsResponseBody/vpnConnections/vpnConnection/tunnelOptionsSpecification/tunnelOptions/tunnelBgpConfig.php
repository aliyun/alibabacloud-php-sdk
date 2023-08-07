<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponseBody\vpnConnections\vpnConnection\tunnelOptionsSpecification\tunnelOptions;

use AlibabaCloud\Tea\Model;

class tunnelBgpConfig extends Model
{
    /**
     * @description BGP的协商状态。
     *
     * - **success**：正常。
     * - **false**：异常。
     * @example success
     *
     * @var string
     */
    public $bgpStatus;

    /**
     * @description 隧道本端（阿里云侧）的自治系统号。
     *
     * @example 65530
     *
     * @var string
     */
    public $localAsn;

    /**
     * @description 隧道本端（阿里云侧）的BGP地址。
     *
     * @example 169.254.10.1
     *
     * @var string
     */
    public $localBgpIp;

    /**
     * @description 隧道对端的自治系统号。
     *
     * @example 65531
     *
     * @var string
     */
    public $peerAsn;

    /**
     * @description 隧道对端的BGP地址。
     *
     * @example 169.254.10.2
     *
     * @var string
     */
    public $peerBgpIp;

    /**
     * @description 隧道的BGP网段。
     *
     * @example 169.254.10.0/30
     *
     * @var string
     */
    public $tunnelCidr;
    protected $_name = [
        'bgpStatus'  => 'BgpStatus',
        'localAsn'   => 'LocalAsn',
        'localBgpIp' => 'LocalBgpIp',
        'peerAsn'    => 'PeerAsn',
        'peerBgpIp'  => 'PeerBgpIp',
        'tunnelCidr' => 'TunnelCidr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bgpStatus) {
            $res['BgpStatus'] = $this->bgpStatus;
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
        if (isset($map['BgpStatus'])) {
            $model->bgpStatus = $map['BgpStatus'];
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
