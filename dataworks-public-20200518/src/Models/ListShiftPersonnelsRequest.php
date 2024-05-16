<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListShiftPersonnelsRequest extends Model
{
    /**
     * @description The time when the on-duty engineer ends a shift. Set the value to a UNIX timestamp.
     *
     * This parameter is required.
     * @example 1593950832000
     *
     * @var int
     */
    public $beginTime;

    /**
     * @description The ID of the request. You can use the ID to troubleshoot issues.
     *
     * This parameter is required.
     * @example 1593950832000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The time when the on-duty engineer starts a shift. Set the value to a UNIX timestamp.
     *
     * @example 1933790****551
     *
     * @var string
     */
    public $shiftPersonUID;

    /**
     * @description The type of on-duty engineers that you want to query. Valid values: ALL, PRIMARY, BACKUP, and DESIGNATED_USER.
     *
     * This parameter is required.
     * @example 2ab6456ada634b2f938ee******9b45b
     *
     * @var string
     */
    public $shiftScheduleIdentifier;

    /**
     * @description The ID of your Alibaba Cloud account. You can log on to the DataWorks console and move the pointer over the profile picture in the upper-right corner to obtain the ID.
     *
     * @example ALL
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'beginTime'               => 'BeginTime',
        'endTime'                 => 'EndTime',
        'shiftPersonUID'          => 'ShiftPersonUID',
        'shiftScheduleIdentifier' => 'ShiftScheduleIdentifier',
        'userType'                => 'UserType',
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
        if (null !== $this->shiftPersonUID) {
            $res['ShiftPersonUID'] = $this->shiftPersonUID;
        }
        if (null !== $this->shiftScheduleIdentifier) {
            $res['ShiftScheduleIdentifier'] = $this->shiftScheduleIdentifier;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListShiftPersonnelsRequest
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
        if (isset($map['ShiftPersonUID'])) {
            $model->shiftPersonUID = $map['ShiftPersonUID'];
        }
        if (isset($map['ShiftScheduleIdentifier'])) {
            $model->shiftScheduleIdentifier = $map['ShiftScheduleIdentifier'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
