<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateResponseBody\module\ratePlanInfo;

use AlibabaCloud\Dara\Model;

class hourItemArrivalTimeInfo extends Model
{
    /**
     * @var string
     */
    public $actualLiveHour;

    /**
     * @var string
     */
    public $earliestCheckInTime;

    /**
     * @var string
     */
    public $latestCheckInTime;

    /**
     * @var string
     */
    public $latestCheckOutTime;

    /**
     * @var string
     */
    public $liveHour;
    protected $_name = [
        'actualLiveHour' => 'actual_live_hour',
        'earliestCheckInTime' => 'earliest_check_in_time',
        'latestCheckInTime' => 'latest_check_in_time',
        'latestCheckOutTime' => 'latest_check_out_time',
        'liveHour' => 'live_hour',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualLiveHour) {
            $res['actual_live_hour'] = $this->actualLiveHour;
        }

        if (null !== $this->earliestCheckInTime) {
            $res['earliest_check_in_time'] = $this->earliestCheckInTime;
        }

        if (null !== $this->latestCheckInTime) {
            $res['latest_check_in_time'] = $this->latestCheckInTime;
        }

        if (null !== $this->latestCheckOutTime) {
            $res['latest_check_out_time'] = $this->latestCheckOutTime;
        }

        if (null !== $this->liveHour) {
            $res['live_hour'] = $this->liveHour;
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
        if (isset($map['actual_live_hour'])) {
            $model->actualLiveHour = $map['actual_live_hour'];
        }

        if (isset($map['earliest_check_in_time'])) {
            $model->earliestCheckInTime = $map['earliest_check_in_time'];
        }

        if (isset($map['latest_check_in_time'])) {
            $model->latestCheckInTime = $map['latest_check_in_time'];
        }

        if (isset($map['latest_check_out_time'])) {
            $model->latestCheckOutTime = $map['latest_check_out_time'];
        }

        if (isset($map['live_hour'])) {
            $model->liveHour = $map['live_hour'];
        }

        return $model;
    }
}
