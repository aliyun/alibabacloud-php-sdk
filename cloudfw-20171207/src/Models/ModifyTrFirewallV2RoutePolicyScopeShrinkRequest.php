<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyTrFirewallV2RoutePolicyScopeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $destCandidateListShrink;

    /**
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
    public $srcCandidateListShrink;

    /**
     * @var string
     */
    public $trFirewallRoutePolicyId;
    protected $_name = [
        'destCandidateListShrink' => 'DestCandidateList',
        'firewallId'              => 'FirewallId',
        'lang'                    => 'Lang',
        'srcCandidateListShrink'  => 'SrcCandidateList',
        'trFirewallRoutePolicyId' => 'TrFirewallRoutePolicyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destCandidateListShrink) {
            $res['DestCandidateList'] = $this->destCandidateListShrink;
        }
        if (null !== $this->firewallId) {
            $res['FirewallId'] = $this->firewallId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->srcCandidateListShrink) {
            $res['SrcCandidateList'] = $this->srcCandidateListShrink;
        }
        if (null !== $this->trFirewallRoutePolicyId) {
            $res['TrFirewallRoutePolicyId'] = $this->trFirewallRoutePolicyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTrFirewallV2RoutePolicyScopeShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestCandidateList'])) {
            $model->destCandidateListShrink = $map['DestCandidateList'];
        }
        if (isset($map['FirewallId'])) {
            $model->firewallId = $map['FirewallId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SrcCandidateList'])) {
            $model->srcCandidateListShrink = $map['SrcCandidateList'];
        }
        if (isset($map['TrFirewallRoutePolicyId'])) {
            $model->trFirewallRoutePolicyId = $map['TrFirewallRoutePolicyId'];
        }

        return $model;
    }
}
