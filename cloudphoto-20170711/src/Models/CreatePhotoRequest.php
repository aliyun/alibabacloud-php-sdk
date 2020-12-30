<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class CreatePhotoRequest extends Model
{
    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $uploadType;

    /**
     * @var string
     */
    public $photoTitle;

    /**
     * @var string
     */
    public $storeName;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $libraryId;

    /**
     * @var string
     */
    public $staging;

    /**
     * @var int
     */
    public $shareExpireTime;

    /**
     * @var int
     */
    public $takenAt;
    protected $_name = [
        'fileId'          => 'FileId',
        'sessionId'       => 'SessionId',
        'uploadType'      => 'UploadType',
        'photoTitle'      => 'PhotoTitle',
        'storeName'       => 'StoreName',
        'remark'          => 'Remark',
        'libraryId'       => 'LibraryId',
        'staging'         => 'Staging',
        'shareExpireTime' => 'ShareExpireTime',
        'takenAt'         => 'TakenAt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->uploadType) {
            $res['UploadType'] = $this->uploadType;
        }
        if (null !== $this->photoTitle) {
            $res['PhotoTitle'] = $this->photoTitle;
        }
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->libraryId) {
            $res['LibraryId'] = $this->libraryId;
        }
        if (null !== $this->staging) {
            $res['Staging'] = $this->staging;
        }
        if (null !== $this->shareExpireTime) {
            $res['ShareExpireTime'] = $this->shareExpireTime;
        }
        if (null !== $this->takenAt) {
            $res['TakenAt'] = $this->takenAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePhotoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['UploadType'])) {
            $model->uploadType = $map['UploadType'];
        }
        if (isset($map['PhotoTitle'])) {
            $model->photoTitle = $map['PhotoTitle'];
        }
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['LibraryId'])) {
            $model->libraryId = $map['LibraryId'];
        }
        if (isset($map['Staging'])) {
            $model->staging = $map['Staging'];
        }
        if (isset($map['ShareExpireTime'])) {
            $model->shareExpireTime = $map['ShareExpireTime'];
        }
        if (isset($map['TakenAt'])) {
            $model->takenAt = $map['TakenAt'];
        }

        return $model;
    }
}
