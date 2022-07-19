<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListShiftPersonnelsResponseBody\paging;

use AlibabaCloud\Tea\Model;

class shiftPersons extends Model
{
    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $shiftPersonName;

    /**
     * @var string
     */
    public $shiftPersonUID;
    protected $_name = [
        'beginTime'       => 'BeginTime',
        'endTime'         => 'EndTime',
        'shiftPersonName' => 'ShiftPersonName',
        'shiftPersonUID'  => 'ShiftPersonUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->shiftPersonName) {
            $res['ShiftPersonName'] = $this->shiftPersonName;
        }
        if (null !== $this->shiftPersonUID) {
            $res['ShiftPersonUID'] = $this->shiftPersonUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return shiftPersons
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ShiftPersonName'])) {
            $model->shiftPersonName = $map['ShiftPersonName'];
        }
        if (isset($map['ShiftPersonUID'])) {
            $model->shiftPersonUID = $map['ShiftPersonUID'];
        }

        return $model;
    }
}
