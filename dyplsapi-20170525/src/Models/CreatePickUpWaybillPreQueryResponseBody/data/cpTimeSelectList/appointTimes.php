<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryResponseBody\data\cpTimeSelectList;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryResponseBody\data\cpTimeSelectList\appointTimes\timeList;
use AlibabaCloud\Tea\Model;

class appointTimes extends Model
{
    /**
     * @description The date in the YYYY-MM-DD format.
     *
     * @example 2022-04-28
     *
     * @var string
     */
    public $date;

    /**
     * @description Indicates whether the date is selectable.
     *
     * @example true
     *
     * @var bool
     */
    public $dateSelectable;

    /**
     * @description The time range for the scheduled pickup for this date.
     *
     * @var timeList[]
     */
    public $timeList;
    protected $_name = [
        'date'           => 'Date',
        'dateSelectable' => 'DateSelectable',
        'timeList'       => 'TimeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->dateSelectable) {
            $res['DateSelectable'] = $this->dateSelectable;
        }
        if (null !== $this->timeList) {
            $res['TimeList'] = [];
            if (null !== $this->timeList && \is_array($this->timeList)) {
                $n = 0;
                foreach ($this->timeList as $item) {
                    $res['TimeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appointTimes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['DateSelectable'])) {
            $model->dateSelectable = $map['DateSelectable'];
        }
        if (isset($map['TimeList'])) {
            if (!empty($map['TimeList'])) {
                $model->timeList = [];
                $n               = 0;
                foreach ($map['TimeList'] as $item) {
                    $model->timeList[$n++] = null !== $item ? timeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
