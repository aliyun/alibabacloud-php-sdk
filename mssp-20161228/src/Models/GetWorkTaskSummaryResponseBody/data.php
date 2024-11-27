<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetWorkTaskSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 60
     *
     * @var int
     */
    public $dealAverageDuration;

    /**
     * @example 20
     *
     * @var string
     */
    public $dealAverageDurationGrowthRate;

    /**
     * @example 100
     *
     * @var int
     */
    public $dealWorkTaskCount;

    /**
     * @example 20
     *
     * @var string
     */
    public $dealWorkTaskCountRate;

    /**
     * @example 10
     *
     * @var int
     */
    public $workTaskCount;

    /**
     * @example 90
     *
     * @var string
     */
    public $workTaskDealRate;

    /**
     * @example 20
     *
     * @var string
     */
    public $workTaskDealRateGrowthRate;

    /**
     * @example 20
     *
     * @var string
     */
    public $workTaskGrowthRate;
    protected $_name = [
        'dealAverageDuration'           => 'DealAverageDuration',
        'dealAverageDurationGrowthRate' => 'DealAverageDurationGrowthRate',
        'dealWorkTaskCount'             => 'DealWorkTaskCount',
        'dealWorkTaskCountRate'         => 'DealWorkTaskCountRate',
        'workTaskCount'                 => 'WorkTaskCount',
        'workTaskDealRate'              => 'WorkTaskDealRate',
        'workTaskDealRateGrowthRate'    => 'WorkTaskDealRateGrowthRate',
        'workTaskGrowthRate'            => 'WorkTaskGrowthRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dealAverageDuration) {
            $res['DealAverageDuration'] = $this->dealAverageDuration;
        }
        if (null !== $this->dealAverageDurationGrowthRate) {
            $res['DealAverageDurationGrowthRate'] = $this->dealAverageDurationGrowthRate;
        }
        if (null !== $this->dealWorkTaskCount) {
            $res['DealWorkTaskCount'] = $this->dealWorkTaskCount;
        }
        if (null !== $this->dealWorkTaskCountRate) {
            $res['DealWorkTaskCountRate'] = $this->dealWorkTaskCountRate;
        }
        if (null !== $this->workTaskCount) {
            $res['WorkTaskCount'] = $this->workTaskCount;
        }
        if (null !== $this->workTaskDealRate) {
            $res['WorkTaskDealRate'] = $this->workTaskDealRate;
        }
        if (null !== $this->workTaskDealRateGrowthRate) {
            $res['WorkTaskDealRateGrowthRate'] = $this->workTaskDealRateGrowthRate;
        }
        if (null !== $this->workTaskGrowthRate) {
            $res['WorkTaskGrowthRate'] = $this->workTaskGrowthRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DealAverageDuration'])) {
            $model->dealAverageDuration = $map['DealAverageDuration'];
        }
        if (isset($map['DealAverageDurationGrowthRate'])) {
            $model->dealAverageDurationGrowthRate = $map['DealAverageDurationGrowthRate'];
        }
        if (isset($map['DealWorkTaskCount'])) {
            $model->dealWorkTaskCount = $map['DealWorkTaskCount'];
        }
        if (isset($map['DealWorkTaskCountRate'])) {
            $model->dealWorkTaskCountRate = $map['DealWorkTaskCountRate'];
        }
        if (isset($map['WorkTaskCount'])) {
            $model->workTaskCount = $map['WorkTaskCount'];
        }
        if (isset($map['WorkTaskDealRate'])) {
            $model->workTaskDealRate = $map['WorkTaskDealRate'];
        }
        if (isset($map['WorkTaskDealRateGrowthRate'])) {
            $model->workTaskDealRateGrowthRate = $map['WorkTaskDealRateGrowthRate'];
        }
        if (isset($map['WorkTaskGrowthRate'])) {
            $model->workTaskGrowthRate = $map['WorkTaskGrowthRate'];
        }

        return $model;
    }
}
