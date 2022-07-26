<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\DepartmentSaveRequest;

use AlibabaCloud\Tea\Model;

class departList extends Model
{
    /**
     * @var int
     */
    public $departId;

    /**
     * @var string
     */
    public $departName;

    /**
     * @var int
     */
    public $departPid;

    /**
     * @var string
     */
    public $managerIds;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $thirdDepartId;

    /**
     * @var string
     */
    public $thirdDepartPid;
    protected $_name = [
        'departId'       => 'depart_id',
        'departName'     => 'depart_name',
        'departPid'      => 'depart_pid',
        'managerIds'     => 'manager_ids',
        'status'         => 'status',
        'thirdDepartId'  => 'third_depart_id',
        'thirdDepartPid' => 'third_depart_pid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->departId) {
            $res['depart_id'] = $this->departId;
        }
        if (null !== $this->departName) {
            $res['depart_name'] = $this->departName;
        }
        if (null !== $this->departPid) {
            $res['depart_pid'] = $this->departPid;
        }
        if (null !== $this->managerIds) {
            $res['manager_ids'] = $this->managerIds;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->thirdDepartId) {
            $res['third_depart_id'] = $this->thirdDepartId;
        }
        if (null !== $this->thirdDepartPid) {
            $res['third_depart_pid'] = $this->thirdDepartPid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return departList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['depart_id'])) {
            $model->departId = $map['depart_id'];
        }
        if (isset($map['depart_name'])) {
            $model->departName = $map['depart_name'];
        }
        if (isset($map['depart_pid'])) {
            $model->departPid = $map['depart_pid'];
        }
        if (isset($map['manager_ids'])) {
            $model->managerIds = $map['manager_ids'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['third_depart_id'])) {
            $model->thirdDepartId = $map['third_depart_id'];
        }
        if (isset($map['third_depart_pid'])) {
            $model->thirdDepartPid = $map['third_depart_pid'];
        }

        return $model;
    }
}
