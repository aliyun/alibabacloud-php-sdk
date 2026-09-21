<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetBrowserInstanceGroupResponseBody\browserInstanceGroupModel;

use AlibabaCloud\Dara\Model;

class duration extends Model
{
    /**
     * @var string
     */
    public $currentPayStage;

    /**
     * @var string
     */
    public $periodEndTime;

    /**
     * @var string
     */
    public $periodStartTime;

    /**
     * @var int
     */
    public $totalDuration;

    /**
     * @var int
     */
    public $usedDuration;
    protected $_name = [
        'currentPayStage' => 'CurrentPayStage',
        'periodEndTime' => 'PeriodEndTime',
        'periodStartTime' => 'PeriodStartTime',
        'totalDuration' => 'TotalDuration',
        'usedDuration' => 'UsedDuration',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPayStage) {
            $res['CurrentPayStage'] = $this->currentPayStage;
        }

        if (null !== $this->periodEndTime) {
            $res['PeriodEndTime'] = $this->periodEndTime;
        }

        if (null !== $this->periodStartTime) {
            $res['PeriodStartTime'] = $this->periodStartTime;
        }

        if (null !== $this->totalDuration) {
            $res['TotalDuration'] = $this->totalDuration;
        }

        if (null !== $this->usedDuration) {
            $res['UsedDuration'] = $this->usedDuration;
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
        if (isset($map['CurrentPayStage'])) {
            $model->currentPayStage = $map['CurrentPayStage'];
        }

        if (isset($map['PeriodEndTime'])) {
            $model->periodEndTime = $map['PeriodEndTime'];
        }

        if (isset($map['PeriodStartTime'])) {
            $model->periodStartTime = $map['PeriodStartTime'];
        }

        if (isset($map['TotalDuration'])) {
            $model->totalDuration = $map['TotalDuration'];
        }

        if (isset($map['UsedDuration'])) {
            $model->usedDuration = $map['UsedDuration'];
        }

        return $model;
    }
}
