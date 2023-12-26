<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowTasksResponseBody\taskInfo;

use AlibabaCloud\Tea\Model;

class task extends Model
{
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
     * @description The time when the task ended.
     *
     * @example 2021-08-04 18:27:35
     *
     * @var string
     */
    public $endTime;

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
     * @description null
     *
     * Limits:
     *
     *   null
     *   The name must be encoded in UTF-8.
     *
     * @example /path_in_cpfs/reportfile.cvs
     *
     * @var string
     */
    public $reportPath;

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
        'createTime'     => 'CreateTime',
        'dataFlowId'     => 'DataFlowId',
        'dataType'       => 'DataType',
        'endTime'        => 'EndTime',
        'fileSystemPath' => 'FileSystemPath',
        'filesystemId'   => 'FilesystemId',
        'fsPath'         => 'FsPath',
        'originator'     => 'Originator',
        'progress'       => 'Progress',
        'reportPath'     => 'ReportPath',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataFlowId) {
            $res['DataFlowId'] = $this->dataFlowId;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (null !== $this->reportPath) {
            $res['ReportPath'] = $this->reportPath;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataFlowId'])) {
            $model->dataFlowId = $map['DataFlowId'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
        if (isset($map['ReportPath'])) {
            $model->reportPath = $map['ReportPath'];
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
