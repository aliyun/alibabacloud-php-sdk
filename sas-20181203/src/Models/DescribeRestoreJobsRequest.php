<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeRestoreJobsRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The unique identifier of the server on which the restoration task is run. For example, you can use the IP address or the name of the server.
     *
     * @example 1.1.XX.XX
     *
     * @var string
     */
    public $machineRemark;

    /**
     * @description The number of entries to return on each page. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The status of the restoration task. Valid values:
     *
     *   **RUNNING**: The task is running.
     *   **COMPLETE**: The task is complete.
     *   **FAILED**: The task fails.
     *   **CANCELING**: The task is being canceled.
     *   **CANCELED**: The task is canceled.
     *   **PARTIAL_COMPLETE**: The task is partially successful.
     *   **CREATED**: The task is created but is not run.
     *   **EXPIRED**: The task is not updated.
     *   **QUEUED**: The task is waiting to be run.
     *   **CLIENT_DELETED**: The task fails because the anti-ransomware agent is uninstalled.
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
