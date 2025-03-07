<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetUrlUploadInfosResponseBody;

use AlibabaCloud\Tea\Model;

class URLUploadInfoList extends Model
{
    /**
     * @description The time when the upload job was complete. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2021-11-26 21:47:37
     *
     * @var string
     */
    public $completeTime;

    /**
     * @description The time when the upload job was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2021-11-07T10:03:37Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The error code returned if the upload job failed.
     *
     * @example 200
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned if the upload job failed.
     *
     * @example Success
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The file size. Unit: bytes.
     *
     * @example 64610
     *
     * @var string
     */
    public $fileSize;

    /**
     * @description The ID of the upload job.
     *
     * @example 3829500c0fef429fa4ec1680b122d***
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The ID of the uploaded media file.
     *
     * @example 5014ca70f08171ecbf940764a0fd6***
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The status of the upload job. For more information about the valid values of the parameter, see the "Status: the status of a URL-based upload job" section of the [Basic data types](https://help.aliyun.com/document_detail/52839.html) topic.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The upload URL of the source file.
     *
     * >  A maximum of 100 URLs can be returned.
     * @example http://****.mp4
     *
     * @var string
     */
    public $uploadURL;

    /**
     * @description The user data. The value is a JSON string.
     *
     * @example {"MessageCallback":"{"CallbackURL":"http://example.aliyundoc.com"}", "Extend":"{"localId":"***", "test":"www"}"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'completeTime' => 'CompleteTime',
        'creationTime' => 'CreationTime',
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'fileSize'     => 'FileSize',
        'jobId'        => 'JobId',
        'mediaId'      => 'MediaId',
        'status'       => 'Status',
        'uploadURL'    => 'UploadURL',
        'userData'     => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uploadURL) {
            $res['UploadURL'] = $this->uploadURL;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UploadURL'])) {
            $model->uploadURL = $map['UploadURL'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
