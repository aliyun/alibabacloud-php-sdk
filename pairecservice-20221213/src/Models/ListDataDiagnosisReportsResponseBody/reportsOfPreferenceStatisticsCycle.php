<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListDataDiagnosisReportsResponseBody;

use AlibabaCloud\Dara\Model;

class reportsOfPreferenceStatisticsCycle extends Model
{
    /**
     * @var string
     */
    public $cycleRemainRate;

    /**
     * @var string
     */
    public $singleRemainRate;

    /**
     * @var string
     */
    public $ds;

    /**
     * @var string
     */
    public $days;

    /**
     * @var string
     */
    public $everAppearedRate;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $periodRemainRate;

    /**
     * @var int
     */
    public $periodRemainCount;

    /**
     * @var int
     */
    public $periodInternal;
    protected $_name = [
        'cycleRemainRate' => 'CycleRemainRate',
        'singleRemainRate' => 'SingleRemainRate',
        'ds' => 'Ds',
        'days' => 'Days',
        'everAppearedRate' => 'EverAppearedRate',
        'period' => 'Period',
        'periodRemainRate' => 'PeriodRemainRate',
        'periodRemainCount' => 'PeriodRemainCount',
        'periodInternal' => 'PeriodInternal',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cycleRemainRate) {
            $res['CycleRemainRate'] = $this->cycleRemainRate;
        }

        if (null !== $this->singleRemainRate) {
            $res['SingleRemainRate'] = $this->singleRemainRate;
        }

        if (null !== $this->ds) {
            $res['Ds'] = $this->ds;
        }

        if (null !== $this->days) {
            $res['Days'] = $this->days;
        }

        if (null !== $this->everAppearedRate) {
            $res['EverAppearedRate'] = $this->everAppearedRate;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodRemainRate) {
            $res['PeriodRemainRate'] = $this->periodRemainRate;
        }

        if (null !== $this->periodRemainCount) {
            $res['PeriodRemainCount'] = $this->periodRemainCount;
        }

        if (null !== $this->periodInternal) {
            $res['PeriodInternal'] = $this->periodInternal;
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
        if (isset($map['CycleRemainRate'])) {
            $model->cycleRemainRate = $map['CycleRemainRate'];
        }

        if (isset($map['SingleRemainRate'])) {
            $model->singleRemainRate = $map['SingleRemainRate'];
        }

        if (isset($map['Ds'])) {
            $model->ds = $map['Ds'];
        }

        if (isset($map['Days'])) {
            $model->days = $map['Days'];
        }

        if (isset($map['EverAppearedRate'])) {
            $model->everAppearedRate = $map['EverAppearedRate'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodRemainRate'])) {
            $model->periodRemainRate = $map['PeriodRemainRate'];
        }

        if (isset($map['PeriodRemainCount'])) {
            $model->periodRemainCount = $map['PeriodRemainCount'];
        }

        if (isset($map['PeriodInternal'])) {
            $model->periodInternal = $map['PeriodInternal'];
        }

        return $model;
    }
}
