<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallV2RoutePolicyListResponseBody\trFirewallRoutePolicies;

use AlibabaCloud\Tea\Model;

class srcCandidateList extends Model
{
    /**
     * @description The ID of the primary traffic redirection instance.
     *
     * @example vpc-2ze9epancaw8t4sha****
     *
     * @var string
     */
    public $candidateId;

    /**
     * @description The type of the primary traffic redirection instance.
     *
     * @example VPC
     *
     * @var string
     */
    public $candidateType;
    protected $_name = [
        'candidateId'   => 'CandidateId',
        'candidateType' => 'CandidateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->candidateId) {
            $res['CandidateId'] = $this->candidateId;
        }
        if (null !== $this->candidateType) {
            $res['CandidateType'] = $this->candidateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return srcCandidateList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CandidateId'])) {
            $model->candidateId = $map['CandidateId'];
        }
        if (isset($map['CandidateType'])) {
            $model->candidateType = $map['CandidateType'];
        }

        return $model;
    }
}
