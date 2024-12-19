<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowTasksResponseBody\taskInfo;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowTasksResponseBody\taskInfo\task\progressStats;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowTasksResponseBody\taskInfo\task\reports;
use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @description The conflict policy for files with the same name. Valid values:
     *
     *   SKIP_THE_FILE: skips files with the same name.
     *   KEEP_LATEST: compares the update time and keeps the latest version.
     *   OVERWRITE_EXISTING: forcibly overwrites the existing file.
     *
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
     * @description The ID of the data flow.
     *
     * @example dfid-194433a5be3****
     *
     * @var string
     */
    public $dataFlowId;

    /**
     * @description The type of data on which operations are performed by the data flow task. Valid values:
     *
     *   Metadata: the metadata of a file, including the timestamp, ownership, and permission information of the file. If you select Metadata, only the metadata of the file is imported. You can only query the file. When you access the file data, the file is loaded from the source storage as required.
     *   Data: the data blocks of the file.
     *   MetaAndData: the metadata and data blocks of the file.
     *
     * >  CPFS for LINGJUN supports only the MetaAndData type.
     * @example Metadata
     *
     * @var string
     */
    public $dataType;

    /**
     * @description The directory in which the data flow task is executed.
     *
     * @example /path_in_cpfs/
     *
     * @var string
     */
    public $directory;

    /**
     * @description The directory mapped to the data flow task.
     *
     * @example /path_in_cpfs/
     *
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
     * @description The cause of the task exception.
     *
     * >  If this parameter is not returned or the return value is empty, no error occurs.
     * @var string
     */
    public $errorMsg;

    /**
     * @description The directory of the fileset in the CPFS file system.
     *
     * Limits:
     *
     *   The directory must be 2 to 1024 characters in length.
     *   The directory must be encoded in UTF-8.
     *   The directory must start and end with a forward slash (/).
     *   The directory must be a fileset directory in the CPFS file system.
     *
     * >  Only CPFS supports this parameter.
     * @example /a/b/c/
     *
     * @var string
     */
    public $fileSystemPath;

    /**
     * @description The ID of the file system.
     *
     * @example cpfs-099394bd928c****
     *
     * @var string
     */
    public $filesystemId;

    /**
     * @description The path of the smart directory.
     *
     * @example /aa/
     *
     * @var string
     */
    public $fsPath;

    /**
     * @description The initiator of the data flow task. Valid values:
     *
     *   User: The task is initiated by a user.
     *   System: The task is automatically initiated by CPFS based on the automatic update interval.
     *
     * >  Only CPFS supports this parameter.
     * @example User
     *
     * @var string
     */
    public $originator;

    /**
     * @description The progress of the data flow task. The number of operations that have been performed by the data flow task.
     *
     * @example 240
     *
     * @var int
     */
    public $progress;

    /**
     * @description The progress of the data flow task.
     *
     * @var progressStats
     */
    public $progressStats;

    /**
     * @description The save path of data flow task reports in the CPFS file system.
     *
     *   The task reports for a CPFS file system are generated in the `.dataflow_report` directory of the CPFS file system.
     *   CPFS for LINGJUN returns an OSS download link for you to download the task reports.
     *
     * @example /path_in_cpfs/reportfile.cvs
     *
     * @deprecated
     *
     * @var string
     */
    public $reportPath;

    /**
     * @description The reports.
     *
     * >  Streaming tasks do not support reports.
     * @var reports
     */
    public $reports;

    /**
     * @description The access path of the source storage. Format: `<storage type>://[<account id>:]<path>`.
     *
     * Parameters:
     *
     *   storage type: Only Object Storage Service (OSS) is supported.
     *
     *   account id: the UID of the account of the source storage.
     *
     *   path: the name of the OSS bucket. Limits:
     *
     *   The name can contain only lowercase letters, digits, and hyphens (-). The name must start and end with a lowercase letter or digit.
     *   The name can be up to 128 characters in length.
     *   The name must be encoded in UTF-8.
     *
     * >
     *
     *   The OSS bucket must be an existing bucket in the region.
     *
     *   Only CPFS for LINGJUN V2.6.0 and later support the account id parameter.
     *
     * @example oss://bucket1
     *
     * @var string
     */
    public $sourceStorage;

    /**
     * @description The time when the task started.
     *
     * @example 2021-08-04 18:27:35
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the data flow task. Valid values:
     *
     *   Pending: The data flow task has been created and has not started.
     *   Executing: The data flow task is being executed.
     *   Failed: The data flow task failed to be executed. You can view the cause of the failure in the data flow task report.
     *   Completed: The data flow task is completed. You can check that all the files have been correctly transferred in the data flow task report.
     *   Canceled: The data flow task is canceled and is not completed.
     *   Canceling: The data flow task is being canceled.
     *
     * @example Executing
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the data flow task. Valid values:
     *
     *   Import: imports data stored in the source storage to a CPFS file system.
     *   Export: exports specified data from a CPFS file system to the source storage.
     *   StreamImport: imports the specified data from the source storage to a CPFS file system in streaming mode.
     *   StreamExport: exports specified data from a CPFS file system to the source storage in streaming mode.
     *   Evict: releases the data blocks of a file in a CPFS file system. After the eviction, only the metadata of the file is retained in the CPFS file system. You can still query the file. However, the data blocks of the file are cleared and do not occupy the storage space in the CPFS file system. When you access the file data, the file is loaded from the source storage as required.
     *   Inventory: obtains the inventory list managed by a data flow from the CPFS file system, providing the cache status of inventories in the data flow.
     *
     * >  Only CPFS for LINGJUN V2.6.0 and later support StreamImport and StreamExport.
     * @example Import
     *
     * @var string
     */
    public $taskAction;

    /**
     * @description The ID of the data flow task.
     *
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
