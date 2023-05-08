<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageFixTaskRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: **1**
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The timestamp when the task ends. Unit: milliseconds.
     *
     * @example 1635575219000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The number of entries to return on each page. Default value: **20**
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The timestamp when the task starts. Unit: milliseconds.
     *
     * @example 1634725571000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the task. Valid values:
     *
     *   **1**: The task is running.
     *   **2**: The task is successful.
     *   **3**: The task failed.
     *
     * @example 1
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'endTime'     => 'EndTime',
        'pageSize'    => 'PageSize',
        'startTime'   => 'StartTime',
        'status'      => 'Status',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageFixTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
