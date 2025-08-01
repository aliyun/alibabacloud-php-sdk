<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAuditNoteProcessingStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example oss://default/path/to/audit/note
     *
     * @var string
     */
    public $fileKey;

    /**
     * @example 504
     *
     * @var int
     */
    public $fileSize;

    /**
     * @example 错题本2025-07-07_解析结果
     *
     * @var string
     */
    public $noteName;

    /**
     * @example SUCCESSED
     *
     * @var string
     */
    public $status;

    /**
     * @example 111_Default_20250708142918
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 2024-11-25 11:40:50
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'fileKey' => 'FileKey',
        'fileSize' => 'FileSize',
        'noteName' => 'NoteName',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'updateTime' => 'UpdateTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->noteName) {
            $res['NoteName'] = $this->noteName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['NoteName'])) {
            $model->noteName = $map['NoteName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
