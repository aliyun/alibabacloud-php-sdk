<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content\vbrInfos;

use AlibabaCloud\Dara\Model;

class vbrBgpPeers extends Model
{
    /**
     * @var string
     */
    public $bgpGroupId;

    /**
     * @var string
     */
    public $bgpPeerId;

    /**
     * @var string
     */
    public $peerAsn;

    /**
     * @var string
     */
    public $peerIpAddress;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'bgpGroupId' => 'BgpGroupId',
        'bgpPeerId' => 'BgpPeerId',
        'peerAsn' => 'PeerAsn',
        'peerIpAddress' => 'PeerIpAddress',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
