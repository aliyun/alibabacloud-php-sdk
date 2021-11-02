<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataMaskingRunHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $conflictCount;

    /**
     * @var int
     */
    public $dstType;

    /**
     * @var string
     */
    public $dstTypeCode;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $failCode;

    /**
     * @var string
     */
    public $failMsg;

    /**
     * @var int
     */
    public $hasDownloadFile;

    /**
     * @var int
     */
    public $hasSubProcess;

    /**
     * @var int
     */
    public $id;

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
    public $runIndex;

    /**
     * @var string
     */
    public $srcTableName;

    /**
     * @var int
     */
    public $srcType;

    /**
     * @var string
     */
    public $srcTypeCode;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'conflictCount'   => 'ConflictCount',
        'dstType'         => 'DstType',
        'dstTypeCode'     => 'DstTypeCode',
        'endTime'         => 'EndTime',
        'failCode'        => 'FailCode',
        'failMsg'         => 'FailMsg',
        'hasDownloadFile' => 'HasDownloadFile',
        'hasSubProcess'   => 'HasSubProcess',
        'id'              => 'Id',
        'maskingCount'    => 'MaskingCount',
        'percentage'      => 'Percentage',
        'runIndex'        => 'RunIndex',
        'srcTableName'    => 'SrcTableName',
        'srcType'         => 'SrcType',
        'srcTypeCode'     => 'SrcTypeCode',
        'startTime'       => 'StartTime',
        'status'          => 'Status',
        'taskId'          => 'TaskId',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conflictCount) {
            $res['ConflictCount'] = $this->conflictCount;
        }
        if (null !== $this->dstType) {
            $res['DstType'] = $this->dstType;
        }
        if (null !== $this->dstTypeCode) {
            $res['DstTypeCode'] = $this->dstTypeCode;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->failCode) {
            $res['FailCode'] = $this->failCode;
        }
        if (null !== $this->failMsg) {
            $res['FailMsg'] = $this->failMsg;
        }
        if (null !== $this->hasDownloadFile) {
            $res['HasDownloadFile'] = $this->hasDownloadFile;
        }
        if (null !== $this->hasSubProcess) {
            $res['HasSubProcess'] = $this->hasSubProcess;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->maskingCount) {
            $res['MaskingCount'] = $this->maskingCount;
        }
        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }
        if (null !== $this->runIndex) {
            $res['RunIndex'] = $this->runIndex;
        }
        if (null !== $this->srcTableName) {
            $res['SrcTableName'] = $this->srcTableName;
        }
        if (null !== $this->srcType) {
            $res['SrcType'] = $this->srcType;
        }
        if (null !== $this->srcTypeCode) {
            $res['SrcTypeCode'] = $this->srcTypeCode;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ConflictCount'])) {
            $model->conflictCount = $map['ConflictCount'];
        }
        if (isset($map['DstType'])) {
            $model->dstType = $map['DstType'];
        }
        if (isset($map['DstTypeCode'])) {
            $model->dstTypeCode = $map['DstTypeCode'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FailCode'])) {
            $model->failCode = $map['FailCode'];
        }
        if (isset($map['FailMsg'])) {
            $model->failMsg = $map['FailMsg'];
        }
        if (isset($map['HasDownloadFile'])) {
            $model->hasDownloadFile = $map['HasDownloadFile'];
        }
        if (isset($map['HasSubProcess'])) {
            $model->hasSubProcess = $map['HasSubProcess'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MaskingCount'])) {
            $model->maskingCount = $map['MaskingCount'];
        }
        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }
        if (isset($map['RunIndex'])) {
            $model->runIndex = $map['RunIndex'];
        }
        if (isset($map['SrcTableName'])) {
            $model->srcTableName = $map['SrcTableName'];
        }
        if (isset($map['SrcType'])) {
            $model->srcType = $map['SrcType'];
        }
        if (isset($map['SrcTypeCode'])) {
            $model->srcTypeCode = $map['SrcTypeCode'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
