<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyTrFirewallV2RoutePolicyScopeRequest\destCandidateList;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyTrFirewallV2RoutePolicyScopeRequest\srcCandidateList;
use AlibabaCloud\Tea\Model;

class ModifyTrFirewallV2RoutePolicyScopeRequest extends Model
{
    /**
     * @var destCandidateList[]
     */
    public $destCandidateList;

    /**
     * @description This parameter is required.
     *
     * @example vfw-tr-6520de0253bc4669bbd9
     *
     * @var string
     */
    public $firewallId;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $shouldRecover;

    /**
     * @var srcCandidateList[]
     */
    public $srcCandidateList;

    /**
     * @description This parameter is required.
     *
     * @example policy-4d724d0139df48f18091
     *
     * @var string
     */
    public $trFirewallRoutePolicyId;
    protected $_name = [
        'destCandidateList'       => 'DestCandidateList',
        'firewallId'              => 'FirewallId',
        'lang'                    => 'Lang',
        'shouldRecover'           => 'ShouldRecover',
        'srcCandidateList'        => 'SrcCandidateList',
        'trFirewallRoutePolicyId' => 'TrFirewallRoutePolicyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destCandidateList) {
            $res['DestCandidateList'] = [];
            if (null !== $this->destCandidateList && \is_array($this->destCandidateList)) {
                $n = 0;
                foreach ($this->destCandidateList as $item) {
                    $res['DestCandidateList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->firewallId) {
            $res['FirewallId'] = $this->firewallId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->shouldRecover) {
            $res['ShouldRecover'] = $this->shouldRecover;
        }
        if (null !== $this->srcCandidateList) {
            $res['SrcCandidateList'] = [];
            if (null !== $this->srcCandidateList && \is_array($this->srcCandidateList)) {
                $n = 0;
                foreach ($this->srcCandidateList as $item) {
                    $res['SrcCandidateList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->trFirewallRoutePolicyId) {
            $res['TrFirewallRoutePolicyId'] = $this->trFirewallRoutePolicyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTrFirewallV2RoutePolicyScopeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestCandidateList'])) {
            if (!empty($map['DestCandidateList'])) {
                $model->destCandidateList = [];
                $n                        = 0;
                foreach ($map['DestCandidateList'] as $item) {
                    $model->destCandidateList[$n++] = null !== $item ? destCandidateList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FirewallId'])) {
            $model->firewallId = $map['FirewallId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ShouldRecover'])) {
            $model->shouldRecover = $map['ShouldRecover'];
        }
        if (isset($map['SrcCandidateList'])) {
            if (!empty($map['SrcCandidateList'])) {
                $model->srcCandidateList = [];
                $n                       = 0;
                foreach ($map['SrcCandidateList'] as $item) {
                    $model->srcCandidateList[$n++] = null !== $item ? srcCandidateList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TrFirewallRoutePolicyId'])) {
            $model->trFirewallRoutePolicyId = $map['TrFirewallRoutePolicyId'];
        }

        return $model;
    }
}
