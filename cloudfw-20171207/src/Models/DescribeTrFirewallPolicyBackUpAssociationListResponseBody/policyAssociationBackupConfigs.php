<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallPolicyBackUpAssociationListResponseBody;

use AlibabaCloud\Tea\Model;

class policyAssociationBackupConfigs extends Model
{
    /**
     * @var string
     */
    public $candidateId;

    /**
     * @var string
     */
    public $candidateName;

    /**
     * @example VPC
     *
     * @var string
     */
    public $candidateType;

    /**
     * @var string
     */
    public $currentRouteTableId;

    /**
     * @var string
     */
    public $originalRouteTableId;
    protected $_name = [
        'candidateId'          => 'CandidateId',
        'candidateName'        => 'CandidateName',
        'candidateType'        => 'CandidateType',
        'currentRouteTableId'  => 'CurrentRouteTableId',
        'originalRouteTableId' => 'OriginalRouteTableId',
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
        if (null !== $this->candidateName) {
            $res['CandidateName'] = $this->candidateName;
        }
        if (null !== $this->candidateType) {
            $res['CandidateType'] = $this->candidateType;
        }
        if (null !== $this->currentRouteTableId) {
            $res['CurrentRouteTableId'] = $this->currentRouteTableId;
        }
        if (null !== $this->originalRouteTableId) {
            $res['OriginalRouteTableId'] = $this->originalRouteTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyAssociationBackupConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CandidateId'])) {
            $model->candidateId = $map['CandidateId'];
        }
        if (isset($map['CandidateName'])) {
            $model->candidateName = $map['CandidateName'];
        }
        if (isset($map['CandidateType'])) {
            $model->candidateType = $map['CandidateType'];
        }
        if (isset($map['CurrentRouteTableId'])) {
            $model->currentRouteTableId = $map['CurrentRouteTableId'];
        }
        if (isset($map['OriginalRouteTableId'])) {
            $model->originalRouteTableId = $map['OriginalRouteTableId'];
        }

        return $model;
    }
}
