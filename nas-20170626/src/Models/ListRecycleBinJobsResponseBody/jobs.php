<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\ListRecycleBinJobsResponseBody;

use AlibabaCloud\Tea\Model;

class jobs extends Model
{
    /**
     * @description The time when the job was created.
     *
     * @example 2021-05-30T10:08:08Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The error code.
     *
     * A valid value is returned only if you set the Status parameter to Fail or PartialSuccess.
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message.
     *
     * A valid value is returned only if you set the Status parameter to Fail or PartialSuccess.
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the file or directory in the job.
     *
     * @example 04***08
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The name of the file or directory that is associated with the job.
     *
     * @example test001
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The job ID.
     *
     * @example 8C****C54
     *
     * @var string
     */
    public $id;

    /**
     * @description The progress of the job.
     *
     * Valid values: 1 to 100.
     * @example 100
     *
     * @var string
     */
    public $progress;

    /**
     * @description The status of the job. Valid values:
     *
     *   Running: The job is running.
     *   Defragmenting: The job is defragmenting data.
     *   PartialSuccess: The job is partially completed.
     *   Success: The job is completed.
     *   Fail: The job failed.
     *   Cancelled: The job is canceled.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the job. Valid values:
     *
     *   Restore: a file restoration job
     *   Delete: a file deletion job
     *
     * @example Restore
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'fileId'       => 'FileId',
        'fileName'     => 'FileName',
        'id'           => 'Id',
        'progress'     => 'Progress',
        'status'       => 'Status',
        'type'         => 'Type',
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
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
