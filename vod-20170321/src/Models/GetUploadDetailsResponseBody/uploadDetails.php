<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetUploadDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class uploadDetails extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $uploadSource;

    /**
     * @var string
     */
    public $uploadIP;

    /**
     * @var string
     */
    public $deviceModel;

    /**
     * @var string
     */
    public $modificationTime;

    /**
     * @var string
     */
    public $completionTime;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var int
     */
    public $uploadSize;

    /**
     * @var float
     */
    public $uploadRatio;

    /**
     * @var string
     */
    public $uploadStatus;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $fileSize;
    protected $_name = [
        'status'           => 'Status',
        'creationTime'     => 'CreationTime',
        'uploadSource'     => 'UploadSource',
        'uploadIP'         => 'UploadIP',
        'deviceModel'      => 'DeviceModel',
        'modificationTime' => 'ModificationTime',
        'completionTime'   => 'CompletionTime',
        'mediaId'          => 'MediaId',
        'uploadSize'       => 'UploadSize',
        'uploadRatio'      => 'UploadRatio',
        'uploadStatus'     => 'UploadStatus',
        'title'            => 'Title',
        'fileSize'         => 'FileSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->uploadSource) {
            $res['UploadSource'] = $this->uploadSource;
        }
        if (null !== $this->uploadIP) {
            $res['UploadIP'] = $this->uploadIP;
        }
        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->completionTime) {
            $res['CompletionTime'] = $this->completionTime;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->uploadSize) {
            $res['UploadSize'] = $this->uploadSize;
        }
        if (null !== $this->uploadRatio) {
            $res['UploadRatio'] = $this->uploadRatio;
        }
        if (null !== $this->uploadStatus) {
            $res['UploadStatus'] = $this->uploadStatus;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['UploadSource'])) {
            $model->uploadSource = $map['UploadSource'];
        }
        if (isset($map['UploadIP'])) {
            $model->uploadIP = $map['UploadIP'];
        }
        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['CompletionTime'])) {
            $model->completionTime = $map['CompletionTime'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['UploadSize'])) {
            $model->uploadSize = $map['UploadSize'];
        }
        if (isset($map['UploadRatio'])) {
            $model->uploadRatio = $map['UploadRatio'];
        }
        if (isset($map['UploadStatus'])) {
            $model->uploadStatus = $map['UploadStatus'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        return $model;
    }
}
