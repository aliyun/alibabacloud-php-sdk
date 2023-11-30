<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class MoveFileResponseBody extends Model
{
    /**
     * @description The ID of the asynchronous task.
     *
     * If a non-empty string is returned, an asynchronous task is required. You can call the GetAsyncTask operation to obtain the information about an asynchronous task based on the task ID.
     * @example 23ebd1a24dba4166b1527add476ef2866051b4d5del106
     *
     * @var string
     */
    public $asyncTaskId;

    /**
     * @description The domain ID.
     *
     * @example bj1
     *
     * @var string
     */
    public $domainId;

    /**
     * @description The drive ID.
     *
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @description Indicates whether the file already exists in the destination directory.
     *
     * @example false
     *
     * @var bool
     */
    public $exist;

    /**
     * @description The file ID.
     *
     * @example fileid1
     *
     * @var string
     */
    public $fileId;
    protected $_name = [
        'asyncTaskId' => 'async_task_id',
        'domainId'    => 'domain_id',
        'driveId'     => 'drive_id',
        'exist'       => 'exist',
        'fileId'      => 'file_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncTaskId) {
            $res['async_task_id'] = $this->asyncTaskId;
        }
        if (null !== $this->domainId) {
            $res['domain_id'] = $this->domainId;
        }
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->exist) {
            $res['exist'] = $this->exist;
        }
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MoveFileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['async_task_id'])) {
            $model->asyncTaskId = $map['async_task_id'];
        }
        if (isset($map['domain_id'])) {
            $model->domainId = $map['domain_id'];
        }
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['exist'])) {
            $model->exist = $map['exist'];
        }
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }

        return $model;
    }
}
