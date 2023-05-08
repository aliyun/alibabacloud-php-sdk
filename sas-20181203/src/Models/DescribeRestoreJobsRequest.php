<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeRestoreJobsRequest extends Model
{
    /**
     * @description The timestamp when the in-progress restoration task is expected to be complete. Unit: seconds.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The return value of the restoration task.
     *
     * @example 1.1.XX.XX
     *
     * @var string
     */
    public $machineRemark;

    /**
     * @description The timestamp when the restoration task was last updated. Unit: milliseconds.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the file that is restored. Valid values:
     *
     *   **ECS_FILE**: files on Elastic Compute Service (ECS) instances
     *   **FILE**: files on servers in data centers
     *
     * @example RUNNING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'currentPage'   => 'CurrentPage',
        'machineRemark' => 'MachineRemark',
        'pageSize'      => 'PageSize',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->machineRemark) {
            $res['MachineRemark'] = $this->machineRemark;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRestoreJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['MachineRemark'])) {
            $model->machineRemark = $map['MachineRemark'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
