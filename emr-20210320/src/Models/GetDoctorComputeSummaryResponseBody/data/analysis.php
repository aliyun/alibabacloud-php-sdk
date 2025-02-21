<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorComputeSummaryResponseBody\data;

use AlibabaCloud\Dara\Model;

class analysis extends Model
{
    /**
     * @var int
     */
    public $healthyJobCount;
    /**
     * @var int
     */
    public $needAttentionJobCount;
    /**
     * @var int
     */
    public $score;
    /**
     * @var float
     */
    public $scoreDayGrowthRatio;
    /**
     * @var int
     */
    public $subHealthyJobCount;
    /**
     * @var int
     */
    public $unhealthyJobCount;
    protected $_name = [
        'healthyJobCount'       => 'HealthyJobCount',
        'needAttentionJobCount' => 'NeedAttentionJobCount',
        'score'                 => 'Score',
        'scoreDayGrowthRatio'   => 'ScoreDayGrowthRatio',
        'subHealthyJobCount'    => 'SubHealthyJobCount',
        'unhealthyJobCount'     => 'UnhealthyJobCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->healthyJobCount) {
            $res['HealthyJobCount'] = $this->healthyJobCount;
        }

        if (null !== $this->needAttentionJobCount) {
            $res['NeedAttentionJobCount'] = $this->needAttentionJobCount;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->scoreDayGrowthRatio) {
            $res['ScoreDayGrowthRatio'] = $this->scoreDayGrowthRatio;
        }

        if (null !== $this->subHealthyJobCount) {
            $res['SubHealthyJobCount'] = $this->subHealthyJobCount;
        }

        if (null !== $this->unhealthyJobCount) {
            $res['UnhealthyJobCount'] = $this->unhealthyJobCount;
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
        if (isset($map['HealthyJobCount'])) {
            $model->healthyJobCount = $map['HealthyJobCount'];
        }

        if (isset($map['NeedAttentionJobCount'])) {
            $model->needAttentionJobCount = $map['NeedAttentionJobCount'];
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['ScoreDayGrowthRatio'])) {
            $model->scoreDayGrowthRatio = $map['ScoreDayGrowthRatio'];
        }

        if (isset($map['SubHealthyJobCount'])) {
            $model->subHealthyJobCount = $map['SubHealthyJobCount'];
        }

        if (isset($map['UnhealthyJobCount'])) {
            $model->unhealthyJobCount = $map['UnhealthyJobCount'];
        }

        return $model;
    }
}
