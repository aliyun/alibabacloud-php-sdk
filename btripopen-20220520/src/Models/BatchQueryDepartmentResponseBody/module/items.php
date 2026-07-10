<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\BatchQueryDepartmentResponseBody\module;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $deptName;

    /**
     * @var string[]
     */
    public $managerEmployeeIdList;

    /**
     * @var string
     */
    public $outDeptId;
    protected $_name = [
        'deptName' => 'dept_name',
        'managerEmployeeIdList' => 'manager_employee_id_list',
        'outDeptId' => 'out_dept_id',
    ];

    public function validate()
    {
        if (\is_array($this->managerEmployeeIdList)) {
            Model::validateArray($this->managerEmployeeIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deptName) {
            $res['dept_name'] = $this->deptName;
        }

        if (null !== $this->managerEmployeeIdList) {
            if (\is_array($this->managerEmployeeIdList)) {
                $res['manager_employee_id_list'] = [];
                $n1 = 0;
                foreach ($this->managerEmployeeIdList as $item1) {
                    $res['manager_employee_id_list'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->outDeptId) {
            $res['out_dept_id'] = $this->outDeptId;
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
        if (isset($map['dept_name'])) {
            $model->deptName = $map['dept_name'];
        }

        if (isset($map['manager_employee_id_list'])) {
            if (!empty($map['manager_employee_id_list'])) {
                $model->managerEmployeeIdList = [];
                $n1 = 0;
                foreach ($map['manager_employee_id_list'] as $item1) {
                    $model->managerEmployeeIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['out_dept_id'])) {
            $model->outDeptId = $map['out_dept_id'];
        }

        return $model;
    }
}
