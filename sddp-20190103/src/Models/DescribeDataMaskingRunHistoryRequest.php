<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataMaskingRunHistoryRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The type of the service to which the de-identified data belongs. Valid values: **1**, **2**, **3**, **4**, and **5**. The value 1 indicates MaxCompute. The value 2 indicates OSS. The value indicates AnalyticDB for MySQL. The value 4 indicates Tablestore. The value 5 indicates ApsaraDB RDS.
     *
     * @example 2
     *
     * @var int
     */
    public $dstType;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1583856000000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The language of the content within the request and response. Default value: **zh_cn**. Valid values:
     *
     *   **zh_cn**: Chinese
     *   **en_us**: English
     *
     * @example zh_cn
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the task.
     *
     * > If a task has one or more subtasks, the value of the parameter must be the ID of the task. Otherwise, leave this parameter empty.
     * @example 366731
     *
     * @var int
     */
    public $mainProcessId;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the source table.
     *
     * @example add
     *
     * @var string
     */
    public $srcTableName;

    /**
     * @description The type of the service to which the data to be de-identified belongs. Valid values: **1**, **2**, **3**, **4**, and **5**. The value 1 indicates MaxCompute. The value 2 indicates Object Storage Service (OSS). The value indicates AnalyticDB for MySQL. The value 4 indicates Tablestore. The value 5 indicates ApsaraDB RDS.
     *
     * @example 2
     *
     * @var int
     */
    public $srcType;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1582992000000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the de-identification task. Valid values:
     *
     *   **-1**: waiting
     *   **0**: being executed
     *   **1**: executed
     *   **2**: failed to be executed
     *   **3**: terminated
     *   **4**: partially failed
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The ID of the de-identification task.
     *
     * @example mt4HBgtw1B******
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'currentPage'   => 'CurrentPage',
        'dstType'       => 'DstType',
        'endTime'       => 'EndTime',
        'lang'          => 'Lang',
        'mainProcessId' => 'MainProcessId',
        'pageSize'      => 'PageSize',
        'srcTableName'  => 'SrcTableName',
        'srcType'       => 'SrcType',
        'startTime'     => 'StartTime',
        'status'        => 'Status',
        'taskId'        => 'TaskId',
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
        if (null !== $this->dstType) {
            $res['DstType'] = $this->dstType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->mainProcessId) {
            $res['MainProcessId'] = $this->mainProcessId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->srcTableName) {
            $res['SrcTableName'] = $this->srcTableName;
        }
        if (null !== $this->srcType) {
            $res['SrcType'] = $this->srcType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataMaskingRunHistoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DstType'])) {
            $model->dstType = $map['DstType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MainProcessId'])) {
            $model->mainProcessId = $map['MainProcessId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SrcTableName'])) {
            $model->srcTableName = $map['SrcTableName'];
        }
        if (isset($map['SrcType'])) {
            $model->srcType = $map['SrcType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
