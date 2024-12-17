<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryEmployeeDetailResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $isLeave;

    /**
     * @example "12138"
     *
     * @var string
     */
    public $jobNumber;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @example "123456"
     *
     * @var string
     */
    public $outDeptId;

    /**
     * @var string[]
     */
    public $outDeptIdList;

    /**
     * @example "abc12138"
     *
     * @var string
     */
    public $outEmployeeId;

    /**
     * @var string
     */
    public $realName;

    /**
     * @example "zhang/san"
     *
     * @var string
     */
    public $realNameEn;
    protected $_name = [
        'isLeave'       => 'is_leave',
        'jobNumber'     => 'job_number',
        'nickName'      => 'nick_name',
        'outDeptId'     => 'out_dept_id',
        'outDeptIdList' => 'out_dept_id_list',
        'outEmployeeId' => 'out_employee_id',
        'realName'      => 'real_name',
        'realNameEn'    => 'real_name_en',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
            $res['out_dept_id_list'] = $this->outDeptIdList;
        }
        if (null !== $this->outEmployeeId) {
            $res['out_employee_id'] = $this->outEmployeeId;
        }
        if (null !== $this->realName) {
            $res['real_name'] = $this->realName;
        }
        if (null !== $this->realNameEn) {
            $res['real_name_en'] = $this->realNameEn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
                $model->outDeptIdList = $map['out_dept_id_list'];
            }
        }
        if (isset($map['out_employee_id'])) {
            $model->outEmployeeId = $map['out_employee_id'];
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
