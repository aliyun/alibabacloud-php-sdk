<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateTrFirewallV2RoutePolicyRequest\destCandidateList;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateTrFirewallV2RoutePolicyRequest\srcCandidateList;

class CreateTrFirewallV2RoutePolicyRequest extends Model
{
    /**
     * @var destCandidateList[]
     */
    public $destCandidateList;

    /**
     * @var string
     */
    public $firewallId;

    /**
     * @var string
     */
    public $lang;

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
    public $policyType;

    /**
     * @var srcCandidateList[]
     */
    public $srcCandidateList;
    protected $_name = [
        'destCandidateList' => 'DestCandidateList',
        'firewallId' => 'FirewallId',
        'lang' => 'Lang',
        'policyDescription' => 'PolicyDescription',
        'policyName' => 'PolicyName',
        'policyType' => 'PolicyType',
        'srcCandidateList' => 'SrcCandidateList',
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

        if (null !== $this->firewallId) {
            $res['FirewallId'] = $this->firewallId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->policyDescription) {
            $res['PolicyDescription'] = $this->policyDescription;
        }

        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
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

        if (isset($map['FirewallId'])) {
            $model->firewallId = $map['FirewallId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PolicyDescription'])) {
            $model->policyDescription = $map['PolicyDescription'];
        }

        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
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

        return $model;
    }
}
