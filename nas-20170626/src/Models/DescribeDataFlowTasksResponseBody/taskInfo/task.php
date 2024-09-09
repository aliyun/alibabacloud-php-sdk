<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowTasksResponseBody\taskInfo;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowTasksResponseBody\taskInfo\task\progressStats;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowTasksResponseBody\taskInfo\task\reports;
use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @example KEEP_LATEST
     *
     * @var string
     */
    public $conflictPolicy;

    /**
     * @description The time when the task was created.
     *
     * @example 2021-08-04 18:27:35
     *
     * @var string
     */
    public $createTime;

    /**
     * @example dfid-194433a5be3****
     *
     * @var string
     */
    public $dataFlowId;

    /**
     * @description null Valid values:
     *
     *   null null
     *   null
     *   null
     *
     * @example Metadata
     *
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $directory;

    /**
     * @var string
     */
    public $dstDirectory;

    /**
     * @description The time when the task ended.
     *
     * @example 2021-08-04 18:27:35
     *
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @description *
     *
     *   null
     *
     * @example /a/b/c/
     *
     * @var string
     */
    public $fileSystemPath;

    /**
     * @example cpfs-099394bd928c****
     *
     * @var string
     */
    public $filesystemId;

    /**
     * @description null
     *
     * @example /aa/
     *
     * @var string
     */
    public $fsPath;

    /**
     * @description null Valid values:
     *
     *   null
     *   null
     *
     * @example User
     *
     * @var string
     */
    public $originator;

    /**
     * @description null null
     *
     * @example 240
     *
     * @var int
     */
    public $progress;

    /**
     * @var progressStats
     */
    public $progressStats;

    /**
     * @description null
     *
     * Limits:
     *
     *   null
     *   The name must be encoded in UTF-8.
     *
     * @example /path_in_cpfs/reportfile.cvs
     *
     * @deprecated
     *
     * @var string
     */
    public $reportPath;

    /**
     * @var reports
     */
    public $reports;

    /**
     * @description ://
     *
     *
     *   [](http://https://。)
     *
     ****
     * @example oss://bucket1
     *
     * @var string
     */
    public $sourceStorage;

    /**
     * @description null
     *
     * @example 2021-08-04 18:27:35
     *
     * @var string
     */
    public $startTime;

    /**
     * @description null Valid values:
     *
     *   null
     *   null
     *   null
     *   null
     *   null
     *   null
     *
     * @example Executing
     *
     * @var string
     */
    public $status;

    /**
     * @description null Valid values:
     *
     *   null
     *   null
     *   null null
     *   null
     *
     * @example Import
     *
     * @var string
     */
    public $taskAction;

    /**
     * @example taskId-12345678
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'conflictPolicy' => 'ConflictPolicy',
        'createTime'     => 'CreateTime',
        'dataFlowId'     => 'DataFlowId',
        'dataType'       => 'DataType',
        'directory'      => 'Directory',
        'dstDirectory'   => 'DstDirectory',
        'endTime'        => 'EndTime',
        'errorMsg'       => 'ErrorMsg',
        'fileSystemPath' => 'FileSystemPath',
        'filesystemId'   => 'FilesystemId',
        'fsPath'         => 'FsPath',
        'originator'     => 'Originator',
        'progress'       => 'Progress',
        'progressStats'  => 'ProgressStats',
        'reportPath'     => 'ReportPath',
        'reports'        => 'Reports',
        'sourceStorage'  => 'SourceStorage',
        'startTime'      => 'StartTime',
        'status'         => 'Status',
        'taskAction'     => 'TaskAction',
        'taskId'         => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conflictPolicy) {
            $res['ConflictPolicy'] = $this->conflictPolicy;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataFlowId) {
            $res['DataFlowId'] = $this->dataFlowId;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }
        if (null !== $this->dstDirectory) {
            $res['DstDirectory'] = $this->dstDirectory;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->fileSystemPath) {
            $res['FileSystemPath'] = $this->fileSystemPath;
        }
        if (null !== $this->filesystemId) {
            $res['FilesystemId'] = $this->filesystemId;
        }
        if (null !== $this->fsPath) {
            $res['FsPath'] = $this->fsPath;
        }
        if (null !== $this->originator) {
            $res['Originator'] = $this->originator;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->progressStats) {
            $res['ProgressStats'] = null !== $this->progressStats ? $this->progressStats->toMap() : null;
        }
        if (null !== $this->reportPath) {
            $res['ReportPath'] = $this->reportPath;
        }
        if (null !== $this->reports) {
            $res['Reports'] = null !== $this->reports ? $this->reports->toMap() : null;
        }
        if (null !== $this->sourceStorage) {
            $res['SourceStorage'] = $this->sourceStorage;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return task
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConflictPolicy'])) {
            $model->conflictPolicy = $map['ConflictPolicy'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataFlowId'])) {
            $model->dataFlowId = $map['DataFlowId'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }
        if (isset($map['DstDirectory'])) {
            $model->dstDirectory = $map['DstDirectory'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['FileSystemPath'])) {
            $model->fileSystemPath = $map['FileSystemPath'];
        }
        if (isset($map['FilesystemId'])) {
            $model->filesystemId = $map['FilesystemId'];
        }
        if (isset($map['FsPath'])) {
            $model->fsPath = $map['FsPath'];
        }
        if (isset($map['Originator'])) {
            $model->originator = $map['Originator'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ProgressStats'])) {
            $model->progressStats = progressStats::fromMap($map['ProgressStats']);
        }
        if (isset($map['ReportPath'])) {
            $model->reportPath = $map['ReportPath'];
        }
        if (isset($map['Reports'])) {
            $model->reports = reports::fromMap($map['Reports']);
        }
        if (isset($map['SourceStorage'])) {
            $model->sourceStorage = $map['SourceStorage'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
