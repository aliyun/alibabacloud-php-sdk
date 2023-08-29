<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class SingleIndicatorDTO extends Model
{
    /**
     * @var int
     */
    public $dayIncrement;

    /**
     * @var float
     */
    public $dayOnDay;

    /**
     * @var int
     */
    public $monthIncrement;

    /**
     * @var float
     */
    public $monthOnMonth;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'dayIncrement'   => 'DayIncrement',
        'dayOnDay'       => 'DayOnDay',
        'monthIncrement' => 'MonthIncrement',
        'monthOnMonth'   => 'MonthOnMonth',
        'total'          => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dayIncrement) {
            $res['DayIncrement'] = $this->dayIncrement;
        }
        if (null !== $this->dayOnDay) {
            $res['DayOnDay'] = $this->dayOnDay;
        }
        if (null !== $this->monthIncrement) {
            $res['MonthIncrement'] = $this->monthIncrement;
        }
        if (null !== $this->monthOnMonth) {
            $res['MonthOnMonth'] = $this->monthOnMonth;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SingleIndicatorDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DayIncrement'])) {
            $model->dayIncrement = $map['DayIncrement'];
        }
        if (isset($map['DayOnDay'])) {
            $model->dayOnDay = $map['DayOnDay'];
        }
        if (isset($map['MonthIncrement'])) {
            $model->monthIncrement = $map['MonthIncrement'];
        }
        if (isset($map['MonthOnMonth'])) {
            $model->monthOnMonth = $map['MonthOnMonth'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
