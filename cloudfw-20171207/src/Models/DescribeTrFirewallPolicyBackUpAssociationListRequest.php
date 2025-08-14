<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallPolicyBackUpAssociationListRequest\candidateList;

class DescribeTrFirewallPolicyBackUpAssociationListRequest extends Model
{
    /**
     * @var candidateList[]
     */
    public $candidateList;

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
    public $trFirewallRoutePolicyId;
    protected $_name = [
        'candidateList' => 'CandidateList',
        'firewallId' => 'FirewallId',
        'lang' => 'Lang',
        'trFirewallRoutePolicyId' => 'TrFirewallRoutePolicyId',
    ];

    public function validate()
    {
        if (\is_array($this->candidateList)) {
            Model::validateArray($this->candidateList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->candidateList) {
            if (\is_array($this->candidateList)) {
                $res['CandidateList'] = [];
                $n1 = 0;
                foreach ($this->candidateList as $item1) {
                    $res['CandidateList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CandidateList'])) {
            if (!empty($map['CandidateList'])) {
                $model->candidateList = [];
                $n1 = 0;
                foreach ($map['CandidateList'] as $item1) {
                    $model->candidateList[$n1] = candidateList::fromMap($item1);
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

        if (isset($map['TrFirewallRoutePolicyId'])) {
            $model->trFirewallRoutePolicyId = $map['TrFirewallRoutePolicyId'];
        }

        return $model;
    }
}
