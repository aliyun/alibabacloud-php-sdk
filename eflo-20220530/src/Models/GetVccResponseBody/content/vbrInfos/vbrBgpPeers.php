<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content\vbrInfos;

use AlibabaCloud\Tea\Model;

class vbrBgpPeers extends Model
{
    /**
     * @description BGP Group ID
     *
     * @example bgpg-2ze2sit2vakrkapvy****
     *
     * @var string
     */
    public $bgpGroupId;

    /**
     * @description BGP peer ID
     *
     * @example bgp-uf6heugif9enu48rj****
     *
     * @var string
     */
    public $bgpPeerId;

    /**
     * @description Peer AS No.
     *
     * @example 98765****
     *
     * @var string
     */
    public $peerAsn;

    /**
     * @description BGP peer IP address
     *
     * @example 169.254.****
     *
     * @var string
     */
    public $peerIpAddress;

    /**
     * @description The status of the BGP peer. Valid values:
     *
     *   Pending: pending
     *   Available: The route is available.
     *   Modifying: being modified
     *   Deleting: The IPv4 gateway is being deleted.
     *   Deleted
     *   Not Available
     *
     * @example Available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'bgpGroupId'    => 'BgpGroupId',
        'bgpPeerId'     => 'BgpPeerId',
        'peerAsn'       => 'PeerAsn',
        'peerIpAddress' => 'PeerIpAddress',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bgpGroupId) {
            $res['BgpGroupId'] = $this->bgpGroupId;
        }
        if (null !== $this->bgpPeerId) {
            $res['BgpPeerId'] = $this->bgpPeerId;
        }
        if (null !== $this->peerAsn) {
            $res['PeerAsn'] = $this->peerAsn;
        }
        if (null !== $this->peerIpAddress) {
            $res['PeerIpAddress'] = $this->peerIpAddress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vbrBgpPeers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BgpGroupId'])) {
            $model->bgpGroupId = $map['BgpGroupId'];
        }
        if (isset($map['BgpPeerId'])) {
            $model->bgpPeerId = $map['BgpPeerId'];
        }
        if (isset($map['PeerAsn'])) {
            $model->peerAsn = $map['PeerAsn'];
        }
        if (isset($map['PeerIpAddress'])) {
            $model->peerIpAddress = $map['PeerIpAddress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
