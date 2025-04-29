<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\UserQueryResponseBody\module;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $employeeNick;

    /**
     * @var int
     */
    public $leaveStatus;

    /**
     * @var string
     */
    public $thirdPartEmployeeId;

    /**
     * @var string
     */
    public $thirdPartJobNo;
    protected $_name = [
        'employeeNick' => 'employee_nick',
        'leaveStatus' => 'leave_status',
        'thirdPartEmployeeId' => 'third_part_employee_id',
        'thirdPartJobNo' => 'third_part_job_no',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
