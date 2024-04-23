<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallPolicyBackUpAssociationListRequest;

use AlibabaCloud\Tea\Model;

class candidateList extends Model
{
    /**
     * @description The ID of the traffic redirection instance.
     *
     * @example vpc-wz9grb8ng3y7h7lf2****
     *
     * @var string
     */
    public $candidateId;

    /**
     * @description The type of the traffic redirection instance.
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
     * @return candidateList
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
