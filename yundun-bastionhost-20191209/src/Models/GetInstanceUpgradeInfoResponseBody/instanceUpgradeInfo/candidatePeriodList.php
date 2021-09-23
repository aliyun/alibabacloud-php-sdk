<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceUpgradeInfoResponseBody\instanceUpgradeInfo;

use AlibabaCloud\Tea\Model;

class candidatePeriodList extends Model
{
    /**
     * @var int
     */
    public $candidateStartTime;

    /**
     * @var int
     */
    public $candidateEndTime;
    protected $_name = [
        'candidateStartTime' => 'CandidateStartTime',
        'candidateEndTime'   => 'CandidateEndTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->candidateStartTime) {
            $res['CandidateStartTime'] = $this->candidateStartTime;
        }
        if (null !== $this->candidateEndTime) {
            $res['CandidateEndTime'] = $this->candidateEndTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return candidatePeriodList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CandidateStartTime'])) {
            $model->candidateStartTime = $map['CandidateStartTime'];
        }
        if (isset($map['CandidateEndTime'])) {
            $model->candidateEndTime = $map['CandidateEndTime'];
        }

        return $model;
    }
}
