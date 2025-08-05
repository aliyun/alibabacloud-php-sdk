<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateTrFirewallV2RoutePolicyRequest\destCandidateList;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateTrFirewallV2RoutePolicyRequest\srcCandidateList;
use AlibabaCloud\Tea\Model;

class CreateTrFirewallV2RoutePolicyRequest extends Model
{
    /**
     * @description The secondary traffic redirection instances.
     *
     * @var destCandidateList[]
     */
    public $destCandidateList;

    /**
     * @description The instance ID of the VPC firewall.
     *
     * @example vfw-tr-f8ce36689b224f77****
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
     * @description The description of the traffic redirection instance.
     *
     * @example test
     *
     * @var string
     */
    public $policyDescription;

    /**
     * @description The name of the traffic redirection instance.
     *
     * @example TEST_VPC_FW
     *
     * @var string
     */
    public $policyName;

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
    protected $_name = [
        'destCandidateList' => 'DestCandidateList',
        'firewallId' => 'FirewallId',
        'lang' => 'Lang',
        'policyDescription' => 'PolicyDescription',
        'policyName' => 'PolicyName',
        'policyType' => 'PolicyType',
        'srcCandidateList' => 'SrcCandidateList',
    ];

    public function validate() {}

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
                $n = 0;
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
                $n = 0;
                foreach ($map['SrcCandidateList'] as $item) {
                    $model->srcCandidateList[$n++] = null !== $item ? srcCandidateList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
