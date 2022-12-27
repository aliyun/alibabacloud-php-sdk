<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserUsageDataExportTaskResponseBody\usageDataPerPage\data;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserUsageDataExportTaskResponseBody\usageDataPerPage\data\dataItem\taskConfig;
use AlibabaCloud\Tea\Model;

class dataItem extends Model
{
    /**
     * @description The time when the task was created.
     *
     * @example 2019-12-31T08:43:21Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The download URL.
     *
     * @example https://cdn-polaris.xxxx
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * @description The status of the task.
     *
     *   created: The task is being created.
     *   success: The task has been created.
     *   failed: The creation of the task failed.
     *
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @description The configurations of the task.
     *
     * @var taskConfig
     */
    public $taskConfig;

    /**
     * @description The ID of the task.
     *
     * @example A91BE91F-0B34-4CBF-8E0F-A2977
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The name of the task.
     *
     * @example refresh
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The last time when the task was modified.
     *
     * @example 2019-12-31T08:45:02Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'downloadUrl' => 'DownloadUrl',
        'status'      => 'Status',
        'taskConfig'  => 'TaskConfig',
        'taskId'      => 'TaskId',
        'taskName'    => 'TaskName',
        'updateTime'  => 'UpdateTime',
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
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskConfig) {
            $res['TaskConfig'] = null !== $this->taskConfig ? $this->taskConfig->toMap() : null;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskConfig'])) {
            $model->taskConfig = taskConfig::fromMap($map['TaskConfig']);
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
