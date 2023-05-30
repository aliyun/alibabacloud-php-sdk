<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateTrFirewallV2RoutePolicyRequest\destCandidateList;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateTrFirewallV2RoutePolicyRequest\srcCandidateList;
use AlibabaCloud\Tea\Model;

class CreateTrFirewallV2RoutePolicyRequest extends Model
{
    /**
     * @var destCandidateList[]
     */
    public $destCandidateList;

    /**
     * @example vfw-tr-f8ce36689b224f77****
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
    public $policyDescription;

    /**
     * @var string
     */
    public $policyName;

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
    protected $_name = [
        'destCandidateList' => 'DestCandidateList',
        'firewallId'        => 'FirewallId',
        'lang'              => 'Lang',
        'policyDescription' => 'PolicyDescription',
        'policyName'        => 'PolicyName',
        'policyType'        => 'PolicyType',
        'srcCandidateList'  => 'SrcCandidateList',
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
            $res['SrcCandidateList'] = [];
            if (null !== $this->srcCandidateList && \is_array($this->srcCandidateList)) {
                $n = 0;
                foreach ($this->srcCandidateList as $item) {
                    $res['SrcCandidateList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTrFirewallV2RoutePolicyRequest
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
                $n                       = 0;
                foreach ($map['SrcCandidateList'] as $item) {
                    $model->srcCandidateList[$n++] = null !== $item ? srcCandidateList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
