<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryResponseBody\data;

use AlibabaCloud\Dara\Model;

class suspEventDealSummaryDTO extends Model
{
    /**
     * @var int
     */
    public $completedCount;

    /**
     * @var int
     */
    public $handingCount;

    /**
     * @var string
     */
    public $handingRate;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $totalGrowthRate;

    /**
     * @var int
     */
    public $waitHandleCount;
    protected $_name = [
        'completedCount' => 'CompletedCount',
        'handingCount' => 'HandingCount',
        'handingRate' => 'HandingRate',
        'totalCount' => 'TotalCount',
        'totalGrowthRate' => 'TotalGrowthRate',
        'waitHandleCount' => 'WaitHandleCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
