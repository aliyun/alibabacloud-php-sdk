<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallV2RoutePolicyListResponseBody;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallV2RoutePolicyListResponseBody\trFirewallRoutePolicies\destCandidateList;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallV2RoutePolicyListResponseBody\trFirewallRoutePolicies\srcCandidateList;
use AlibabaCloud\Tea\Model;

class trFirewallRoutePolicies extends Model
{
    /**
     * @description The secondary traffic redirection instances.
     *
     * @var destCandidateList[]
     */
    public $destCandidateList;

    /**
     * @description The description of the routing policy.
     *
     * @example test
     *
     * @var string
     */
    public $policyDescription;

    /**
     * @description The name of the routing policy.
     *
     * @example TEST_VPC_FW
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The status of the routing policy. Valid values:
     *
     *   creating: The policy is being created.
     *   deleting: The policy is being deleted.
     *   opening: The policy is being enabled.
     *   opened: The policy is enabled.
     *   closing: The policy is being disabled.
     *   closed: The policy is disabled.
     *
     * @example opened
     *
     * @var string
     */
    public $policyStatus;

    /**
     * @description The type of the traffic redirection scenario of the VPC firewall. Valid values:
     *
     *   **fullmesh**: interconnected instances
     *   **one_to_one**: instance to instance
     *   **end_to_end**: instance to instances
     *
     * @example fullmesh
     *
     * @var string
     */
    public $policyType;

    /**
     * @description The primary traffic redirection instances.
     *
     * @var srcCandidateList[]
     */
    public $srcCandidateList;

    /**
     * @description The ID of the routing policy.
     *
     * @example policy-7b66257c14e141fb****
     *
     * @var string
     */
    public $trFirewallRoutePolicyId;
    protected $_name = [
        'destCandidateList'       => 'DestCandidateList',
        'policyDescription'       => 'PolicyDescription',
        'policyName'              => 'PolicyName',
        'policyStatus'            => 'PolicyStatus',
        'policyType'              => 'PolicyType',
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
        if (null !== $this->policyDescription) {
            $res['PolicyDescription'] = $this->policyDescription;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyStatus) {
            $res['PolicyStatus'] = $this->policyStatus;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
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
     * @return trFirewallRoutePolicies
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
        if (isset($map['PolicyDescription'])) {
            $model->policyDescription = $map['PolicyDescription'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyStatus'])) {
            $model->policyStatus = $map['PolicyStatus'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
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
