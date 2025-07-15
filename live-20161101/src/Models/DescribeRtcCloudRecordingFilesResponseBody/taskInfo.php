<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeRtcCloudRecordingFilesResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRtcCloudRecordingFilesResponseBody\taskInfo\recordFileList;
use AlibabaCloud\Tea\Model;

class taskInfo extends Model
{
    /**
     * @var recordFileList
     */
    public $recordFileList;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @example ******73-8501-****-8ac1-72295a******
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'recordFileList' => 'RecordFileList',
        'status' => 'Status',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordFileList) {
            $res['RecordFileList'] = null !== $this->recordFileList ? $this->recordFileList->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordFileList'])) {
            $model->recordFileList = recordFileList::fromMap($map['RecordFileList']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
