<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallPolicyBackUpAssociationListRequest\candidateList;
use AlibabaCloud\Tea\Model;

class DescribeTrFirewallPolicyBackUpAssociationListRequest extends Model
{
    /**
     * @var candidateList[]
     */
    public $candidateList;

    /**
     * @description The instance ID of the VPC firewall.
     *
     * @example vfw-tr-8b268ce1b26e4c68****
     *
     * @var string
     */
    public $firewallId;

    /**
     * @description The language of the content within the response. Valid values:
     *
     *   **zh** (default): Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the routing policy.
     *
     * @example policy-5dcafb12ff794a56****
     *
     * @var string
     */
    public $trFirewallRoutePolicyId;
    protected $_name = [
        'candidateList'           => 'CandidateList',
        'firewallId'              => 'FirewallId',
        'lang'                    => 'Lang',
        'trFirewallRoutePolicyId' => 'TrFirewallRoutePolicyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->candidateList) {
            $res['CandidateList'] = [];
            if (null !== $this->candidateList && \is_array($this->candidateList)) {
                $n = 0;
                foreach ($this->candidateList as $item) {
                    $res['CandidateList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->firewallId) {
            $res['FirewallId'] = $this->firewallId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->trFirewallRoutePolicyId) {
            $res['TrFirewallRoutePolicyId'] = $this->trFirewallRoutePolicyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTrFirewallPolicyBackUpAssociationListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CandidateList'])) {
            if (!empty($map['CandidateList'])) {
                $model->candidateList = [];
                $n                    = 0;
                foreach ($map['CandidateList'] as $item) {
                    $model->candidateList[$n++] = null !== $item ? candidateList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FirewallId'])) {
            $model->firewallId = $map['FirewallId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['TrFirewallRoutePolicyId'])) {
            $model->trFirewallRoutePolicyId = $map['TrFirewallRoutePolicyId'];
        }

        return $model;
    }
}
