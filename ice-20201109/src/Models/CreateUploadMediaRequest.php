<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadMediaRequest extends Model
{
    /**
     * @example app-1000000
     *
     * @var string
     */
    public $appId;

    /**
     * @example 9e177cac2fb44f8b8c67b199fcc7bffd
     *
     * @var string
     */
    public $entityId;

    /**
     * @example {\"Type\":\"video\",\"Name\":\"test.mp4\",\"Size\":108078336,\"Ext\":\"mp4\"}
     *
     * @var string
     */
    public $fileInfo;

    /**
     * @example {\"Title\": \"UploadTest\", \"Description\": \"UploadImageTest\", \"Tags\": \"tag1,tag2\",\"BusinessType\":\"cover\"}
     *
     * @var string
     */
    public $mediaMetaData;

    /**
     * @example {\"ProcessType\":\"Workflow\",\"ProcessID\":\"74ba870f1a4873a3ba238e0bf6fa9***\"}
     *
     * @var string
     */
    public $postProcessConfig;

    /**
     * @example {\"StorageType\":\"oss\",\"StorageLocation\":\"outin-***.oss-cn-shanghai.aliyuncs.com\"}
     *
     * @var string
     */
    public $uploadTargetConfig;

    /**
     * @example {"MessageCallback":{"CallbackURL":"http://example.aliyundoc.com"},"Extend":{"localId":"*****","test":"www"}}
     *
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

    /**
     * @param array $map
     *
     * @return CreateUploadMediaRequest
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
