<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataMaskingRunHistoryRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $srcType;

    /**
     * @var int
     */
    public $dstType;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $mainProcessId;

    /**
     * @var string
     */
    public $srcTableName;
    protected $_name = [
        'lang'          => 'Lang',
        'taskId'        => 'TaskId',
        'startTime'     => 'StartTime',
        'endTime'       => 'EndTime',
        'status'        => 'Status',
        'srcType'       => 'SrcType',
        'dstType'       => 'DstType',
        'pageSize'      => 'PageSize',
        'currentPage'   => 'CurrentPage',
        'mainProcessId' => 'MainProcessId',
        'srcTableName'  => 'SrcTableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->srcType) {
            $res['SrcType'] = $this->srcType;
        }
        if (null !== $this->dstType) {
            $res['DstType'] = $this->dstType;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->mainProcessId) {
            $res['MainProcessId'] = $this->mainProcessId;
        }
        if (null !== $this->srcTableName) {
            $res['SrcTableName'] = $this->srcTableName;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SrcType'])) {
            $model->srcType = $map['SrcType'];
        }
        if (isset($map['DstType'])) {
            $model->dstType = $map['DstType'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['MainProcessId'])) {
            $model->mainProcessId = $map['MainProcessId'];
        }
        if (isset($map['SrcTableName'])) {
            $model->srcTableName = $map['SrcTableName'];
        }

        return $model;
    }
}
