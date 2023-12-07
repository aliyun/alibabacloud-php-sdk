<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorComputeSummaryResponseBody\data;

use AlibabaCloud\Tea\Model;

class analysis extends Model
{
    /**
     * @description The total number of healthy jobs.
     *
     * @example 3
     *
     * @var int
     */
    public $healthyJobCount;

    /**
     * @description The total number of jobs that require attention.
     *
     * @example 234
     *
     * @var int
     */
    public $needAttentionJobCount;

    /**
     * @description The score for jobs.
     *
     * @example 73
     *
     * @var int
     */
    public $score;

    /**
     * @description The day-to-day growth rate of the score for jobs.
     *
     * @example 0.02
     *
     * @var float
     */
    public $scoreDayGrowthRatio;

    /**
     * @description The total number of sub-healthy jobs.
     *
     * @example 1123
     *
     * @var int
     */
    public $subHealthyJobCount;

    /**
     * @description The total number of unhealthy jobs.
     *
     * @example 23
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return analysis
     */
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
