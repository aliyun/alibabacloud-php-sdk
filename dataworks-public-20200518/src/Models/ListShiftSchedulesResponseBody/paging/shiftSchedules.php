<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListShiftSchedulesResponseBody\paging;

use AlibabaCloud\Tea\Model;

class shiftSchedules extends Model
{
    /**
     * @description The unique identifier of the shift schedule. You can use the identifier to query the on-duty engineers in the shift schedule.
     *
     * @example 2ab6456ada634b2f938ee******9b45b
     *
     * @var string
     */
    public $shiftScheduleIdentifier;

    /**
     * @description The name of the shift schedule.
     *
     * @var string
     */
    public $shiftScheduleName;
    protected $_name = [
        'shiftScheduleIdentifier' => 'ShiftScheduleIdentifier',
        'shiftScheduleName'       => 'ShiftScheduleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->shiftScheduleIdentifier) {
            $res['ShiftScheduleIdentifier'] = $this->shiftScheduleIdentifier;
        }
        if (null !== $this->shiftScheduleName) {
            $res['ShiftScheduleName'] = $this->shiftScheduleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return shiftSchedules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ShiftScheduleIdentifier'])) {
            $model->shiftScheduleIdentifier = $map['ShiftScheduleIdentifier'];
        }
        if (isset($map['ShiftScheduleName'])) {
            $model->shiftScheduleName = $map['ShiftScheduleName'];
        }

        return $model;
    }
}
