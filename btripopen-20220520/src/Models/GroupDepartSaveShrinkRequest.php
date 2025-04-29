<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class GroupDepartSaveShrinkRequest extends Model
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
     * @var string
     */
    public $outerDeptId;

    /**
     * @var string
     */
    public $outerDeptPid;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $subCorpIdListShrink;

    /**
     * @var bool
     */
    public $syncGroup;
    protected $_name = [
        'deptName' => 'dept_name',
        'managerIds' => 'manager_ids',
        'outerDeptId' => 'outer_dept_id',
        'outerDeptPid' => 'outer_dept_pid',
        'status' => 'status',
        'subCorpIdListShrink' => 'sub_corp_id_list',
        'syncGroup' => 'sync_group',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->subCorpIdListShrink) {
            $res['sub_corp_id_list'] = $this->subCorpIdListShrink;
        }

        if (null !== $this->syncGroup) {
            $res['sync_group'] = $this->syncGroup;
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
            $model->subCorpIdListShrink = $map['sub_corp_id_list'];
        }

        if (isset($map['sync_group'])) {
            $model->syncGroup = $map['sync_group'];
        }

        return $model;
    }
}
