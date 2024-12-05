<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryResponseBody\data;

use AlibabaCloud\Tea\Model;

class suspEventDealSummaryDTO extends Model
{
    /**
     * @description Completed.
     *
     * @example 20
     *
     * @var int
     */
    public $completedCount;

    /**
     * @description In progress.
     *
     * @example 5
     *
     * @var int
     */
    public $handingCount;

    /**
     * @description Alert handling rate.
     *
     * @example 90
     *
     * @var string
     */
    public $handingRate;

    /**
     * @description Total number of alerts.
     *
     * @example 35
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description Year-over-year comparison of alerts.
     *
     * @example 10
     *
     * @var string
     */
    public $totalGrowthRate;

    /**
     * @description Number of unhandled alerts.
     *
     * @example 10
     *
     * @var int
     */
    public $waitHandleCount;
    protected $_name = [
        'completedCount'  => 'CompletedCount',
        'handingCount'    => 'HandingCount',
        'handingRate'     => 'HandingRate',
        'totalCount'      => 'TotalCount',
        'totalGrowthRate' => 'TotalGrowthRate',
        'waitHandleCount' => 'WaitHandleCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completedCount) {
            $res['CompletedCount'] = $this->completedCount;
        }
        if (null !== $this->handingCount) {
            $res['HandingCount'] = $this->handingCount;
        }
        if (null !== $this->handingRate) {
            $res['HandingRate'] = $this->handingRate;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->totalGrowthRate) {
            $res['TotalGrowthRate'] = $this->totalGrowthRate;
        }
        if (null !== $this->waitHandleCount) {
            $res['WaitHandleCount'] = $this->waitHandleCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return suspEventDealSummaryDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompletedCount'])) {
            $model->completedCount = $map['CompletedCount'];
        }
        if (isset($map['HandingCount'])) {
            $model->handingCount = $map['HandingCount'];
        }
        if (isset($map['HandingRate'])) {
            $model->handingRate = $map['HandingRate'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TotalGrowthRate'])) {
            $model->totalGrowthRate = $map['TotalGrowthRate'];
        }
        if (isset($map['WaitHandleCount'])) {
            $model->waitHandleCount = $map['WaitHandleCount'];
        }

        return $model;
    }
}
