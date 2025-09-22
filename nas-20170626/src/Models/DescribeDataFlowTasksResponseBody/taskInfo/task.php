<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowTasksResponseBody\taskInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowTasksResponseBody\taskInfo\task\progressStats;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowTasksResponseBody\taskInfo\task\reports;

class task extends Model
{
    /**
     * @var string
     */
    public $conflictPolicy;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataFlowId;

    /**
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
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $fileSystemPath;

    /**
     * @var string
     */
    public $filesystemId;

    /**
     * @var string
     */
    public $fsPath;

    /**
     * @var string
     */
    public $includes;

    /**
     * @var string
     */
    public $originator;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var progressStats
     */
    public $progressStats;

    /**
     * @var string
     */
    public $reportPath;

    /**
     * @var reports
     */
    public $reports;

    /**
     * @var string
     */
    public $sourceStorage;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskAction;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $transferFileListPath;
    protected $_name = [
        'conflictPolicy' => 'ConflictPolicy',
        'createTime' => 'CreateTime',
        'dataFlowId' => 'DataFlowId',
        'dataType' => 'DataType',
        'directory' => 'Directory',
        'dstDirectory' => 'DstDirectory',
        'endTime' => 'EndTime',
        'errorMsg' => 'ErrorMsg',
        'fileSystemPath' => 'FileSystemPath',
        'filesystemId' => 'FilesystemId',
        'fsPath' => 'FsPath',
        'includes' => 'Includes',
        'originator' => 'Originator',
        'progress' => 'Progress',
        'progressStats' => 'ProgressStats',
        'reportPath' => 'ReportPath',
        'reports' => 'Reports',
        'sourceStorage' => 'SourceStorage',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'taskAction' => 'TaskAction',
        'taskId' => 'TaskId',
        'transferFileListPath' => 'TransferFileListPath',
    ];

    public function validate()
    {
        if (null !== $this->progressStats) {
            $this->progressStats->validate();
        }
        if (null !== $this->reports) {
            $this->reports->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->includes) {
            $res['Includes'] = $this->includes;
        }

        if (null !== $this->originator) {
            $res['Originator'] = $this->originator;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->progressStats) {
            $res['ProgressStats'] = null !== $this->progressStats ? $this->progressStats->toArray($noStream) : $this->progressStats;
        }

        if (null !== $this->reportPath) {
            $res['ReportPath'] = $this->reportPath;
        }

        if (null !== $this->reports) {
            $res['Reports'] = null !== $this->reports ? $this->reports->toArray($noStream) : $this->reports;
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

        if (null !== $this->transferFileListPath) {
            $res['TransferFileListPath'] = $this->transferFileListPath;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['Includes'])) {
            $model->includes = $map['Includes'];
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

        if (isset($map['TransferFileListPath'])) {
            $model->transferFileListPath = $map['TransferFileListPath'];
        }

        return $model;
    }
}
