<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListShiftSchedulesResponseBody\paging;

use AlibabaCloud\Tea\Model;

class shiftSchedules extends Model
{
    /**
     * @var string
     */
    public $shiftScheduleIdentifier;

    /**
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
