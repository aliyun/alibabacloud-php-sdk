<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserUsageDetailDataExportTaskResponseBody\usageDataPerPage\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserUsageDetailDataExportTaskResponseBody\usageDataPerPage\data\dataItem\taskConfig;

class dataItem extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $status;

    /**
     * @var taskConfig
     */
    public $taskConfig;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'downloadUrl' => 'DownloadUrl',
        'status' => 'Status',
        'taskConfig' => 'TaskConfig',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->taskConfig) {
            $this->taskConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['TaskConfig'] = null !== $this->taskConfig ? $this->taskConfig->toArray($noStream) : $this->taskConfig;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
