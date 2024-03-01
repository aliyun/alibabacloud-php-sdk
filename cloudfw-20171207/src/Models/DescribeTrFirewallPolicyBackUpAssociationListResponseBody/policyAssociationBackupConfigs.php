<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallPolicyBackUpAssociationListResponseBody;

use AlibabaCloud\Tea\Model;

class policyAssociationBackupConfigs extends Model
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
     * @description The name of the traffic redirection instance.
     *
     * @example test
     *
     * @var string
     */
    public $candidateName;

    /**
     * @description The type of the traffic redirection instance.
     *
     * @example VPC
     *
     * @var string
     */
    public $candidateType;

    /**
     * @description The route table that is used after traffic redirection.
     *
     * @example vtb-wz9898grickmh5j09****
     *
     * @var string
     */
    public $currentRouteTableId;

    /**
     * @description The ID of the route table.
     *
     * @example vtb-wz9slp3s7m4qrzvnq****
     *
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
