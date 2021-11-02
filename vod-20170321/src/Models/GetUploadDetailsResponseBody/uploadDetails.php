<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetUploadDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class uploadDetails extends Model
{
    /**
     * @var string
     */
    public $completionTime;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $deviceModel;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $modificationTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $uploadIP;

    /**
     * @var float
     */
    public $uploadRatio;

    /**
     * @var int
     */
    public $uploadSize;

    /**
     * @var string
     */
    public $uploadSource;

    /**
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
