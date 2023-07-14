<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest;

use AlibabaCloud\Tea\Model;

class extendInterval extends Model
{
    /**
     * @var int[]
     */
    public $days;

    /**
     * @example 23
     *
     * @var int
     */
    public $endHour;

    /**
     * @example 00
     *
     * @var int
     */
    public $endMinute;

    /**
     * @example 2022-08-20 10
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 00
     *
     * @var int
     */
    public $startHour;

    /**
     * @example 00
     *
     * @var int
     */
    public $startMinute;

    /**
     * @example 2022-07-20 10
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'days'        => 'Days',
        'endHour'     => 'EndHour',
        'endMinute'   => 'EndMinute',
        'endTime'     => 'EndTime',
        'startHour'   => 'StartHour',
        'startMinute' => 'StartMinute',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->days) {
            $res['Days'] = $this->days;
        }
        if (null !== $this->endHour) {
            $res['EndHour'] = $this->endHour;
        }
        if (null !== $this->endMinute) {
            $res['EndMinute'] = $this->endMinute;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startHour) {
            $res['StartHour'] = $this->startHour;
        }
        if (null !== $this->startMinute) {
            $res['StartMinute'] = $this->startMinute;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extendInterval
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Days'])) {
            if (!empty($map['Days'])) {
                $model->days = $map['Days'];
            }
        }
        if (isset($map['EndHour'])) {
            $model->endHour = $map['EndHour'];
        }
        if (isset($map['EndMinute'])) {
            $model->endMinute = $map['EndMinute'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartHour'])) {
            $model->startHour = $map['StartHour'];
        }
        if (isset($map['StartMinute'])) {
            $model->startMinute = $map['StartMinute'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
