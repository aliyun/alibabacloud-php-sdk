<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetURLUploadInfosResponseBody;

use AlibabaCloud\Tea\Model;

class URLUploadInfoList extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $completeTime;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $uploadURL;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $fileSize;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'status'       => 'Status',
        'errorMessage' => 'ErrorMessage',
        'errorCode'    => 'ErrorCode',
        'completeTime' => 'CompleteTime',
        'jobId'        => 'JobId',
        'userData'     => 'UserData',
        'uploadURL'    => 'UploadURL',
        'mediaId'      => 'MediaId',
        'fileSize'     => 'FileSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->uploadURL) {
            $res['UploadURL'] = $this->uploadURL;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return URLUploadInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['UploadURL'])) {
            $model->uploadURL = $map['UploadURL'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        return $model;
    }
}
