<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserUsageDetailDataExportTaskResponseBody\usageDataPerPage\data;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserUsageDetailDataExportTaskResponseBody\usageDataPerPage\data\dataItem\taskConfig;
use AlibabaCloud\Tea\Model;

class dataItem extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var taskConfig
     */
    public $taskConfig;
    protected $_name = [
        'status'      => 'Status',
        'updateTime'  => 'UpdateTime',
        'downloadUrl' => 'DownloadUrl',
        'createTime'  => 'CreateTime',
        'taskName'    => 'TaskName',
        'taskId'      => 'TaskId',
        'taskConfig'  => 'TaskConfig',
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
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskConfig) {
            $res['TaskConfig'] = null !== $this->taskConfig ? $this->taskConfig->toMap() : null;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskConfig'])) {
            $model->taskConfig = taskConfig::fromMap($map['TaskConfig']);
        }

        return $model;
    }
}
