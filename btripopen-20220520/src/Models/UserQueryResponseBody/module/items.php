<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\UserQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $employeeNick;

    /**
     * @example 0
     *
     * @var int
     */
    public $leaveStatus;

    /**
     * @example 123
     *
     * @var string
     */
    public $thirdPartEmployeeId;

    /**
     * @example 001
     *
     * @var string
     */
    public $thirdPartJobNo;
    protected $_name = [
        'employeeNick'        => 'employee_nick',
        'leaveStatus'         => 'leave_status',
        'thirdPartEmployeeId' => 'third_part_employee_id',
        'thirdPartJobNo'      => 'third_part_job_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->employeeNick) {
            $res['employee_nick'] = $this->employeeNick;
        }
        if (null !== $this->leaveStatus) {
            $res['leave_status'] = $this->leaveStatus;
        }
        if (null !== $this->thirdPartEmployeeId) {
            $res['third_part_employee_id'] = $this->thirdPartEmployeeId;
        }
        if (null !== $this->thirdPartJobNo) {
            $res['third_part_job_no'] = $this->thirdPartJobNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['employee_nick'])) {
            $model->employeeNick = $map['employee_nick'];
        }
        if (isset($map['leave_status'])) {
            $model->leaveStatus = $map['leave_status'];
        }
        if (isset($map['third_part_employee_id'])) {
            $model->thirdPartEmployeeId = $map['third_part_employee_id'];
        }
        if (isset($map['third_part_job_no'])) {
            $model->thirdPartJobNo = $map['third_part_job_no'];
        }

        return $model;
    }
}
