<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class AddDepartmentRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $deptName;

    /**
     * @var string[]
     */
    public $managerEmployeeIdList;

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
        'deptName'              => 'dept_name',
        'managerEmployeeIdList' => 'manager_employee_id_list',
        'outDeptId'             => 'out_dept_id',
        'outDeptPid'            => 'out_dept_pid',
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
        if (null !== $this->managerEmployeeIdList) {
            $res['manager_employee_id_list'] = $this->managerEmployeeIdList;
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
     * @return AddDepartmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dept_name'])) {
            $model->deptName = $map['dept_name'];
        }
        if (isset($map['manager_employee_id_list'])) {
            if (!empty($map['manager_employee_id_list'])) {
                $model->managerEmployeeIdList = $map['manager_employee_id_list'];
            }
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
