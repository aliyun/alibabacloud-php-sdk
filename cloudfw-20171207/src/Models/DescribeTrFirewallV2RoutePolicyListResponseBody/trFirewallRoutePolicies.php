<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallV2RoutePolicyListResponseBody;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallV2RoutePolicyListResponseBody\trFirewallRoutePolicies\destCandidateList;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallV2RoutePolicyListResponseBody\trFirewallRoutePolicies\srcCandidateList;
use AlibabaCloud\Tea\Model;

class trFirewallRoutePolicies extends Model
{
    /**
     * @var destCandidateList[]
     */
    public $destCandidateList;

    /**
     * @var string
     */
    public $policyDescription;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @example opened
     *
     * @var string
     */
    public $policyStatus;

    /**
     * @example fullmesh
     *
     * @var string
     */
    public $policyType;

    /**
     * @var srcCandidateList[]
     */
    public $srcCandidateList;

    /**
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
