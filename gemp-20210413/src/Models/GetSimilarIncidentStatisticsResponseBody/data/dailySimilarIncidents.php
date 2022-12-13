<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetSimilarIncidentStatisticsResponseBody\data;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GetSimilarIncidentStatisticsResponseBody\data\dailySimilarIncidents\similarIncidents;
use AlibabaCloud\Tea\Model;

class dailySimilarIncidents extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $commitment;

    /**
     * @example 2021-03-07
     *
     * @var string
     */
    public $date;

    /**
     * @example 1
     *
     * @var int
     */
    public $day;

    /**
     * @example 2
     *
     * @var int
     */
    public $month;

    /**
     * @var similarIncidents[]
     */
    public $similarIncidents;

    /**
     * @example 1
     *
     * @var string
     */
    public $week;
    protected $_name = [
        'commitment'       => 'commitment',
        'date'             => 'date',
        'day'              => 'day',
        'month'            => 'month',
        'similarIncidents' => 'similarIncidents',
        'week'             => 'week',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commitment) {
            $res['commitment'] = $this->commitment;
        }
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }
        if (null !== $this->day) {
            $res['day'] = $this->day;
        }
        if (null !== $this->month) {
            $res['month'] = $this->month;
        }
        if (null !== $this->similarIncidents) {
            $res['similarIncidents'] = [];
            if (null !== $this->similarIncidents && \is_array($this->similarIncidents)) {
                $n = 0;
                foreach ($this->similarIncidents as $item) {
                    $res['similarIncidents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->week) {
            $res['week'] = $this->week;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dailySimilarIncidents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commitment'])) {
            $model->commitment = $map['commitment'];
        }
        if (isset($map['date'])) {
            $model->date = $map['date'];
        }
        if (isset($map['day'])) {
            $model->day = $map['day'];
        }
        if (isset($map['month'])) {
            $model->month = $map['month'];
        }
        if (isset($map['similarIncidents'])) {
            if (!empty($map['similarIncidents'])) {
                $model->similarIncidents = [];
                $n                       = 0;
                foreach ($map['similarIncidents'] as $item) {
                    $model->similarIncidents[$n++] = null !== $item ? similarIncidents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['week'])) {
            $model->week = $map['week'];
        }

        return $model;
    }
}
