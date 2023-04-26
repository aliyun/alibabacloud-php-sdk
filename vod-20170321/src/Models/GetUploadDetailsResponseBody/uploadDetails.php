<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetUploadDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class uploadDetails extends Model
{
    /**
     * @description Queries the upload details, such as the upload time, upload ratio, and upload source, about one or more media files based on the media IDs.
     *
     * @example 2019-04-28T09:45:07Z
     *
     * @var string
     */
    public $completionTime;

    /**
     * @description The title of the media file.
     *
     * @example 2019-04-28T09:42:07Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The time when the upload job was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example Chrome
     *
     * @var string
     */
    public $deviceModel;

    /**
     * @example 46
     *
     * @var int
     */
    public $fileSize;

    /**
     * @example 61ccbdb06fa83012be4d8083f6****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The ID of the request.
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
     * @var string
     */
    public $title;

    /**
     * @description The upload size. Unit: byte.
     *
     * @example 192.168.0.1
     *
     * @var string
     */
    public $uploadIP;

    /**
     * @example 0.038
     *
     * @var float
     */
    public $uploadRatio;

    /**
     * @example 346
     *
     * @var int
     */
    public $uploadSize;

    /**
     * @description The time when the upload job was complete. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example WebSDK
     *
     * @var string
     */
    public $uploadSource;

    /**
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
