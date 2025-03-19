<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowSubTasksResponseBody\dataFlowSubTask;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowSubTasksResponseBody\dataFlowSubTask\dataFlowSubTask\fileDetail;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowSubTasksResponseBody\dataFlowSubTask\dataFlowSubTask\progressStats;
use AlibabaCloud\Tea\Model;

class dataFlowSubTask extends Model
{
    /**
     * @description The time when the data streaming task was created.
     *
     * @example 2024-07-01 19:59:29
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the data flow.
     *
     * @example df-194433a5be31****
     *
     * @var string
     */
    public $dataFlowId;

    /**
     * @description The ID of the data streaming task.
     *
     * @example subTaskId-370kyfmyknxcyzw****
     *
     * @var string
     */
    public $dataFlowSubTaskId;

    /**
     * @description The ID of the data flow task.
     *
     * @example task-38aa8e890f45****
     *
     * @var string
     */
    public $dataFlowTaskId;

    /**
     * @description The path of the destination file. Limits:
     *
     *   The path must be 1 to 1,023 characters in length.
     *   The path must be encoded in UTF-8.
     *   The path must start with a forward slash (/).
     *   The path must end with the file name.
     *
     * @example /mnt/file.png
     *
     * @var string
     */
    public $dstFilePath;

    /**
     * @description The time when the data streaming task ended.
     *
     * @example 2024-07-04 11:14:22
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The error message returned when the task failed.
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description The file information.
     *
     * @var fileDetail
     */
    public $fileDetail;

    /**
     * @description The ID of the file system.
     *
     * @example bmcpfs-370lx1ev9ss27o0****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The progress of the data streaming task. Valid values: 0 to 10000.
     *
     * @example 10000
     *
     * @var int
     */
    public $progress;

    /**
     * @description The progress information about data streaming tasks.
     *
     * @var progressStats
     */
    public $progressStats;

    /**
     * @description The path of the source file. Limits:
     *
     *   The path must be 1 to 1,023 characters in length.
     *   The path must be encoded in UTF-8.
     *   The path must start with a forward slash (/).
     *   The path must end with the file name.
     *
     * @example /test/file.png
     *
     * @var string
     */
    public $srcFilePath;

    /**
     * @description The time when the data streaming task started.
     *
     * @example 2024-07-03 10:43:16
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the data streaming task. Valid values:
     *
     *   EXPIRED: The task is terminated.
     *   CREATED: The task is created.
     *   RUNNING: The task is running.
     *   COMPLETE: The task is complete.
     *   CANCELING: The task is being canceled.
     *   FAILED: The task failed to be executed.
     *   CANCELED: The task is canceled.
     *
     * @example COMPLETE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime' => 'CreateTime',
        'dataFlowId' => 'DataFlowId',
        'dataFlowSubTaskId' => 'DataFlowSubTaskId',
        'dataFlowTaskId' => 'DataFlowTaskId',
        'dstFilePath' => 'DstFilePath',
        'endTime' => 'EndTime',
        'errorMsg' => 'ErrorMsg',
        'fileDetail' => 'FileDetail',
        'fileSystemId' => 'FileSystemId',
        'progress' => 'Progress',
        'progressStats' => 'ProgressStats',
        'srcFilePath' => 'SrcFilePath',
        'startTime' => 'StartTime',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataFlowId) {
            $res['DataFlowId'] = $this->dataFlowId;
        }
        if (null !== $this->dataFlowSubTaskId) {
            $res['DataFlowSubTaskId'] = $this->dataFlowSubTaskId;
        }
        if (null !== $this->dataFlowTaskId) {
            $res['DataFlowTaskId'] = $this->dataFlowTaskId;
        }
        if (null !== $this->dstFilePath) {
            $res['DstFilePath'] = $this->dstFilePath;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->fileDetail) {
            $res['FileDetail'] = null !== $this->fileDetail ? $this->fileDetail->toMap() : null;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->progressStats) {
            $res['ProgressStats'] = null !== $this->progressStats ? $this->progressStats->toMap() : null;
        }
        if (null !== $this->srcFilePath) {
            $res['SrcFilePath'] = $this->srcFilePath;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataFlowSubTask
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
        if (isset($map['DataFlowSubTaskId'])) {
            $model->dataFlowSubTaskId = $map['DataFlowSubTaskId'];
        }
        if (isset($map['DataFlowTaskId'])) {
            $model->dataFlowTaskId = $map['DataFlowTaskId'];
        }
        if (isset($map['DstFilePath'])) {
            $model->dstFilePath = $map['DstFilePath'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['FileDetail'])) {
            $model->fileDetail = fileDetail::fromMap($map['FileDetail']);
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ProgressStats'])) {
            $model->progressStats = progressStats::fromMap($map['ProgressStats']);
        }
        if (isset($map['SrcFilePath'])) {
            $model->srcFilePath = $map['SrcFilePath'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
