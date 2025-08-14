<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyTrFirewallV2RoutePolicyScopeRequest;

use AlibabaCloud\Dara\Model;

class destCandidateList extends Model
{
    /**
     * @var string
     */
    public $candidateId;

    /**
     * @var string
     */
    public $candidateType;
    protected $_name = [
        'candidateId' => 'CandidateId',
        'candidateType' => 'CandidateType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
