<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetURLUploadInfosResponseBody;

use AlibabaCloud\Tea\Model;

class URLUploadInfoList extends Model
{
    /**
     * @description The error code returned.
     *
     * @example 2019-01-01T01:11:01Z
     *
     * @var string
     */
    public $completeTime;

    /**
     * @description The custom configurations. The value is a JSON string. For more information, see the "UserData: specifies the custom configurations for media upload" section of the [Request parameters](~~86952~~) topic.
     *
     * @example 2019-01-01T01:01:01Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the request.
     *
     * @example 200
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The upload URL of the source file.
     *
     * > A maximum of 100 URLs can be returned.
     * @example error_message
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example 24
     *
     * @var string
     */
    public $fileSize;

    /**
     * @description Queries the information about URL-based upload jobs.
     *
     * @example 86c1925fba0****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 93ab850b4f6f54b6e91d24d81d4****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The time when the upload job was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @example http://****.mp4
     *
     * @var string
     */
    public $uploadURL;

    /**
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
