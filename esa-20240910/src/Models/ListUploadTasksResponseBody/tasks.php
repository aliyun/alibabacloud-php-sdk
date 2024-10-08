<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListUploadTasksResponseBody;

use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @example 2023-07-26T01:56:15Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example invalid url
     *
     * @var string
     */
    public $description;

    /**
     * @example InvalidUrl,InvalidDomain
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example Complete
     *
     * @var string
     */
    public $status;

    /**
     * @example file
     *
     * @var string
     */
    public $type;

    /**
     * @example 159253299357****
     *
     * @var string
     */
    public $uploadId;

    /**
     * @example purge_file_task
     *
     * @var string
     */
    public $uploadTaskName;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'description'    => 'Description',
        'errorCode'      => 'ErrorCode',
        'status'         => 'Status',
        'type'           => 'Type',
        'uploadId'       => 'UploadId',
        'uploadTaskName' => 'UploadTaskName',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uploadId) {
            $res['UploadId'] = $this->uploadId;
        }
        if (null !== $this->uploadTaskName) {
            $res['UploadTaskName'] = $this->uploadTaskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UploadId'])) {
            $model->uploadId = $map['UploadId'];
        }
        if (isset($map['UploadTaskName'])) {
            $model->uploadTaskName = $map['UploadTaskName'];
        }

        return $model;
    }
}
