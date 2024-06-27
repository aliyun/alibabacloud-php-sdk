<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\GetUploadDocumentJobResponseBody;

use AlibabaCloud\Tea\Model;

class job extends Model
{
    /**
     * @description Indicates whether the operation is complete.
     *
     * @example false
     *
     * @var bool
     */
    public $completed;

    /**
     * @description The time when the job was created.
     *
     * @example 2024-01-08 16:52:04.864664
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The error message.
     *
     * @example Failed to connect database.
     *
     * @var string
     */
    public $error;

    /**
     * @description The job ID.
     *
     * @example 231460f8-75dc-405e-a669-0c5204887e91
     *
     * @var string
     */
    public $id;

    /**
     * @description The progress of the document upload job. Unit: %. A value of 100 indicates that the job is complete.
     *
     * @example 20
     *
     * @var int
     */
    public $progress;

    /**
     * @description The status of the job. Valid values: Valid values:
     *
     *   Success
     *   Failed (See the Error parameter for failure reasons.)
     *   Cancelling
     *   Cancelled
     *   Start
     *   Running
     *   Pending
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the job was updated.
     *
     * @example 2024-01-08 16:53:04.864664
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'completed'  => 'Completed',
        'createTime' => 'CreateTime',
        'error'      => 'Error',
        'id'         => 'Id',
        'progress'   => 'Progress',
        'status'     => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completed) {
            $res['Completed'] = $this->completed;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
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
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return job
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Completed'])) {
            $model->completed = $map['Completed'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
