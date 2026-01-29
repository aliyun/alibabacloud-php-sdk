<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\QueryChatappPhoneNumbersResponseBody\phoneNumbers\callingConfigure\calling;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\QueryChatappPhoneNumbersResponseBody\phoneNumbers\callingConfigure\calling\callHours\holidaySchedule;
use AlibabaCloud\SDK\Cams\V20200606\Models\QueryChatappPhoneNumbersResponseBody\phoneNumbers\callingConfigure\calling\callHours\weeklyOperatingHours;

class callHours extends Model
{
    /**
     * @var string
     */
    public $callIconVisibility;

    /**
     * @var string
     */
    public $callbackPermissionStatus;

    /**
     * @var holidaySchedule[]
     */
    public $holidaySchedule;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $timezoneId;

    /**
     * @var weeklyOperatingHours[]
     */
    public $weeklyOperatingHours;
    protected $_name = [
        'callIconVisibility' => 'CallIconVisibility',
        'callbackPermissionStatus' => 'CallbackPermissionStatus',
        'holidaySchedule' => 'HolidaySchedule',
        'status' => 'Status',
        'timezoneId' => 'TimezoneId',
        'weeklyOperatingHours' => 'WeeklyOperatingHours',
    ];

    public function validate()
    {
        if (\is_array($this->holidaySchedule)) {
            Model::validateArray($this->holidaySchedule);
        }
        if (\is_array($this->weeklyOperatingHours)) {
            Model::validateArray($this->weeklyOperatingHours);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callIconVisibility) {
            $res['CallIconVisibility'] = $this->callIconVisibility;
        }

        if (null !== $this->callbackPermissionStatus) {
            $res['CallbackPermissionStatus'] = $this->callbackPermissionStatus;
        }

        if (null !== $this->holidaySchedule) {
            if (\is_array($this->holidaySchedule)) {
                $res['HolidaySchedule'] = [];
                $n1 = 0;
                foreach ($this->holidaySchedule as $item1) {
                    $res['HolidaySchedule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->timezoneId) {
            $res['TimezoneId'] = $this->timezoneId;
        }

        if (null !== $this->weeklyOperatingHours) {
            if (\is_array($this->weeklyOperatingHours)) {
                $res['WeeklyOperatingHours'] = [];
                $n1 = 0;
                foreach ($this->weeklyOperatingHours as $item1) {
                    $res['WeeklyOperatingHours'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CallIconVisibility'])) {
            $model->callIconVisibility = $map['CallIconVisibility'];
        }

        if (isset($map['CallbackPermissionStatus'])) {
            $model->callbackPermissionStatus = $map['CallbackPermissionStatus'];
        }

        if (isset($map['HolidaySchedule'])) {
            if (!empty($map['HolidaySchedule'])) {
                $model->holidaySchedule = [];
                $n1 = 0;
                foreach ($map['HolidaySchedule'] as $item1) {
                    $model->holidaySchedule[$n1] = holidaySchedule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TimezoneId'])) {
            $model->timezoneId = $map['TimezoneId'];
        }

        if (isset($map['WeeklyOperatingHours'])) {
            if (!empty($map['WeeklyOperatingHours'])) {
                $model->weeklyOperatingHours = [];
                $n1 = 0;
                foreach ($map['WeeklyOperatingHours'] as $item1) {
                    $model->weeklyOperatingHours[$n1] = weeklyOperatingHours::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
