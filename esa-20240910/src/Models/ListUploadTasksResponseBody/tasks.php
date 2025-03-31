<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListUploadTasksResponseBody;

use AlibabaCloud\Dara\Model;

class tasks extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uploadId;

    /**
     * @var string
     */
    public $uploadTaskName;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'errorCode' => 'ErrorCode',
        'status' => 'Status',
        'type' => 'Type',
        'uploadId' => 'UploadId',
        'uploadTaskName' => 'UploadTaskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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
