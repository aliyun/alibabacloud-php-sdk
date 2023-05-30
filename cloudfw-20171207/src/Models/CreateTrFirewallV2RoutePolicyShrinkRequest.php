<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class CreateTrFirewallV2RoutePolicyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $destCandidateListShrink;

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
     * @var string
     */
    public $srcCandidateListShrink;
    protected $_name = [
        'destCandidateListShrink' => 'DestCandidateList',
        'firewallId'              => 'FirewallId',
        'lang'                    => 'Lang',
        'policyDescription'       => 'PolicyDescription',
        'policyName'              => 'PolicyName',
        'policyType'              => 'PolicyType',
        'srcCandidateListShrink'  => 'SrcCandidateList',
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
        if (null !== $this->policyDescription) {
            $res['PolicyDescription'] = $this->policyDescription;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->srcCandidateListShrink) {
            $res['SrcCandidateList'] = $this->srcCandidateListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTrFirewallV2RoutePolicyShrinkRequest
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
            $model->srcCandidateListShrink = $map['SrcCandidateList'];
        }

        return $model;
    }
}
