<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class AddDepartmentShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $deptName;

    /**
     * @var string
     */
    public $managerEmployeeIdListShrink;

    /**
     * @description This parameter is required.
     *
     * @example dept123
     *
     * @var string
     */
    public $outDeptId;

    /**
     * @example dept456
     *
     * @var string
     */
    public $outDeptPid;
    protected $_name = [
        'deptName'                    => 'dept_name',
        'managerEmployeeIdListShrink' => 'manager_employee_id_list',
        'outDeptId'                   => 'out_dept_id',
        'outDeptPid'                  => 'out_dept_pid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deptName) {
            $res['dept_name'] = $this->deptName;
        }
        if (null !== $this->managerEmployeeIdListShrink) {
            $res['manager_employee_id_list'] = $this->managerEmployeeIdListShrink;
        }
        if (null !== $this->outDeptId) {
            $res['out_dept_id'] = $this->outDeptId;
        }
        if (null !== $this->outDeptPid) {
            $res['out_dept_pid'] = $this->outDeptPid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDepartmentShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dept_name'])) {
            $model->deptName = $map['dept_name'];
        }
        if (isset($map['manager_employee_id_list'])) {
            $model->managerEmployeeIdListShrink = $map['manager_employee_id_list'];
        }
        if (isset($map['out_dept_id'])) {
            $model->outDeptId = $map['out_dept_id'];
        }
        if (isset($map['out_dept_pid'])) {
            $model->outDeptPid = $map['out_dept_pid'];
        }

        return $model;
    }
}
