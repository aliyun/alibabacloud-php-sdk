<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSyncAssetTaskListRequest extends Model
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
     * @description The timestamp when the IDC scan task ends. Unit: milliseconds.
     *
     * @example 1662430077000
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
     * @description The timestamp when the IDC scan task starts. Unit: milliseconds.
     *
     * @example 1652063828796
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The name of the IDC scan task.
     *
     * @example IDC_PROBE_SCAN***
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'endTime' => 'EndTime',
        'pageSize' => 'PageSize',
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
     * @return DescribeSyncAssetTaskListRequest
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
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
