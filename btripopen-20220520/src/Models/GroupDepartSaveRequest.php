<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class GroupDepartSaveRequest extends Model
{
    /**
     * @var string
     */
    public $deptName;

    /**
     * @var string
     */
    public $managerIds;

    /**
     * @example 001
     *
     * @var string
     */
    public $outerDeptId;

    /**
     * @example 002
     *
     * @var string
     */
    public $outerDeptPid;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @var string[]
     */
    public $subCorpIdList;

    /**
     * @var bool
     */
    public $syncGroup;
    protected $_name = [
        'deptName'      => 'dept_name',
        'managerIds'    => 'manager_ids',
        'outerDeptId'   => 'outer_dept_id',
        'outerDeptPid'  => 'outer_dept_pid',
        'status'        => 'status',
        'subCorpIdList' => 'sub_corp_id_list',
        'syncGroup'     => 'sync_group',
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
        if (null !== $this->managerIds) {
            $res['manager_ids'] = $this->managerIds;
        }
        if (null !== $this->outerDeptId) {
            $res['outer_dept_id'] = $this->outerDeptId;
        }
        if (null !== $this->outerDeptPid) {
            $res['outer_dept_pid'] = $this->outerDeptPid;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->subCorpIdList) {
            $res['sub_corp_id_list'] = $this->subCorpIdList;
        }
        if (null !== $this->syncGroup) {
            $res['sync_group'] = $this->syncGroup;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GroupDepartSaveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dept_name'])) {
            $model->deptName = $map['dept_name'];
        }
        if (isset($map['manager_ids'])) {
            $model->managerIds = $map['manager_ids'];
        }
        if (isset($map['outer_dept_id'])) {
            $model->outerDeptId = $map['outer_dept_id'];
        }
        if (isset($map['outer_dept_pid'])) {
            $model->outerDeptPid = $map['outer_dept_pid'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['sub_corp_id_list'])) {
            if (!empty($map['sub_corp_id_list'])) {
                $model->subCorpIdList = $map['sub_corp_id_list'];
            }
        }
        if (isset($map['sync_group'])) {
            $model->syncGroup = $map['sync_group'];
        }

        return $model;
    }
}
