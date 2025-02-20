<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetWorkTaskSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $dealAverageDuration;
    /**
     * @var string
     */
    public $dealAverageDurationGrowthRate;
    /**
     * @var int
     */
    public $dealWorkTaskCount;
    /**
     * @var string
     */
    public $dealWorkTaskCountRate;
    /**
     * @var int
     */
    public $workTaskCount;
    /**
     * @var string
     */
    public $workTaskDealRate;
    /**
     * @var string
     */
    public $workTaskDealRateGrowthRate;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
