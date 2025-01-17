<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class CreateUploadMediaRequest extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $entityId;
    /**
     * @var string
     */
    public $fileInfo;
    /**
     * @var string
     */
    public $mediaMetaData;
    /**
     * @var string
     */
    public $postProcessConfig;
    /**
     * @var string
     */
    public $uploadTargetConfig;
    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'appId'              => 'AppId',
        'entityId'           => 'EntityId',
        'fileInfo'           => 'FileInfo',
        'mediaMetaData'      => 'MediaMetaData',
        'postProcessConfig'  => 'PostProcessConfig',
        'uploadTargetConfig' => 'UploadTargetConfig',
        'userData'           => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->fileInfo) {
            $res['FileInfo'] = $this->fileInfo;
        }

        if (null !== $this->mediaMetaData) {
            $res['MediaMetaData'] = $this->mediaMetaData;
        }

        if (null !== $this->postProcessConfig) {
            $res['PostProcessConfig'] = $this->postProcessConfig;
        }

        if (null !== $this->uploadTargetConfig) {
            $res['UploadTargetConfig'] = $this->uploadTargetConfig;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['FileInfo'])) {
            $model->fileInfo = $map['FileInfo'];
        }

        if (isset($map['MediaMetaData'])) {
            $model->mediaMetaData = $map['MediaMetaData'];
        }

        if (isset($map['PostProcessConfig'])) {
            $model->postProcessConfig = $map['PostProcessConfig'];
        }

        if (isset($map['UploadTargetConfig'])) {
            $model->uploadTargetConfig = $map['UploadTargetConfig'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
