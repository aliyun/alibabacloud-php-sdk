<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallV2RoutePolicyListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallV2RoutePolicyListResponseBody\trFirewallRoutePolicies\destCandidateList;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallV2RoutePolicyListResponseBody\trFirewallRoutePolicies\srcCandidateList;

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
     * @var string
     */
    public $policyStatus;

    /**
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
        'destCandidateList' => 'DestCandidateList',
        'policyDescription' => 'PolicyDescription',
        'policyName' => 'PolicyName',
        'policyStatus' => 'PolicyStatus',
        'policyType' => 'PolicyType',
        'srcCandidateList' => 'SrcCandidateList',
        'trFirewallRoutePolicyId' => 'TrFirewallRoutePolicyId',
    ];

    public function validate()
    {
        if (\is_array($this->destCandidateList)) {
            Model::validateArray($this->destCandidateList);
        }
        if (\is_array($this->srcCandidateList)) {
            Model::validateArray($this->srcCandidateList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destCandidateList) {
            if (\is_array($this->destCandidateList)) {
                $res['DestCandidateList'] = [];
                $n1 = 0;
                foreach ($this->destCandidateList as $item1) {
                    $res['DestCandidateList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->srcCandidateList)) {
                $res['SrcCandidateList'] = [];
                $n1 = 0;
                foreach ($this->srcCandidateList as $item1) {
                    $res['SrcCandidateList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->trFirewallRoutePolicyId) {
            $res['TrFirewallRoutePolicyId'] = $this->trFirewallRoutePolicyId;
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
        if (isset($map['DestCandidateList'])) {
            if (!empty($map['DestCandidateList'])) {
                $model->destCandidateList = [];
                $n1 = 0;
                foreach ($map['DestCandidateList'] as $item1) {
                    $model->destCandidateList[$n1] = destCandidateList::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['SrcCandidateList'] as $item1) {
                    $model->srcCandidateList[$n1] = srcCandidateList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TrFirewallRoutePolicyId'])) {
            $model->trFirewallRoutePolicyId = $map['TrFirewallRoutePolicyId'];
        }

        return $model;
    }
}
