<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetOnCallSchedulesDetailResponseBody\data\scheduleLayers;

use AlibabaCloud\Tea\Model;

class restrictions extends Model
{
    /**
     * @description The end time of the shift per day.
     *
     * @example 18:00
     *
     * @var string
     */
    public $endTimeOfDay;

    /**
     * @description The type of the limit. Valid values:
     *
     *   daily_restriction
     *   weekly_restriction
     *
     * @example daily_restriction
     *
     * @var string
     */
    public $restrictionType;

    /**
     * @description The start time of the shift per day.
     *
     * @example 09:00
     *
     * @var string
     */
    public $startTimeOfDay;
    protected $_name = [
        'endTimeOfDay'    => 'EndTimeOfDay',
        'restrictionType' => 'RestrictionType',
        'startTimeOfDay'  => 'StartTimeOfDay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTimeOfDay) {
            $res['EndTimeOfDay'] = $this->endTimeOfDay;
        }
        if (null !== $this->restrictionType) {
            $res['RestrictionType'] = $this->restrictionType;
        }
        if (null !== $this->startTimeOfDay) {
            $res['StartTimeOfDay'] = $this->startTimeOfDay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return restrictions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTimeOfDay'])) {
            $model->endTimeOfDay = $map['EndTimeOfDay'];
        }
        if (isset($map['RestrictionType'])) {
            $model->restrictionType = $map['RestrictionType'];
        }
        if (isset($map['StartTimeOfDay'])) {
            $model->startTimeOfDay = $map['StartTimeOfDay'];
        }

        return $model;
    }
}
