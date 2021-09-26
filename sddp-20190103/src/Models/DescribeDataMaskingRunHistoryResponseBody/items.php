<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataMaskingRunHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $srcType;

    /**
     * @var string
     */
    public $srcTableName;

    /**
     * @var int
     */
    public $maskingCount;

    /**
     * @var int
     */
    public $percentage;

    /**
     * @var int
     */
    public $dstType;

    /**
     * @var string
     */
    public $failMsg;

    /**
     * @var string
     */
    public $failCode;

    /**
     * @var int
     */
    public $conflictCount;

    /**
     * @var string
     */
    public $dstTypeCode;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $runIndex;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $hasSubProcess;

    /**
     * @var int
     */
    public $hasDownloadFile;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $srcTypeCode;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'status'          => 'Status',
        'type'            => 'Type',
        'srcType'         => 'SrcType',
        'srcTableName'    => 'SrcTableName',
        'maskingCount'    => 'MaskingCount',
        'percentage'      => 'Percentage',
        'dstType'         => 'DstType',
        'failMsg'         => 'FailMsg',
        'failCode'        => 'FailCode',
        'conflictCount'   => 'ConflictCount',
        'dstTypeCode'     => 'DstTypeCode',
        'endTime'         => 'EndTime',
        'runIndex'        => 'RunIndex',
        'startTime'       => 'StartTime',
        'hasSubProcess'   => 'HasSubProcess',
        'hasDownloadFile' => 'HasDownloadFile',
        'taskId'          => 'TaskId',
        'srcTypeCode'     => 'SrcTypeCode',
        'id'              => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->srcType) {
            $res['SrcType'] = $this->srcType;
        }
        if (null !== $this->srcTableName) {
            $res['SrcTableName'] = $this->srcTableName;
        }
        if (null !== $this->maskingCount) {
            $res['MaskingCount'] = $this->maskingCount;
        }
        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }
        if (null !== $this->dstType) {
            $res['DstType'] = $this->dstType;
        }
        if (null !== $this->failMsg) {
            $res['FailMsg'] = $this->failMsg;
        }
        if (null !== $this->failCode) {
            $res['FailCode'] = $this->failCode;
        }
        if (null !== $this->conflictCount) {
            $res['ConflictCount'] = $this->conflictCount;
        }
        if (null !== $this->dstTypeCode) {
            $res['DstTypeCode'] = $this->dstTypeCode;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->runIndex) {
            $res['RunIndex'] = $this->runIndex;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->hasSubProcess) {
            $res['HasSubProcess'] = $this->hasSubProcess;
        }
        if (null !== $this->hasDownloadFile) {
            $res['HasDownloadFile'] = $this->hasDownloadFile;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->srcTypeCode) {
            $res['SrcTypeCode'] = $this->srcTypeCode;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['SrcType'])) {
            $model->srcType = $map['SrcType'];
        }
        if (isset($map['SrcTableName'])) {
            $model->srcTableName = $map['SrcTableName'];
        }
        if (isset($map['MaskingCount'])) {
            $model->maskingCount = $map['MaskingCount'];
        }
        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }
        if (isset($map['DstType'])) {
            $model->dstType = $map['DstType'];
        }
        if (isset($map['FailMsg'])) {
            $model->failMsg = $map['FailMsg'];
        }
        if (isset($map['FailCode'])) {
            $model->failCode = $map['FailCode'];
        }
        if (isset($map['ConflictCount'])) {
            $model->conflictCount = $map['ConflictCount'];
        }
        if (isset($map['DstTypeCode'])) {
            $model->dstTypeCode = $map['DstTypeCode'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RunIndex'])) {
            $model->runIndex = $map['RunIndex'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['HasSubProcess'])) {
            $model->hasSubProcess = $map['HasSubProcess'];
        }
        if (isset($map['HasDownloadFile'])) {
            $model->hasDownloadFile = $map['HasDownloadFile'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['SrcTypeCode'])) {
            $model->srcTypeCode = $map['SrcTypeCode'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
