<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2ListResponseBody\vpcTrFirewalls;

use AlibabaCloud\Tea\Model;

class protectedResource extends Model
{
    /**
     * @description The number of protected resources.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The protected peer transit routers.
     *
     * @var string[]
     */
    public $peerTrList;

    /**
     * @description The protected virtual border routers (VBRs).
     *
     * @var string[]
     */
    public $vbrList;

    /**
     * @description The protected VPCs.
     *
     * @var string[]
     */
    public $vpcList;

    /**
     * @description The protected VPN gateways.
     *
     * @var string[]
     */
    public $vpnList;
    protected $_name = [
        'count'      => 'Count',
        'peerTrList' => 'PeerTrList',
        'vbrList'    => 'VbrList',
        'vpcList'    => 'VpcList',
        'vpnList'    => 'VpnList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->peerTrList) {
            $res['PeerTrList'] = $this->peerTrList;
        }
        if (null !== $this->vbrList) {
            $res['VbrList'] = $this->vbrList;
        }
        if (null !== $this->vpcList) {
            $res['VpcList'] = $this->vpcList;
        }
        if (null !== $this->vpnList) {
            $res['VpnList'] = $this->vpnList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return protectedResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['PeerTrList'])) {
            if (!empty($map['PeerTrList'])) {
                $model->peerTrList = $map['PeerTrList'];
            }
        }
        if (isset($map['VbrList'])) {
            if (!empty($map['VbrList'])) {
                $model->vbrList = $map['VbrList'];
            }
        }
        if (isset($map['VpcList'])) {
            if (!empty($map['VpcList'])) {
                $model->vpcList = $map['VpcList'];
            }
        }
        if (isset($map['VpnList'])) {
            if (!empty($map['VpnList'])) {
                $model->vpnList = $map['VpnList'];
            }
        }

        return $model;
    }
}
