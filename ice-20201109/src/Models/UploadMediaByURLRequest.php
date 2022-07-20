<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UploadMediaByURLRequest extends Model
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
    public $uploadURLs;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'appId'              => 'AppId',
        'entityId'           => 'EntityId',
        'mediaMetaData'      => 'MediaMetaData',
        'postProcessConfig'  => 'PostProcessConfig',
        'uploadTargetConfig' => 'UploadTargetConfig',
        'uploadURLs'         => 'UploadURLs',
        'userData'           => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
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
        if (null !== $this->uploadURLs) {
            $res['UploadURLs'] = $this->uploadURLs;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadMediaByURLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
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
        if (isset($map['UploadURLs'])) {
            $model->uploadURLs = $map['UploadURLs'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
