<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyTrFirewallV2RoutePolicyScopeShrinkRequest extends Model
{
    /**
     * @description The secondary traffic redirection instances.
     *
     * @var string
     */
    public $destCandidateListShrink;

    /**
     * @description The instance ID of the virtual private cloud (VPC) firewall.
     *
     * This parameter is required.
     * @example vfw-tr-6520de0253bc4669bbd9
     *
     * @var string
     */
    public $firewallId;

    /**
     * @description The language of the content within the response. Valid values:
     *
     *  **zh** (default): Chinese
     *  **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description Specifies whether to restore the traffic redirection configurations. Valid values:
     *
     *   true: roll back
     *   false: withdraw
     *
     * @example false
     *
     * @var string
     */
    public $shouldRecover;

    /**
     * @description The primary traffic redirection instances.
     *
     * @var string
     */
    public $srcCandidateListShrink;

    /**
     * @description The ID of the routing policy.
     *
     * This parameter is required.
     * @example policy-4d724d0139df48f18091
     *
     * @var string
     */
    public $trFirewallRoutePolicyId;
    protected $_name = [
        'destCandidateListShrink' => 'DestCandidateList',
        'firewallId'              => 'FirewallId',
        'lang'                    => 'Lang',
        'shouldRecover'           => 'ShouldRecover',
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
        if (null !== $this->shouldRecover) {
            $res['ShouldRecover'] = $this->shouldRecover;
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
        if (isset($map['ShouldRecover'])) {
            $model->shouldRecover = $map['ShouldRecover'];
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
