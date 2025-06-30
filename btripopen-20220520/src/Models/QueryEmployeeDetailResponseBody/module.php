<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryEmployeeDetailResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var bool
     */
    public $isLeave;

    /**
     * @var string
     */
    public $jobNumber;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $outDeptId;

    /**
     * @var string[]
     */
    public $outDeptIdList;

    /**
     * @var string
     */
    public $outEmployeeId;

    /**
     * @var string
     */
    public $phoneNo;

    /**
     * @var string
     */
    public $realName;

    /**
     * @var string
     */
    public $realNameEn;
    protected $_name = [
        'email' => 'email',
        'isLeave' => 'is_leave',
        'jobNumber' => 'job_number',
        'nickName' => 'nick_name',
        'outDeptId' => 'out_dept_id',
        'outDeptIdList' => 'out_dept_id_list',
        'outEmployeeId' => 'out_employee_id',
        'phoneNo' => 'phone_no',
        'realName' => 'real_name',
        'realNameEn' => 'real_name_en',
    ];

    public function validate()
    {
        if (\is_array($this->outDeptIdList)) {
            Model::validateArray($this->outDeptIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }

        if (null !== $this->isLeave) {
            $res['is_leave'] = $this->isLeave;
        }

        if (null !== $this->jobNumber) {
            $res['job_number'] = $this->jobNumber;
        }

        if (null !== $this->nickName) {
            $res['nick_name'] = $this->nickName;
        }

        if (null !== $this->outDeptId) {
            $res['out_dept_id'] = $this->outDeptId;
        }

        if (null !== $this->outDeptIdList) {
            if (\is_array($this->outDeptIdList)) {
                $res['out_dept_id_list'] = [];
                $n1 = 0;
                foreach ($this->outDeptIdList as $item1) {
                    $res['out_dept_id_list'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->outEmployeeId) {
            $res['out_employee_id'] = $this->outEmployeeId;
        }

        if (null !== $this->phoneNo) {
            $res['phone_no'] = $this->phoneNo;
        }

        if (null !== $this->realName) {
            $res['real_name'] = $this->realName;
        }

        if (null !== $this->realNameEn) {
            $res['real_name_en'] = $this->realNameEn;
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
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }

        if (isset($map['is_leave'])) {
            $model->isLeave = $map['is_leave'];
        }

        if (isset($map['job_number'])) {
            $model->jobNumber = $map['job_number'];
        }

        if (isset($map['nick_name'])) {
            $model->nickName = $map['nick_name'];
        }

        if (isset($map['out_dept_id'])) {
            $model->outDeptId = $map['out_dept_id'];
        }

        if (isset($map['out_dept_id_list'])) {
            if (!empty($map['out_dept_id_list'])) {
                $model->outDeptIdList = [];
                $n1 = 0;
                foreach ($map['out_dept_id_list'] as $item1) {
                    $model->outDeptIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['out_employee_id'])) {
            $model->outEmployeeId = $map['out_employee_id'];
        }

        if (isset($map['phone_no'])) {
            $model->phoneNo = $map['phone_no'];
        }

        if (isset($map['real_name'])) {
            $model->realName = $map['real_name'];
        }

        if (isset($map['real_name_en'])) {
            $model->realNameEn = $map['real_name_en'];
        }

        return $model;
    }
}
