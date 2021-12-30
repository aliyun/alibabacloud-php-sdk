<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceUpgradeInfoResponseBody\instanceUpgradeInfo;

use AlibabaCloud\Tea\Model;

class candidatePeriodList extends Model
{
    /**
     * @var int
     */
    public $candidateEndTime;

    /**
     * @var int
     */
    public $candidateStartTime;
    protected $_name = [
        'candidateEndTime'   => 'CandidateEndTime',
        'candidateStartTime' => 'CandidateStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->candidateEndTime) {
            $res['CandidateEndTime'] = $this->candidateEndTime;
        }
        if (null !== $this->candidateStartTime) {
            $res['CandidateStartTime'] = $this->candidateStartTime;
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
        if (isset($map['CandidateEndTime'])) {
            $model->candidateEndTime = $map['CandidateEndTime'];
        }
        if (isset($map['CandidateStartTime'])) {
            $model->candidateStartTime = $map['CandidateStartTime'];
        }

        return $model;
    }
}
