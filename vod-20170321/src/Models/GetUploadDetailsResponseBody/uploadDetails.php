<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetUploadDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class uploadDetails extends Model
{
    /**
     * @description The time when the upload job was complete. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-04-28T09:45:07Z
     *
     * @var string
     */
    public $completionTime;

    /**
     * @description The time when the upload job was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-04-28T09:42:07Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The device model.
     *
     * @example Chrome
     *
     * @var string
     */
    public $deviceModel;

    /**
     * @description The size of the uploaded file. Unit: byte.
     *
     * @example 46
     *
     * @var int
     */
    public $fileSize;

    /**
     * @description The ID of the uploaded audio or video.
     *
     * @example 61ccbdb06fa83012be4d8083f6****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The time when the information about the media file was updated. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2019-04-28T09:43:12Z
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description The status of the video. For more information about the valid values and value description of the parameter, see the "Status: the status of a video" section of the [Basic structures](~~52839~~) topic.
     *
     * @example Uploading
     *
     * @var string
     */
    public $status;

    /**
     * @description The title of the media file.
     *
     * @example Test details
     *
     * @var string
     */
    public $title;

    /**
     * @description The IP address of the server that uploads the media file.
     *
     * @example 192.168.0.1
     *
     * @var string
     */
    public $uploadIP;

    /**
     * @description The upload ratio.
     *
     * @example 0.038
     *
     * @var float
     */
    public $uploadRatio;

    /**
     * @description The upload size. Unit: byte.
     *
     * @example 346
     *
     * @var int
     */
    public $uploadSize;

    /**
     * @description The method that is used to upload the media file.
     *
     * @example WebSDK
     *
     * @var string
     */
    public $uploadSource;

    /**
     * @description The status of the upload job. For more information about the valid values and value description of the parameter, see the "Status: the status of a URL-based upload job" section of the [Basic structures](~~52839~~) topic.
     *
     * @example Uploading
     *
     * @var string
     */
    public $uploadStatus;
    protected $_name = [
        'completionTime'   => 'CompletionTime',
        'creationTime'     => 'CreationTime',
        'deviceModel'      => 'DeviceModel',
        'fileSize'         => 'FileSize',
        'mediaId'          => 'MediaId',
        'modificationTime' => 'ModificationTime',
        'status'           => 'Status',
        'title'            => 'Title',
        'uploadIP'         => 'UploadIP',
        'uploadRatio'      => 'UploadRatio',
        'uploadSize'       => 'UploadSize',
        'uploadSource'     => 'UploadSource',
        'uploadStatus'     => 'UploadStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completionTime) {
            $res['CompletionTime'] = $this->completionTime;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->uploadIP) {
            $res['UploadIP'] = $this->uploadIP;
        }
        if (null !== $this->uploadRatio) {
            $res['UploadRatio'] = $this->uploadRatio;
        }
        if (null !== $this->uploadSize) {
            $res['UploadSize'] = $this->uploadSize;
        }
        if (null !== $this->uploadSource) {
            $res['UploadSource'] = $this->uploadSource;
        }
        if (null !== $this->uploadStatus) {
            $res['UploadStatus'] = $this->uploadStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uploadDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompletionTime'])) {
            $model->completionTime = $map['CompletionTime'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UploadIP'])) {
            $model->uploadIP = $map['UploadIP'];
        }
        if (isset($map['UploadRatio'])) {
            $model->uploadRatio = $map['UploadRatio'];
        }
        if (isset($map['UploadSize'])) {
            $model->uploadSize = $map['UploadSize'];
        }
        if (isset($map['UploadSource'])) {
            $model->uploadSource = $map['UploadSource'];
        }
        if (isset($map['UploadStatus'])) {
            $model->uploadStatus = $map['UploadStatus'];
        }

        return $model;
    }
}
