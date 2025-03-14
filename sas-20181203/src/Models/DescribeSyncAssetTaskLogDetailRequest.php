<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSyncAssetTaskLogDetailRequest extends Model
{
    /**
     * @description The page number. Default value: 1. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The end timestamp of the task.
     *
     * @example 1668064495000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The number of entries per page. Default value: 20. If you leave this parameter empty, 20 entries are returned on each page.
     *
     * >  We recommend that you do not leave this parameter empty.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the IDC scan task. You can call the [DescribeSyncAssetTaskList](https://help.aliyun.com/document_detail/141932.html) operation to obtain the ID.
     *
     * @example 7e9565f537146fdf6bfb4e01f6f08818
     *
     * @var string
     */
    public $rootTaskId;

    /**
     * @description The start timestamp of the task.
     *
     * @example 1644027670
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The name of the IDC scan task.
     *
     * @example IDC_PROBE_SCAN-TEST_001
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'endTime' => 'EndTime',
        'pageSize' => 'PageSize',
        'rootTaskId' => 'RootTaskId',
        'startTime' => 'StartTime',
        'taskName' => 'TaskName',
    ];

    public function validate() {}

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
        if (null !== $this->rootTaskId) {
            $res['RootTaskId'] = $this->rootTaskId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSyncAssetTaskLogDetailRequest
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
        if (isset($map['RootTaskId'])) {
            $model->rootTaskId = $map['RootTaskId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
